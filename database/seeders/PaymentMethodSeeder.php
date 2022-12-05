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
             'name' => 'cash keras',
             'discount_rate' => 0.03,
             'dp_rate' => 0.30,
             'credit_duration' => 1,
             'description'  => '
                1. Pedagang Membayar Booking Fee sebesar Rp. 10.000.000 <br>
                2. Pedagang Mendapat Discount 3% <br>
                3. Melunasi Pembayaran Selambatnya 1 bulan setelah Booking Fee'
        ]);

               PaymentMethod::create([
                   'code' => 2,
                   'name' => 'cicilan 6 bulan',
                   'discount_rate' => 0.01,
                   'dp_rate' => 0.30,
                   'credit_duration' => 6,
                   'description'  => '
                    1. Pedagang Membayar Booking Fee sebesar Rp. 10.000.000 <br>
                    2. Pedagang Membayar Down Payment (DP) Sebesar 30% <br>
                    3. Pedagang Mendapat Discount 1% <br>
                    4. Melunasi Pembayaran Dengan Cara Mencicil Setiap Bulan Selama 6 (Enam) Bulan'
               ]);

               PaymentMethod::create([
                   'code' => 3,
                   'name' => 'cicilan 12 bulan',
                   'dp_rate' => 0.30,
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
                   'dp_rate' => 0.30,
                   'name' => 'kpr bank',
                   'credit_duration' => null,
                   'description'  => '
                    1. Pedagang Membayar Booking Fee sebesar Rp. 10.000.000 <br>
                    2. Pedagang Membayar Down Payment (DP) Sebesar 30% <br>
                    3. Pedagang Mendapatkan Fasilitas ke Bank Untuk Mendapat Kredit Perbankan <br>
                    4. Pelunasan Sisa Kewajiban Melalui Kredit Perbankan'
               ]);
    }
}
