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
            'code' => 1,
            'name' => 'bca',
            'payment_type_id' => 2
        ]);
        PaymentProvider::create([
            'code' => 2,
            'name' => 'mandiri',
            'payment_type_id' => 2
        ]);
        PaymentProvider::create([
            'code' => 3,
            'name' => 'bni',
            'payment_type_id' => 2
        ]);
    }
}
