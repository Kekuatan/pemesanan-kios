<?php

namespace Database\Seeders;

use App\Models\PaymentProvider;
use Illuminate\Database\Seeder;

class PaymentProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentProvider::create([
            'code' => '129.000.1314.1128',
            'name' => 'Mandiri',
            "type" => 'va'
//            'payment_type_id' => 2
        ]);
        PaymentProvider::create([
            'code' => '88.9988.759',
            'name' => 'bni',
            "type" => 'va'
//            'payment_type_id' => 2
        ]);
        PaymentProvider::create([
            'code' => '0442.01.00.1856.305',
            'name' => 'bri',
            "type" => 'va',
            'is_default' => 1
//            'payment_type_id' => 2
        ]);
        PaymentProvider::create([
            'code' => '1080.8181.219',
            'name' => 'dki',
            'type' => 'va',
        ]);
        PaymentProvider::create([
            'name' => 'cash',
            'type' => 'cash',
        ]);
    }
}
