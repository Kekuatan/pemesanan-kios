<?php

namespace Database\Seeders;

use App\Enums\PriceListEnum;
use App\Models\PaymentMethod;
use App\Models\PriceList;
use Illuminate\Database\Seeder;

class PriceListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paymentMethods = PaymentMethod::get();

        foreach ($paymentMethods as $paymentMethod) {
            foreach (PriceListEnum::AREAS as $area) {
                $price = ceil(PriceListEnum::FIX_PRICE * $area);
                $ppn = ceil($price * PriceListEnum::PPN);
                $priceWithPPN = ceil($price + $ppn);
                $bookingFee = PriceListEnum::BOOKING_FEE;
                $discount = ceil($priceWithPPN * $paymentMethod->discount_rate);
                $price = $priceWithPPN - $bookingFee - $discount;

                $dp = ceil($price * $paymentMethod->dp_rate);

                $data =
                    [
                        'fix_price' => PriceListEnum::FIX_PRICE,
                        'area' => $area,
                        'ppn' => $priceWithPPN,
                        'discount' => $discount,
                        'dp' => $dp,
                        'booking_fee' => PriceListEnum::BOOKING_FEE,
                        'price' => $price,
                        'payment_method_id' => $paymentMethod->id,
                    ];
                $priceList = PriceList::where('area', $area)->where('payment_method_id', $paymentMethod->id)->first();
                if (blank($priceList)) {
                    PriceList::create($data);
                }
            }
        }

    }
}
