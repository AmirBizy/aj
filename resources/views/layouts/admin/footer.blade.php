<div class="nk-footer">
    <div class="container-fluid">
        <div class="nk-footer-wrap" @if(LaravelLocalization::getCurrentLocale() && LaravelLocalization::getCurrentLocale() == 'en') dir="ltr" @endif>
            @if(LaravelLocalization::getCurrentLocale())
                @if(LaravelLocalization::getCurrentLocale() == 'fa')
                    <div class="nk-footer-copyright"><p>کليه حقوق و محتوای اين سایت متعلق به <a href="{{ route('home.index') }}">امیررضا جعفری</a> می باشد و هر گونه کپی برداری از محتوا سایت غیر مجاز و بدون رضایت است.</p></div>
                @else
                    <div class="nk-footer-copyright"><p>Copyright {{ now()->year }} , <a href="{{ route('home.index') }}">Amirreza Jafari</a> All Rights Reserved.</p></div>
                @endif
            @endif
            <div class="nk-footer-links">
                <ul class="nav nav-sm">
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
                                                <span class="language-name">{{ __('messages.english') }}</span>
                                            </a>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{ LaravelLocalization::getLocalizedURL('fa') }}" class="language-item">
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
        </div>
    </div>
</div>
