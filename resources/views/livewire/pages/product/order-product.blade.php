<div>
    <div class="container">
        {{--    <div class="custom-control custom-control-inline custom-switch">--}}
        {{--        <input type="checkbox"--}}
        {{--               name="check-button"--}}
        {{--               class="custom-control-input"--}}
        {{--               value="true"--}}
        {{--               checked--}}
        {{--               id="a"><label--}}
        {{--            class="custom-control-label" for="a"> Active Switch </label>--}}
        {{--    </div>--}}

        {{--        <select class="custom-select">--}}
        {{--            <option value="">SIPTU/</option>--}}
        {{--            <option value="a">This is First option</option>--}}
        {{--            <option value="b">Default Selected Option</option>--}}
        {{--            <option value="c">This is another option</option>--}}
        {{--            <option disabled="disabled" value="d">This one is disabled</option>--}}
        {{--        </select>--}}

        {{--    <div data-v-aa799a9e="" role="group" class="input-group"><!---->--}}
        {{--        <label for="basic-password">Password</label>--}}
        {{--        <div data-v-aa799a9e="" class="input-group-prepend">--}}
        {{--            <div data-v-aa799a9e="" class="input-group-text">--}}
        {{--                <svg data-v-aa799a9e="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px"--}}
        {{--                     viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"--}}
        {{--                     stroke-linejoin="round" class="feather feather-search">--}}
        {{--                    <circle data-v-aa799a9e="" cx="11" cy="11" r="8"></circle>--}}
        {{--                    <line data-v-aa799a9e="" x1="21" y1="21" x2="16.65" y2="16.65"></line>--}}
        {{--                </svg>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--        <input type="text" placeholder="Search" class="form-control" data-v-aa799a9e="" id="__BVID__4015"><!---->--}}
        {{--    </div>--}}
        <div class="row content-header ">
            <div class="bredcumb-header-dasboard content-header-left mb-2 col-md-9 col-12">
                <div class="row breadcrumbs-top">
                    <div class="col-12"><h2 class="content-header-title float-left pr-1 mb-0"> Form Validation </h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"
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


        <fieldset class="form-group bg-white p-2" data-v-aa799a9e="" id="__BVID__4016"><!---->
            <div class="mx-auto width-40-per text-center">
                <label for="basic-password" class="">No Tempat Usaha</label>

                <div role="group" class="input-group "><!---->
                    <div data-v-aa799a9e="" class="input-group-prepend">
                        <div data-v-aa799a9e="" class="input-group-text">
                            <svg data-v-aa799a9e="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                 stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-search">
                                <circle data-v-aa799a9e="" cx="11" cy="11" r="8"></circle>
                                <line data-v-aa799a9e="" x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg>
                        </div>
                    </div>
                    <input id="basic-password" type="text"
                           wire:model="no_siptu_or_shptu"
                           placeholder="Masukan nomer tempat usaha" class="form-control">
                    {{--                <div class="input-group-append">--}}
                    {{--                    <div class="input-group-text">--}}
                    {{--                        <svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24"--}}
                    {{--                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"--}}
                    {{--                             stroke-linejoin="round" class="cursor-pointer feather feather-eye">--}}
                    {{--                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>--}}
                    {{--                            <circle cx="12" cy="12" r="3"></circle>--}}
                    {{--                        </svg>--}}
                    {{--                    </div>--}}
                    {{--                </div><!---->--}}
                </div><!----><!----><!---->
            </div>
            {{$no_siptu_or_shptu}}
            {{count($products)}}
        </fieldset>


        <div id="icons-container" class="d-flex flex-wrap mx-auto justify-content-around">
            @foreach($products as $product)
            <div class="card icon-card cursor-pointer text-center mb-2 mx-50" wire:click="link('{{$product->id}}')"><!----><!---->
                <div class="card-body"><!----><!---->
                    <div class="icon-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round" class="feather feather-home">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                    </div>
                    <p class="card-text icon-name text-truncate mb-0 mt-1"> {{$product->tu_no}} </p>
                    <p class="card-text icon-name text-truncate mb-0 mt-1"> {{$product->siho_name}} </p>
                </div><!----><!----></div>
            @endforeach
        </div>


    </div>
</div>
