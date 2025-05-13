@extends('layouts.auth.master')

@section('content')
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content">
                    <div class="nk-block nk-block-middle nk-auth-body wide-xs">
                        <div class="brand-logo pb-4 text-center">
                            <a href="{{ route('home.index') }}" class="logo-link">
                                <img class="logo-light logo-img logo-img-lg" src="{{ url('assets/images/logo.png') }}" srcset="{{ url('assets/images/logo.png') }} 2x" alt="لوگو" />
                                <img class="logo-dark logo-img logo-img-lg" src="{{ url('assets/images/logo.png') }}" srcset="{{ url('assets/images/logo.png') }} 2x" alt="لوگوی تاریک" />
                            </a>
                        </div>
                        <div class="card card-bordered">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title">{{ __('messages.login_admin') }}</h4>
{{--                                        <div class="nk-block-des">--}}
{{--                                            <p>با استفاده از ایمیل و رمز عبور خود به پنل دش‌لایت دسترسی پیدا کنید.</p>--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
                                <form action="{{ route('home.index') }}">
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="default-01">{{ __('messages.email_or_username') }}</label>
                                        </div>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control form-control-lg" id="default-01" placeholder="نشانی ایمیل یا نام کاربری خود را وارد کنید" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="password">رمز عبور</label>
                                            <a class="link link-primary link-sm" href="html/pages/auths/auth-reset-v2.html">رمز عبور را فراموش کردید؟</a>
                                        </div>
                                        <div class="form-control-wrap">
                                            <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input type="password" class="form-control form-control-lg" id="password" placeholder="رمز عبور خود را وارد کنید" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-lg btn-primary btn-block">ورود</button>
                                    </div>
                                </form>
                                <div class="text-center pt-4 pb-3">
                                    <h6 class="overline-title overline-title-sap"><span>یا</span></h6>
                                </div>
                                <ul class="nav justify-center gx-4">
                                    <li class="nav-item"><a class="nav-link" href="#">فیس بوک</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">گوگل</a></li>
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
                                                <ul class="language-list">
                                                    @if(LaravelLocalization::getCurrentLocale())
                                                        @if(LaravelLocalization::getCurrentLocale() == 'fa')
                                                            <li>
                                                                <a href="{{ LaravelLocalization::getLocalizedURL('en') }}" class="language-item">
                                                                    <img src="{{ url('assets/auth/images/flags/english.png') }}" alt="" class="language-flag" />
                                                                    <span class="language-name">{{ __('messages.english') }}</span>
                                                                </a>
                                                            </li>
                                                        @else
                                                            <li>
                                                                <a href="{{ LaravelLocalization::getLocalizedURL('fa') }}" class="language-item">
                                                                    <img src="{{ url('assets/auth/images/flags/iran.png') }}" alt="" class="language-flag" />
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
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
@endsection
