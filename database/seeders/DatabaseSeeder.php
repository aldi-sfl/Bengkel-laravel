<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\User;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
        Category::factory(5)->create();
        Product::factory(5)->create();
        
        
        DB::table('users')->insert([
            [
                'id' => 1,
                'name'=>'Admin',
                'email'=>'admin@admin.com',
                'password'=> Hash::make('12345'),
                'is_admin' => true
                ]
        ]);

        User::create([
            'name'=>'aldi',
            'email'=>'aldi@gmail.com',
            'password'=>Hash::make('12345'),
        ]);

    }
}
