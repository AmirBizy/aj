<div class="nk-header nk-header-fixed is-light">
    <div class="container-fluid">
        <div class="nk-header-wrap">
            <div class="nk-menu-trigger d-xl-none ms-n1">
                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
            </div>
            <div class="nk-header-brand d-xl-none">
                <a href="html/index.html" class="logo-link">
                    <img class="logo-light logo-img" src="{{ url('assets/admin/images/logo.png') }}" srcset="{{ url('assets/admin/images/logo.png') }} 2x" alt="لوگو" />
                    <img class="logo-dark logo-img" src="{{ url('assets/admin/images/logo-dark.png') }}" srcset="{{ url('assets/admin/images/logo-dark.png') }} 2x" alt="لوگوی تاریک" />
                </a>
            </div>
            <!-- .nk-header-brand -->
            <div class="nk-header-news d-none d-xl-block">
                <div class="nk-news-list">
                    <a class="nk-news-item" href="#">
                        <div class="nk-news-icon">
                            <em class="icon ni ni-card-view"></em>
                        </div>
                        <div class="nk-news-text">
                            <p>آیا از آخرین به روز رسانی سال 1402 اطلاع دارید؟ <span> نمای کلی ما هم اکنون در یوتیوب در دسترس است</span></p>
                            <em class="icon ni ni-external"></em>
                        </div>
                    </a>
                </div>
            </div>
            <!-- .nk-header-news -->
            <div class="nk-header-tools">
                <ul class="nk-quick-nav">
                    <li class="dropdown language-dropdown d-none d-sm-block me-n1">
                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                            <div class="quick-icon border border-light">
                                <img class="icon" src="{{ url('assets/admin/images/flags/iran-sq.png') }}" alt="" />
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-s1">
                            <ul class="language-list">
                                <li>
                                    <a href="#" class="language-item">
                                        <img src="{{ url('assets/admin/images/flags/iran.png') }}" alt="" class="language-flag" />
                                        <span class="language-name">فارسی</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="language-item">
                                        <img src="{{ url('assets/admin/images/flags/english.png') }}" alt="" class="language-flag" />
                                        <span class="language-name">انگلیسی</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="language-item">
                                        <img src="{{ url('assets/admin/images/flags/germany.png') }}" alt="" class="language-flag" />
                                        <span class="language-name">آلمانی</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="language-item">
                                        <img src="{{ url('assets/admin/images/flags/french.png') }}" alt="" class="language-flag" />
                                        <span class="language-name">فرانسوی</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- .dropdown -->
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <div class="user-toggle">
                                <div class="user-avatar sm">
                                    <em class="icon ni ni-user-alt"></em>
                                </div>
                                <div class="user-info d-none d-md-block">
                                    <div class="user-status">مدیر</div>
                                    <div class="user-name dropdown-indicator">{{ $auth_user && $auth_user->name ? $auth_user->name : 'ادمین' }}</div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end dropdown-menu-s1">
                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                <div class="user-card">
                                    <div class="user-avatar">
                                        @if(count(explode(' ' , $auth_user->name)) >= 2)
                                            <span>{{ substr(explode(' ' , $auth_user->name)[0] , 0 ,1) }} {{ substr(explode(' ' , $auth_user->name)[1] , 0 ,1) }}</span>
                                        @else
                                            <span>{{ substr(explode(' ' , $auth_user->name)[0] , 0 ,1) }}</span>
                                        @endif
                                    </div>
                                    <div class="user-info">
                                        <span class="lead-text">{{ $auth_user && $auth_user->name ? $auth_user->name : 'ادمین' }}</span>
                                        <span class="sub-text">{{ $auth_user && $auth_user->email ? $auth_user->email : 'ادمین' }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li>
                                        <a href="#"><em class="icon ni ni-user-alt"></em><span>مشاهده پروفایل</span></a>
                                    </li>
                                    <li>
                                        <a href="html/hotel/settings.html"><em class="icon ni ni-setting-alt"></em><span>تنظیمات حساب</span></a>
                                    </li>
                                    <li>
                                        <a href="html/hotel/settings-activity-log.html"><em class="icon ni ni-activity-alt"></em><span>فعالیت ورود</span></a>
                                    </li>
                                    <li>
                                        <a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>حالت تاریک</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list py-1">
                                    <li>
                                        <form action="{{ route('logout') }}" method="post">
                                            @csrf
                                            @method('POST')
                                            <button onclick="return confirm('برای خروج از پنل مدیریت مطمئن هستید؟');" class="d-flex align-items-center p-1 w-100 bg-transparent border-0">
                                                <em class="icon ni ni-signout"></em><span>خروج</span>
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <!-- .dropdown -->
                    <li class="dropdown notification-dropdown me-n1">
                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                            <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end dropdown-menu-s1">
                            <div class="dropdown-head">
                                <span class="sub-title nk-dropdown-title">اطلاع رسانی ها</span>
                                <a href="#">علامت گذاری همه به عنوان خوانده شده</a>
                            </div>
                            <div class="dropdown-body">
                                <div class="nk-notification">
                                    <div class="nk-notification-item dropdown-inner">
                                        <div class="nk-notification-icon">
                                            <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                        </div>
                                        <div class="nk-notification-content">
                                            <div class="nk-notification-text">شما درخواست <span>برداشت</span> کردید</div>
                                            <div class="nk-notification-time">2 ساعت پیش</div>
                                        </div>
                                    </div>
                                    <div class="nk-notification-item dropdown-inner">
                                        <div class="nk-notification-icon">
                                            <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                        </div>
                                        <div class="nk-notification-content">
                                            <div class="nk-notification-text"><span>سفارش واریز</span> شما ثبت شد</div>
                                            <div class="nk-notification-time">2 ساعت پیش</div>
                                        </div>
                                    </div>
                                    <div class="nk-notification-item dropdown-inner">
                                        <div class="nk-notification-icon">
                                            <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                        </div>
                                        <div class="nk-notification-content">
                                            <div class="nk-notification-text">شما درخواست <span>برداشت</span> کردید</div>
                                            <div class="nk-notification-time">2 ساعت پیش</div>
                                        </div>
                                    </div>
                                    <div class="nk-notification-item dropdown-inner">
                                        <div class="nk-notification-icon">
                                            <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                        </div>
                                        <div class="nk-notification-content">
                                            <div class="nk-notification-text"><span>سفارش واریز</span> شما ثبت شد</div>
                                            <div class="nk-notification-time">2 ساعت پیش</div>
                                        </div>
                                    </div>
                                    <div class="nk-notification-item dropdown-inner">
                                        <div class="nk-notification-icon">
                                            <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                        </div>
                                        <div class="nk-notification-content">
                                            <div class="nk-notification-text">شما درخواست <span>برداشت</span> کردید</div>
                                            <div class="nk-notification-time">2 ساعت پیش</div>
                                        </div>
                                    </div>
                                    <div class="nk-notification-item dropdown-inner">
                                        <div class="nk-notification-icon">
                                            <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                        </div>
                                        <div class="nk-notification-content">
                                            <div class="nk-notification-text"><span>سفارش واریز</span> شما ثبت شد</div>
                                            <div class="nk-notification-time">2 ساعت پیش</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- .nk-notification -->
                            </div>
                            <!-- .nk-dropdown-body -->
                            <div class="dropdown-foot center">
                                <a href="#">مشاهده همه</a>
                            </div>
                        </div>
                    </li>
                    <!-- .dropdown -->
                </ul>
                <!-- .nk-quick-nav -->
            </div>
            <!-- .nk-header-tools -->
        </div>
        <!-- .nk-header-wrap -->
    </div>
    <!-- .container-fliud -->
</div>
