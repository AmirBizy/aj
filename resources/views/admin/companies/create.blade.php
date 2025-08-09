@extends('layouts.admin.master')

@if(LaravelLocalization::getCurrentLocale() && LaravelLocalization::getCurrentLocale() == 'en')
    @section('css')
        <style>
            select {
                padding-inline: 25px !important;
            }
        </style>
    @endsection
@endif

@section('content')
    <div class="nk-content" @if(LaravelLocalization::getCurrentLocale() && LaravelLocalization::getCurrentLocale() == 'fa') dir="rtl" @else dir="ltr" @endif>
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview mx-auto">
                        <div class="nk-block-head nk-block-head-lg wide-sm">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">{{ __('messages.add_company') }}</h3>
                            </div>
                        </div>
                        <div class="nk-block nk-block-lg">
                            <div class="card card-bordered card-preview">
                                <div class="card-inner">
                                    @if(LaravelLocalization::getSupportedLocales())
                                        <ul class="nav nav-tabs mt-n3">
                                            @foreach (LaravelLocalization::getSupportedLocales() as $localeTabCode => $tabProps)
                                                <li class="nav-item {{ LaravelLocalization::getCurrentLocale() && LaravelLocalization::getCurrentLocale() == 'fa' ? '' : 'pe-0 ps-4' }}">
                                                    <a class="nav-link {{ $loop->first ? 'active' : '' }}" data-bs-toggle="tab" href="#lang-tab-{{ $localeTabCode }}">{{ __('messages.' . $tabProps['name']) }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                    @if(LaravelLocalization::getSupportedLocales())
                                        <form action="{{ route('admin.companies.store') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('POST')
                                            <div class="tab-content">
                                                @foreach (LaravelLocalization::getSupportedLocales() as $locale_key => $locale)
                                                    <div class="tab-pane {{ $loop->first ? 'active' : '' }}" id="lang-tab-{{ $locale_key }}">
                                                        <div class="row gy-4 mt-0">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="translations[{{ $locale_key }}][image]">
                                                                        {{ __('messages.image') }}
                                                                        <span class="text-danger fw-bold">*</span>
                                                                    </label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="file" name="translations[{{ $locale_key }}][image]" class="form-control" id="translations[{{ $locale_key }}][image]" />
                                                                    </div>
                                                                    @error("translations.$locale_key.image")
                                                                    <small class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="translations[{{ $locale_key }}][title]">
                                                                        {{ __('messages.title') }}
                                                                        <span class="text-danger fw-bold">*</span>
                                                                    </label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" name="translations[{{ $locale_key }}][title]" class="form-control" id="translations[{{ $locale_key }}][title]" value="{{ old("translations.$locale_key.title") }}" />
                                                                    </div>
                                                                    @error("translations.$locale_key.title")
                                                                    <small class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="translations[{{ $locale_key }}][status]">
                                                                        {{ __('messages.status') }}
                                                                        <span class="text-danger fw-bold">*</span>
                                                                    </label>
                                                                    <div class="form-control-select">
                                                                        <select name="translations[{{ $locale_key }}][status]" id="translations[{{ $locale_key }}][status]" class="form-control">
                                                                            <option value="active">{{ __('messages.active') }}</option>
                                                                            <option value="de_active">{{ __('messages.de_active') }}</option>
                                                                        </select>
                                                                    </div>
                                                                    @error("translations.$locale_key.status")
                                                                    <small class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="col-12 mt-5">
                                                <button onclick="return confirm('{{ __('messages.add_company_alert') }}');" type="submit" class="btn btn-primary">{{ __('messages.add_company') }}</button>
                                            </div>
                                        </form>
                                    @endif
                                </div>
                            </div>
                            <!-- .card-preview -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <link rel="stylesheet" href="{{ url('assets/admin/css/editors/summernote.rtl.css') }}" />
    <script src="{{ url('assets/admin/js/libs/editors/summernote.js') }}"></script>
    <script src="{{ url('assets/admin/js/editors.js') }}"></script>
@endsection
