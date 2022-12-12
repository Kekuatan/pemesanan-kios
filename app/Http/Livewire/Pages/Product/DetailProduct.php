<?php

namespace App\Http\Livewire\Pages\Product;

use App\Enums\PriceListEnum;
use App\Models\Payment;
use App\Models\PaymentProvider;
use App\Models\PriceList;
use App\Models\Product;
use App\Traits\Livewire\AlertifyTrait;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class DetailProduct extends Component
{

    use AlertifyTrait;

    public $productId;
    public $product;
    public $priceLists;

    public $name;
    public $ktpNo;
    public $kiosNo;
    public $phoneNumber;
    public $address;
    public $price;
    public $dp;

    public $price_text;
    public $ppn_text;
    public $ppn_rate_text;
    public $price_with_discount_text;
    public $price_with_discount;
    public $discount_text;
    public $discount_rate;
    public $booking_fee_text;
    public $dp_percent_text;
    public $dp_text;
    public $price_list;
    public $price_list_id;
    public $discount_rate_text;
    public $total_price_text;
    public $total_price;
    public $user;
    public $showPrint;
    public $payment;
    public $payment_text;
    public $payments;
    public $sum_payment;
    public $sum_payment_text;
    public $left_payment;
    public $left_payment_text;
    public $dp_status;
    public $notes;
    public $note;
    public $dp_percent;
    public $discount;
    public $ppn_rate;
    public $ppn;
    public $terbilang;
    public $paymentProviders;
    public $paymentProviderId;
    public $paymentProviderSelected;
    public $lastPayment;
    public $lastPaymentAmount;
    public $lastPaymentAmountText;
    public $discount_price;
    public $discount_price_text;
    public $payment_selected;
    public $payment_selected_id;
    public $briva;
    public $verify_payment;
    public $kwitansi_date;

    public $inputs;

    protected $queryString = ['productId'];

    public function mount()
    {
        self::mountData();
    }

    public function updatedpaymentProviderId()
    {
        $this->paymentProviderSelected = collect($this->paymentProviders)->where('id', '==', $this->paymentProviderId)->first();
    }

    public function updatedPaymentSelectedId()
    {
        $this->payment_selected = collect($this->payments)->where('id', '==', $this->payment_selected_id)->first();
        $this->verify_payment = $this->payment_selected->verify;
        $this->kwitansi_date = date('d-m-Y', strtotime($this->payment_selected->kwitansi_date));
    }

    public function updatedInputs()

    {
        if (!blank($this->inputs['price_list_id']) && $this->inputs['price_list_id'] !== $this->price_list_id) {
            self::watchInputData();
        }

        if (!blank($this->dp) && $this->dp !== $this->inputs["dp"]) {
            $this->inputs["dp"] = preg_replace("/[^0-9]/", "", $this->inputs["dp"]);
            if (blank($this->inputs['dp'])) {
                $this->dp_text = 'Rp. 0,00';
            } else {
                $this->dp = $this->inputs["dp"];
                $this->dp_text = 'Rp. ' . number_format($this->inputs["dp"], 2, ',', '.');
            }
        }

        if (!blank($this->dp) && $this->dp !== $this->inputs["dp"]) {
            $this->inputs["dp"] = preg_replace("/[^0-9]/", "", $this->inputs["dp"]);
            if (blank($this->inputs['dp'])) {
                $this->dp_text = 'Rp. 0,00';
            } else {
                $this->dp = $this->inputs["dp"];
                $this->dp_text = 'Rp. ' . number_format($this->inputs["dp"], 2, ',', '.');
            }
        }

        if (!blank($this->payment) && $this->payment !== $this->inputs["payment"]) {
            $this->inputs["payment"] = preg_replace("/[^0-9]/", "", $this->inputs["payment"]);

            if (blank($this->inputs['payment'])) {
                $this->payment = 0;
                $this->payment_text = 'Rp. 0,00';
                $this->dp_status = ($this->sum_payment + $this->payment) >= $this->dp ? 1 : 0;
                $this->left_payment = $this->total_price - $this->sum_payment;
                $this->terbilang = '';
            } else {
                $this->payment = $this->inputs["payment"];
                $this->terbilang = blank($this->payment) ? '' : self::getTerbilang($this->payment);
                $this->payment_text = 'Rp. ' . number_format($this->inputs["payment"], 2, ',', '.');

                $this->left_payment = $this->total_price - $this->payment - $this->sum_payment;
                $this->left_payment_text = 'Rp. ' . number_format($this->left_payment, 2, ',', '.');

                $this->dp_status = ($this->sum_payment + $this->payment) >= $this->dp ? 1 : 0;
            }
        }

        if (blank($this->inputs['discount_rate'])) {
            $updateDiscountRate = $this->discount_rate !== $this->inputs["discount_rate"];
        } else {
            $updateDiscountRate = $this->discount_rate !== $this->inputs["discount_rate"] / 100;
        }

        $updateDiscountPrice = !blank(optional($this->inputs)['discount_price']) || $this->discount_price !== optional($this->inputs)["discount_price"];

        if ($updateDiscountRate || $updateDiscountPrice) {
            if ($updateDiscountRate) {
                $this->inputs["discount_rate"] = preg_replace("/[^0-9]/", "", $this->inputs["discount_rate"]);
                if (blank($this->inputs['discount_rate'])) {
                    $this->inputs["discount_rate"] = null;
                    $this->discount_rate = 0;
                    $this->discount_rate_text = '0%';
                    $this->discount = 0 + $this->discount_price;
                } else {
                    $this->discount = floor($this->price * ($this->inputs["discount_rate"] / 100)) + $this->discount_price;
                    $this->discount_rate = ($this->inputs["discount_rate"]) / 100;
                    $this->discount_rate_text = ($this->inputs["discount_rate"]) . '%';
                }
            }
            if ($updateDiscountPrice) {
                if (!blank(optional($this->inputs)["discount_price"])) {
                    $this->inputs["discount_price"] = preg_replace("/[^0-9]/", "", $this->inputs["discount_price"]);
                }
                if (blank(optional($this->inputs)['discount_price'])) {
                    $this->inputs["discount_price"] = null;
                    $this->discount_price = null;
                    $this->discount_price_text = 'Rp.0,00';
                    $this->discount = floor($this->price * ($this->discount_rate)) + $this->discount_price;
                } else {
                    $this->discount_price = $this->inputs["discount_price"];
                    $this->discount = floor($this->price * ($this->discount_rate)) + $this->discount_price;
                    $this->discount_price_text = 'Rp. ' . number_format($this->discount_price, 2, ',', '.');

                }
            }


            $this->price_with_discount = floor(($this->price - $this->discount));
            $this->price_with_discount_text = 'Rp. ' . number_format($this->price_with_discount, 2, ',', '.');

            $this->discount_text = 'Rp. ' . number_format($this->discount, 2, ',', '.');

            $this->total_price = floor($this->price_with_discount + $this->ppn);
            $this->total_price_text = 'Rp. ' . number_format($this->total_price, 2, ',', '.');

            $this->dp = floor($this->total_price * $this->price_list ['payment_method']['dp_rate']);
            $this->dp_text = 'Rp. ' . number_format($this->dp, 2, ',', '.');
            $this->dp_status = ($this->sum_payment + $this->payment) >= $this->dp ? 1 : 0;

            $this->left_payment = $this->total_price - $this->payment - $this->sum_payment;
            $this->left_payment_text = 'Rp. ' . number_format($this->left_payment, 2, ',', '.');


        }


    }

    public function save()
    {
        try {
            DB::beginTransaction();
            if (!blank($this->inputs['payment']) && $this->inputs['payment'] != 0) {
                Payment::create([
                    'amount' => $this->inputs['payment'],
                    'kwitansi_date' => (new Carbon($this->kwitansi_date))->format('Y-m-d'),
                    'payment_date' => Carbon::now()->toDateString(),
                    'product_id' => $this->product->id,
                    "user_id" => $this->user->id,
                    "payment_provider_id" => $this->paymentProviderId,
                    'note' => $this->note
                ]);
            }


            $payload = [
                'price_list_id' => $this->inputs['price_list_id'],
                "siho_name" => blank($this->inputs['name']) ? $this->product->siho_name : $this->product->siho_name . " | " . $this->inputs['name'],
                "siho_ktp_no" => $this->ktpNo,
                "siho_tlp" => $this->phoneNumber,
                "siho_address" => $this->address,
                "discount_rate" => $this->inputs['discount_rate'] / 100 == $this->price_list ['payment_method']['discount_rate']? null : $this->inputs['discount_rate'] / 100,
                "status" => $this->left_payment <= 0 ? 1 : 0,
                "total_price" => $this->total_price
            ];

            if ($this->briva !== $this->product->briva) {
                $payload['briva'] = $this->briva;
            }

            $this->product->update($payload);
            $this->showPrint = true;
            $this->alertifyError('success', 'Success');
            self::mountData();
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            $this->alertifyError('error', 'Database error');
            dd($exception->getMessage());
        }
    }

    public function saveKwitansi()
    {
        try {
            DB::beginTransaction();
            Payment::where('id', $this->payment_selected_id)->update([
                'kwitansi_date' => (new Carbon($this->kwitansi_date))->format('Y-m-d'),
                'verify' => $this->verify_payment,
            ]);

            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
        }
    }

    private function mountData()
    {


        $this->showPrint = false;
        $this->user = Auth::guard('web')->user();
        $this->product = Product::where('id', $this->productId)
            ->with(['payments' => function ($query) {
                $query->with('user')->with('paymentProvider');
            }])
//            ->with('payments.user')->with('payments.paymentProvider')
            ->with('priceList')->first();

        $this->briva = $this->product->briva;
        $this->paymentProviders = PaymentProvider::get();
        $this->paymentProviderId = (collect($this->paymentProviders)->where('is_default', '==', 1)->first())['id'];
        $this->paymentProviderSelected = collect($this->paymentProviders)->where('id', '==', $this->paymentProviderId)->first();

        $this->payments = $this->product->payments;

        $this->sum_payment = blank($this->payments) ? 0 : collect($this->payments)->sum('amount');
        $this->sum_payment_text = 'Rp. ' . number_format($this->sum_payment, 2, ',', '.');
        $this->priceLists = PriceList::where('area', $this->product->tu_area)->with('paymentMethod')->get();

        $this->name = $this->product->siho_name;
        $this->ktpNo = $this->product->siho_ktp_no;
        $this->kiosNo = $this->product->tu_no;
        $this->phoneNumber = $this->product->siho_tlp;
        $this->address = $this->product->siho_address;
        $this->dp = null;
        $this->verify_payment = 0;

        if (!blank($this->payments)) {

            $this->lastPayment = (collect($this->payments)->last());
            $this->payment_selected = (collect($this->payments)->last());
            $this->verify_payment = $this->payment_selected['verify'];
            $this->payment_selected_id = (collect($this->payments)->last())['id'];
            $this->kwitansi_date = date('d-m-Y', strtotime($this->payment_selected['kwitansi_date']));
            $this->lastPaymentAmount = $this->lastPayment['amount'];
            $this->lastPaymentAmountText = 'Rp. ' . number_format($this->lastPaymentAmount, 2, ',', '.');
        }

        $this->terbilang = blank($this->payments) ? '' : self::getTerbilang(collect($this->payments)->last()['amount']);

        $this->inputs = [
            "name" => "",
            "ktpNo" => "",
            "phoneNumber" => "",
            "address" => "",
            "price_list_id" => "",
        ];

        if (!blank($this->product->priceList)) {
//            $this->showPrint = true;
            $this->inputs['price_list_id'] = $this->product->priceList->id;
        }
        if (!blank($this->product->user)) {
//            $this->showPrint = true;
            $this->user = $this->product->user;
        }

        if (!blank($this->product->priceList)) {
            self::watchInputData();
        }
    }

    private function watchInputData()
    {
        $this->price_list_id = $this->inputs['price_list_id'];
        $this->price_list = collect($this->priceLists)->where('id', '==', $this->inputs['price_list_id'])->first()->toArray();

        $this->price = floor(PriceListEnum::FIX_PRICE * $this->price_list['area']);
        $this->price_text = 'Rp. ' . number_format($this->price, 2, ',', '.');

        $this->discount_rate = ($this->product->discount_rate) ?? $this->price_list ['payment_method']['discount_rate'];
        $this->inputs['discount_rate'] = floor($this->discount_rate * 100);
        $this->discount_rate_text = ($this->discount_rate * 100) . '%';

        $this->discount_price = $this->product->discount_price;
        $this->discount_price_text = 'Rp. ' . number_format($this->discount_price, 2, ',', '.');


        $this->discount = floor($this->price * ($this->discount_rate)) + $this->discount_price;
        $this->discount_text = 'Rp. ' . number_format($this->discount, 2, ',', '.');


        $this->ppn_rate = PriceListEnum::PPN;
        $this->ppn_rate_text = ($this->ppn_rate * 100) . '%';

        $this->ppn = floor(floor($this->price - $this->discount) * PriceListEnum::PPN);
        $this->ppn_text = 'Rp. ' . number_format($this->ppn, 2, ',', '.');

        $this->price_with_discount = floor(($this->price - $this->discount));
        $this->price_with_discount_text = 'Rp. ' . number_format($this->price_with_discount, 2, ',', '.');


        $this->dp_percent = PriceListEnum::DP;
        $this->dp_percent_text = ((PriceListEnum::DP * 100) . '%');

        $this->total_price = floor($this->price_with_discount + $this->ppn);
        $this->total_price_text = 'Rp. ' . number_format($this->total_price, 2, ',', '.');

        $this->inputs["dp"] = $this->inputs['dp'] ?? floor($this->total_price * $this->price_list ['payment_method']['dp_rate']);
        $this->dp = floor($this->total_price * $this->price_list ['payment_method']['dp_rate']);
        $this->dp_text = 'Rp. ' . number_format($this->inputs["dp"], 2, ',', '.');

        $this->inputs['payment'] = null;
        $this->payment_text = 'Rp. ' . number_format($this->inputs['payment'], 2, ',', '.');
        $this->payment = 0;

        $this->dp_status = ($this->sum_payment + $this->payment) >= $this->dp ? 1 : 0;
        $this->left_payment = $this->total_price - $this->sum_payment;
        $this->left_payment_text = 'Rp. ' . number_format($this->left_payment, 2, ',', '.');


    }


    private function penyebut($nilai)
    {
        $nilai = abs($nilai);
        $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
        $temp = "";
        if ($nilai < 12) {
            $temp = " " . $huruf[$nilai];
        } else if ($nilai < 20) {
            $temp = self::penyebut($nilai - 10) . " belas";
        } else if ($nilai < 100) {
            $temp = self::penyebut($nilai / 10) . " puluh" . self::penyebut($nilai % 10);
        } else if ($nilai < 200) {
            $temp = " seratus" . self::penyebut($nilai - 100);
        } else if ($nilai < 1000) {
            $temp = self::penyebut($nilai / 100) . " ratus" . self::penyebut($nilai % 100);
        } else if ($nilai < 2000) {
            $temp = " seribu" . self::penyebut($nilai - 1000);
        } else if ($nilai < 1000000) {
            $temp = self::penyebut($nilai / 1000) . " ribu" . self::penyebut($nilai % 1000);
        } else if ($nilai < 1000000000) {
            $temp = self::penyebut($nilai / 1000000) . " juta" . self::penyebut($nilai % 1000000);
        } else if ($nilai < 1000000000000) {
            $temp = self::penyebut($nilai / 1000000000) . " milyar" . self::penyebut(fmod($nilai, 1000000000));
        } else if ($nilai < 1000000000000000) {
            $temp = self::penyebut($nilai / 1000000000000) . " trilyun" . self::penyebut(fmod($nilai, 1000000000000));
        }
        return $temp;
    }

    public function getTerbilang($nilai)
    {
        if ($nilai < 0) {
            $hasil = "minus " . trim(self::penyebut($nilai));
        } else {
            $hasil = trim(self::penyebut($nilai));
        }
        return $hasil . ' rupiah';
    }

    public function render()
    {
        return view('livewire.pages.product.detail-product')
            ->layout('components.layouts.app');;
    }
}
