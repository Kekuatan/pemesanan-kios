<div>
    <div class="container" id="pemesanan">
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
                                <li class="breadcrumb-item"><a href="{{ url('/product/order') }}" target="_self"
                                                               class=""> Pemesanan kios </a></li>
                                <li class="breadcrumb-item active"><span
                                        aria-current="location"> Form pemesanan</span></li>
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
        <section data-v-36ff53bc="" class="invoice-add-wrapper"><!---->
            <div data-v-36ff53bc="" class="row invoice-add">
                <div data-v-36ff53bc="" class="col-md-8 col-xl-9 col-12">

                    <form data-v-36ff53bc="" class="mt-0" id="bukti-pemesanan">
                        <div data-v-36ff53bc="" class="card invoice-preview-card"><!----><!---->

                            <div data-v-36ff53bc="" class="  card-body invoice-padding pb-0"><!----><!---->
                                <div data-v-36ff53bc=""
                                     class=" invoice-top row ">
                                    <!-- Invoice header-left-->
                                    <div data-v-36ff53bc="" class="invoice-top-left col-md-3">
                                        <div data-v-36ff53bc="" class="logo-wrapper">
                                            <img src="{{asset('logo/rapik.png')}}" width="120px" style="float: left">
                                        </div>
                                    </div>

                                    <div data-v-36ff53bc="" class="invoice-top-left col-md-6">
                                        <div data-v-36ff53bc="" class="logo-wrapper">
                                            <h3 data-v-36ff53bc="" class="text-center invoice-logo"> SURAT
                                                PEMESANAN PERPANJANGAN </h3>
                                            <h5 data-v-36ff53bc="" class=" text-center invoice-logo"> HAK PEMAKAIAN
                                                TEMPAT USAHA</h5>
                                            <h5 data-v-36ff53bc="" class="text-center invoice-logo"> UPB
                                                PASAR INDUK KRAMAT JATI </h5>
                                            <h5 data-v-36ff53bc="" class="text-center invoice-logo">
                                                BANGUNAN U-SHAPE BLOK A - H </h5>
                                        </div>
                                    </div>

                                    <!-- Invoice header-right-->
                                    <div data-v-36ff53bc="" class=" invoice-top-right col-md-3">
                                        <img src="{{asset('logo/pasar-jaya.png')}}" width="150px" style="float: right">
                                    </div>
                                </div>
                            </div>


                            <hr data-v-36ff53bc="" class="invoice-spacing">
                            <div data-v-36ff53bc="" class="card-body invoice-padding pt-0"><!----><!---->
                                <div data-v-36ff53bc="" class="row">
                                    <!-- Invoice-mid-left-->
                                    <div data-v-36ff53bc="" class="invoice-mid-left  mb-lg-1 col-xl-6 col-md-6">
                                        <h6 data-v-36ff53bc=""
                                            class="mb-2"> Invoice
                                            To: </h6>
                                        <div data-v-36ff53bc="" class=" mt-1">
                                            <p data-v-36ff53bc="" class="card-text mb-25">
                                                {{$name . (blank($inputs['name']) ? "" : ' | '.$inputs['name'])}}</p>
                                            <p data-v-36ff53bc="" class="card-text mb-25">
                                                {{(blank($inputs['ktpNo']) ? $ktpNo : $inputs['ktpNo'])}}
                                            </p>
                                            <p data-v-36ff53bc="" class="card-text mb-25">
                                                {{(blank($inputs['address']) ? $address : $inputs['address'])}}
                                            </p>
                                            <p data-v-36ff53bc="" class="card-text mb-25">
                                                {{(blank($inputs['phoneNumber']) ? $phoneNumber : $inputs['phoneNumber'])}}
                                            </p>
                                            <p data-v-36ff53bc="" class=" card-text mb-25">
                                                Nomer Tu : {{$kiosNo}} -- Luasan : {{$product->tu_area}}
                                            </p>

                                            <p data-v-36ff53bc="" class="card-text mb-0">
                                                Jenis dagangan : {{$product->sale_kind}}
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Invoice-mid-right-->

                                    <div data-v-36ff53bc=""
                                         class="invoice-mid-right  mt-xl-0 mt-2 justify-content-end d-xl-flex d-block col-xl-6 col-md-6">


                                        <div data-v-36ff53bc="" style="float: right">
                                            <div data-v-36ff53bc="">
                                                <div class="mb-3 row right-input">
                                                    <label for="staticEmail"
                                                           class="col-sm-6 col-form-label">Tanggal</label>
                                                    <div class="col-sm-6">
                                                        <input type="text"
                                                               class="right-input form-control invoice-edit-input flatpickr-input"
                                                               readonly class="form-control-plaintext" id="staticEmail"
                                                               value="{{date('d-m-Y', strtotime(now()))}}">
                                                    </div>
                                                </div>
                                            </div>

                                            <h6 data-v-36ff53bc="" class="mb-2"> Pembayaran Details: </h6>
                                            <table data-v-36ff53bc="" style="float: right">
                                                <tbody data-v-36ff53bc="">
                                                <tr data-v-36ff53bc="">
                                                    <td data-v-36ff53bc="" class="pr-1"> Nama Bank:</td>
                                                    <td data-v-36ff53bc="" class="pr-1">:</td>
                                                    <td data-v-36ff53bc=""><span data-v-36ff53bc=""
                                                                                 class="font-weight-bold">BRI</span>
                                                    </td>
                                                </tr>
                                                <tr data-v-36ff53bc="">
                                                    <td data-v-36ff53bc="" class="pr-1"> VA:</td>
                                                    <td data-v-36ff53bc="" class="pr-1"> :</td>
                                                    <td data-v-36ff53bc="">{{$briva}}</td>
                                                </tr>
                                                <tr data-v-36ff53bc="">
                                                    <td data-v-36ff53bc="" class="pr-1"> Type:</td>
                                                    <td data-v-36ff53bc="" class="pr-1">:</td>
                                                    <td data-v-36ff53bc="">{{optional(optional($price_list)['payment_method'])['name']}}</td>
                                                </tr>
                                                @if(!$dp_status)
                                                    <tr data-v-36ff53bc="">
                                                        <td data-v-36ff53bc="" class="pr-1"> DP:</td>
                                                        <td data-v-36ff53bc="" class="pr-1"> :</td>
                                                        <td data-v-36ff53bc="">{{$dp_text}}</td>
                                                    </tr>
                                                @endif

                                                <tr data-v-36ff53bc="">
                                                    <td data-v-36ff53bc="" class="pr-1"> Pembayaran:</td>
                                                    <td data-v-36ff53bc="" class="pr-1">:</td>
                                                    <td data-v-36ff53bc="">{{$this->payment_text}}</td>
                                                </tr>

                                                <tr data-v-36ff53bc="">
                                                    <td data-v-36ff53bc="" class="pr-1"> Petugas:</td>
                                                    <td data-v-36ff53bc="" class="pr-1">:</td>
                                                    <td data-v-36ff53bc="">{{$user->name}}</td>
                                                </tr>

                                                {{--                                                <tr data-v-36ff53bc="">--}}
                                                {{--                                                    <td data-v-36ff53bc="" class="pr-1"> Status DP:</td>--}}
                                                {{--                                                    <td data-v-36ff53bc="" class="pr-1"> :</td>--}}
                                                {{--                                                    <td data-v-36ff53bc="">{{$dp_status ? 'Lunas' : ' Belum lunas'}}</td>--}}
                                                {{--                                                </tr>--}}
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div data-v-36ff53bc="" class="card-body invoice-padding form-item-section"><!----><!---->
                                <div data-v-36ff53bc=""
                                     class=" mt-md-0 mt-0 col-md-12">
                                    <label data-v-36ff53bc="" for="invoice-data-sales-person"
                                           class="text-nowrap mr-50">Terbilang :</label>
                                    <h4 class="text-center terbilang invoice-logo">{{$terbilang}}</h4>
                                </div>

                                <div data-v-36ff53bc=""
                                     class=" note mt-md-0 mt-3  col-md-12">
                                    <label data-v-36ff53bc="" for="invoice-data-sales-person"
                                           class="text-nowrap mr-50">Note:</label>
                                    <textarea wire:model="note"
                                              data-v-36ff53bc="" rows="2" wrap="soft"
                                              class="mb-2 mb-lg-0 form-control"
                                              id="__BVID__723"></textarea>
                                </div>
                            </div>

                            <div data-v-36ff53bc="" class="card-body invoice-padding pb-0"><!----><!---->
                                <div data-v-36ff53bc="" class="row">
                                    <!-- Invoice bottom-left-->

                                    <div data-v-36ff53bc=""
                                         class="mt-md-0  col-md-9">
                                        @foreach($payments as $paymentItem)
                                            <p> Pembayaran pada tanggal
                                                : {{\Illuminate\Support\Carbon::parseFromLocale($paymentItem->created_at)->toDateString()}}
                                                Sejumlah {{'Rp. ' . number_format($paymentItem->amount, 2, ',', '.')}}
                                                Petugas : ( {{$paymentItem->user->name}} )
                                                @if(blank($paymentItem->note))
                                            </p>
                                            @else
                                                <br> Catatan : {{$paymentItem->note}}</p>
                                            @endif
                                        @endforeach

                                        {{--                                        <label data-v-36ff53bc="" for="invoice-data-sales-person"--}}
                                        {{--                                               class="text-nowrap mr-50">Petugas:</label>--}}
                                        {{--                                        <input data-v-36ff53bc=""--}}
                                        {{--                                               readonly--}}
                                        {{--                                               id="invoice-data-sales-person"--}}
                                        {{--                                               type="text"--}}
                                        {{--                                               placeholder="{{($user->name)}}"--}}
                                        {{--                                               class="form-control">--}}
                                    </div>
                                    <!-- Invoice bottom-right-->
                                    <div data-v-36ff53bc=""
                                         class="mt-md-6 d-flex justify-content-end col-md-3">
                                        <div data-v-36ff53bc="" class="invoice-total-wrapper">
                                            <div data-v-36ff53bc="" class="invoice-total-item"><p data-v-36ff53bc=""
                                                                                                  class="invoice-total-title">
                                                    Harga tempat usaha: </p>
                                                <p data-v-36ff53bc=""
                                                   class="invoice-total-amount d-flex justify-content-end">
                                                    {{$price_text}} </p>
                                            </div>
                                            <div data-v-36ff53bc="" class="invoice-total-item"><p data-v-36ff53bc=""
                                                                                                  class="invoice-total-title">
                                                    Discount ({{ $discount_rate_text }}): </p>
                                                <p data-v-36ff53bc=""
                                                   class="invoice-total-amount d-flex justify-content-end"> {{$discount_text}} </p>
                                            </div>

                                            @if($discount_price)
                                                <div data-v-36ff53bc="" class="invoice-total-item"><p data-v-36ff53bc=""
                                                                                                      class="invoice-total-title">
                                                        Discount price: </p>
                                                    <p data-v-36ff53bc=""
                                                       class="invoice-total-amount d-flex justify-content-end"> {{$discount_price}} </p>
                                                </div>
                                            @endif

                                            <hr data-v-36ff53bc="" class=invoice-spacing>
                                            <div data-v-36ff53bc="" class="invoice-total-item"><p data-v-36ff53bc=""
                                                                                                  class="invoice-total-title">
                                                    Jumlah: </p>
                                                <p data-v-36ff53bc=""
                                                   class="invoice-total-amount d-flex justify-content-end">
                                                    {{$price_with_discount_text}} </p>

                                            </div>
                                            <div data-v-36ff53bc="" class="invoice-total-item"><p data-v-36ff53bc=""
                                                                                                  class="invoice-total-title">
                                                    PPN ({{$ppn_rate_text}} ): </p>
                                                <p data-v-36ff53bc=""
                                                   class="invoice-total-amount d-flex justify-content-end">
                                                    {{$ppn_text}}</p>
                                            </div>

                                            <hr data-v-36ff53bc="" class=invoice-spacing>
                                            <div data-v-36ff53bc="" class="invoice-total-item"><p data-v-36ff53bc=""
                                                                                                  class="font-weight-bolder invoice-total-title">
                                                    Jumlah yang harus dibayarkan: </p>
                                                <p data-v-36ff53bc=""
                                                   class="invoice-total-amount d-flex justify-content-end">
                                                    {{$total_price_text}} </p>
                                            </div>
                                            <div data-v-36ff53bc="" class="invoice-total-item"><p data-v-36ff53bc=""
                                                                                                  class="invoice-total-title">
                                                    Telah dibayarkan: </p>
                                                <p data-v-36ff53bc=""
                                                   class="invoice-total-amount d-flex justify-content-end">
                                                    {{$sum_payment_text}} </p>
                                            </div>
                                            <div data-v-36ff53bc="" class="invoice-total-item"><p data-v-36ff53bc=""
                                                                                                  class="font-weight-bolder invoice-total-title">
                                                    Pembayaran: </p>
                                                <p data-v-36ff53bc=""
                                                   class="invoice-total-amount d-flex justify-content-end">
                                                    {{$payment_text}} </p>
                                            </div>
                                            <hr data-v-36ff53bc="" class=invoice-spacing>
                                            <div data-v-36ff53bc="" class="invoice-total-item"><p data-v-36ff53bc=""
                                                                                                  class="font-weight-bolder invoice-total-title">
                                                    Sisa cicilan: </p>
                                                <p data-v-36ff53bc=""
                                                   class="invoice-total-amount d-flex justify-content-end">
                                                    {{$left_payment_text}} </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-1 card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="font-weight-bolder"> Tanda tangan Petugas</div>
                                        <div> Tanggal: {{date('d-m-Y', strtotime(now()))}}</div>
                                        <div class="text-center"
                                             style="margin-top: 80px; text-transform: capitalize"> {{$user->name}}</div>
                                        <hr data-v-36ff53bc="" class=" mt-0 invoice-spacing">
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                    <div class="col-md-3">
                                        <div class="font-weight-bolder"> Tanda tangan pembeli</div>
                                        <div> Tanggal: {{date('d-m-Y', strtotime(now()))}}</div>
                                        <div class="text-center"
                                             style="margin-top: 80px; text-transform: capitalize"> {{$name}}</div>
                                        <hr data-v-36ff53bc="" class=" mt-0 invoice-spacing">
                                    </div>
                                </div>
                            </div>
                            <hr data-v-36ff53bc="" class="invoice-spacing">
                            <div class="row">
                                <div class="col-md-12" style="font-size: 12px">
                                    <ol>
                                        <li>Pembayaran Uang Muka, maksimal 3 bulan</li>
                                        <li>Cash Keras & Cash Bertahap, membayar uang muka minimal 10%</li>
                                        <li>Keterlambatan pembayaran, akan dikenakan denda sebesar 0,2% (nol koma dua
                                            persen) per hari dari jumlah tagihan
                                        </li>
                                        <li>Jatuh tempo pembayaran berikutnya berlaku 1 (satu) bulan sejak
                                            ditandatangani surat pemasanan ini
                                        </li>
                                        <li>Surat ini berlaku sah setelah membayar uang muka.</li>
                                        <li>Pembayaran dianggap sah apabila diberikan kwitansi yang sudah disetempel dan
                                            ditanfatangani.
                                        </li>
                                    </ol>


                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div data-v-36ff53bc="" class="invoice-actions col-md-4 col-xl-3 col-12">
                    <div data-v-36ff53bc="" class="card"><!----><!---->
                        <div data-v-36ff53bc="" class="card-body"><!----><!---->
                            <label for="staticEmail" class="col-sm-8 col-form-label">Pilih Pembayaran</label>
                            <div class="mb-75">
                                <select wire:model="inputs.price_list_id" class="custom-select">
                                    <option disabled="disabled" value="" selected>--- Pilih jenis pembayaran---</option>
                                    @foreach ($priceLists as $priceList)
                                        <option value="{{$priceList->id}}">{{$priceList->paymentMethod->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            @if(!blank($inputs["price_list_id"]))
                                <div class="mb-75">
                                    <label for="staticEmail" class="col-sm-8 col-form-label">Pilih Bank</label>
                                    <select wire:model="paymentProviderId" class="custom-select">
                                        <option disabled="disabled" value="" selected>--- Pilih Bank---</option>
                                        @foreach ($paymentProviders as $paymentProvider)
                                            @if($paymentProvider->id == $paymentProviderId)
                                                <option selected
                                                        value="{{$paymentProvider->id}}">{{$paymentProvider->name . ' ' , $paymentProvider->type}}</option>
                                            @else
                                                <option
                                                    value="{{$paymentProvider->id}}">{{$paymentProvider->name . ' ' , $paymentProvider->type}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-75 ">
                                    <label for="staticEmail" class="col-sm-8 col-form-label">Briva</label>
                                    <div class="">
                                        <input type="text"
                                               class="right-input form-control invoice-edit-input flatpickr-input"
                                               class="form-control-plaintext"
                                               placeholder="{{$briva}}" wire:model="briva">
                                    </div>
                                </div>
                                <div class="mb-75 ">
                                    <label for="staticEmail" class="col-sm-8 col-form-label">Nama</label>
                                    <div class="">
                                        <input type="text"
                                               class="right-input form-control invoice-edit-input flatpickr-input"
                                               class="form-control-plaintext"
                                               placeholder="{{$name}}" wire:model="inputs.name">
                                    </div>
                                </div>

                                <div class="mb-75 ">
                                    <label for="staticEmail" class="col-sm-8 col-form-label">Nomer KTP</label>
                                    <div class="">
                                        <input type="text"
                                               class="right-input form-control invoice-edit-input flatpickr-input"
                                               class="form-control-plaintext"
                                               placeholder="{{$ktpNo}}" wire:model="inputs.ktpNo">
                                    </div>
                                </div>

                                <div class="mb-75 ">
                                    <label for="staticEmail" class="col-sm-8 col-form-label">Nomer telephone</label>
                                    <div class="">
                                        <input type="text"
                                               class="right-input form-control invoice-edit-input flatpickr-input"
                                               class="form-control-plaintext"
                                               placeholder="{{$phoneNumber}}" wire:model="inputs.phoneNumber">
                                    </div>
                                </div>

                                <div class="mb-75 ">
                                    <label for="staticEmail" class="col-sm-8 col-form-label">Alamat</label>
                                    <div class="">
                                        <input type="text"
                                               class="right-input form-control invoice-edit-input flatpickr-input"
                                               class="form-control-plaintext"
                                               placeholder="{{$address}}" wire:model="inputs.address">
                                    </div>
                                </div>


                                <div class="mb-75 ">
                                    <label for="staticEmail" class="col-sm-8 col-form-label">Discount rate
                                        ({{$discount_rate_text}})</label>
                                    <div class="">
                                        <input type="text"
                                               class="right-input form-control invoice-edit-input flatpickr-input"
                                               class="form-control-plaintext"
                                               placeholder="{{$inputs["discount_rate"] }}"
                                               wire:model="inputs.discount_rate">
                                    </div>
                                </div>

                                <div class="mb-75 ">
                                    <label for="staticEmail" class="col-sm-8 col-form-label">Discount Price</label>
                                    <div class="">
                                        <input type="text"
                                               class="right-input form-control invoice-edit-input flatpickr-input"
                                               class="form-control-plaintext"
                                               placeholder="{{optional($inputs)["discount_price"] }}"
                                               wire:model="inputs.discount_price">
                                    </div>
                                </div>

                                <div class="mb-75 ">
                                    <label for="staticEmail" class="col-sm-8 col-form-label">Pembayaran</label>
                                    <div class="">
                                        <input type="text"
                                               class="right-input form-control invoice-edit-input flatpickr-input"
                                               class="form-control-plaintext"
                                               placeholder="{{$inputs["payment"]}}" wire:model="inputs.payment">
                                    </div>
                                </div>




                                <button onclick="printBuktiPemesanan()" data-v-36ff53bc="" type="button"
                                        class="btn mb-75 btn-primary btn-block collapsed"
                                        aria-expanded="false" aria-controls="sidebar-send-invoice"
                                        style="overflow-anchor: none;"> Print pemesanan
                                </button>

                                <a href="#modal-kwitansi" data-v-36ff53bc="" type="button"
                                   class="btn mb-75 btn-primary btn-block collapsed"
                                   aria-expanded="false" aria-controls="sidebar-send-invoice"
                                   style="overflow-anchor: none;"> Print kwitansi
                                </a>
                            @endif

                            <button wire:click="save" data-v-36ff53bc=""
                                    type="button"
                                    class="btn mb-75 btn-primary btn-block collapsed"
                                    aria-expanded="false" aria-controls="sidebar-send-invoice"
                                    style="overflow-anchor: none;"> Save
                            </button>


                        </div><!----><!----></div>
                </div>
            </div>
        </section>

    </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="kwitansi AK landscape" id="kwitansi" style="
{{--            --}}{{--background-image:url('{{ asset('logo/kwitansi.jpeg') }}');--}}
{{--            background-repeat: no-repeat;--}}
{{--            background-size: contain;--}}
        ">
        <div class="kwitansi-content">
            <div class="row kwitansi-head">
                <div class="col-md-2">
                    <img src="{{asset('logo/rapik.png')}}" width="100%" style="float: left">
                </div>
                <div class="col-md-6">
                    <span
                        style="font-size: 20px; font-weight: bolder; margin-bottom: 10px"> PT. Rapik Karya Mandiri </span>
                    <br>
                    Graha Rapik-De Estrella No.1 Jl. Raya Pekapuran<br>
                    Telp/Fax 021 8770999 Email : rapikkm@gmail.com <br>
                    Website : www.rapik.co.id
                </div>
                <div class="col-md-4">
                    <div class="row" style="font-size: 20px; font-weight: bolder; margin-bottom: 10px">
                        KWITANSI
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            Nomer Kwitansi <span class="" style="float: right"> :</span>
                        </div>
                        <div class="col-md-7">
                            @if(!blank($payment_selected))
                            {{optional($payment_selected)['id']}}
                            @else
                                -
                            @endif
                            <hr data-v-36ff53bc="" class="kwitansi-spacing" style="margin:auto;width: 100%">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            Bank <span class="" style="float: right"> :</span>
                        </div>
                        <div class="col-md-7" style="text-transform: uppercase">
                            @if(!blank($payment_selected))
                                {{optional(optional($payment_selected)['paymentProvider'])['name']}}
                            @else
                                -
                            @endif
                            <hr data-v-36ff53bc="" class="kwitansi-spacing" style="margin:auto;width: 100%">
                        </div>
                    </div>

                </div>
            </div>
            <div class="row kwitansi-body">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3">
                            Telah diterima dari <span class="" style="float: right"> :</span>
                        </div>
                        <div class="col-md-9" style="text-transform: uppercase">
                            {{$name}}
                            <hr data-v-36ff53bc="" class="kwitansi-spacing" style="margin:auto;width: 100%">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            Sejumlah Uang <span class="" style="float: right"> :</span>
                        </div>
                        <div class="col-md-9" style="text-transform: capitalize">
                            @if(!blank($payment_selected))
                                {{$this->getTerbilang(optional($payment_selected)['amount'])}}
                            @else
                                 -
                            @endif
                            <hr data-v-36ff53bc="" class="kwitansi-spacing" style="margin:auto;width: 100%">
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-md-3">
                                Untuk Pembayaran <span class="" style="float: right"> :</span>
                            </div>
                            <div class="col-md-9">
                                <span style="text-transform: uppercase">{{$kiosNo}} </span> dengan
                                luas {{$product->tu_area}}
                                <hr data-v-36ff53bc="" class="kwitansi-spacing" style="margin:auto;width: 100%">
                            </div>
                        </div>
                    <div class="row">
                            <div class="col-md-3">
                                Catatan <span class="" style="float: right"> :</span>
                            </div>
                            <div class="col-md-9">
                                @if(!blank(optional($payment_selected)['note']))
                                    {{optional($payment_selected)['note']}}
                                @else
                                    -
                                @endif
                                <hr data-v-36ff53bc="" class="kwitansi-spacing" style="margin:auto;width: 100%">
                                <hr data-v-36ff53bc="" class="kwitansi-spacing" style="margin:auto;width: 100%">
                            </div>
                        </div>
                    <div>
                        {{--                        <div class="row">--}}
                        {{--                            <div class="col-md-3">--}}
                        {{--                                Status DP <span class="" style="float: right"> :</span>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="col-md-9 mb-2">--}}
                        {{--                                {{$dp_status ? 'Lunas' : ' Belum lunas'}}--}}
                        {{--                                <hr data-v-36ff53bc="" class="kwitansi-spacing" style="margin:auto;width: 100%">--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}

                        {{--                        <div class="row">--}}
                        {{--                            <div class="col-md-3">--}}
                        {{--                                Sisa pembayaran <span class="" style="float: right"> :</span>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="col-md-9 mb-2">--}}
                        {{--                                {{$left_payment_text}}--}}
                        {{--                                <hr data-v-36ff53bc="" class="kwitansi-spacing" style="margin:auto;width: 100%">--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="row kwitansi-footer" style="margin-top: 40px">
                <div class="col-md-6">
                    <div class="kwitansi-footer-rp text-center" style="font-size: 24px">
                        @if(!blank($payment_selected))
                            Rp. {{number_format($payment_selected['amount'], 2, ',', '.')}}
                        @endif
                    </div>

                </div>
                <div class="col-md-6">
                    <div style="text-align: center">
                        Jakarta, {{$kwitansi_date}}</div>
                    {{--                <hr data-v-36ff53bc="" class="kwitansi-spacing">--}}
                    <div
                        style="font-weight:bolder;text-align: center; margin-top:100px; text-transform: capitalize"> {{$user->name}}</div>
                    <hr data-v-36ff53bc="" class="kwitansi-spacing" style="margin:auto;width: 200px">
                </div>
            </div>
        </div>
    </div>


    <div id="modal-kwitansi" class="modal">
        <div class="modal__content">
            <div>
            </div>
            <h4>Print Kwitansi</h4>
            <hr data-v-36ff53bc="" class="kwitansi-spacing">
            <div class="row">


{{--                <div class="mb-75">--}}
                    <label for="staticEmail" class="col-sm-4 col-form-label">Date dd-mm-yyyy</label>
                    <div class="col-sm-8">
                        <input type="text"
                               class="right-input form-control invoice-edit-input flatpickr-input"
                               class="form-control-plaintext"
                               placeholder="{{$kwitansi_date}}" wire:model="kwitansi_date">
                    </div>

                <label for="staticEmail" class="mt-75 col-sm-4 col-form-label">Verifikasi pembayaran</label>
                <div class="mt-75 col-sm-8">
                    <select wire:model="verify_payment" class="custom-select">
                        <option value="0">Belum verify</option>
                        <option  value="1">Sudah verify</option>
                    </select>
                </div>
                <label for="staticEmail" class="mt-75 col-sm-4 col-form-label">Periode pembayaran</label>
                <div class="mt-75 col-sm-8">
                    <select wire:model="payment_selected_id" class="custom-select">
                        <option disabled="disabled" value="" selected>--- Pilih periode pembayaran---</option>
                        @foreach ($payments as $paymentList)
                            <option value="{{$paymentList->id}}"> Rp. {{number_format($paymentList->amount, 2, ',', '.')}}, tgl {{date('d-m-Y', strtotime(now()))}} </option>
                        @endforeach
                    </select>
                </div>

            </div>

            <div class="mt-75 modal__footer">
                <a href="#" wire:click="saveKwitansi" onclick="printKwitansi()" data-v-36ff53bc="" type="button"
                        class="btn mb-75 btn-primary btn-block collapsed"
                        aria-expanded="false" aria-controls="sidebar-send-invoice"
                        style="overflow-anchor: none;"> Print
                </a>
                <a href="#" data-v-36ff53bc="" type="button"
                        class="btn mb-75 btn-primary btn-block collapsed"
                        aria-expanded="false" aria-controls="sidebar-send-invoice"
                        style="overflow-anchor: none;"> Cancel
                </a>
{{--                Made with <i class="fa fa-heart"></i>, by <a href="https://twitter.com/denicmarko" target="_blank">@denicmarko</a>--}}
            </div>

            <a href="#" class="modal__close">&times;</a>
        </div>
    </div>
</div>
</div>
</div>
<script>

    function printBuktiPemesanan() {
        document.getElementById('bukti-pemesanan').id = 'printarea'
        document.getElementById('kwitansi').style.display = 'none'
        window.print()
        document.getElementById('printarea').id = 'bukti-pemesanan'
    }

    function printKwitansi() {
        document.getElementById('kwitansi').id = 'printarea'
        document.getElementById('printarea').style.display = 'block'
        document.getElementById('pemesanan').style.display = 'none'
        window.print()
        document.getElementById('printarea').id = 'kwitansi'
        document.getElementById('pemesanan').style.display = 'block'
        document.getElementById('kwitansi').style.display = 'none'


    }
</script>
<style>
    body {
        /*letter-spacing: 1px;*/
        font-family: "Times New Roman", Montserrat, Helvetica, Arial, serif;
    }

    h5, h4, h3, h6, label, p, td {
        color: black;
    }

    l {
        list-style: none;
        counter-reset: my-awesome-counter;
    }

    ol li {
        counter-increment: my-awesome-counter;
    }

    /*ol li::before {*/
    /*    content: counter(my-awesome-counter) ". ";*/
    /*}*/


    .kwitansi {
        /*transform: translate(50px,150px) scale(0.98);*/
        padding: 10px;
        /*background-color: red;*/
        visibility: hidden;
        display: none;
    }


    .kwitansi-content {

        padding: 24px 0px 20px 0px;
        font-size: 22px;
        font-family: "Times New Roman", Times, serif;
        /*-webkit-print-color-adjust: exact;*/
    }

    .kwitansi-spacing {
        border: dotted 1px black !important;
        font-size: 10px !important;
        margin-top: 0 !important;
        padding-top: 0 !important;
        color: black;
        -webkit-print-color-adjust: exact;
    }

    .kwitansi-head {
        margin-bottom: 20px;
        -webkit-print-color-adjust: exact;
    }

    .kwitansi-body {
        /*visibility: hidden;*/
        /*display: none;*/
    }

    .kwitansi-footer {

        -webkit-print-color-adjust: exact;
        /*visibility: hidden;*/
        /*display: none;*/
    }

    .kwitansi-footer-rp {

        font-size: 20px;
        font-weight: bolder;
        vertical-align: middle;
        padding: 10px;
        padding-top: 12px;
        border: 2px solid black;
        width: 100%;
        height: 50px
        -webkit-print-color-adjust: exact;
        /*visibility: hidden;*/
        /*display: none;*/
    }

    .kwitansi table td {
        width: auto;
        color: red;
        font-size: 24px;
        font-weight: 1000;
        word-break: break-all;

        vertical-align: bottom;
        /*font-weight: bolder;*/
        border: 2px solid red;
    }

    .card-body {
        padding-bottom: 0 !important;
    }

    .invoice-mid-left {
        /*font-family: Montserrat, Helvetica, Arial, serif;*/
        font-size: 1rem;
        text-transform: uppercase !important;
    }

    .invoice-mid-right {
        /*font-family: Montserrat, Helvetica, Arial, serif;*/
        font-size: 1rem;
        text-transform: uppercase !important;
    }

    table {
        /*font-family: Montserrat, Helvetica, Arial, serif;*/
        font-size: 1rem;
        text-transform: capitalize;
    }

    .right-input {
        text-align: right;
    }

    .invoice-total-amount {
        margin: 0 !important;
    }

    .invoice-total-item {
        margin: 0 !important;
    }

    .invoice-total-title {
        margin: 0 !important;
    }

    .invoice-total-wrapper {
        margin: 0 !important;
    }

    .terbilang:first-letter {
        text-transform: uppercase
    }

    @page {
        size: auto;   /* auto is the initial value */
        margin: 0;  /* this affects the margin in the printer settings */
    }

    /** For screen preview **/
    @media screen {

        body {
            background: #e0e0e0
        }

        .sheet {
            background: white;
            box-shadow: 0 .5mm 2mm rgba(0, 0, 0, .3);
            margin: 5mm;
        }
    }

    /** Fix for Chrome issue #273306 **/

    /** Paper sizes **/
    /*body.A3           .sheet { width: 297mm; height: 419mm }*/
    /*body.A3.landscape .sheet { width: 420mm; height: 296mm }*/
    /*body.A4           .sheet { width: 210mm; height: 296mm }*/
    /*body.A4.landscape .sheet { width: 297mm; height: 209mm }*/
    /*body.A5           .sheet { width: 148mm; height: 209mm }*/
    /*body.A5.landscape .sheet { width: 210mm; height: 147mm }*/

    .A3 {
        width: 297mm;
        height: 419mm
    }

    .A3.landscape {
        width: 420mm;
        height: 296mm
    }

    .AK {
        width: 100%;
        height: 100%;
    }

    .A4 {
        width: 210mm;
        height: 296mm
    }

    .A4.landscape {
        width: 297mm;
        height: 209mm
    }

    .A5 {
        width: 148mm;
        height: 209mm
    }

    .A5.landscape {
        width: 210mm;
        height: 147mm
    }


    /** Padding area **/
    .sheet.padding-10mm {
        padding: 10mm
    }

    .sheet.padding-15mm {
        padding: 15mm
    }

    .sheet.padding-20mm {
        padding: 20mm
    }

    .sheet.padding-25mm {
        padding: 25mm
    }

    @media print {
        * {
            break-inside: avoid;
            -webkit-print-color-adjust: exact !important; /* Chrome, Safari 6 – 15.3, Edge */
            color-adjust: exact !important; /* Firefox 48 – 96 */
            print-color-adjust: exact !important; /* Firefox 97+, Safari 15.4+ */
        }


        body.A3.landscape {
            width: 420mm
        }

        body.A3, body.A4.landscape {
            width: 297mm
        }

        body.A4, body.A5.landscape {
            width: 210mm
        }

        body.A5 {
            width: 148mm
        }

        body * {
            visibility: hidden;
        }


        #printarea, #printarea * {
            visibility: visible;
            overflow: hidden;
        }

        .note, .content-header, .alertify-notifier {
            display: none;
        }

        #printarea {
            height: auto;

            left: 0;
            top: 0;

        }


        /*.invoice-top{*/
        /*    width: 100px;*/
        /*   display: inherit;*/
        /*}*/
        /*.invoice-top-right{*/
        /*    width: 20%;*/
        /*}*/
        /*.invoice-top-left{*/
        /*    width: 50%;*/
        /*}*/
        .note, #pemesanan {
            visibility: hidden;
        }

        .invoice-actions {
            display: none;
        }

        .invoice-mid-right {
            /*transform: translate(0, -25px);*/
        }

        .col-md-1, .col-md-2, .col-md-3, .col-md-4,
        .col-md-5, .col-md-6, .col-md-7, .col-md-8,
        .col-md-9, .col-md-10, .col-md-11, .col-md-12 {
            float: left;
        }

        .col-md-1 {
            width: 8%;
        }

        .col-md-2 {
            width: 16%;
        }

        .col-md-3 {
            width: 25%;
        }

        .col-md-4 {
            width: 33%;
        }

        .col-md-5 {
            width: 42%;
        }

        .col-md-6 {
            width: 50%;
        }

        .col-md-7 {
            width: 58%;
        }

        .col-md-8 {
            width: 66%;
        }

        .col-md-9 {
            width: 75%;
        }

        .col-md-10 {
            width: 83%;
        }

        .col-md-11 {
            width: 92%;
        }

        .col-md-12 {
            width: 100%;
        }

        .col-12 {
            width: 100%;
        }
    }
</style>
