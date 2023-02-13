<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('orders')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'phone' => Str::random(10),
            'address' => Str::random(10),
            'city' => Str::random(10),
            'state' => Str::random(10),
            'zip' => Str::random(10),
            'country' => Str::random(10),
            'payment_method' => Str::random(10),
            'payment_status' => Str::random(10),
            'payment_id' => Str::random(10),
            'payment_amount' => Str::random(10),
            'payment_currency' => Str::random(10),
            'payment_created_at' => Str::random(10),
            'payment_updated_at' => Str::random(10),
        ]);
    }
}
