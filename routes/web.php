<?php

use App\Models\Article;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;

use App\Http\Livewire\Cart\CartList;
use Illuminate\Support\Facades\Auth;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LikeController;



use App\Http\Livewire\Auth\PasswordReset;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Livewire\Auth\PwdResetConfirm;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookingAdminController;

use App\Http\Controllers\vendor\Chatify\MessagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    
    // $userReview = file_get_contents(base_path('resources/json/user_review.json'));
    // $articles = Article::with('likes')->take(3)->get();
    return view('dashboard'/* , compact('articles', 'userReview') */);
})->name('home');

Route::get('/home', function () {
    // $userReview = file_get_contents(base_path('resources/json/user_review.json'));
    // $articles = Article::with('likes')->take(3)->get();
    return view('dashboard'/* , compact('articles', 'userReview') */);
});


Auth::routes([
    'login' => false,
    'register' => false,
    'password.request' => false,
    'verify' => true,
]);

Route::middleware('guest')->group(function () {
    Route::get('/login', Login::class)->name('login');
    Route::get('/register', Register::class)->name('register');
    Route::get('/forgot-password', PasswordReset::class)->name('forgot-password');
    Route::get('/confirm-reset', PwdResetConfirm::class)->name('confirm-reset');
});


Route::middleware(['admin'])->group(function () {
    // category
    Route::get('/category', [CategoryController::class, 'index']);
    Route::post('/category', [CategoryController::class, 'store']);
    Route::get('/category/{id}/edit', [CategoryController::class, 'edit']);
    Route::put('/category/{id}', [CategoryController::class, 'update']);
    Route::delete('/category/{id}', [CategoryController::class, 'destroy']);
    // product
    Route::get('/product', [ProductController::class, 'index']);
    Route::get('/product/create', [ProductController::class, 'create']);
    Route::post('/product', [ProductController::class, 'store']);
    Route::get('/product/{id}/edit', [ProductController::class, 'edit']);
    Route::put('/product/{id}', [ProductController::class, 'update']);
    Route::delete('/product/{id}', [ProductController::class, 'destroy']);
    // article
    // Route::get('articles', [ArticleController::class, 'index'])->name('articles.index');
    // Route::post('articles', [ArticleController::class, 'store'])->name('articles.store');
    // Route::get('articles/create', [ArticleController::class, 'create'])->name('articles.create');
    // Route::get('articles/{article:slug}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
    // Route::get('articles/{article:slug}', [ArticleController::class, 'showArticle'])->name('articles.show');
    // Route::put('articles/{article:slug}', [ArticleController::class, 'update'])->name('articles.update');
    // Route::delete('articles/{article:slug}', [ArticleController::class, 'destroy'])->name('articles.destroy');
    // Route::post('comment', [CommentController::class, 'store'])->name('comment.store');
    // Route::delete('comment/{comment}', [CommentController::class, 'destroy'])->name('comment.destroy');
    // Route::put('comment/{comment}', [CommentController::class, 'update'])->name('comment.update');
    // Route::post('like', [LikeController::class, 'store'])->name('like.store');
    // // booking
    // Route::get('/booking-admin', [BookingAdminController::class, 'index']);
    // Route::get('/booking-admin/{id}/edit', [BookingAdminController::class, 'edit']);
    // Route::post('/booking-admin/{id}', [BookingAdminController::class, 'update']);
    // Route::delete('/booking-admin/{id}', [BookingAdminController::class, 'destroy']);
    //chat
    Route::get('/list_chat', [MessagesController::class, 'index_admin']);
    // user alll
    Route::get('/user', [ProfileController::class, 'getData'])->name('user.index');
    Route::view('/transaction-list', 'dashboard.transaction.transaction-list');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/product-list', [ProductController::class, 'list_product'])->name('product-list');
    Route::view('/detail_produk', 'dashboard.product.product_detail');
    Route::view('/cart-list', 'dashboard.cart.cart_list');
    Route::view('/transaction', 'dashboard.transaction.transaction');
    // article
    // Route::get('articles', [ArticleController::class, 'index'])->name('articles.index');
    // Route::get('articles/{article:slug}', [ArticleController::class, 'showArticle'])->name('articles.show');
    // Route::post('comment', [CommentController::class, 'store'])->name('comment.store');
    // Route::delete('comment/{comment}', [CommentController::class, 'destroy'])->name('comment.destroy');
    // Route::put('comment/{comment}', [CommentController::class, 'update'])->name('comment.update');
    // Route::post('like', [LikeController::class, 'store'])->name('like.store');
    // // booking
    // Route::get('/booking', [BookingController::class, 'index']);
    // Route::get('/booking/create', [BookingController::class, 'create']);
    // Route::post('/booking', [BookingController::class, 'store']);

    // profile
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile_update');
    Route::view('/user-transaction-list', 'dashboard.transaction.user-transaction-list');
    
    Route::get('/home', [MessagesController::class, 'index'])->name('home');
});


// Route::get('/booking', [BookingController::class, 'index']);
// Route::post('/booking', [BookingController::class, 'create']);
// Route::post('/booking', [BookingController::class, 'store']);







// Route::middleware(['auth'])->group(function () {
//     // Route::get('/categoryASL',index::class)->name('categoryASL');
// });


// 'views
// Route::view('/list_chat', 'dashboard.chat.admin');
// Route::get('/list_chat', [MessagesController::class, 'index_admin']);
// Route::get('/', [MessagesController::class, 'index']);
// Route::view('/testprod', 'test.test');
// Route::get('/testprod', [MessagesController::class, 'index']);
// Route::get('/testprod/{id}', [MessagesController::class, 'index']);



// Articles
// Route::Resource('articles', ArticleController::class);


// like
// cart
// Route::get('/cart', [ProductController::class, 'index_test']); 
// Route::view('/cart', 'dashboard.cart.index');
// Route::get('/cart', function () {
//     return view('dashboard.cart.index');
// })->middleware(['auth']);

// Route::get('/cart-list', CartList::class)->name('cart-list'); 

//profile

// transaction-list user
// user 
