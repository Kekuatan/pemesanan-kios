<div>
    <div class="container">

        <div class="row content-header">
            <div class="bredcumb-header-dasboard content-header-left mb-2 col-md-9 col-12">
                <div class="row breadcrumbs-top">
                    <div class="col-12"><h2 class="content-header-title float-left pr-1 mb-0"> Pemesanan Kios</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item "><a href="{{ url('/dashboard') }}"
                                                                class="router-link-active" target="_self">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="align-text-top feather feather-home">
                                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                        </svg>
                                    </a></li>
{{--                                <li class="breadcrumb-item"><a href="{{ url('/product/order') }}" target="_self"--}}
{{--                                                               class=""> Pemesanan kios </a></li>--}}
                                <li class="breadcrumb-item active"><span
                                        aria-current="location"> Laporan</span></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right d-md-block d-none mb-1 col-md-3 col-12">
                <div class="dropdown b-dropdown btn-group" id="__BVID__2011"><!---->
                    <div class="content-header-right text-md-right d-md-block d-none mb-1 col-md-3 col-12">
                        <a href="{{url('/logout')}}">
                            <button type="button" class="btn btn-icon btn-primary">
                                <svg width="14px" height="14px" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-settings">
                                    <circle cx="12" cy="12" r="3"></circle>
                                    <path
                                        d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                                </svg>

                            </button>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <div class="card p-2">

            <div class="row">

                <div class="col-md-4">
                    <div class="row">
                        <label for="staticEmail" class="col-sm-8 col-form-label">Pilih waktu</label>
                        <div class="mb-75">
                            <select wire:model="filters.datespan" class="custom-select">
                                <option value="" selected>--- Semua ---</option>
                                @foreach ($datespans as $datespan)
                                    <option value="{{$datespan['value']}}">{{$datespan['label']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                </div>

                <div class="col-md-4">
                    <div class="mb-75">
                        <label for="staticEmail" class="col-sm-8 col-form-label">Pilih Bank</label>
                        <select style="text-transform: uppercase" wire:model="filters.payment_provider_id"
                                class="custom-select">
                            <option value="" selected>--- Semua ---</option>
                            @foreach ($paymentProviders as $paymentProvider)
                                <option
                                    value="{{$paymentProvider->id}}">{{strtoupper($paymentProvider->name )}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="mb-75">
                        <label for="staticEmail" class="col-sm-8 col-form-label">Pilih Jenis Pembayaran</label>
                        <select style="text-transform: uppercase" wire:model="filters.payment_method_id"
                                class="custom-select">
                            <option value="" selected>--- Semua ---</option>
                            @foreach ($paymentMethods as $paymentMethod)
                                <option value="{{$paymentMethod->id}}">{{strtoupper($paymentMethod->name )}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="mb-75">
                        <label for="staticEmail" class="col-sm-8 col-form-label">Pilih Petugas</label>
                        <select style="text-transform: uppercase" wire:model="filters.user_id" class="custom-select">
                            <option value="" selected>--- Semua ---</option>
                            @foreach ($users as $user)
                                <option value="{{$user->id}}">{{strtoupper($user->name )}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="mb-75 ">
                        <label for="staticEmail" class="col-sm-8 col-form-label">Tempat usaha</label>
                        <div class="">
                            <input type="text"
                                   class="right-input form-control invoice-edit-input flatpickr-input"
                                   class="form-control-plaintext"
                                   wire:model="filters.tu_no">
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="mb-75 ">
                        <label for="staticEmail" class="col-sm-8 col-form-label">Dari Tanggal </label>
                        <div class="">
                            <input type="text"
                                   class="right-input form-control invoice-edit-input flatpickr-input"
                                   class="form-control-plaintext"
                                   wire:model="start">
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="mb-75 ">
                        <label for="staticEmail" class="col-sm-8 col-form-label">Sampai Tanggal </label>
                        <div class="">
                            <input type="text"
                                   class="right-input form-control invoice-edit-input flatpickr-input"
                                   class="form-control-plaintext"
                                   wire:model="until">
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="mb-75 ">
                        <label for="staticEmail" class="col-sm-8 col-form-label">Nomer Kwitansi</label>
                        <div class="">
                            <input type="text"
                                   class="right-input form-control invoice-edit-input flatpickr-input"
                                   class="form-control-plaintext"
                                   wire:model="filters.payment_id">
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="mb-75">
                        <label for="staticEmail" class="col-sm-8 col-form-label">Kelompok Kategori</label>
                        <select style="text-transform: uppercase" wire:model="groupCategory" class="custom-select">
                            <option value="" selected>--- None ---</option>
                            @foreach ($groupCategories as $category)
                                <option value="{{$category['value']}}">{{strtoupper($category['label'])}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <button wire:click="search" data-v-36ff53bc=""
                        type="button"
                        class="btn mb-75 btn-primary btn-block collapsed"
                        aria-expanded="false" aria-controls="sidebar-send-invoice"
                        style="overflow-anchor: none;"> Search
                </button>

            </div>
        </div>

        <div class=" p-2">
            <div class="row">
                <div class="col-md-6">
                    <!--Dayly-->
                    <div class="card p-2">
                        <div class="mb-0 table-responsive" data-v-aa799a9e="">
                            <div class="row">
                                <div class="col-md-4">  <p class=""></p> </div>
                                <div class="col-md-4">  <p class="text-center">Laporan Harian</p> </div>
                                <div class="col-md-4" >
                                    <button wire:click="excelDaily" data-v-36ff53bc=""

                                            type="button"
                                            class="btn mb-75 btn-success collapsed"
                                            aria-expanded="false" aria-controls="sidebar-send-invoice"
                                            style="overflow-anchor: none; float: right"> Exel
                                    </button>
                                </div>
                            </div>
                            <table role="table" id="detail-report" aria-busy="false" aria-colcount="6" class="table b-table"
                                   id="__BVID__3462">
                                <!----><!---->
                                <thead role="rowgroup" class=""><!---->
                                <tr role="row" class="">
                                    <th role="columnheader" scope="col" aria-colindex="2" class="">
                                        <div>Tangal</div>
                                    </th>
                                    @if(in_array('payment_provider',$groupBys['daily']))
                                        <th role="columnheader" scope="col" aria-colindex="2" class="">
                                            <div>Bank</div>
                                        </th>
                                    @endif

                                    @if(in_array('payment_method',$groupBys['daily']))
                                        <th role="columnheader" scope="col" aria-colindex="2" class="">
                                            <div>Jenis Pembayaran</div>
                                        </th>
                                    @endif
                                    <th role="columnheader" scope="col" aria-colindex="3" class="">
                                        <div> Jumlah</div>
                                    </th>
                                </tr>
                                </thead>
                                <tbody role="rowgroup"><!---->

                                @foreach ($daily as $day)
                                    @php
                                        $sum = collect($daily)->sum('sums');
                                    @endphp
                                    <tr role="row" class="bg-white font-small-2">
                                        <td aria-colindex="2" role="cell" class="">
                                            <div>{{optional($day)['date']}}</div>
                                        </td> <!--Nama</div-->
                                        @if(in_array('payment_provider',$groupBys['daily']))
                                            <td aria-colindex="2" role="cell" class="">
                                                <div>{{optional($day)['payment_provider']}}</div>
                                            </td> <!--Nama</div-->
                                        @endif
                                        @if(in_array('payment_method',$groupBys['daily']))
                                            <td aria-colindex="2" role="cell" class="">
                                                <div>{{optional($day)['payment_method']}}</div>
                                            </td> <!--Nama</div-->
                                        @endif
                                        <td aria-colindex="3" role="cell" class="">
                                            <div>{{number_format(optional($day)['sums'], 2, ',', '.')}}</div>
                                        </td> <!--Nomer Tempat Usaha-->
                                    </tr>
                                @endforeach
                                </tbody><!---->
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <!--Yearly-->
                    <div class="card p-2">
                        <div class="mb-0 table-responsive" data-v-aa799a9e="">
                            <div class="row">
                                <div class="col-md-4">  <p class=""></p> </div>
                                <div class="col-md-4">  <p class="text-center">Laporan Tahunan</p> </div>
                                <div class="col-md-4" >
                                    <button wire:click="excelYearly" data-v-36ff53bc=""

                                            type="button"
                                            class="btn mb-75 btn-success collapsed"
                                            aria-expanded="false" aria-controls="sidebar-send-invoice"
                                            style="overflow-anchor: none; float: right"> Exel
                                    </button>
                                </div>
                            </div>
                            <table role="table" id="detail-report" aria-busy="false" aria-colcount="6" class="table b-table"
                                   id="__BVID__3462">
                                <!----><!---->
                                <thead role="rowgroup" class=""><!---->
                                <tr role="row" class="">
                                    <th role="columnheader" scope="col" aria-colindex="2" class="">
                                        <div>Tangal</div>
                                    </th>
                                    @if(in_array('payment_provider',$groupBys['yearly']))
                                        <th role="columnheader" scope="col" aria-colindex="2" class="">
                                            <div>Bank</div>
                                        </th>
                                    @endif

                                    @if(in_array('payment_method',$groupBys['yearly']))
                                        <th role="columnheader" scope="col" aria-colindex="2" class="">
                                            <div>Jenis Pembayaran</div>
                                        </th>
                                    @endif
                                    <th role="columnheader" scope="col" aria-colindex="3" class="">
                                        <div> Jumlah</div>
                                    </th>
                                </tr>
                                </thead>
                                <tbody role="rowgroup"><!---->

                                @foreach ($yearly as $day)
                                    @php
                                        $sum = collect($daily)->sum('sums');
                                    @endphp
                                    <tr role="row" class="bg-white font-small-2">
                                        <td aria-colindex="2" role="cell" class="">
                                            <div>{{optional($day)['date']}}</div>
                                        </td> <!--Nama</div-->
                                        @if(in_array('payment_provider',$groupBys['yearly']))
                                            <td aria-colindex="2" role="cell" class="">
                                                <div>{{optional($day)['payment_provider']}}</div>
                                            </td> <!--Nama</div-->
                                        @endif
                                        @if(in_array('payment_method',$groupBys['yearly']))
                                            <td aria-colindex="2" role="cell" class="">
                                                <div>{{optional($day)['payment_method']}}</div>
                                            </td> <!--Nama</div-->
                                        @endif
                                        <td aria-colindex="3" role="cell" class="">
                                            <div>{{number_format(optional($day)['sums'], 2, ',', '.')}}</div>
                                        </td> <!--Nomer Tempat Usaha-->
                                    </tr>
                                @endforeach
                                </tbody><!---->
                            </table>
                        </div>
                    </div>
                    <!--Monthly-->
                    <div class="card p-2">
                        <div class="mb-0 table-responsive" data-v-aa799a9e="">
                            <div class="row">
                                <div class="col-md-4">  <p class=""></p> </div>
                                <div class="col-md-4">  <p class="text-center">Laporan Bulanan</p> </div>
                                <div class="col-md-4" >
                                    <button wire:click="excelMonthly" data-v-36ff53bc=""

                                            type="button"
                                            class="btn mb-75 btn-success collapsed"
                                            aria-expanded="false" aria-controls="sidebar-send-invoice"
                                            style="overflow-anchor: none; float: right"> Exel
                                    </button>
                                </div>
                            </div>
                            <table role="table" id="detail-report" aria-busy="false" aria-colcount="6" class="table b-table"
                                   id="__BVID__3462">
                                <!----><!---->
                                <thead role="rowgroup" class=""><!---->
                                <tr role="row" class="">
                                    <th role="columnheader" scope="col" aria-colindex="2" class="">
                                        <div>Tangal</div>
                                    </th>
                                    @if(in_array('payment_provider',$groupBys['monthly']))
                                        <th role="columnheader" scope="col" aria-colindex="2" class="">
                                            <div>Bank</div>
                                        </th>
                                    @endif

                                    @if(in_array('payment_method',$groupBys['monthly']))
                                        <th role="columnheader" scope="col" aria-colindex="2" class="">
                                            <div>Jenis Pembayaran</div>
                                        </th>
                                    @endif
                                    <th role="columnheader" scope="col" aria-colindex="3" class="">
                                        <div> Jumlah</div>
                                    </th>
                                </tr>
                                </thead>
                                <tbody role="rowgroup"><!---->

                                @foreach ($monthly as $day)
                                    @php
                                        $sum = collect($daily)->sum('sums');
                                    @endphp
                                    <tr role="row" class="bg-white font-small-2">
                                        <td aria-colindex="2" role="cell" class="">
                                            <div>{{optional($day)['date']}}</div>
                                        </td> <!--Nama</div-->
                                        @if(in_array('payment_provider',$groupBys['yearly']))
                                            <td aria-colindex="2" role="cell" class="">
                                                <div>{{optional($day)['payment_provider']}}</div>
                                            </td> <!--Nama</div-->
                                        @endif
                                        @if(in_array('payment_method',$groupBys['yearly']))
                                            <td aria-colindex="2" role="cell" class="">
                                                <div>{{optional($day)['payment_method']}}</div>
                                            </td> <!--Nama</div-->
                                        @endif
                                        <td aria-colindex="3" role="cell" class="">
                                            <div>{{number_format(optional($day)['sums'], 2, ',', '.')}}</div>
                                        </td> <!--Nomer Tempat Usaha-->
                                    </tr>
                                @endforeach
                                </tbody><!---->
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!--Detail-->
        <div class="card p-2">
            <div class="row">
                <div class="col-md-4">  <p class=""></p> </div>
                <div class="col-md-4">  <p class="text-center">Laporan Detail</p> </div>
                <div class="col-md-4" >
                    <button wire:click="excelDetail" data-v-36ff53bc=""
                            type="button"
                            class="btn mb-75 btn-success collapsed"
                            aria-expanded="false" aria-controls="sidebar-send-invoice"
                            style="overflow-anchor: none; float: right"> Exel
                    </button>
                </div>
            </div>
            <div class="mb-0 table-responsive" data-v-aa799a9e="">


                <table role="table" id="detail-report" aria-busy="false" aria-colcount="6" class="table b-table"
                       id="__BVID__3462">
                    <!----><!---->
                    <thead role="rowgroup" class=""><!---->
                    <tr role="row" class="">
                        <th role="columnheader" scope="col" aria-colindex="2" class="">
                            <div>Nama</div>
                        </th>
                        <th role="columnheader" scope="col" aria-colindex="2" class="">
                            <div>KTP</div>
                        </th>
                        <th role="columnheader" scope="col" aria-colindex="3" class="">
                            <div>Nomer Tempat Usaha</div>
                        </th>
                        <th role="columnheader" scope="col" aria-colindex="4" class="">
                            <div>Luas</div>
                        </th>

                        <th role="columnheader" scope="col" aria-colindex="4" class="">
                            <div>Harga</div>
                        </th>
                        <th role="columnheader" scope="col" aria-colindex="6" class="">
                            <div>Discount %</div>
                        </th>
                        <th role="columnheader" scope="col" aria-colindex="6" class="">
                            <div>Custom discount</div>
                        </th>

                        <th role="columnheader" scope="col" aria-colindex="6" class="">
                            <div>Nominal Discount</div>
                        </th>
                        <th role="columnheader" scope="col" aria-colindex="6" class="">
                            <div>Harga setelah discount</div>
                        </th>
                        <th role="columnheader" scope="col" aria-colindex="6" class="">
                            <div>PPN</div>
                        </th>
                        <th role="columnheader" scope="col" aria-colindex="5" class="">
                            <div>Harga total</div>
                        </th>
                        <th role="columnheader" scope="col" aria-colindex="6" class="">
                            <div>Jenis Pembayaran</div>
                        </th>
                        <th role="columnheader" scope="col" aria-colindex="6" class="">
                            <div>Pembayaran</div>
                        </th>

                        <th role="columnheader" scope="col" aria-colindex="6" class="">
                            <div>Total Pembayaran</div>
                        </th>
                        <th role="columnheader" scope="col" aria-colindex="6" class="">
                            <div>Sisa Pembayaran</div>
                        </th>
                    </tr>
                    </thead>
                    <tbody role="rowgroup"><!---->

                    @foreach ($searchs as $search)
                        @foreach($search['payments'] as $payment)
                            @php
                                $sumPayment = collect($search['payments'])->where('created_at','<=',$payment['created_at'])->sum('amount');
                                $sumLeft = $search['calculation_total_price']-$sumPayment;
                            @endphp
                            <tr role="row" class="bg-white font-small-2">
                                <td aria-colindex="2" role="cell" class="">
                                    <div>{{$search['siho_name']}}</div>
                                </td> <!--Nama</div-->
                                <td aria-colindex="2" role="cell" class="">
                                    <div>{{$search['siho_ktp_no']}}</div>
                                </td>
                                <td aria-colindex="3" role="cell" class="">
                                    <div>{{$search['tu_no']}}</div>
                                </td> <!--Nomer Tempat Usaha-->
                                <td aria-colindex="5" role="cell" class="">
                                    <div>{{$search['tu_area']}}</div>
                                </td> <!--Luas</div-->
                                <td aria-colindex="6" role="cell" class="">
                                    <div>{{'Rp. ' . number_format($search['calculation_price'], 2, ',', '.')}}</div>
                                </td> <!--Harga</div-->
                                <td aria-colindex="6" role="cell" class="">
                                    <div>{{$search['calculation_discount_rate'] * 100}}%</div>
                                </td> <!--Discount %</-->
                                <td aria-colindex="6" role="cell" class="">
                                    <div>{{'Rp. ' . number_format($search['discount_price'], 2, ',', '.')}}</div>
                                </td><!--Custom discount</-->
                                <td aria-colindex="6" role="cell" class="">
                                    <div>{{'Rp. ' . number_format($search['calculation_discount'], 2, ',', '.')}}</div>
                                </td> <!--Nominal Discount</-->
                                <td aria-colindex="6" role="cell" class="">
                                    <div>{{'Rp. ' . number_format($search['calculation_price_with_discount'], 2, ',', '.')}}</div>
                                </td><!--Harga setelah discount-->
                                <td aria-colindex="6" role="cell" class="">
                                    <div>{{'Rp. ' . number_format($search['calculation_ppn'], 2, ',', '.')}}</div>
                                </td> <!--Harga setelah PPN-->
                                <td aria-colindex="6" role="cell" class="">
                                    <div>{{'Rp. ' . number_format($search['calculation_total_price'], 2, ',', '.')}}</div>
                                </td>  <!--Harga total</-->
                                <td aria-colindex="6" role="cell" class="">
                                    <div>{{$search['price_list']['payment_method']['name']}}</div>
                                </td>
                                <td aria-colindex="6" role="cell" class="">
                                    <div>{{'Rp. ' . number_format($payment['amount'], 2, ',', '.')}}</div>
                                </td><!--Pembayaran</div-->
                                <td aria-colindex="6" role="cell" class="">
                                    <div>{{'Rp. ' . number_format($sumPayment, 2, ',', '.')}}</div>
                                </td> <!--Total Pembayaran</-->
                                <td aria-colindex="6" role="cell" class="">
                                    <div>{{'Rp. ' . number_format($sumLeft, 2, ',', '.')}}</div>
                                </td> <!--Sisa Pembayaran</-->
                            </tr>
                        @endforeach
                    @endforeach
                    </tbody><!---->
                </table>
            </div>
        </div>
    </div>

    <style>
        td div {
            width: max-content;
        }

        th div {
            width: max-content;
        }
    </style>

</div>
