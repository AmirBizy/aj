<div class="nk-sidebar nk-sidebar-fixed is-dark" data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-menu-trigger">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
        </div>
        <div class="nk-sidebar-brand">
            <a href="{{ route('admin.index') }}" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img" src="{{ url('assets/admin/images/logo.png') }}" srcset="{{ url('assets/admin/images/logo.png') }} 2x" alt="لوگو" />
                <img class="logo-dark logo-img" src="{{ url('assets/admin/images/logo-dark.png') }}" srcset="{{ url('assets/admin/images/logo-dark.png') }} 2x" alt="لوگوی تاریک" />
            </a>
        </div>
    </div>
    <!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element nk-sidebar-body">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-item {{ Str::startsWith(Route::currentRouteName(), ['admin.index']) ? 'active current-page' : '' }}">
                        <a href="{{ route('admin.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                            <span class="nk-menu-text">داشبورد</span>
                        </a>
                    </li>
                    <li class="nk-menu-item {{ Str::startsWith(Route::currentRouteName(), ['admin.about_me.index']) ? 'active current-page' : '' }}">
                        <a href="{{ route('admin.about_me.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-user-alt"></em></span>
                            <span class="nk-menu-text">درباره من</span>
                        </a>
                    </li>
                    <!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-calendar-booking-fill"></em></span>
                            <span class="nk-menu-text">رزروها</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="html/hotel/bookings.html" class="nk-menu-link"><span class="nk-menu-text">همه رزروها</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/hotel/booking-add.html" class="nk-menu-link"><span class="nk-menu-text">افزودن رزرو</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/hotel/booking-edit.html" class="nk-menu-link"><span class="nk-menu-text">ویرایش رزرو</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-home-fill"></em></span>
                            <span class="nk-menu-text">اتاق ها</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="html/hotel/room-list.html" class="nk-menu-link"><span class="nk-menu-text">همه اتاق ها</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/hotel/room-type.html" class="nk-menu-link"><span class="nk-menu-text">انواع اتاق</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- .nk-menu-item -->
                </ul>
                <!-- .nk-menu -->
            </div>
            <!-- .nk-sidebar-menu -->
        </div>
        <!-- .nk-sidebar-content -->
    </div>
    <!-- .nk-sidebar-element -->
</div>
