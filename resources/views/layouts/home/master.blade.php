<!DOCTYPE html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}" dir="{{ LaravelLocalization::getCurrentLocale() && LaravelLocalization::getCurrentLocale() == 'fa' ? 'rtl' : 'ltr' }}">

@include('layouts.home.head')

<body>

{{--@include('layouts.home.header')--}}

@include('layouts.home.header')

{{-- loader --}}
<div class="loader-full-elem">
    <div class="banter-loader">
        <div class="banter-loader__box"></div>
        <div class="banter-loader__box"></div>
        <div class="banter-loader__box"></div>
        <div class="banter-loader__box"></div>
        <div class="banter-loader__box"></div>
        <div class="banter-loader__box"></div>
        <div class="banter-loader__box"></div>
        <div class="banter-loader__box"></div>
        <div class="banter-loader__box"></div>
    </div>
</div>
{{-- loader --}}

@yield('content')

@include('layouts.home.footer')

<div class="progress-wrap cursor-pointer {{ $setting && $setting->getTranslation('show_arrow_up_btn') && $setting->getTranslation('show_arrow_up_btn') !== 'active' ? 'd-none' : '' }}">
    <i class="ri-arrow-up-double-line"></i>
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
    </svg>
</div>

@include('layouts.home.script')

</body>
</html>
