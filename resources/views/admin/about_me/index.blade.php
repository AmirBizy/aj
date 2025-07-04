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
                                        <form action="{{ route('admin.about_me.update') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('PATCH')
                                            <div class="tab-content">
                                                @foreach (LaravelLocalization::getSupportedLocales() as $locale_key => $locale)
                                                    <div class="tab-pane {{ $loop->first ? 'active' : '' }}" id="lang-tab-{{ $locale_key }}">
                                                        <div class="row gy-4 mt-0">
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="translations[{{ $locale_key }}][title]">عنوان</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" name="translations[{{ $locale_key }}][title]" class="form-control" id="translations[{{ $locale_key }}][title]" value="{{ old("translations.$locale_key.title", $about_me->getTranslation('title', $locale_key)) }}" />
                                                                    </div>
                                                                    @error("translations.$locale_key.title")
                                                                        <small class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="translations[{{ $locale_key }}][btn_title]">عنوان دکمه</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" name="translations[{{ $locale_key }}][btn_title]" class="form-control" id="translations[{{ $locale_key }}][btn_title]" value="{{ old("translations.$locale_key.btn_title", $about_me->getTranslation('btn_title', $locale_key)) }}" />
                                                                    </div>
                                                                    @error("translations.$locale_key.btn_title")
                                                                        <small class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="translations[{{ $locale_key }}][btn_link]">لینک دکمه</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" name="translations[{{ $locale_key }}][btn_link]" class="form-control" id="translations[{{ $locale_key }}][btn_link]" value="{{ old("translations.$locale_key.btn_link", $about_me->getTranslation('btn_link', $locale_key)) }}" />
                                                                    </div>
                                                                    @error("translations.$locale_key.btn_link")
                                                                        <small class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="translations[{{ $locale_key }}][show_resume_btn]">نمایش دکمه رزومه</label>
                                                                    <div class="form-control-select">
                                                                        <select name="translations[{{ $locale_key }}][show_resume_btn]" id="translations[{{ $locale_key }}][show_resume_btn]" class="form-control">
                                                                            <option value="active" {{ $about_me && $about_me->getTranslation('show_resume_btn', $locale_key) == 'active' ? 'selected' : '' }}>نمایش</option>
                                                                            <option value="de_active" {{ $about_me && $about_me->getTranslation('show_resume_btn', $locale_key) == 'de_active' ? 'selected' : '' }}>عدم نمایش</option>
                                                                        </select>
                                                                    </div>
                                                                    @error("translations.$locale_key.show_resume_btn")
                                                                        <small class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="translations[{{ $locale_key }}][image]">تصویر</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="file" name="translations[{{ $locale_key }}][image]" class="form-control" id="translations[{{ $locale_key }}][image]" />
                                                                    </div>
                                                                    @if($about_me->getTranslation('image', $locale_key))
                                                                        <a href="{{ url($about_me->getTranslation('image', $locale_key)) }}" class="mt-1 text-primary d-block" target="_blank">مشاهده تصویر</a>
                                                                    @endif
                                                                    @error("translations.$locale_key.image")
                                                                        <small class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="translations[{{ $locale_key }}][resume]">رزومه</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="file" name="translations[{{ $locale_key }}][resume]" class="form-control" id="translations[{{ $locale_key }}][resume]" />
                                                                    </div>
                                                                    @if($about_me->getTranslation('resume', $locale_key))
                                                                        <a href="{{ url($about_me->getTranslation('resume', $locale_key)) }}" class="mt-1 text-primary d-block" target="_blank">مشاهده رزومه</a>
                                                                    @endif
                                                                    @error("translations.$locale_key.resume")
                                                                        <small class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="translations[{{ $locale_key }}][content]">متن</label>
                                                                    <div class="form-control-wrap">
                                                                        <textarea type="text" name="translations[{{ $locale_key }}][content]" class="form-control summernote-basic" id="translations[{{ $locale_key }}][content]">{{ old("translations.$locale_key.content", $about_me->getTranslation('content', $locale_key)) }}</textarea>
                                                                    </div>
                                                                    @error("translations.$locale_key.content")
                                                                        <small class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                            </div>
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
