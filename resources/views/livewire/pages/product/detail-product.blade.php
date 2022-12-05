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
                    <form data-v-36ff53bc="" class="">
                        <div data-v-36ff53bc="" class="card invoice-preview-card"><!----><!---->
                            <div data-v-36ff53bc="" class="card-body invoice-padding pb-0"><!----><!---->
                                <div data-v-36ff53bc=""
                                     class="d-flex justify-content-between flex-md-row flex-column invoice-spacing mt-0">
                                    <!-- Invoice top-left-->
                                    <div data-v-36ff53bc="">
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
                                        <p data-v-36ff53bc="" class="card-text mb-25"> Office 149, 450 South Brand
                                            Brooklyn </p>
                                        <p data-v-36ff53bc="" class="card-text mb-25"> San Diego County, CA 91905,
                                            USA </p>
                                        <p data-v-36ff53bc="" class="card-text mb-0"> +1 (123) 456 7891, +44 (876) 543
                                            2198 </p>
                                    </div>

                                    <!-- Invoice top-right-->
                                    <div data-v-36ff53bc="" class="invoice-number-date mt-md-0 mt-2">
                                        <div class="mb-2 row  ">
                                            <label for="staticEmail" class="col-sm-3 col-form-label invoice-title"><h5>Invoice</h5></label>
                                            <div class="col-sm-9">

                                                <div data-v-36ff53bc="" role="group"
                                                     class="input-group input-group-merge invoice-edit-input-group disabled">
                                                    <!---->
                                                    <div data-v-36ff53bc="" class="input-group-prepend">
                                                        <div data-v-36ff53bc="" class="input-group-text">
                                                            <svg data-v-36ff53bc="" xmlns="http://www.w3.org/2000/svg"
                                                                 width="14px" height="14px" viewBox="0 0 24 24" fill="none"
                                                                 stroke="currentColor" stroke-width="2"
                                                                 stroke-linecap="round" stroke-linejoin="round"
                                                                 class="feather feather-hash">
                                                                <line data-v-36ff53bc="" x1="4" y1="9" x2="20"
                                                                      y2="9"></line>
                                                                <line data-v-36ff53bc="" x1="4" y1="15" x2="20"
                                                                      y2="15"></line>
                                                                <line data-v-36ff53bc="" x1="10" y1="3" x2="8"
                                                                      y2="21"></line>
                                                                <line data-v-36ff53bc="" x1="16" y1="3" x2="14"
                                                                      y2="21"></line>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <input data-v-36ff53bc="" id="invoice-data-id" type="text"
                                                           disabled="disabled" class="form-control"><!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="staticEmail" class="col-sm-4 col-form-label">Tanggal</label>
                                            <div class="col-sm-8">
                                                <input type="text"
                                                       class="form-control invoice-edit-input flatpickr-input"
                                                       readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
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
                                <div data-v-36ff53bc="" class="row invoice-spacing">
                                    <div data-v-36ff53bc="" class="mb-lg-1 col-xl-6 col-12"><h6 data-v-36ff53bc=""
                                                                                                class="mb-2"> Invoice
                                            To: </h6>
                                        <div data-v-36ff53bc="" class="mt-1"><h6 data-v-36ff53bc="" class="mb-25">
                                                Jordan Stevenson </h6>
                                            <p data-v-36ff53bc="" class="card-text mb-25"> Hall-Robbins PLC </p>
                                            <p data-v-36ff53bc="" class="card-text mb-25"> 7777 Mendez Plains, USA </p>
                                            <p data-v-36ff53bc="" class="card-text mb-25"> (616) 865-4180 </p>
                                            <p data-v-36ff53bc="" class="card-text mb-0"> don85@johnson.com </p></div>
                                    </div>
                                    <div data-v-36ff53bc=""
                                         class="mt-xl-0 mt-2 justify-content-end d-xl-flex d-block col-xl-6 col-12">
                                        <div data-v-36ff53bc=""><h6 data-v-36ff53bc="" class="mb-2"> Payment
                                                Details: </h6>
                                            <table data-v-36ff53bc="">
                                                <tbody data-v-36ff53bc="">
                                                <tr data-v-36ff53bc="">
                                                    <td data-v-36ff53bc="" class="pr-1"> Total Due:</td>
                                                    <td data-v-36ff53bc=""><span data-v-36ff53bc=""
                                                                                 class="font-weight-bold">$12,110.55</span>
                                                    </td>
                                                </tr>
                                                <tr data-v-36ff53bc="">
                                                    <td data-v-36ff53bc="" class="pr-1"> Bank name:</td>
                                                    <td data-v-36ff53bc="">American Bank</td>
                                                </tr>
                                                <tr data-v-36ff53bc="">
                                                    <td data-v-36ff53bc="" class="pr-1"> Country:</td>
                                                    <td data-v-36ff53bc="">United States</td>
                                                </tr>
                                                <tr data-v-36ff53bc="">
                                                    <td data-v-36ff53bc="" class="pr-1"> IBAN:</td>
                                                    <td data-v-36ff53bc="">ETD95476213874685</td>
                                                </tr>
                                                <tr data-v-36ff53bc="">
                                                    <td data-v-36ff53bc="" class="pr-1"> SWIFT code:</td>
                                                    <td data-v-36ff53bc="">BR91905</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-v-36ff53bc="" class="card-body invoice-padding form-item-section"><!----><!---->
                                <div data-v-36ff53bc="" class="repeater-form" style="height: 489px;">
                                    <div data-v-36ff53bc="" class="row pb-2">
                                        <div data-v-36ff53bc="" class="col-12">
                                            <div data-v-36ff53bc="" class="d-none d-lg-flex">
                                                <div data-v-36ff53bc="" class="row flex-grow-1 px-1">
                                                    <div data-v-36ff53bc="" class="col-lg-5 col-12"> Item</div>
                                                    <div data-v-36ff53bc="" class="col-lg-3 col-12"> Cost</div>
                                                    <div data-v-36ff53bc="" class="col-lg-2 col-12"> Qty</div>
                                                    <div data-v-36ff53bc="" class="col-lg-2 col-12"> Price</div>
                                                </div>
                                                <div data-v-36ff53bc="" class="form-item-action-col"></div>
                                            </div>
                                            <div data-v-36ff53bc="" class="d-flex border rounded">
                                                <div data-v-36ff53bc="" class="row flex-grow-1 p-2">
                                                    <div data-v-36ff53bc="" class="col-lg-5 col-12"><label
                                                            data-v-36ff53bc="" class="d-inline d-lg-none">Item</label>
                                                        <div data-v-36ff53bc="" dir="ltr"
                                                             class="v-select mb-2 item-selector-title vs--single vs--searchable">
                                                            <div id="vs7__combobox" role="combobox"
                                                                 aria-expanded="false" aria-owns="vs7__listbox"
                                                                 aria-label="Search for option"
                                                                 class="vs__dropdown-toggle">
                                                                <div class="vs__selected-options"><span
                                                                        class="vs__selected">
            App Design
                                                                        <!----></span> <input aria-autocomplete="list"
                                                                                              aria-labelledby="vs7__combobox"
                                                                                              aria-controls="vs7__listbox"
                                                                                              type="search"
                                                                                              autocomplete="off"
                                                                                              class="vs__search"></div>
                                                                <div class="vs__actions">
                                                                    <button type="button" title="Clear Selected"
                                                                            aria-label="Clear Selected"
                                                                            class="vs__clear" style="display: none;">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="14px" height="14px"
                                                                             viewBox="0 0 24 24" fill="none"
                                                                             stroke="currentColor" stroke-width="2"
                                                                             stroke-linecap="round"
                                                                             stroke-linejoin="round"
                                                                             class="feather feather-x">
                                                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                                                        </svg>
                                                                    </button>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15px"
                                                                         height="15px" viewBox="0 0 24 24" fill="none"
                                                                         stroke="currentColor" stroke-width="2"
                                                                         stroke-linecap="round" stroke-linejoin="round"
                                                                         class="feather feather-chevron-down open-indicator vs__open-indicator"
                                                                         >
                                                                        <polyline points="6 9 12 15 18 9"></polyline>
                                                                    </svg>
                                                                    <div class="vs__spinner" style="display: none;">
                                                                        Loading...
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <ul id="vs7__listbox" role="listbox"
                                                                style="display: none; visibility: hidden;"></ul>
                                                        </div>
                                                    </div>
                                                    <div data-v-36ff53bc="" class="col-lg-3 col-12"><label
                                                            data-v-36ff53bc=""
                                                            class="d-inline d-lg-none">Cost</label><input
                                                            data-v-36ff53bc="" type="number" class="mb-2 form-control"
                                                            id="__BVID__721"></div>
                                                    <div data-v-36ff53bc="" class="col-lg-2 col-12"><label
                                                            data-v-36ff53bc=""
                                                            class="d-inline d-lg-none">Qty</label><input
                                                            data-v-36ff53bc="" type="number" class="mb-2 form-control"
                                                            id="__BVID__722"></div>
                                                    <div data-v-36ff53bc="" class="col-lg-2 col-12"><label
                                                            data-v-36ff53bc="" class="d-inline d-lg-none">Price</label>
                                                        <p data-v-36ff53bc="" class="mb-1"> $48 </p></div>
                                                    <div data-v-36ff53bc="" class="col-lg-5 col-12"><label
                                                            data-v-36ff53bc=""
                                                            class="d-inline d-lg-none">Description</label><textarea
                                                            data-v-36ff53bc="" rows="2" wrap="soft"
                                                            class="mb-2 mb-lg-0 form-control"
                                                            id="__BVID__723"></textarea></div>
                                                    <div data-v-36ff53bc="" class="col"><p data-v-36ff53bc=""
                                                                                           class="mb-0"> Discount: 0% 0%
                                                            0% </p></div>
                                                </div>
                                                <div data-v-36ff53bc=""
                                                     class="d-flex flex-column justify-content-between border-left py-50 px-25">
                                                    <svg data-v-36ff53bc="" xmlns="http://www.w3.org/2000/svg"
                                                         width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                         stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                         stroke-linejoin="round"
                                                         class="cursor-pointer feather feather-x">
                                                        <line data-v-36ff53bc="" x1="18" y1="6" x2="6" y2="18"></line>
                                                        <line data-v-36ff53bc="" x1="6" y1="6" x2="18" y2="18"></line>
                                                    </svg>
                                                    <svg data-v-36ff53bc="" xmlns="http://www.w3.org/2000/svg"
                                                         width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                         stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                         stroke-linejoin="round" id="form-item-settings-icon-0"
                                                         class="cursor-pointer feather feather-settings">
                                                        <circle data-v-36ff53bc="" cx="12" cy="12" r="3"></circle>
                                                        <path data-v-36ff53bc=""
                                                              d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                                                    </svg><!----></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button data-v-36ff53bc="" type="button" class="btn btn-primary btn-sm"> Add Item
                                </button>
                            </div>
                            <div data-v-36ff53bc="" class="card-body invoice-padding pb-0"><!----><!---->
                                <div data-v-36ff53bc="" class="row">
                                    <div data-v-36ff53bc=""
                                         class="mt-md-0 mt-3 d-flex align-items-center col-md-6 order-md-1 col-12 order-2">
                                        <label data-v-36ff53bc="" for="invoice-data-sales-person"
                                               class="text-nowrap mr-50">Sales Person:</label><input data-v-36ff53bc=""
                                                                                                     id="invoice-data-sales-person"
                                                                                                     type="text"
                                                                                                     placeholder="Edward Crowley"
                                                                                                     class="form-control">
                                    </div>
                                    <div data-v-36ff53bc=""
                                         class="mt-md-6 d-flex justify-content-end col-md-6 order-md-2 col-12 order-1">
                                        <div data-v-36ff53bc="" class="invoice-total-wrapper">
                                            <div data-v-36ff53bc="" class="invoice-total-item"><p data-v-36ff53bc=""
                                                                                                  class="invoice-total-title">
                                                    Subtotal: </p>
                                                <p data-v-36ff53bc="" class="invoice-total-amount"> $1800 </p></div>
                                            <div data-v-36ff53bc="" class="invoice-total-item"><p data-v-36ff53bc=""
                                                                                                  class="invoice-total-title">
                                                    Discount: </p>
                                                <p data-v-36ff53bc="" class="invoice-total-amount"> $28 </p></div>
                                            <div data-v-36ff53bc="" class="invoice-total-item"><p data-v-36ff53bc=""
                                                                                                  class="invoice-total-title">
                                                    Tax: </p>
                                                <p data-v-36ff53bc="" class="invoice-total-amount"> 21% </p></div>
                                            <hr data-v-36ff53bc="" class="my-50">
                                            <div data-v-36ff53bc="" class="invoice-total-item"><p data-v-36ff53bc=""
                                                                                                  class="invoice-total-title">
                                                    Total: </p>
                                                <p data-v-36ff53bc="" class="invoice-total-amount"> $1690 </p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr data-v-36ff53bc="" class="invoice-spacing">
                            <div data-v-36ff53bc="" class="card-body invoice-padding pt-0"><!----><!----><span
                                    data-v-36ff53bc="" class="font-weight-bold">Note: </span><textarea
                                    data-v-36ff53bc="" rows="2" wrap="soft" class="form-control"
                                    id="__BVID__726"></textarea></div><!----><!----></div>
                    </form>
                </div>
                <div data-v-36ff53bc="" class="invoice-actions col-md-4 col-xl-3 col-12">
                    <div data-v-36ff53bc="" class="card"><!----><!---->
                        <div data-v-36ff53bc="" class="card-body"><!----><!---->
                            <button data-v-36ff53bc="" type="button" class="btn mb-75 btn-primary btn-block collapsed"
                                    aria-expanded="false" aria-controls="sidebar-send-invoice"
                                    style="overflow-anchor: none;"> Send Invoice
                            </button>
                            <button data-v-36ff53bc="" type="button" class="btn mb-75 btn-outline-primary btn-block"
                                    style="position: relative;"> Preview
                            </button>
                            <button data-v-36ff53bc="" type="button" class="btn btn-outline-primary btn-block"> Save
                            </button>
                            <button data-v-36ff53bc="" type="button" class="btn mb-75 btn-success btn-block collapsed"
                                    aria-expanded="false" aria-controls="sidebar-invoice-add-payment"
                                    style="overflow-anchor: none;"> Add Payment
                            </button>
                        </div><!----><!----></div>
                    <div data-v-36ff53bc="" class="mt-2">
                        <div data-v-36ff53bc="" role="group" class="form-group" id="__BVID__727"><label
                                for="payment-method" class="d-block" id="__BVID__727__BV_label_">Accept Payment
                                Via</label>
                            <div>
                                <div data-v-36ff53bc="" dir="ltr"
                                     class="v-select payment-selector vs--single vs--searchable">
                                    <div id="vs8__combobox" role="combobox" aria-expanded="false"
                                         aria-owns="vs8__listbox" aria-label="Search for option"
                                         class="vs__dropdown-toggle">
                                        <div class="vs__selected-options"><span class="vs__selected">
            Bank Account
                                                <!----></span> <input id="payment-method" aria-autocomplete="list"
                                                                      aria-labelledby="vs8__combobox"
                                                                      aria-controls="vs8__listbox" type="search"
                                                                      autocomplete="off" class="vs__search"></div>
                                        <div class="vs__actions">
                                            <button type="button" title="Clear Selected" aria-label="Clear Selected"
                                                    class="vs__clear" style="display: none;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-x">
                                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                                </svg>
                                            </button>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="15px"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-chevron-down open-indicator vs__open-indicator"
                                                 >
                                                <polyline points="6 9 12 15 18 9"></polyline>
                                            </svg>
                                            <div class="vs__spinner" style="display: none;">Loading...</div>
                                        </div>
                                    </div>
                                    <ul id="vs8__listbox" role="listbox"
                                        style="display: none; visibility: hidden;"></ul>
                                </div><!----><!----><!----></div>
                        </div>
                        <div data-v-36ff53bc="" class="d-flex justify-content-between align-items-center"><label
                                data-v-36ff53bc="" for="patymentTerms">Payment Terms</label>
                            <div data-v-36ff53bc="" class="custom-control custom-switch"><input id="patymentTerms"
                                                                                                type="checkbox"
                                                                                                class="custom-control-input"
                                                                                                value="true"><label
                                    for="patymentTerms" class="custom-control-label"></label></div>
                        </div>
                        <div data-v-36ff53bc="" class="d-flex justify-content-between align-items-center my-1"><label
                                data-v-36ff53bc="" for="clientNotes">Client Notes</label>
                            <div data-v-36ff53bc="" class="custom-control custom-switch"><input id="clientNotes"
                                                                                                type="checkbox"
                                                                                                class="custom-control-input"
                                                                                                value="true"><label
                                    for="clientNotes" class="custom-control-label"></label></div>
                        </div>
                        <div data-v-36ff53bc="" class="d-flex justify-content-between align-items-center"><label
                                data-v-36ff53bc="" for="paymentStub">Payment Stub</label>
                            <div data-v-36ff53bc="" class="custom-control custom-switch"><input id="paymentStub"
                                                                                                type="checkbox"
                                                                                                class="custom-control-input"
                                                                                                value="true"><label
                                    for="paymentStub" class="custom-control-label"></label></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
