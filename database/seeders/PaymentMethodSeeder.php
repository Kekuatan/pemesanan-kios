<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
use Illuminate\Database\Seeder;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentMethod::create([
             'code' => 1,
             'name' => 'Cash Keras',
             'discount_rate' => 0.05,
             'dp_rate' => 0.10,
             'credit_duration' => 1,
             'description'  => '
                1. Pedagang Membayar Booking Fee sebesar Rp. 10.000.000 <br>
                2. Pedagang Mendapat Discount 3% <br>
                3. Melunasi Pembayaran Selambatnya 1 bulan setelah Booking Fee'
        ]);

               PaymentMethod::create([
                   'code' => 2,
                   'name' => 'Bertahap 7 Bulan',
                   'discount_rate' => 0.02,
                   'dp_rate' => 0.10,
                   'credit_duration' => 7,
                   'description'  => '
                    1. Pedagang Membayar Booking Fee sebesar Rp. 10.000.000 <br>
                    2. Pedagang Membayar Down Payment (DP) Sebesar 30% <br>
                    3. Pedagang Mendapat Discount 1% <br>
                    4. Melunasi Pembayaran Dengan Cara Mencicil Setiap Bulan Selama 6 (Enam) Bulan'
               ]);

               PaymentMethod::create([
                   'code' => 3,
                   'name' => 'Bertahap 12 Bulan',
                   'dp_rate' => 0.10,
                   'discount_rate' => 0,
                   'credit_duration' => 12,
                   'description'  => '
                    1. Pedagang Membayar Booking Fee sebesar Rp. 10.000.000 <br>
                    2. Pedagang Membayar Down Payment (DP) Sebesar 30%<br>
                    3. Pedagang Tidak Dikenakan Bunga<br>
                    4. Melunasi Pembayaran Dengan Cara Mencicil Setiap Bulan Selama 12 (Dua Belas) Bulan'
               ]);
               PaymentMethod::create([
                   'code' => 4,
                   'discount_rate' => 0,
                   'dp_rate' => 0.10,
                   'name' => 'Kpr Bank',
                   'credit_duration' => null,
                   'description'  => '
                    1. Pedagang Membayar Booking Fee sebesar Rp. 10.000.000 <br>
                    2. Pedagang Membayar Down Payment (DP) Sebesar 30% <br>
                    3. Pedagang Mendapatkan Fasilitas ke Bank Untuk Mendapat Kredit Perbankan <br>
                    4. Pelunasan Sisa Kewajiban Melalui Kredit Perbankan'
               ]);
    }
}
