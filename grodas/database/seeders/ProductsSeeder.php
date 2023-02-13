<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'name' => Str::random(10),
            'description' => Str::random(10),
            'price' => Str::random(10),
            'image' => Str::random(10),
            'category_id' => Str::random(10),
            'status' => Str::random(10),
            'meta_title' => Str::random(10),
            'meta_description' => Str::random(10),
        ]);
    }
}
