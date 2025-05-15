@extends('layouts.auth.master')

@if(LaravelLocalization::getCurrentLocale() && LaravelLocalization::getCurrentLocale() == 'en')
    @section('css')
        <style>
            .form-icon-right {
                right: -1px !important;
                left: auto !important;
            }

            .form-icon-right+.form-control, .dual-listbox .form-icon-right+.dual-listbox__search, div.dataTables_wrapper div.dataTables_filter .form-icon-right+input {
                padding-right: calc(1rem + 24px) !important;
                padding-left: 1rem !important;
            }
        </style>
    @endsection
@endif

@section('content')
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <livewire:auth.login />
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
@endsection
