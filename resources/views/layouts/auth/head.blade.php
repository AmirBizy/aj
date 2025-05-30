<head>
    <base href="../../../"/>
    <meta charset="utf-8"/>
    <meta name="author" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ url('assets/images/favicon.png') }}"/>
    <!-- Page Title  -->
    <title>{{ __('messages.login_admin') }}</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ url('assets/admin/css/dashlite.rtl.css') }}"/>
    <link id="skin-default" rel="stylesheet" href="{{ url('assets/admin/css/theme.css') }}"/>

{{--    @if(LaravelLocalization::getCurrentLocale() && LaravelLocalization::getCurrentLocale() == 'en')--}}
{{--        <link rel="stylesheet" href="{{ url('assets/css/sweet-alert/en.css') }}">--}}
{{--        <link rel="stylesheet" href="{{ url('assets/css/sweet-alert/dark.css') }}">--}}
{{--    @endif--}}

    {{-- loader --}}
    <link rel="stylesheet" href="{{ url('assets/css/loader.css') }}">
    {{-- loader --}}

    @if(LaravelLocalization::getCurrentLocale() && LaravelLocalization::getCurrentLocale() == 'fa')
        <link id="skin-default" rel="stylesheet" href="{{ url('assets/css/livewire-alert/fa.css') }}"/>
    @else
        <link id="skin-default" rel="stylesheet" href="{{ url('assets/css/livewire-alert/en.css') }}"/>
    @endif

    @yield('css')

</head>
