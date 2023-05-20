<?php

namespace App\Http\Livewire\Cart;

use Livewire\Component;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Support\Str;
use App\Models\cart as Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CartList extends Component
{
    public $cartitems, $sub_total = 0, $total = 0, $tax = 0;
    public $uuid, $product, $payment_method;
    public $selected_cart_items = [];
    public $checkAll = false;
    public function rules()
    {
        return [
            'payment_method' => 'required|in:cash,transfer',
        ];
    }
    
    public function render()
    {
    
        $this->cartitems = Cart::with('product')
                ->where(['user_id'=>auth()->user()->id])
                ->where('status', '!=', Cart::STATUS['success'])
                ->get();

                $selectedCartItems = $this->cartitems->filter(function ($item) {
                    return in_array($item->id, $this->selected_cart_items);
                });
            
                // $this->total = 0;
                $this->sub_total = 0;
                $this->tax = 0;
            
                foreach ($selectedCartItems as $item) {
                    $this->sub_total += $item->product->price * $item->quantity;
                }
        $this->total = $this->sub_total - $this->tax;
        return view('livewire.cart.cart-list');
    }
    public function checkAllItems()
    {
        if ($this->checkAll) {
            $this->selected_cart_items = $this->cartitems->pluck('id')->toArray();
        } else {
            $this->selected_cart_items = [];
        }
    }

    public function incrementQty($id){
        $cart = Cart::whereId($id)->first();
        $cart->quantity += 1;
        $cart->save();

        session()->flash('success', 'Product quantity updated !!!');
    }

    public function decrementQty($id){
        $cart = Cart::whereId($id)->first();
        if($cart->quantity > 1){
            $cart->quantity -= 1;
            $cart->save();
            session()->flash('success', 'Product quantity updated !!!');
        }else{
            session()->flash('error','You cannot have less than 1 quantity');
        }
    }

    public function removeItem($id){
        $cart = Cart::whereId($id)->first();

        if($cart){
            $cart->delete();
            $this->emit('updateCartCount');
        }
        session()->flash('success', 'Product removed from cart !!!');
    }


    
    public function checkout(){
        if (empty($this->selected_cart_items)) {
            
            return;
        }
        $validatedData = $this->validate();

        try {
            DB::beginTransaction();
            // $this->cartitems = Cart::with('product')
            // ->where(['user_id'=>auth()->user()->id])
            // ->where('status', '!=', Cart::STATUS['success'])
            // ->get();
            // // dd($this->cartitems);

            // $this->total = 0;
            // $this->sub_total = 0; 
            // $this->tax = 0;
            // foreach($this->cartitems as $item){
            //     $this->sub_total += $item->product->price * $item->quantity;
            // }

            $selectedCartItems = $this->cartitems->filter(function ($item) {
                return in_array($item->id, $this->selected_cart_items);
            });
    
            $this->total = 0;
            $this->sub_total = 0;
            $this->tax = 0;
            foreach ($selectedCartItems as $item) {
                $this->sub_total += $item->product->price * $item->quantity;
            }
        
            $uuid = Str::uuid();

            $transaction = Transaction::create([
                'user_id' => auth()->user()->id,
                'code_invoice' => $uuid,
                'grand_total' => $this->sub_total,
                'transaction_status' => 'pending',
                'method_payment' => $this->payment_method,
            ]);

            // session()->flash('success', 'checkout success !!!');

            
        //    foreach($this->cartitems as $cart){
        //     $product = $cart->product;
        //     TransactionDetail::create([
        //         'transaction_id' => $transaction->id,
        //         'product' => $product->id,
        //         'qty' => $cart->quantity,
        //         'price' => $product->price,
        //     ]);
            
        //         $current_stock = $product->stock - $cart->quantity;
        //         $product->update([
        //             'stock' => $current_stock
        //         ]);

        //         $cart->delete();
        //     }
            foreach ($selectedCartItems as $cart) {
                $product = $cart->product;
                TransactionDetail::create([
                    'transaction_id' => $transaction->id,
                    'product' => $product->id,
                    'qty' => $cart->quantity,
                    'price' => $product->price,
                ]);

                $current_stock = $product->stock - $cart->quantity;
                $product->update([
                    'stock' => $current_stock,
                ]);

                $cart->delete();
            }


            DB::commit();
            $this->emit('updateCartCount');
            session()->flash('success', 'Checkout success!');
        } catch (\Exception $e) {
            DB::rollback();

            session()->flash('error', 'Checkout failed: ' . $e->getMessage());
        }
    }    
      
}
