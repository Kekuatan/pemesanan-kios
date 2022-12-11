<div>
    <div class="container">
        <div class="row content-header">
            <div class="bredcumb-header-dasboard content-header-left mb-2 col-md-9 col-12">
                <div class="row breadcrumbs-top">
                    <div class="col-12"><h2 class="content-header-title float-left pr-1 mb-0"> Pemesanan Kios</h2>
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
        <div data-v-36ff53bc="" class="card card-body" style="width: 600px;margin: auto;">
            <div style="width: 500px; margin: auto">
                <h4 class="text-center text-primary"> Pembuatan anggota </h4>
                <hr data-v-36ff53bc="" class="invoice-spacing mb-3">
                <div class="mb-2 row right-input">
                    <label for="staticEmail" class="col-sm-4 col-form-label">Nama</label>
                    <div class="col-sm-8">
                        <input type="text" wire:model="name" class="right-input form-control " id="">
                    </div>
                </div>
                <div class="mb-2 row right-input">
                    <label for="staticEmail" class="col-sm-4 col-form-label">Email</label>
                    <div class="col-sm-8">
                        <input type="text" wire:model="email" class="right-input form-control " id="">
                    </div>
                </div>
                <div class="mb-2 row right-input">
                    <label for="staticEmail" class="col-sm-4 col-form-label">Password</label>
                    <div class="col-sm-8">
                        <input type="text" wire:model="password" class="right-input form-control " id="">
                    </div>
                </div>
            </div>

            <button wire:click="save" data-v-36ff53bc=""
                    type="button"
                    class="btn mb-75 btn-primary btn-block collapsed"
                    aria-expanded="false" aria-controls="sidebar-send-invoice"
                    style="overflow-anchor: none;"> Save
            </button>
        </div>
    </div>
</div>
