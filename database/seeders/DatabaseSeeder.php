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
        $this->call([
            UserSeeder::class,
            CustomerSeeder::class,
            PaymentMethodSeeder::class,
            PaymentTypeSeeder::class,
            PaymentProviderSeeder::class,
            PriceListSeeder::class,
            ProductSeeder::class,
            History20221210::class
        ]);
    }
}
