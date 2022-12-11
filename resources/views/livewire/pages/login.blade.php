<div>
    {{--    <input wire:model="username" type="text" >--}}
    {{--    <input wire:model="password" type="text" >--}}

    <div id="app" class="h-100">
        <div>
            <div class="auth-wrapper auth-v2">
                <div class="row auth-inner m-0">
                    <div class="d-none d-lg-flex align-items-center p-5 col-lg-8">
                        <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img
                                src="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/img/login-v2.72cd8a26.svg"
                                alt="Login V2" class="img-fluid"></div>
                    </div>
                    <div class="d-flex align-items-center auth-bg px-2 p-lg-5 col-lg-4">
                        <div class="px-xl-2 mx-auto col-sm-8 col-md-6 col-lg-12"><h2
                                class="card-title mb-1 font-weight-bold"> Welcome to Vuexy! 👋   </h2>
                            <p class="card-text mb-2"> Please sign-in to your account and start the adventure </p>
                            <div role="alert" aria-live="polite" aria-atomic="true" class="alert alert-primary"><!---->
                                <div class="alert-body font-small-2"><p><small class="mr-50"><span
                                                class="font-weight-bold">Admin:</span> admin@demo.com | admin</small>
                                    </p>
                                    <p><small class="mr-50"><span class="font-weight-bold">Client:</span>
                                            client@demo.com | client</small></p></div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="position-absolute feather feather-help-circle"
                                     style="top: 10px; right: 10px;">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                    <line x1="12" y1="17" x2="12.01" y2="17"></line>
                                </svg>
                            </div>
                            <span><form class="auth-login-form mt-2" data-bitwarden-watching="1"><div role="group"
                                                                                                      class="form-group"
                                                                                                      id="__BVID__2289"><label
                                            for="login-email" class="d-block" id="__BVID__2289__BV_label_">Email</label><div><span><input wire:model ="username"
                                                    id="login-email" name="login-email" type="text"
                                                    placeholder="john@example.com" class="form-control"><small
                                                    class="text-danger"></small></span><!----><!----><!----></div></div><fieldset
                                        class="form-group" id="__BVID__2292"><!----><div>
                                            <div
                                                class="d-flex justify-content-between"><label for="login-password">Password</label><a
                                                    href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/forgot-password"
                                                    class=""
                                                    target="_self"><small>Forgot Password?</small></a></div><span><div
                                                    role="group" class="input-group input-group-merge"><!----><input
                                                        wire:model ="password"
                                                        id="login-password" name="login-password" type="password"
                                                        placeholder="Password" class="form-control-merge form-control"><div
                                                        class="input-group-append"><div class="input-group-text"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="14px"
                                                                height="14px" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="cursor-pointer feather feather-eye"><path
                                                                    d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle
                                                                    cx="12" cy="12" r="3"></circle></svg></div></div>
                                                    <!----></div><small class="text-danger"></small></span><!---->
                                            <!----><!----></div></fieldset><fieldset class="form-group"
                                                                                     id="__BVID__2297"><!----><div><div
                                                class="custom-control custom-checkbox"><input id="remember-me"
                                                                                              type="checkbox"
                                                                                              name="checkbox-1"
                                                                                              class="custom-control-input"
                                                                                              value="true"><label
                                                    for="remember-me" class="custom-control-label"> Remember Me </label></div>
                                            <!----><!----><!----></div></fieldset>
                                    <button type="submit" wire:click.prevent="submit"
                                                                                          class="btn btn-primary btn-block"> Sign in </button></form></span>
                            <p class="card-text text-center mt-2"><span>New on our platform? </span><a
                                    href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/register" class=""
                                    target="_self"><span> Create an account</span></a></p>
                            <div class="divider my-2">
                                <div class="divider-text"> or</div>
                            </div>
                            <div class="auth-footer-btn d-flex justify-content-center"><a href="javascript:void(0)"
                                                                                          target="_self"
                                                                                          class="btn btn-facebook">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px"
                                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                         stroke-linecap="round" stroke-linejoin="round"
                                         class="feather feather-facebook">
                                        <path
                                            d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                    </svg>
                                </a><a href="javascript:void(0)" target="_self" class="btn btn-twitter">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px"
                                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                         stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter">
                                        <path
                                            d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                                    </svg>
                                </a><a href="javascript:void(0)" target="_self" class="btn btn-google">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px"
                                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                         stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                        <path
                                            d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                        <polyline points="22,6 12,13 2,6"></polyline>
                                    </svg>
                                </a><a href="javascript:void(0)" target="_self" class="btn btn-github">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px"
                                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                         stroke-linecap="round" stroke-linejoin="round" class="feather feather-github">
                                        <path
                                            d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div data-v-8314f794="" class="btn-scroll-to-top">
            <button data-v-8314f794="" type="button" class="btn btn-icon btn-primary">
                <svg data-v-8314f794="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                     viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" class="feather feather-arrow-up">
                    <line data-v-8314f794="" x1="12" y1="19" x2="12" y2="5"></line>
                    <polyline data-v-8314f794="" points="5 12 12 5 19 12"></polyline>
                </svg>
            </button>
        </div>
    </div>
</div>
