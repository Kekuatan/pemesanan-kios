<?php

namespace App\Http\Livewire\Pages\Reports;

use App\Enums\PriceListEnum;
use App\Models\Payment;
use App\Models\PaymentMethod;
use App\Models\PaymentProvider;
use App\Models\PriceList;
use App\Models\Product;
use App\Models\User;
use App\Services\ReportService;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class DashboardReport extends Component
{
    public $filters;
    public $datespans;
    public $priceLists;
    public $paymentProviders;
    public $paymentMethods;
    public $users;
    public $searchs;
    public $start;
    public $until;
    public $monthly;
    public $daily;
    public $yearly;
    public $groupBys;
    public $groupCategories;
    public $groupCategory;


    public function mount()
    {
        $this->start = Carbon::parseFromLocale(Carbon::today() ?? Carbon::now()->firstOfMonth())->format('d-m-Y');
        $this->until = Carbon::parseFromLocale(Carbon::now()->lastOfMonth())->format('d-m-Y');

        $this->filters = [];
        $this->searchs = [];
        $this->groupBys = [
            "daily" => ['date', 'dateKey'],
            "monthly" => ['date', 'dateKey'],
            "yearly" => ['date', 'dateKey'],
        ];
        $this->monthly = [];
        $this->daily = [];
        $this->yearly = [];

        $this->paymentProviders = PaymentProvider::get();
        $this->paymentMethods = PaymentMethod::get();
        $this->users = User::select('id', 'name')->get();

        $this->datespans = [
            ["label" => "Hari ini", "value" => "day"],
            ["label" => "Diantara Bulan", "value" => "month"],
            ["label" => "Diantara tanggal", "value" => "year"]
        ];

        $this->groupCategories = [
            ["label" => "Bank", "value" => "bank", "data" => ['date', 'dateKey,', 'payment_provider']],
            ["label" => "Jenis pembayaran", "value" => "method", "data" => ['date', 'dateKey,', 'payment_method']],
            ["label" => "Bank & Jenis Pembayaran", "value" => "all", "data" => ['date', 'dateKey,', 'payment_provider', 'payment_method']],
        ];

    }

    private function datespanFormat(){
        if (!blank(optional($this->filters)['datespan'])) {
            if($this->filters['datespan'] == 'month'){
                $this->start = Carbon::parseFromLocale(Carbon::parseFromLocale($this->start)->firstOfMonth() ?? Carbon::now()->firstOfMonth())->format('d-m-Y');
                $this->until = Carbon::parseFromLocale(Carbon::parseFromLocale($this->until)->lastOfMonth())->format('d-m-Y');
            }
            if($this->filters['datespan'] == 'day'){
                $this->start = Carbon::parseFromLocale(Carbon::today())->format('d-m-Y');
                $this->until = Carbon::parseFromLocale(Carbon::today())->format('d-m-Y');
            }
        }
    }
    public function updatedFilters()
    {
        $this->datespanFormat();

    }

    private function monthly()
    {
        $reportService = (new ReportService());
        $queryStr = "sum(amount) as sums, DATE_FORMAT(kwitansi_date,'%M %Y') as date, DATE_FORMAT(kwitansi_date,'%m') as dateKey";

        $paymentFilterSubquery = $reportService->paymentFilterSubquery($queryStr, $this->filters, collect($this->groupBys['monthly'])->toArray(), $this->groupCategory);
        $this->groupBys['daily'] = $paymentFilterSubquery['groups'];
        $payments = Payment::select(
            DB::raw($paymentFilterSubquery['queryStr']),
        )
            ->where(function ($query) {
                return $this->searchPaymentQuery($query);
            })
            ->groupBy(collect($this->groupBys['monthly'])->toArray())
            ->get();

        return collect($payments)->toArray();

//        $payments = Payment::select(
//            DB::raw('sum(amount) as sums'),
//            DB::raw("DATE_FORMAT(kwitansi_date,'%M %Y') as date"),
//            DB::raw("DATE_FORMAT(kwitansi_date,'%m') as dateKey")
//        )
//            ->groupBy('date', 'dateKey')
//            ->where(function ($query) {
//                return $this->searchPaymentQuery($query);
//            })
//            ->get();
//        return $payments;
    }

    private function daily()
    {
        $reportService = (new ReportService());
        $queryStr = "sum(amount) as sums, DATE_FORMAT(kwitansi_date,'%d %M %Y') as date, DATE_FORMAT(kwitansi_date,'%d %m %Y') as dateKey";
        $paymentFilterSubquery = $reportService->paymentFilterSubquery($queryStr, $this->filters, collect($this->groupBys['daily'])->toArray(), $this->groupCategory);
        $this->groupBys['daily'] = $paymentFilterSubquery['groups'];
        $payments = Payment::select(
            DB::raw($paymentFilterSubquery['queryStr']),
        )
            ->where(function ($query) {
                return $this->searchPaymentQuery($query);
            })
            ->groupBy(collect($this->groupBys['daily'])->toArray())
            ->get();

        return collect($payments)->toArray();
    }

    private function yearly()
    {

        $reportService = (new ReportService());
        $queryStr = "sum(amount) as sums, DATE_FORMAT(kwitansi_date,'%Y') as date, DATE_FORMAT(kwitansi_date,'%Y') as dateKey";
        $paymentFilterSubquery = $reportService->paymentFilterSubquery($queryStr, $this->filters, collect($this->groupBys['yearly'])->toArray(), $this->groupCategory);

        $this->groupBys['yearly'] = $paymentFilterSubquery['groups'];
        $payments = Payment::select(
            DB::raw($paymentFilterSubquery['queryStr']),
        )
            ->where(function ($query) {
                return $this->searchPaymentQuery($query);
            })
            ->groupBy(collect($this->groupBys['yearly'])->toArray())
            ->get();

        return collect($payments)->toArray();

//        $payments = Payment::select(
//            DB::raw('sum(amount) as sums'),
//            DB::raw("DATE_FORMAT(kwitansi_date,'%Y') as date"),
//            DB::raw("DATE_FORMAT(kwitansi_date,'%Y') as dateKey")
//        )
//            ->groupBy('date', 'dateKey')
//            ->where(function ($query) {
//                return $this->searchPaymentQuery($query);
//            })
//            ->get();
//        return $payments;
    }


    private function searchPaymentQuery($query)
    {

        if (!blank(optional($this->filters)['user_id'])) {
            $query->where('user_id', $this->filters['user_id']);
        }

        if (!blank(optional($this->filters)['payment_id'])) {
            $query->where('user_id', $this->filters['payment_id']);
        }

        if (!blank(optional($this->filters)['payment_provider_id'])) {
            $query->where('payment_provider_id', $this->filters['payment_provider_id']);
        }


        if (!blank(optional($this->filters)['datespan'])) {
            if (optional($this->filters)['datespan'] == 'day') {
                $query->where(function ($query) {
                    $query->where(function ($query) {
                        $query->whereNotNull('kwitansi_date')->whereDate('kwitansi_date', $this->filters['start']);
                    })
                        ->orWhere(function ($query) {
                            $query->whereNull('kwitansi_date')->whereDate('created_at', $this->filters['start']);
                        });
                });
            } else {
                $query->where(function ($query) {
                    $query->where(function ($query) {
                        $query->whereNotNull('kwitansi_date')
                            ->whereDate('kwitansi_date', '>=', $this->filters['start'])
                            ->whereDate('kwitansi_date', '<=', $this->filters['until']);
                    })
                        ->orWhere(function ($query) {
                            $query->whereNull('kwitansi_date')
                                ->whereDate('created_at', '<=', $this->filters['start'])
                                ->whereDate('kwitansi_date', '<=', $this->filters['until']);
                        });
                });
            }
        }
        return $query;
    }

    private function searchPriceListQuery($query)
    {
        if (!blank(optional($this->filters)['payment_method_id'])) {
            $query->where('payment_method_id', $this->filters['payment_method_id'])->with('paymentMethod');
        } else {
            $query->with('paymentMethod')->with('paymentMethod');
        }
        return $query;
    }

    public function search()
    {
        $this->datespanFormat();
        $this->filters['start'] = (new Carbon($this->start))->format('Y-m-d');
        $this->filters['until'] = (new Carbon($this->until))->format('Y-m-d');

        $search = Product::whereHas('payments')
            ->when(!blank(optional($this->filters)['tu_no']), function ($query) {
                $query->where('tu_no', 'like', '%' . $query . '%');
            })
            ->whereHas('priceList', function ($query) {
                $this->searchPriceListQuery($query);
            })
            ->whereHas('payments',
                function ($query) {
                    return $this->searchPaymentQuery($query);
                })
            ->with(
                [
                    'payments' => function ($query) {
                        return $this->searchPaymentQuery($query);
                    },
                    'priceList.paymentMethod',
                    'priceList' =>
                        function ($query) {
                            return $this->searchPriceListQuery($query);
                        }
                ]
            )
            ->withSum('payments', 'amount')
//            ->when(!blank(optional($this->filters)['payment_method_id']), function ($query) {
//                $query->whereHas('priceList', function ($query) {
//                    $query->where('payment_method_id', $this->filters['payment_method_id'])->with('paymentMethod');
//                });
//            })
//            ->when(blank(optional($this->filters)['payment_method_id']), function ($query) {
//                $query->whereHas('priceList', function ($query) {
//                    $query->with('paymentMethod')->with('paymentMethod');
//                });
//            })
            ->get();


        $search = collect($search)->toArray();
        $search = collect($search)->map(function ($query) {
            $query['calculation_price'] = $query['price_list'] ? ceil(PriceListEnum::FIX_PRICE * $query['price_list']['area']) : null;
            $query['calculation_discount_rate'] = $query['price_list'] ? $query['price_list']['payment_method']['discount_rate'] : null;
            $query['calculation_discount_rate'] = $query['discount_rate'] ?? $query['calculation_discount_rate'];
            $query['calculation_discount'] = ceil($query['calculation_price'] * ($query['calculation_discount_rate'])) + $query['discount_price'];
            $query['calculation_ppn'] = ceil(ceil($query['calculation_price'] - $query['calculation_discount']) * PriceListEnum::PPN);
            $query['calculation_price_with_discount'] = ceil(($query['calculation_price'] - $query['calculation_discount']));
            $query['calculation_total_price'] = ceil($query['calculation_price_with_discount'] + $query['calculation_ppn']);
            if (blank($query['price_list'])) {
                dd($this->filters['payment_method_id'], $query);
            }
            $query['calculation_dp'] = !blank($query['dp_custom']) ? $query['dp_custom'] : ceil($query['calculation_total_price'] * $query['price_list']['payment_method']['discount_rate']);
            $query['calculation_left_payment'] = $query['calculation_total_price'] - $query['payments_sum_amount'];
            return $query;
        })->toArray();

        $this->searchs = $search;
        $this->monthly = $this->monthly();
        $this->daily = $this->daily();
        $this->yearly = $this->yearly();
//        dd($this->filters,$search);
    }

    public function render()
    {
        return view('livewire.pages.reports.dashboard-report')
            ->layout('components.layouts.app');;
    }
}
