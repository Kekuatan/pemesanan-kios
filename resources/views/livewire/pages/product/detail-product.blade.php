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
                <div data-v-36ff53bc="" id="printarea"  class="col-md-8 col-xl-9 col-12">
                    <form data-v-36ff53bc="" class="">
                        <div data-v-36ff53bc="" class="card invoice-preview-card"><!----><!---->
                            <div data-v-36ff53bc="" class="  card-body invoice-padding pb-0"><!----><!---->
                                <div data-v-36ff53bc=""
                                     class=" invoice-top row ">
                                    <!-- Invoice top-left-->
                                    <div data-v-36ff53bc="" class="invoice-top-left col-md-6">
                                        <div data-v-36ff53bc="" class="logo-wrapper">
                                            <svg data-v-36ff53bc="" viewBox="0 0 139 95" version="1.1"
                                                 xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                                                <defs>
                                                    <linearGradient id="linearGradient-1" x1="100%" y1="10.5120544%"
                                                                    x2="50%" y2="89.4879456%">
                                                        <stop stop-color="#000000" offset="0%"></stop>
                                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="linearGradient-2" x1="64.0437835%"
                                                                    y1="46.3276743%" x2="37.373316%" y2="100%">
                                                        <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                                   fill-rule="evenodd">
                                                    <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                                        <g id="Group" transform="translate(400.000000, 178.000000)">
                                                            <path id="Path"
                                                                  d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z"
                                                                  class="text-primary"
                                                                  style="fill: currentcolor;"></path>
                                                            <path id="Path1"
                                                                  d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z"
                                                                  fill="url(#linearGradient-1)" opacity="0.2"></path>
                                                            <polygon id="Path-2" fill="#000000" opacity="0.049999997"
                                                                     points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                                                            <polygon id="Path-21" fill="#000000" opacity="0.099999994"
                                                                     points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                                                            <polygon id="Path-3" fill="url(#linearGradient-2)"
                                                                     opacity="0.099999994"
                                                                     points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
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
                                                {{$name . (blank($inputs['name']) ? "" : '/'.$inputs['name'])}}</h6>
                                            <p data-v-36ff53bc="" class="card-text mb-25">
                                                {{$ktpNo . (blank($inputs['ktpNo']) ? "" : '/'.$inputs['ktpNo'])}}
                                            </p>
                                            <p data-v-36ff53bc="" class="card-text mb-25">
                                                {{$address . (blank($inputs['address']) ? "" : '/'.$inputs['address'])}}
                                            </p>
                                            <p data-v-36ff53bc="" class="card-text mb-25">
                                                {{$phoneNumber . (blank($inputs['phoneNumber']) ? "" : '/'.$inputs['phoneNumber'])}}
                                            </p>
                                            <p data-v-36ff53bc="" class="card-text mb-0">
                                                {{$kiosNo}}
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Invoice-mid-right-->
                                    <div data-v-36ff53bc="" class="invoice-mid-right  mt-xl-0 mt-2 justify-content-end d-xl-flex d-block col-xl-6 col-md-6"
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
                                                    <td data-v-36ff53bc="">1111111111111111</td>
                                                </tr>
                                                <tr data-v-36ff53bc="">
                                                    <td data-v-36ff53bc="" class="pr-1"> Type: </td>
                                                    <td data-v-36ff53bc="">{{optional(optional($price_list)['payment_method'])['name']}}</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
{{--                            <div data-v-36ff53bc="" class="card-body invoice-padding form-item-section"><!----><!---->--}}
{{--                                <p>aaa</p>--}}
{{--                            </div>--}}
                            <div data-v-36ff53bc="" class="card-body invoice-padding pb-0"><!----><!---->
                                <div data-v-36ff53bc="" class="row">
                                    <!-- Invoice bottom-left-->
                                    <div data-v-36ff53bc=""
                                         class="mt-md-0 mt-3  col-md-6">
                                        <label data-v-36ff53bc="" for="invoice-data-sales-person"
                                               class="text-nowrap mr-50">Petugas:</label><input data-v-36ff53bc=""
                                                                                                     id="invoice-data-sales-person"
                                                                                                     type="text"
                                                                                                     placeholder="{{$user->name}}"
                                                                                                     class="form-control">
                                    </div>
                                    <!-- Invoice bottom-right-->
                                    <div data-v-36ff53bc=""
                                         class="mt-md-6 d-flex justify-content-end col-md-6">
                                        <div data-v-36ff53bc="" class="invoice-total-wrapper" style="width: inherit">
                                            <div data-v-36ff53bc="" class="invoice-total-item"><p data-v-36ff53bc=""
                                                                                                  class="invoice-total-title">
                                                    Harga tempat usaha: </p>
                                                <p data-v-36ff53bc="" class="invoice-total-amount d-flex justify-content-end">
                                                    {{$price_text}} </p>
                                            </div>

                                            <div data-v-36ff53bc="" class="invoice-total-item"><p data-v-36ff53bc=""
                                                                                                  class="invoice-total-title">
                                                    PPN ({{$ppn_rate_text}} ): </p>
                                                <p data-v-36ff53bc="" class="invoice-total-amount d-flex justify-content-end">
                                                    {{$ppn_text}}</p>
                                            </div>
                                            <hr data-v-36ff53bc="" class=invoice-spacing>
                                            <div data-v-36ff53bc="" class="invoice-total-item"><p data-v-36ff53bc=""
                                                                                                  class="invoice-total-title">
                                                    Jumlah: </p>
                                                <p data-v-36ff53bc="" class="invoice-total-amount d-flex justify-content-end">
                                                    {{$price_with_ppn_text}} </p>
                                            </div>

                                            <div data-v-36ff53bc="" class="invoice-total-item"><p data-v-36ff53bc=""
                                                                                                  class="invoice-total-title">
                                                    Booking fee: </p>
                                                <p data-v-36ff53bc="" class="invoice-total-amount d-flex justify-content-end"> {{$booking_fee_text}} </p>
                                            </div>

                                            <div data-v-36ff53bc="" class="invoice-total-item"><p data-v-36ff53bc=""
                                                                                                  class="invoice-total-title">
                                                    Discount ({{ $discount_rate_text }}): </p>
                                                <p data-v-36ff53bc="" class="invoice-total-amount d-flex justify-content-end"> {{$discount_text}} </p>
                                            </div>

                                            <hr data-v-36ff53bc="" class=invoice-spacing>
                                            <div data-v-36ff53bc="" class="invoice-total-item"><p data-v-36ff53bc=""
                                                                                                  class="invoice-total-title">
                                                    Jumlah yang harus dibayarkan: </p>
                                                <p data-v-36ff53bc="" class="invoice-total-amount d-flex justify-content-end">
                                                    {{$total_price_text}} </p>
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
                            <div>
                                        <select  wire:model="inputs.price_list_id" class="custom-select">
                                            <option disabled="disabled" value="" selected>--- Pilih jenis pembayaran--- </option>
                                        @foreach ($priceLists as $priceList)
                                                <option value="{{$priceList->id}}">{{$priceList->paymentMethod->name}}</option>
                                            @endforeach

                                        </select>
                            </div>
                            <div class="mb-75 ">
                                <label for="staticEmail" class="col-sm-8 col-form-label">Nama</label>
                                <div class="">
                                    <input type="text"
                                           class="right-input form-control invoice-edit-input flatpickr-input"
                                            class="form-control-plaintext"
                                           placeholder="{{$name}}" wire:model="inputs.name" >
                                </div>
                                <p>{{$inputs['name']}}</p>
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

                            @if(!blank($inputs["price_list_id"]))
                            <div class="mb-75 ">
                                <label for="staticEmail" class="col-sm-8 col-form-label">DP: {{$dp_text}}</label>
                                <div class="">
                                    <input type="text"
                                           class="right-input form-control invoice-edit-input flatpickr-input"
                                           class="form-control-plaintext"
                                           placeholder="{{$inputs["dp"]}}" wire:model="inputs.dp">
                                </div>
                            </div>
                            @endif

                            @if($showPrint)
                                <button wire:click="save" data-v-36ff53bc="" type="button" class="btn mb-75 btn-primary btn-block collapsed"
                                        disabled aria-expanded="false" aria-controls="sidebar-send-invoice"
                                        style="overflow-anchor: none;"> Print
                                </button>
                            @else
                                <button wire:click="save" data-v-36ff53bc="" type="button" class="btn mb-75 btn-primary btn-block collapsed"
                                        aria-expanded="false" aria-controls="sidebar-send-invoice"
                                        style="overflow-anchor: none;"> Save
                                </button>
                            @endif


                        </div><!----><!----></div>
{{--                    <div data-v-36ff53bc="" class="mt-2">--}}
{{--                        <div data-v-36ff53bc="" role="group" class="form-group" id="__BVID__727"><label--}}
{{--                                for="payment-method" class="d-block" id="__BVID__727__BV_label_">Accept Payment--}}
{{--                                Via</label>--}}
{{--                            <div>--}}
{{--                                <div data-v-36ff53bc="" dir="ltr"--}}
{{--                                     class="v-select payment-selector vs--single vs--searchable">--}}
{{--                                    <div id="vs8__combobox" role="combobox" aria-expanded="false"--}}
{{--                                         aria-owns="vs8__listbox" aria-label="Search for option"--}}
{{--                                         class="vs__dropdown-toggle">--}}
{{--                                        <div class="vs__selected-options"><span class="vs__selected">--}}
{{--            Bank Account--}}
{{--                                                <!----></span> <input id="payment-method" aria-autocomplete="list"--}}
{{--                                                                      aria-labelledby="vs8__combobox"--}}
{{--                                                                      aria-controls="vs8__listbox" type="search"--}}
{{--                                                                      autocomplete="off" class="vs__search"></div>--}}
{{--                                        <div class="vs__actions">--}}
{{--                                            <button type="button" title="Clear Selected" aria-label="Clear Selected"--}}
{{--                                                    class="vs__clear" style="display: none;">--}}
{{--                                                <svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px"--}}
{{--                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"--}}
{{--                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"--}}
{{--                                                     class="feather feather-x">--}}
{{--                                                    <line x1="18" y1="6" x2="6" y2="18"></line>--}}
{{--                                                    <line x1="6" y1="6" x2="18" y2="18"></line>--}}
{{--                                                </svg>--}}
{{--                                            </button>--}}
{{--                                            <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="15px"--}}
{{--                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"--}}
{{--                                                 stroke-linecap="round" stroke-linejoin="round"--}}
{{--                                                 class="feather feather-chevron-down open-indicator vs__open-indicator"--}}
{{--                                            >--}}
{{--                                                <polyline points="6 9 12 15 18 9"></polyline>--}}
{{--                                            </svg>--}}
{{--                                            <div class="vs__spinner" style="display: none;">Loading...</div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <ul id="vs8__listbox" role="listbox"--}}
{{--                                        style="display: none; visibility: hidden;"></ul>--}}
{{--                                </div><!----><!----><!----></div>--}}
{{--                        </div>--}}
{{--                        <div data-v-36ff53bc="" class="d-flex justify-content-between align-items-center"><label--}}
{{--                                data-v-36ff53bc="" for="patymentTerms">Payment Terms</label>--}}
{{--                            <div data-v-36ff53bc="" class="custom-control custom-switch"><input id="patymentTerms"--}}
{{--                                                                                                type="checkbox"--}}
{{--                                                                                                class="custom-control-input"--}}
{{--                                                                                                value="true"><label--}}
{{--                                    for="patymentTerms" class="custom-control-label"></label></div>--}}
{{--                        </div>--}}
{{--                        <div data-v-36ff53bc="" class="d-flex justify-content-between align-items-center my-1"><label--}}
{{--                                data-v-36ff53bc="" for="clientNotes">Client Notes</label>--}}
{{--                            <div data-v-36ff53bc="" class="custom-control custom-switch"><input id="clientNotes"--}}
{{--                                                                                                type="checkbox"--}}
{{--                                                                                                class="custom-control-input"--}}
{{--                                                                                                value="true"><label--}}
{{--                                    for="clientNotes" class="custom-control-label"></label></div>--}}
{{--                        </div>--}}
{{--                        <div data-v-36ff53bc="" class="d-flex justify-content-between align-items-center"><label--}}
{{--                                data-v-36ff53bc="" for="paymentStub">Payment Stub</label>--}}
{{--                            <div data-v-36ff53bc="" class="custom-control custom-switch"><input id="paymentStub"--}}
{{--                                                                                                type="checkbox"--}}
{{--                                                                                                class="custom-control-input"--}}
{{--                                                                                                value="true"><label--}}
{{--                                    for="paymentStub" class="custom-control-label"></label></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </section>
    </div>
</div>

<style>
    .right-input {
        text-align: right;
    }

    .invoice-total-amount{
        margin: 0 !important;
    }
    .invoice-total-item{
        margin: 0 !important;
    }
    .invoice-total-title{
        margin: 0 !important;
    }
    .invoice-total-wrapper{
        margin: 0 !important;
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
        }
        #printarea {
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



        .invoice-spacing{
            border-width: 2px !important;
            border-style: solid !important;
            font-size: 10px !important;
            background-color: red;
            -webkit-print-color-adjust:exact ;
        }
        .invoice-mid-right{
            transform: translate(0,-25px);
        }
            .col-md-1,.col-md-2,.col-md-3,.col-md-4,
            .col-md-5,.col-md-6,.col-md-7,.col-md-8,
            .col-md-9,.col-md-10,.col-md-11,.col-md-12 {
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
