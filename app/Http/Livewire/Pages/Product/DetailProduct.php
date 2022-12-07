<?php

namespace App\Http\Livewire\Pages\Product;

use App\Enums\PriceListEnum;
use App\Models\Payment;
use App\Models\PriceList;
use App\Models\Product;
use App\Traits\Livewire\AlertifyTrait;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
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
    public $price_with_ppn_text;
    public $discount_text;
    public $booking_fee_text;
    public $dp_percent_text;
    public $dp_text;
    public $price_list;
    public $price_list_id;
    public $discount_rate_text;
    public $total_price_text;
    public $user;
    public $showPrint;

    public $inputs;

    protected $queryString = ['productId'];

    public function mount()
    {
        $this->showPrint = false;
        $this->user = Auth::guard('web')->user();
        $this->product = Product::where('id', $this->productId)->with('priceList')->with('user')->first();


        $this->priceLists = PriceList::where('area', $this->product->tu_area)->with('paymentMethod')->get();

        $this->name = $this->product->siho_name;
        $this->ktpNo = $this->product->siho_ktp_no;
        $this->kiosNo = $this->product->tu_no;
        $this->phoneNumber = $this->product->siho_tlp;
        $this->address = $this->product->siho_address;
        $this->dp = null;


        $this->inputs = [
            "name" => "",
            "ktpNo" => "",
            "phoneNumber" => "",
            "address" => "",
            "price_list_id" => "",
        ];

        if (!blank($this->product->priceList)){
            $this->showPrint = true;
            $this->inputs['price_list_id'] = $this->product->priceList->id;
        }
        if (!blank($this->product->user)){
            $this->showPrint = true;
            $this->user = $this->product->user->id;
        }

        if (!blank($this->product->priceList)) {
            self::watchInputData();
        }

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


    }

    public function save()
    {
        try {
            Payment::create([
                'amount' => $this->inputs['dp'],
                'payment_date' => Carbon::now()->toDateString(),
                'product_id' => $this->product->id
            ]);

            $payload = [
                'price_list_id' => $this->inputs['price_list_id'],
                "dp" => $this->inputs['dp'],
                "siho_name" => $this->name . "|".$this->inputs['name'],
                "siho_ktp_no" => $this->ktpNo . "|".$this->inputs['ktpNo'],
                "siho_tlp" => $this->phoneNumber . "|".$this->inputs['phoneNumber'],
                "siho_address" => $this->address . "|".$this->inputs['address'],
                "user_id" => $this->user->id
            ];

            $this->product->update($payload);
            $this->showPrint = true;
            $this->alertifyError('success', 'Success');
        } catch (\Exception $exception) {
            $this->alertifyError('error', 'Database error');
            dd($exception->getMessage());
        }
    }

    private function watchInputData()
    {
        $this->price_list_id = $this->inputs['price_list_id'];
        $this->price_list = collect($this->priceLists)->where('id', '==', $this->inputs['price_list_id'])->first()->toArray();
        $this->inputs["price"] = floor(PriceListEnum::FIX_PRICE * $this->price_list['area']);
        $this->price_text = 'Rp. ' . number_format($this->inputs["price"], 2, ',', '.');

        $this->ppn_rate_text = (PriceListEnum::PPN * 100) . '%';
        $this->inputs["ppn"] = floor($this->inputs["price"] * PriceListEnum::PPN);
        $this->ppn_text = 'Rp. ' . number_format($this->inputs["ppn"], 2, ',', '.');

        $this->inputs['price_with_ppn'] = floor(($this->inputs["price"] + $this->inputs["ppn"]));
        $this->price_with_ppn_text = 'Rp. ' . number_format($this->inputs['price_with_ppn'], 2, ',', '.');

        $this->discount_rate_text = ($this->price_list ['payment_method']['discount_rate'] * 100) . '%';
        $this->inputs["discount"] = floor($this->inputs['price_with_ppn'] * $this->price_list ['payment_method']['discount_rate']);
        $this->discount_text = 'Rp. ' . number_format($this->inputs["discount"], 2, ',', '.');

        $this->inputs['booking_fee'] = PriceListEnum::BOOKING_FEE;
        $this->booking_fee_text = 'Rp. ' . number_format($this->inputs['booking_fee'], 2, ',', '.');

        $this->inputs["dp_percent"] = PriceListEnum::DP;
        $this->dp_percent_text = ((PriceListEnum::DP * 100) . '%');

        $this->inputs['total_price'] = floor($this->inputs['price_with_ppn'] - $this->inputs['booking_fee'] - $this->inputs['discount']);
        $this->total_price_text = 'Rp. ' . number_format($this->inputs['total_price'], 2, ',', '.');

        $this->inputs["dp"] = $this->inputs['dp'] ?? floor($this->inputs['total_price'] * $this->price_list ['payment_method']['dp_rate']);
        $this->dp = $this->inputs["dp"];
        $this->dp_text = 'Rp. ' . number_format($this->inputs["dp"], 2, ',', '.');
    }

    public function render()
    {
        return view('livewire.pages.product.detail-product')
            ->layout('components.layouts.app');;
    }
}
