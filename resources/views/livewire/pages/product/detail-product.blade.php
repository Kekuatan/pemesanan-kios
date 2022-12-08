<div>
    <div class="container">
        <div class="row content-header">
            <div class="bredcumb-header-dasboard content-header-left mb-2 col-md-9 col-12">
                <div class="row breadcrumbs-top">
                    <div class="col-12"><h2 class="content-header-title float-left pr-1 mb-0"> Form Validation </h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item "><a href="#"
                                                                wire:click="link('/dashboard')"
                                                                class="router-link-active" target="_self">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="align-text-top feather feather-home">
                                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                        </svg>
                                    </a></li>
                                <li class="breadcrumb-item"><a href="#" target="_self" class=""> Forms </a></li>
                                <li class="breadcrumb-item active"><span
                                        aria-current="location"> Form Validation </span></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right d-md-block d-none mb-1 col-md-3 col-12">
                <div class="dropdown b-dropdown btn-group" id="__BVID__2011"><!---->
                    <button aria-haspopup="true" aria-expanded="false" type="button"
                            class="btn dropdown-toggle btn-link p-0 dropdown-toggle-no-caret"
                            id="__BVID__2011__BV_toggle_">
                        <button type="button" class="btn btn-icon btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-settings">
                                <circle cx="12" cy="12" r="3"></circle>
                                <path
                                    d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                            </svg>
                        </button>
                    </button>
                    <ul role="menu" tabindex="-1" class="dropdown-menu dropdown-menu-right"
                        aria-labelledby="__BVID__2011__BV_toggle_">
                        <li role="presentation"><a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-2/apps/todo"
                                                   class="dropdown-item" role="menuitem" target="_self">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-check-square">
                                    <polyline points="9 11 12 14 22 4"></polyline>
                                    <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                </svg>
                                <span class="align-middle ml-50">Todo</span></a></li>
                        <li role="presentation"><a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-2/apps/chat"
                                                   class="dropdown-item" role="menuitem" target="_self">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-message-square">
                                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                </svg>
                                <span class="align-middle ml-50">Chat</span></a></li>
                        <li role="presentation"><a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-2/apps/email"
                                                   class="dropdown-item" role="menuitem" target="_self">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-mail">
                                    <path
                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                                <span class="align-middle ml-50">Email</span></a></li>
                        <li role="presentation"><a
                                href="/demo/vuexy-vuejs-admin-dashboard-template/demo-2/apps/calendar"
                                class="dropdown-item" role="menuitem" target="_self">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-calendar">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                </svg>
                                <span class="align-middle ml-50">Calendar</span></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <section data-v-36ff53bc="" class="invoice-add-wrapper"><!---->
            <div data-v-36ff53bc="" class="row invoice-add">
                <div data-v-36ff53bc="" class="col-md-8 col-xl-9 col-12">
                    <form data-v-36ff53bc="" class="" id="printarea">
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
                                            <h3 data-v-36ff53bc="" class="text-primary text-center invoice-logo"> SURAT
                                                PESANAN PERPANJANGAN </h3>
                                            <p data-v-36ff53bc="" class=" text-center invoice-logo"> Hak Pemakaian
                                                Tempat Usaha </p>
                                            <h5 data-v-36ff53bc="" class="text-primary text-center invoice-logo"> UPB
                                                PASAR INDUK KRAMAT JATI </h5>
                                            <h5 data-v-36ff53bc="" class="text-primary text-center invoice-logo">
                                                Bangunan U-Shape BLOK A - H </h5>
                                        </div>
                                    </div>

                                    <!-- Invoice header-right-->
                                    <div data-v-36ff53bc="" class=" invoice-top-right col-md-3">
                                        <img src="{{asset('logo/pasar-jaya.png')}}" width="150px" style="float: right">
                                    </div>
                                </div>
                            </div>


                            <div data-v-36ff53bc="" class="  card-body invoice-padding pb-0"><!----><!---->
                                <hr data-v-36ff53bc="" class="invoice-spacing">
                                <div data-v-36ff53bc=""
                                     class=" invoice-top row ">
                                    <!-- Invoice top-left-->
                                    <div data-v-36ff53bc="" class="invoice-top-left col-md-6">
                                        <div data-v-36ff53bc="" class="logo-wrapper">
                                            <h3 data-v-36ff53bc="" class="text-primary invoice-logo"> Vuexy </h3></div>
                                        <p data-v-36ff53bc="" class="card-text mb-25"> PT. Rapik Indonesia
                                            Brooklyn </p>
                                        <p data-v-36ff53bc="" class="card-text mb-25"> Cimanggis
                                            USA </p>
                                        <p data-v-36ff53bc="" class="card-text mb-0"> +62 (021) 456 7891
                                            2198 </p>
                                    </div>

                                    <!-- Invoice top-right-->
                                    <div data-v-36ff53bc="" class=" invoice-top-right col-md-6">

                                        <div class="mb-3 row right-input">
                                            <label for="staticEmail" class="col-sm-8 col-form-label">Tanggal</label>
                                            <div class="col-sm-4">
                                                <input type="text"
                                                       class="right-input form-control invoice-edit-input flatpickr-input"
                                                       readonly class="form-control-plaintext" id="staticEmail"
                                                       value="{{\Carbon\Carbon::now()->toDateString()}}">
                                            </div>
                                        </div>
                                        {{--                                        <div data-v-36ff53bc="" class="d-flex align-items-center mb-1">--}}
                                        {{--                                            <span data-v-36ff53bc="" class="title"> Date: </span>--}}
                                        {{--                                            <input data-v-36ff53bc=""--}}
                                        {{--                                                   type="text"--}}
                                        {{--                                                   data-input="true"--}}
                                        {{--                                                   class="form-control invoice-edit-input flatpickr-input"--}}
                                        {{--                                                   readonly="readonly">--}}
                                        {{--                                        </div>--}}
                                        {{--                                        <div data-v-36ff53bc="" class="d-flex align-items-center">--}}
                                        {{--                                            <span--}}
                                        {{--                                                data-v-36ff53bc="" class="title"> Due Date: </span>--}}
                                        {{--                                            <input--}}
                                        {{--                                                data-v-36ff53bc="" type="text" data-input="true"--}}
                                        {{--                                                class="form-control invoice-edit-input flatpickr-input"--}}
                                        {{--                                                readonly="readonly"></div>--}}
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
                                        <div data-v-36ff53bc="" class="mt-1"><h6 data-v-36ff53bc="" class="mb-25">
                                                {{$name . (blank($inputs['name']) ? "" : ' | '.$inputs['name'])}}</h6>
                                            <p data-v-36ff53bc="" class="card-text mb-25">
                                                {{(blank($inputs['ktpNo']) ? $ktpNo : $inputs['ktpNo'])}}
                                            </p>
                                            <p data-v-36ff53bc="" class="card-text mb-25">
                                                {{(blank($inputs['address']) ? $address : $inputs['address'])}}
                                            </p>
                                            <p data-v-36ff53bc="" class="card-text mb-25">
                                                {{(blank($inputs['phoneNumber']) ? $phoneNumber : $inputs['phoneNumber'])}}
                                            </p>
                                            <p data-v-36ff53bc="" class="card-text mb-0">
                                                {{$kiosNo}}
                                            </p>

                                            <p data-v-36ff53bc="" class="card-text mb-0">
                                                {{$product->tu_area}}
                                            </p>

                                            <p data-v-36ff53bc="" class="card-text mb-0">
                                                {{$product->sale_kind}}
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Invoice-mid-right-->
                                    <div data-v-36ff53bc=""
                                         class="invoice-mid-right  mt-xl-0 mt-2 justify-content-end d-xl-flex d-block col-xl-6 col-md-6"
                                    >
                                        <div data-v-36ff53bc="" style="float: right">
                                            <h6 data-v-36ff53bc="" class="mb-2"> Pembayaran
                                                Details: </h6>
                                            <table data-v-36ff53bc="">
                                                <tbody data-v-36ff53bc="">
                                                <tr data-v-36ff53bc="">
                                                    <td data-v-36ff53bc="" class="pr-1"> Nama Bank:</td>
                                                    <td data-v-36ff53bc=""><span data-v-36ff53bc=""
                                                                                 class="font-weight-bold">BRI</span>
                                                    </td>
                                                </tr>
                                                <tr data-v-36ff53bc="">
                                                    <td data-v-36ff53bc="" class="pr-1"> VA:</td>
                                                    <td data-v-36ff53bc="">{{$product->briva}}</td>
                                                </tr>
                                                <tr data-v-36ff53bc="">
                                                    <td data-v-36ff53bc="" class="pr-1"> Type:</td>
                                                    <td data-v-36ff53bc="">{{optional(optional($price_list)['payment_method'])['name']}}</td>
                                                </tr>
                                                @if(!$dp_status)
                                                    <tr data-v-36ff53bc="">
                                                        <td data-v-36ff53bc="" class="pr-1"> DP:</td>
                                                        <td data-v-36ff53bc="">{{$dp_text}}</td>
                                                    </tr>
                                                @endif

                                                <tr data-v-36ff53bc="">
                                                    <td data-v-36ff53bc="" class="pr-1"> Pembayaran:</td>
                                                    <td data-v-36ff53bc="">{{$this->payment_text}}</td>
                                                </tr>
                                                <tr data-v-36ff53bc="">
                                                    <td data-v-36ff53bc="" class="pr-1"> Status DP:</td>
                                                    <td data-v-36ff53bc="">{{$dp_status ? 'Lunas' : ' Belum lunas'}}</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div data-v-36ff53bc="" class="card-body invoice-padding form-item-section"><!----><!---->
                                <div data-v-36ff53bc=""
                                     class=" mt-md-0 mt-3  col-md-12">
                                    <label data-v-36ff53bc="" for="invoice-data-sales-person"
                                           class="text-nowrap mr-50">Pembayaran :</label>
                                    <h4 class="text-center terbilang invoice-logo text-primary">{{$terbilang}}</h4>
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
                                        {{--                                               class="text-nowrap mr-50">Petugas:</label><input data-v-36ff53bc=""--}}
                                        {{--                                                                                                readonly--}}
                                        {{--                                                                                                     id="invoice-data-sales-person"--}}
                                        {{--                                                                                                     type="text"--}}
                                        {{--                                                                                                     placeholder="{{($user->name)}}"--}}
                                        {{--                                                                                                     class="form-control">--}}
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
                                                    PPN ({{$ppn_rate_text}} ): </p>
                                                <p data-v-36ff53bc=""
                                                   class="invoice-total-amount d-flex justify-content-end">
                                                    {{$ppn_text}}</p>
                                            </div>
                                            <hr data-v-36ff53bc="" class=invoice-spacing>
                                            <div data-v-36ff53bc="" class="invoice-total-item"><p data-v-36ff53bc=""
                                                                                                  class="invoice-total-title">
                                                    Jumlah: </p>
                                                <p data-v-36ff53bc=""
                                                   class="invoice-total-amount d-flex justify-content-end">
                                                    {{$price_with_ppn_text}} </p>
                                            </div>

                                            <div data-v-36ff53bc="" class="invoice-total-item"><p data-v-36ff53bc=""
                                                                                                  class="invoice-total-title">
                                                    Discount ({{ $discount_rate_text }}): </p>
                                                <p data-v-36ff53bc=""
                                                   class="invoice-total-amount d-flex justify-content-end"> {{$discount_text}} </p>
                                            </div>

                                            <hr data-v-36ff53bc="" class=invoice-spacing>
                                            <div data-v-36ff53bc="" class="invoice-total-item"><p data-v-36ff53bc=""
                                                                                                  class="invoice-total-title">
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
                                                                                                  class="invoice-total-title">
                                                    Pembayaran: </p>
                                                <p data-v-36ff53bc=""
                                                   class="invoice-total-amount d-flex justify-content-end">
                                                    {{$payment_text}} </p>
                                            </div>
                                            <hr data-v-36ff53bc="" class=invoice-spacing>
                                            <div data-v-36ff53bc="" class="invoice-total-item"><p data-v-36ff53bc=""
                                                                                                  class="invoice-total-title">
                                                    Sisa cicilan: </p>
                                                <p data-v-36ff53bc=""
                                                   class="invoice-total-amount d-flex justify-content-end">
                                                    {{$left_payment_text}} </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr data-v-36ff53bc="" class="invoice-spacing">

                        </div>
                    </form>
                </div>


                <div data-v-36ff53bc="" class="invoice-actions col-md-4 col-xl-3 col-12">
                    <div data-v-36ff53bc="" class="card"><!----><!---->
                        <div data-v-36ff53bc="" class="card-body"><!----><!---->
                            <div class="mb-75">
                                <select wire:model="inputs.price_list_id" class="custom-select">
                                    <option disabled="disabled" value="" selected>--- Pilih jenis pembayaran---</option>
                                    @foreach ($priceLists as $priceList)
                                        <option value="{{$priceList->id}}">{{$priceList->paymentMethod->name}}</option>
                                    @endforeach

                                </select>
                            </div>
                            @if(!blank($inputs["price_list_id"]))
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

                                @if(blank($payments))
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
                                @endif

                                <div class="mb-75 ">
                                    <label for="staticEmail" class="col-sm-8 col-form-label">Pembayaran</label>
                                    <div class="">
                                        <input type="text"
                                               class="right-input form-control invoice-edit-input flatpickr-input"
                                               class="form-control-plaintext"
                                               placeholder="{{$inputs["payment"]}}" wire:model="inputs.payment">
                                    </div>
                                </div>


                                @if($showPrint)
                                    <button wire:click="save" data-v-36ff53bc="" type="button"
                                            class="btn mb-75 btn-primary btn-block collapsed"
                                            disabled aria-expanded="false" aria-controls="sidebar-send-invoice"
                                            style="overflow-anchor: none;"> Print
                                    </button>
                                @else
                                    <button wire:click="save" data-v-36ff53bc="" type="button"
                                            class="btn mb-75 btn-primary btn-block collapsed"
                                            aria-expanded="false" aria-controls="sidebar-send-invoice"
                                            style="overflow-anchor: none;"> Save
                                    </button>
                                @endif
                            @endif


                        </div><!----><!----></div>
                </div>
            </div>
        </section>
    </div>
</div>

<style>
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

    @media print {
        body * {
            visibility: hidden;
        }


        #printarea, #printarea * {
            visibility: visible;
            overflow: hidden;
        }

        .note {
            display: none;
        }

        #printarea {
            height: 100%;
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
        .invoice-spacing {
            border-width: 2px !important;
            border-style: solid !important;
            font-size: 10px !important;
            background-color: red;
            -webkit-print-color-adjust: exact;
        }

        .note {
            visibility: hidden;
        }

        .invoice-actions {
            display: none;
        }

        .invoice-mid-right {
            transform: translate(0, -25px);
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
