<!DOCTYPE html>
<html lang="fa" class="js">

@include('layouts.admin.head')

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

<body class="has-rtl nk-body bg-lighter npc-general has-sidebar" dir="rtl">
<div class="nk-app-root">
    <!-- main @s -->
    <div class="nk-main">
        <!-- sidebar @s -->
        @include('layouts.admin.sidebar')
        <!-- sidebar @e -->
        <!-- wrap @s -->
        <div class="nk-wrap">
            <!-- main header @s -->
            @include('layouts.admin.header')
            <!-- main header @e -->
            <!-- content @s -->
            @yield('content')
            <!-- content @e -->
            <!-- footer @s -->
            @include('layouts.admin.footer')
            <!-- footer @e -->
        </div>
        <!-- wrap @e -->
    </div>
    <!-- main @e -->
</div>
<!-- app-root @e -->
<!-- JavaScript -->
@include('layouts.admin.script')
</body>
</html>
