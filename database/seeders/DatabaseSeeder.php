<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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

        \App\Models\products::create([
            'barcode' => '1111',
            'productName' => 'APPLE',
            'price' => 10.00,
            'status' => 'READY'
        ]);

        \App\Models\products::create([
            'barcode' => '1111',
            'productName' => 'APPLE',
            'price' => 20.00,
            'status' => 'DELIVERED'
        ]);

        \App\Models\products::create([
            'barcode' => '1111',
            'productName' => 'APPLE',
            'price' => 30.00,
            'status' => 'SENT'
        ]);

        \App\Models\products::create([
            'barcode' => '1111',
            'productName' => 'APPLE',
            'price' => 10.00,
            'status' => 'ONHOLD'
        ]);

        \App\Models\products::create([
            'barcode' => '1111',
            'productName' => 'APPLE',
            'price' => 20.00,
            'status' => 'PACKING'
        ]);

        \App\Models\products::create([
            'barcode' => '1111',
            'productName' => 'APPLE',
            'price' => 40.00,
            'status' => 'SENT'
        ]);

        \App\Models\products::create([
            'barcode' => '1111',
            'productName' => 'APPLE',
            'price' => 50.00,
            'status' => 'SENT'
        ]);

        \App\Models\products::create([
            'barcode' => '1122',
            'productName' => 'PINEAPPLE',
            'price' => 10.00,
            'status' => 'READY'
        ]);

        \App\Models\products::create([
            'barcode' => '1122',
            'productName' => 'PINEAPPLE',
            'price' => 10.00,
            'status' => 'DELIVERED'
        ]);

        \App\Models\products::create([
            'barcode' => '1122',
            'productName' => 'PINEAPPLE',
            'price' => 10.00,
            'status' => 'PACKING'
        ]);

        \App\Models\products::create([
            'barcode' => '1122',
            'productName' => 'PINEAPPLE',
            'price' => 10.00,
            'status' => 'DELIVERED'
        ]);
    }
}
