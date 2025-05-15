@extends('layouts.admin.master')

@section('content')
    <div class="nk-content">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">نمای کلی داشبورد</h3>
                                <div class="nk-block-des text-soft">
                                    <p>به قالب داشبورد دش‌لایت خوش آمدید.</p>
                                </div>
                            </div>
                            <!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">
                                            <li>
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-bs-toggle="dropdown">
                                                        <em class="d-none d-sm-inline icon ni ni-calender-date"></em><span>30 روز <span class="d-none d-md-inline">گذشته</span></span>
                                                        <em class="dd-indc icon ni ni-chevron-right"></em>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li>
                                                                <a href="#"><span>30 روز گذشته</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><span>6 ماه گذشته</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><span>1 سال گذشته</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nk-block-tools-opt">
                                                <a href="#" class="btn btn-primary"><em class="icon ni ni-reports"></em><span>گزارش ها</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- .nk-block-head-content -->
                        </div>
                        <!-- .nk-block-between -->
                    </div>
                    <!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="row g-gs">
                            <div class="col-md-4">
                                <div class="card card-bordered card-full">
                                    <div class="card-inner">
                                        <div class="card-title-group align-start mb-0">
                                            <div class="card-title">
                                                <h6 class="title">کل رزروها</h6>
                                            </div>
                                            <div class="card-tools">
                                                <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip" data-bs-placement="right" title="کل رزروها"></em>
                                            </div>
                                        </div>
                                        <div class="card-amount">
                                            <span class="amount"> 11,230 </span>
                                            <span class="change down text-danger"><em class="icon ni ni-arrow-long-down"></em>1.93%</span>
                                        </div>
                                        <div class="invest-data">
                                            <div class="invest-data-amount g-2">
                                                <div class="invest-data-history">
                                                    <div class="title">این ماه</div>
                                                    <div class="amount">1913</div>
                                                </div>
                                                <div class="invest-data-history">
                                                    <div class="title">این هفته</div>
                                                    <div class="amount">1125</div>
                                                </div>
                                            </div>
                                            <div class="invest-data-ck">
                                                <canvas class="iv-data-chart" id="totalBooking"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- .card -->
                            </div>
                            <!-- .col -->
                            <div class="col-md-4">
                                <div class="card card-bordered card-full">
                                    <div class="card-inner">
                                        <div class="card-title-group align-start mb-0">
                                            <div class="card-title">
                                                <h6 class="title">اتاق های موجود</h6>
                                            </div>
                                            <div class="card-tools">
                                                <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip" data-bs-placement="right" title="اتاق های موجود"></em>
                                            </div>
                                        </div>
                                        <div class="card-amount">
                                            <span class="amount"> 312 </span>
                                        </div>
                                        <div class="invest-data">
                                            <div class="invest-data-amount g-2">
                                                <div class="invest-data-history">
                                                    <div class="title">رزرو شده (ماه)</div>
                                                    <div class="amount">913</div>
                                                </div>
                                                <div class="invest-data-history">
                                                    <div class="title">رزرو شده (هفته)</div>
                                                    <div class="amount">125</div>
                                                </div>
                                            </div>
                                            <div class="invest-data-ck">
                                                <canvas class="iv-data-chart" id="totalRoom"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- .card -->
                            </div>
                            <!-- .col -->
                            <div class="col-md-4">
                                <div class="card card-bordered card-full">
                                    <div class="card-inner">
                                        <div class="card-title-group align-start mb-0">
                                            <div class="card-title">
                                                <h6 class="title">هزینه ها</h6>
                                            </div>
                                            <div class="card-tools">
                                                <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip" data-bs-placement="right" title="کل هزینه ها"></em>
                                            </div>
                                        </div>
                                        <div class="card-amount">
                                            <span class="amount"> 79,358,000 <span class="currency currency-usd">تومان</span> </span>
                                        </div>
                                        <div class="invest-data">
                                            <div class="invest-data-amount g-2">
                                                <div class="invest-data-history">
                                                    <div class="title">این ماه</div>
                                                    <div class="amount">3,540,000 <span class="currency currency-usd">تومان</span></div>
                                                </div>
                                                <div class="invest-data-history">
                                                    <div class="title">این هفته</div>
                                                    <div class="amount">1,259,000 <span class="currency currency-usd">تومان</span></div>
                                                </div>
                                            </div>
                                            <div class="invest-data-ck">
                                                <canvas class="iv-data-chart" id="totalExpenses"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- .card -->
                            </div>
                            <!-- .col -->
                            <div class="col-md-6 col-xxl-3">
                                <div class="card card-bordered card-full">
                                    <div class="card-inner-group">
                                        <div class="card-inner">
                                            <div class="card-title-group">
                                                <div class="card-title">
                                                    <h6 class="title">مشتریان جدید</h6>
                                                </div>
                                                <div class="card-tools">
                                                    <a href="html/hotel/customers.html" class="link">مشاهده همه</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-inner card-inner-md">
                                            <div class="user-card">
                                                <div class="user-avatar bg-primary-dim">
                                                    <span>ف‌ت</span>
                                                </div>
                                                <div class="user-info">
                                                    <span class="lead-text">فرشید ترنیان</span>
                                                    <span class="sub-text">someone@email.com</span>
                                                </div>
                                                <div class="user-action">
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger me-n1" data-bs-toggle="dropdown" aria-expanded="false"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li>
                                                                    <a href="#"><em class="icon ni ni-setting"></em><span>تنظیمات اقدام</span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#"><em class="icon ni ni-notify"></em><span>پوش نوتیفیکیشن</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-inner card-inner-md">
                                            <div class="user-card">
                                                <div class="user-avatar bg-pink-dim">
                                                    <span>س‌ع</span>
                                                </div>
                                                <div class="user-info">
                                                    <span class="lead-text">سحر عبدی</span>
                                                    <span class="sub-text">someone@email.com</span>
                                                </div>
                                                <div class="user-action">
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger me-n1" data-bs-toggle="dropdown" aria-expanded="false"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li>
                                                                    <a href="#"><em class="icon ni ni-setting"></em><span>تنظیمات اقدام</span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#"><em class="icon ni ni-notify"></em><span>پوش نوتیفیکیشن</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-inner card-inner-md">
                                            <div class="user-card">
                                                <div class="user-avatar bg-warning-dim">
                                                    <span>ت‌ک</span>
                                                </div>
                                                <div class="user-info">
                                                    <span class="lead-text">تینا کریمیان</span>
                                                    <span class="sub-text">someone@email.com</span>
                                                </div>
                                                <div class="user-action">
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger me-n1" data-bs-toggle="dropdown" aria-expanded="false"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li>
                                                                    <a href="#"><em class="icon ni ni-setting"></em><span>تنظیمات اقدام</span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#"><em class="icon ni ni-notify"></em><span>پوش نوتیفیکیشن</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-inner card-inner-md">
                                            <div class="user-card">
                                                <div class="user-avatar bg-success-dim">
                                                    <span>خ‌ض</span>
                                                </div>
                                                <div class="user-info">
                                                    <span class="lead-text">خسرو ضیایی</span>
                                                    <span class="sub-text">someone@email.com</span>
                                                </div>
                                                <div class="user-action">
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger me-n1" data-bs-toggle="dropdown" aria-expanded="false"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li>
                                                                    <a href="#"><em class="icon ni ni-setting"></em><span>تنظیمات اقدام</span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#"><em class="icon ni ni-notify"></em><span>پوش نوتیفیکیشن</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-inner card-inner-md">
                                            <div class="user-card">
                                                <div class="user-avatar bg-danger-dim">
                                                    <span>ف‌د</span>
                                                </div>
                                                <div class="user-info">
                                                    <span class="lead-text">فرشته دهقان</span>
                                                    <span class="sub-text">someone@email.com</span>
                                                </div>
                                                <div class="user-action">
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger me-n1" data-bs-toggle="dropdown" aria-expanded="false"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li>
                                                                    <a href="#"><em class="icon ni ni-setting"></em><span>تنظیمات اقدام</span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#"><em class="icon ni ni-notify"></em><span>پوش نوتیفیکیشن</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- .card -->
                            </div>
                            <!-- .col -->
                            <div class="col-md-6 col-xxl-4">
                                <div class="card card-bordered card-full">
                                    <div class="card-inner border-bottom">
                                        <div class="card-title-group">
                                            <div class="card-title">
                                                <h6 class="title">فعالیت های اخیر</h6>
                                            </div>
                                            <div class="card-tools">
                                                <ul class="card-tools-nav">
                                                    <li>
                                                        <a href="#"><span>لغو</span></a>
                                                    </li>
                                                    <li class="active">
                                                        <a href="#"><span>همه</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nk-activity">
                                        <li class="nk-activity-item">
                                            <div class="nk-activity-media user-avatar bg-success"><img src="{{ url('assets/admin/images/avatar/c-sm.jpg') }}" alt="" /></div>
                                            <div class="nk-activity-data">
                                                <div class="label">لیلا کریمی درخواست اتاق کرد.</div>
                                                <span class="time">2 ساعت پیش</span>
                                            </div>
                                        </li>
                                        <li class="nk-activity-item">
                                            <div class="nk-activity-media user-avatar bg-warning">م‌ن</div>
                                            <div class="nk-activity-data">
                                                <div class="label">مصطفی نوروزی سفارش داد.</div>
                                                <span class="time">2 ساعت پیش</span>
                                            </div>
                                        </li>
                                        <li class="nk-activity-item">
                                            <div class="nk-activity-media user-avatar bg-azure">د‌ف</div>
                                            <div class="nk-activity-data">
                                                <div class="label">دنیا فراهانی رزرو را لغو کرد.</div>
                                                <span class="time">2 ساعت پیش</span>
                                            </div>
                                        </li>
                                        <li class="nk-activity-item">
                                            <div class="nk-activity-media user-avatar bg-purple"><img src="{{ url('assets/admin/images/avatar/d-sm.jpg') }}" alt="" /></div>
                                            <div class="nk-activity-data">
                                                <div class="label">پرهام علیزاده رزرو را تایید کرد.</div>
                                                <span class="time">2 ساعت پیش</span>
                                            </div>
                                        </li>
                                        <li class="nk-activity-item">
                                            <div class="nk-activity-media user-avatar bg-pink">ح‌ر</div>
                                            <div class="nk-activity-data">
                                                <div class="label">حامد رضازاده سفارش داد.</div>
                                                <span class="time">2 ساعت پیش</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- .card -->
                            </div>
                            <!-- .col -->
                        </div>
                        <!-- .row -->
                    </div>
                    <!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection
