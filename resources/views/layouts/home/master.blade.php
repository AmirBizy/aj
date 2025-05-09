<!DOCTYPE html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}" dir="{{ LaravelLocalization::getCurrentLocale() && LaravelLocalization::getCurrentLocale() == 'fa' ? 'rtl' : 'ltr' }}">

@include('layouts.home.head')

<body>

{{--@include('layouts.home.header')--}}

@include('layouts.home.header')

@yield('content')

@include('layouts.home.footer')

<div class="progress-wrap cursor-pointer"><i class="ri-arrow-up-double-line"></i>
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
    </svg>
</div>

@include('layouts.home.script')

</body>
</html>
