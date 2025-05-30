<div class="nk-content">
    <div class="nk-block nk-block-middle nk-auth-body wide-xs">
        <div class="brand-logo pb-4 text-center">
            <a href="{{ route('home.index') }}" class="logo-link">
                <img class="logo-light logo-img logo-img-lg" src="{{ url('assets/images/logo.png') }}" srcset="{{ url('assets/images/logo.png') }} 2x" alt="لوگو" />
                <img class="logo-dark logo-img logo-img-lg" src="{{ url('assets/images/logo.png') }}" srcset="{{ url('assets/images/logo.png') }} 2x" alt="لوگوی تاریک" />
            </a>
        </div>
        <div class="card card-bordered">
            <div class="card-inner card-inner-lg" @if(LaravelLocalization::getCurrentLocale() && LaravelLocalization::getCurrentLocale() == 'fa') dir="rtl" @else dir="ltr" @endif>
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        <h4 class="nk-block-title">{{ __('messages.login_admin') }}</h4>
                    </div>
                </div>
                <form wire:submit.prevent="login">
                    <div class="form-group">
                        <div class="form-label-group">
                            <label class="form-label" for="default-01">{{ __('messages.email_or_username') }}</label>
                        </div>
                        <div class="form-control-wrap">
                            <input type="text" wire:model.blur="username" class="form-control form-control-lg" id="default-01" placeholder="{{ __('messages.enter_email_or_username') }}" />
                            @error('username') <span class="d-block text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <label class="form-label" for="password">{{ __('messages.password') }}</label>
                            <a class="link link-primary link-sm" href="html/pages/auths/auth-reset-v2.html">{{ __('messages.forgot_your_password') }}</a>
                        </div>
                        <div class="form-control-wrap">
                            <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                            </a>
                            <input type="password" wire:model.blur="password" class="form-control form-control-lg" id="password" placeholder="{{ __('messages.enter_your_password') }}" />
                            @error('password') <span class="d-block text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-primary btn-block">
                            <div wire:loading wire:target="login">
                                <span class="spinner-border spinner-border-sm" wire:loading.class="d-flex"  aria-hidden="true"></span>
                                <span class="visually-hidden" role="status">Loading...</span>
                            </div>
                            <span wire:loading.class="d-none" wire:target="login">{{ __('messages.login') }}</span>
                        </button>
                    </div>
                </form>
                @error('invalid_login')
                    <div class="alert alert-danger mb-0 mt-3 p-2 text-center">{{ __('messages.invalid_login') }}</div>
                @enderror
                <div class="text-center pt-4 pb-3">
                    <h6 class="overline-title overline-title-sap"><span>{{ __('messages.or') }}</span></h6>
                </div>
                <ul class="nav justify-center gx-4">
                    <li class="nav-item">
                        <button class="nav-link" wire:click="authGoogle">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                                  <path d="M15.545 6.558a9.4 9.4 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.7 7.7 0 0 1 5.352 2.082l-2.284 2.284A4.35 4.35 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.8 4.8 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.7 3.7 0 0 0 1.599-2.431H8v-3.08z"/>
                                </svg>
                            </span>
                            <div wire:loading class="m-1" wire:target="authGoogle">
                                <span class="spinner-grow spinner-grow-sm" wire:loading.class="d-flex"  aria-hidden="true"></span>
                                <span class="visually-hidden" role="status">Loading...</span>
                            </div>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="nk-footer nk-auth-footer-full">
        <div class="container wide-lg">
            <div class="row g-3">
                <div class="col-lg-6 order-lg-last">
                    <ul class="nav nav-sm justify-content-center justify-content-lg-end">
                        <li class="nav-item dropup">
                            @if(LaravelLocalization::getCurrentLocale())
                                @if(LaravelLocalization::getCurrentLocale() == 'fa')
                                    <a class="dropdown-toggle dropdown-indicator has-indicator nav-link" data-bs-toggle="dropdown" data-offset="0,10"><span>{{ __('messages.persian') }}</span></a>
                                @else
                                    <a class="dropdown-toggle dropdown-indicator has-indicator nav-link" data-bs-toggle="dropdown" data-offset="0,10"><span>{{ __('messages.english') }}</span></a>
                                @endif
                            @endif
                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                <ul class="language-list" wire:ignore>
                                    @if(LaravelLocalization::getCurrentLocale())
                                        @if(LaravelLocalization::getCurrentLocale() == 'fa')
                                            <li>
                                                <a href="{{ LaravelLocalization::getLocalizedURL('en') }}" class="language-item">
                                                    <img src="{{ url('assets/admin/images/flags/english.png') }}" alt="" class="language-flag" />
                                                    <span class="language-name">{{ __('messages.english') }}</span>
                                                </a>
                                            </li>
                                        @else
                                            <li>
                                                <a href="{{ LaravelLocalization::getLocalizedURL('fa') }}" class="language-item">
                                                    <img src="{{ url('assets/admin/images/flags/iran.png') }}" alt="" class="language-flag" />
                                                    <span class="language-name">{{ __('messages.persian') }}</span>
                                                </a>
                                            </li>
                                        @endif
                                    @endif
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="nk-block-content text-center text-lg-start">
                        @if(LaravelLocalization::getCurrentLocale())
                            @if(LaravelLocalization::getCurrentLocale() == 'fa')
                                <p class="text-soft">کليه حقوق و محتوای اين سایت متعلق به <a href="{{ route('home.index') }}">امیررضا جعفری</a> می باشد.</p>
                            @else
                                <p class="text-soft">Copyright {{ now()->year }} , <a href="{{ route('home.index') }}">Amirreza Jafari</a> All Rights Reserved.</p>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
