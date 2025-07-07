<header class="main-header">
    <div class="header-upper">
        <div class="container">
            <div class="header-inner d-flex align-items-center">
                @if($setting && $setting->getTranslation('logo'))
                    <div class="logo-outer">
                        <div class="logo"><a href="{{ route('home.index') }}"><img src="{{ url($setting->getTranslation('logo')) }}" alt="{{ $setting->getTranslation('title') ?? 'Amirreza Jafari' }}" title="{{ $setting->getTranslation('title') ?? 'Amirreza Jafari' }}"></a>
                        </div>
                    </div>
                @else
                    <div class="logo-outer">
                        <div class="logo"><a href="{{ route('home.index') }}"><img src="{{ url('assets/images/logo.png') }}" alt="Logo" title="Logo"></a>
                        </div>
                    </div>
                @endif
                <div class="nav-outer clearfix mx-auto">
                    <nav class="main-menu navbar-expand-lg">
                        <div class="navbar-header">
                            <div class="mobile-logo"><a href="{{ route('home.index') }}"><img src="{{ url('assets/images/logo.png') }}" alt="Logo" title="Logo"></a></div>
                            <div class="d-flex align-items-center gap-3">
                                @if(LaravelLocalization::getCurrentLocale())
                                    @if(LaravelLocalization::getCurrentLocale() == 'fa')
                                        <a href="{{ LaravelLocalization::getLocalizedURL('en') }}" class="theme-btn p-0 border-dark">
                                            <img src="{{ url('assets/images/country/usa.png') }}" width="38px" alt="">
                                        </a>
                                    @else
                                        <a href="{{ LaravelLocalization::getLocalizedURL('fa') }}" class="theme-btn p-0 border-dark">
                                            <img src="{{ url('assets/images/country/iran.png') }}" width="38px" alt="">
                                        </a>
                                    @endif
                                @endif
                                <button type="button" class="navbar-toggle" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="navigation onepage clearfix py-0 rounded">
                                <li><a class="nav-link-click" href="{{ route('home.index') }}">{{ __('messages.home') }}</a></li>
                                @if($setting && $setting->getTranslation('show_about_me_menu_btn') && $setting->getTranslation('show_about_me_menu_btn') == 'active')
                                    <li><a class="nav-link-click" href="{{ route('home.about') }}">{{ __('messages.about') }}</a></li>
                                @endif
                                @if($setting && $setting->getTranslation('show_services_menu_btn') && $setting->getTranslation('show_services_menu_btn') == 'active')
                                    <li><a class="nav-link-click" href="{{ route('home.services') }}">{{ __('messages.services') }}</a></li>
                                @endif
                                @if($setting && $setting->getTranslation('show_works_menu_btn') && $setting->getTranslation('show_works_menu_btn') == 'active')
                                    <li><a class="nav-link-click" href="{{ route('home.works') }}">{{ __('messages.works') }}</a></li>
                                @endif
                                @if($setting && $setting->getTranslation('show_contact_menu_btn') && $setting->getTranslation('show_contact_menu_btn') == 'active')
                                    <li><a class="nav-link-click" href="{{ route('home.contact') }}">{{ __('messages.contact') }}</a></li>
                                @endif
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="menu-btns">
                    <a href="{{ route('home.contact') }}" class="theme-btn">{{ __('messages.cooperation') }}<i class="ri-shake-hands-line"></i></a>
                    @if(LaravelLocalization::getCurrentLocale())
                        @if(LaravelLocalization::getCurrentLocale() == 'fa')
                            <a href="{{ LaravelLocalization::getLocalizedURL('en') }}" class="theme-btn p-0">
                                <img src="{{ url('assets/images/country/usa.png') }}" width="45px" alt="">
                            </a>
                        @else
                            <a href="{{ LaravelLocalization::getLocalizedURL('fa') }}" class="theme-btn p-0">
                                <img src="{{ url('assets/images/country/iran.png') }}" width="45px" alt="">
                            </a>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</header>
