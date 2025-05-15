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
    <link rel="stylesheet" href="{{ url('assets/auth/css/dashlite.rtl.css') }}"/>
    <link id="skin-default" rel="stylesheet" href="{{ url('assets/auth/css/theme.css') }}"/>

{{--    @if(LaravelLocalization::getCurrentLocale() && LaravelLocalization::getCurrentLocale() == 'fa')--}}
{{--        <link rel="stylesheet" href="{{ url('assets/css/persian/auth.css') }}">--}}
{{--    @endif--}}

    {{-- loader --}}
    <link rel="stylesheet" href="{{ url('assets/css/loader.css') }}">
    {{-- loader --}}

    @yield('css')

</head>
