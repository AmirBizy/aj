@extends('layouts.admin.master')

@section('content')
    <div class="nk-content">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview mx-auto">
                        <div class="nk-block-head nk-block-head-lg wide-sm">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">درباره من</h3>
                            </div>
                        </div>
                        <div class="nk-block nk-block-lg">
                            <div class="card card-bordered card-preview">
                                <div class="card-inner">
                                    @if(LaravelLocalization::getSupportedLocales())
                                        <ul class="nav nav-tabs mt-n3">
                                            @foreach (LaravelLocalization::getSupportedLocales() as $localeTabCode => $tabProps)
                                                <li class="nav-item">
                                                    <a class="nav-link {{ $loop->first ? 'active' : '' }}" data-bs-toggle="tab" href="#lang-tab-{{ $localeTabCode }}">{{ getSupportedLocalesName($localeTabCode) }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                    @if(LaravelLocalization::getSupportedLocales())
                                        <form action="{{ route('admin.about_me.update') }}" method="post">
                                            @csrf
                                            @method('PATCH')
                                            <div class="tab-content">
                                                @foreach (LaravelLocalization::getSupportedLocales() as $localeItemCode => $itemProps)
                                                    <div class="tab-pane {{ $loop->first ? 'active' : '' }}" id="lang-tab-{{ $localeItemCode }}">
                                                        <div class="row gy-4 mt-0">
                                                            @php
                                                                $fieldTypes = $about_me->getFieldTypes();
                                                                $fields = $about_me->getOrderedTranslatableFields();
                                                            @endphp
                                                            @foreach ($fields as $field => $label)
                                                                @php
                                                                    $type = $fieldTypes[$field] ?? 'text';
                                                                    $inputName = "translations[{$localeItemCode}][{$field}]";
                                                                    $inputId = "field-{$localeItemCode}-{$field}";
                                                                @endphp
                                                                @if($type === 'textarea')
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="{{ $inputId }}">{{ $label }}</label>
                                                                            <div class="form-control-wrap">
                                                                                <textarea type="text" name="{{ $inputName }}" class="form-control summernote-basic" id="{{ $inputId }}">{{ $about_me->getTranslation($field, $localeItemCode) }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @else
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="{{ $inputId }}">{{ $label }}</label>
                                                                            <div class="form-control-wrap">
                                                                                <input type="text" name="{{ $inputName }}" value="{{ $about_me->getTranslation($field, $localeItemCode) }}" class="form-control" id="{{ $inputId }}" placeholder="نگهدارنده متن ورودی" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="col-12 mt-5">
                                                <button onclick="return confirm('برای ویرایش اطلاعات درباره من مطمئن هستید؟');" type="submit" class="btn btn-primary">ویرایش درباره من</button>
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
