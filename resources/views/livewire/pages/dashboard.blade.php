<div>
    <div class="container">
        <div class="row content-header">
            <div class="bredcumb-header-dasboard content-header-left mb-2 col-md-9 col-12">
                <div class="row breadcrumbs-top">
                    <div class="col-12"><h2 class="content-header-title float-left pr-1 mb-0"> Form Validation </h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}"
                                                               class="router-link-active" target="_self">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="align-text-top feather feather-home">
                                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                        </svg>
                                    </a></li>
                                <li class="breadcrumb-item active"><span
                                        aria-current="location"> Dashboard </span></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right d-md-block d-none mb-1 col-md-3 col-12">
                <a href="{{url('/logout')}}">
                    <button type="button"  class="btn btn-icon btn-primary">
                    <svg  width="14px" height="14px" viewBox="0 0 24 24"
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

        <div class="container text-center">
            <div class="row row-cols-4 align-items-center">
                <div class="col" wire:click="menu('/product/order')">
                    <div class="card icon-card cursor-pointer text-center mb-2 mx-50"><!----><!---->
                        <div class="card-body"><!----><!---->
                            <div class="icon-wrapper">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-activity">
                                    <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                </svg>
                            </div>
                            <p class="card-text icon-name text-truncate mb-0 mt-1"> Pemesanan Kios </p>
                        </div><!----><!---->
                    </div>
                </div>
                <div class="col">
                    <div class="card icon-card cursor-pointer text-center mb-2 mx-50"><!----><!---->
                        <div class="card-body"><!----><!---->
                            <div class="icon-wrapper">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-activity">
                                    <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                </svg>
                            </div>
                            <p class="card-text icon-name text-truncate mb-0 mt-1"> Pembayaran Cicilan Kios </p>
                        </div><!----><!---->
                    </div>
                </div>

                <div class="col" wire:click.prevent="menu('/product/list')">
                    <div class="card icon-card cursor-pointer text-center mb-2 mx-50"><!----><!---->
                        <div class="card-body"><!----><!---->
                            <div class="icon-wrapper">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-activity">
                                    <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                </svg>
                            </div>
                            <p class="card-text icon-name text-truncate mb-0 mt-1"> Daftar Kios </p>
                        </div><!----><!---->
                    </div>
                </div>
                <div class="col">
                    <div class="card icon-card cursor-pointer text-center mb-2 mx-50"><!----><!---->
                        <div class="card-body"><!----><!---->
                            <div class="icon-wrapper">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-activity">
                                    <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                </svg>
                            </div>
                            <p class="card-text icon-name text-truncate mb-0 mt-1"> Daftar Harga </p>
                        </div><!----><!---->
                    </div>
                </div>
                <div class="col">
                    <div class="card icon-card cursor-pointer text-center mb-2 mx-50"><!----><!---->
                        <div class="card-body"><!----><!---->
                            <div class="icon-wrapper">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-activity">
                                    <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                </svg>
                            </div>
                            <p class="card-text icon-name text-truncate mb-0 mt-1"> Status Pembayaran </p>
                        </div><!----><!---->
                    </div>
                </div>
                <div class="col">
                    <div class="card icon-card cursor-pointer text-center mb-2 mx-50"><!----><!---->
                        <div class="card-body"><!----><!---->
                            <div class="icon-wrapper">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-activity">
                                    <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                </svg>
                            </div>
                            <p class="card-text icon-name text-truncate mb-0 mt-1"> Pelanggan Detail </p>
                        </div><!----><!---->
                    </div>
                </div>
                <div class="col" wire:click.prevent="menu('/admin/user')">
                    <div class="card icon-card cursor-pointer text-center mb-2 mx-50"><!----><!---->
                        <div class="card-body"><!----><!---->
                            <div class="icon-wrapper">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-activity">
                                    <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                </svg>
                            </div>
                            <p class="card-text icon-name text-truncate mb-0 mt-1"> Membuat pengguna </p>
                        </div><!----><!---->
                    </div>
                </div>
                <div class="col" wire:click.prevent="menu('/kwitansi-team/verifikasi-payment')">
                    <div class="card icon-card cursor-pointer text-center mb-2 mx-50"><!----><!---->
                        <div class="card-body"><!----><!---->
                            <div class="icon-wrapper">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-activity">
                                    <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                </svg>
                            </div>
                            <p class="card-text icon-name text-truncate mb-0 mt-1"> Verifikasi pembayaran </p>
                        </div><!----><!---->
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
