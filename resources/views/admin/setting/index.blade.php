@extends('layouts.admin.master')

@section('content')
    <div class="nk-content">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview mx-auto">
                        <div class="nk-block-head nk-block-head-lg wide-sm">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">تنظیمات سایت</h3>
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
                                        <form action="{{ route('admin.setting.update') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('PATCH')
                                            <div class="tab-content">
                                                @foreach (LaravelLocalization::getSupportedLocales() as $locale_key => $locale)
                                                    <div class="tab-pane {{ $loop->first ? 'active' : '' }}" id="lang-tab-{{ $locale_key }}">
                                                        <div class="row gy-4 mt-0">
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="translations[{{ $locale_key }}][title]">عنوان سایت</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" name="translations[{{ $locale_key }}][title]" class="form-control" id="translations[{{ $locale_key }}][title]" value="{{ $setting->getTranslation('title', $locale_key) !== null ? $setting->getTranslation('title', $locale_key) : null }}" />
                                                                    </div>
                                                                    @error("translations.$locale_key.title")
                                                                        <small class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="translations[{{ $locale_key }}][logo]">لوگو</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="file" name="translations[{{ $locale_key }}][logo]" class="form-control" id="translations[{{ $locale_key }}][logo]" />
                                                                    </div>
                                                                    @if($setting->getTranslation('logo', $locale_key))
                                                                        <a href="{{ url($setting->getTranslation('logo', $locale_key)) }}" class="mt-1 text-primary d-block" target="_blank">مشاهده لوگو</a>
                                                                    @endif
                                                                    @error("translations.$locale_key.logo")
                                                                        <small class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="translations[{{ $locale_key }}][show_arrow_up_btn]">نمایش دکمه اومدن به بالا</label>
                                                                    <div class="form-control-select">
                                                                        <select name="translations[{{ $locale_key }}][show_arrow_up_btn]" id="translations[{{ $locale_key }}][show_arrow_up_btn]" class="form-control">
                                                                            <option value="active" {{ $setting && $setting->getTranslation('show_arrow_up_btn', $locale_key) == 'active' ? 'selected' : '' }}>فعال</option>
                                                                            <option value="de_active" {{ $setting && $setting->getTranslation('show_arrow_up_btn', $locale_key) == 'de_active' ? 'selected' : '' }}>غیرفعال</option>
                                                                        </select>
                                                                    </div>
                                                                    @error("translations.$locale_key.show_arrow_up_btn")
                                                                        <small class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="translations[{{ $locale_key }}][instagram]">اینستاگرام</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" name="translations[{{ $locale_key }}][instagram]" class="form-control" id="translations[{{ $locale_key }}][instagram]" value="{{ $setting->getTranslation('instagram', $locale_key) !== null ? $setting->getTranslation('instagram', $locale_key) : null }}" placeholder="لینک کامل وارد شود" />
                                                                    </div>
                                                                    @error("translations.$locale_key.instagram")
                                                                        <small class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="translations[{{ $locale_key }}][telegram]">تلگرام</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" name="translations[{{ $locale_key }}][telegram]" class="form-control" id="translations[{{ $locale_key }}][telegram]" value="{{ $setting->getTranslation('telegram', $locale_key) !== null ? $setting->getTranslation('telegram', $locale_key) : null }}" placeholder="لینک کامل وارد شود" />
                                                                    </div>
                                                                    @error("translations.$locale_key.telegram")
                                                                        <small class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="translations[{{ $locale_key }}][linkedin]">لینکدین</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" name="translations[{{ $locale_key }}][linkedin]" class="form-control" id="translations[{{ $locale_key }}][linkedin]" value="{{ $setting->getTranslation('linkedin', $locale_key) !== null ? $setting->getTranslation('linkedin', $locale_key) : null }}" placeholder="لینک کامل وارد شود" />
                                                                    </div>
                                                                    @error("translations.$locale_key.linkedin")
                                                                        <small class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="translations[{{ $locale_key }}][github]">گیت هاب</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" name="translations[{{ $locale_key }}][github]" class="form-control" id="translations[{{ $locale_key }}][github]" value="{{ $setting->getTranslation('github', $locale_key) !== null ? $setting->getTranslation('github', $locale_key) : null }}" placeholder="لینک کامل وارد شود" />
                                                                    </div>
                                                                    @error("translations.$locale_key.github")
                                                                        <small class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="container border border-red-900 py-1 rounded">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="translations[{{ $locale_key }}][call_to_action_text]">متن باکس آخر تمام صفحات</label>
                                                                                <div class="form-control-wrap">
                                                                                    <textarea type="text" name="translations[{{ $locale_key }}][call_to_action_text]" class="form-control summernote-basic" id="translations[{{ $locale_key }}][call_to_action_text]">{{ old("translations.$locale_key.call_to_action_text", $setting->getTranslation('call_to_action_text', $locale_key)) }}</textarea>
                                                                                </div>
                                                                                @error("translations.$locale_key.call_to_action_text")
                                                                                    <small class="text-danger">{{ $message }}</small>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4 mt-4">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="translations[{{ $locale_key }}][call_to_action_btn_title]">عنوان دکمه ( مربوط به باکس متن بالا )</label>
                                                                                <div class="form-control-wrap">
                                                                                    <input type="text" name="translations[{{ $locale_key }}][call_to_action_btn_title]" class="form-control" id="translations[{{ $locale_key }}][call_to_action_btn_title]" value="{{ $setting->getTranslation('call_to_action_btn_title', $locale_key) !== null ? $setting->getTranslation('call_to_action_btn_title', $locale_key) : null }}" />
                                                                                </div>
                                                                                @error("translations.$locale_key.call_to_action_btn_title")
                                                                                    <small class="text-danger">{{ $message }}</small>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4 mt-4">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="translations[{{ $locale_key }}][show_call_to_action_box]">نمایش باکس در تمامی صفحات</label>
                                                                                <div class="form-control-select">
                                                                                    <select name="translations[{{ $locale_key }}][show_call_to_action_box]" id="translations[{{ $locale_key }}][show_call_to_action_box]" class="form-control">
                                                                                        <option value="active" {{ $setting && $setting->getTranslation('show_call_to_action_box', $locale_key) == 'active' ? 'selected' : '' }}>فعال</option>
                                                                                        <option value="de_active" {{ $setting && $setting->getTranslation('show_call_to_action_box', $locale_key) == 'de_active' ? 'selected' : '' }}>غیرفعال</option>
                                                                                    </select>
                                                                                </div>
                                                                                @error("translations.$locale_key.show_call_to_action_box")
                                                                                    <small class="text-danger">{{ $message }}</small>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="translations[{{ $locale_key }}][footer_text]">متن فوتر</label>
                                                                    <div class="form-control-wrap">
                                                                        <textarea type="text" name="translations[{{ $locale_key }}][footer_text]" class="form-control summernote-basic" id="translations[{{ $locale_key }}][footer_text]">{{ old("translations.$locale_key.footer_text", $setting->getTranslation('footer_text', $locale_key)) }}</textarea>
                                                                    </div>
                                                                    @error("translations.$locale_key.footer_text")
                                                                        <small class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-12 mt-2">
                                                                <hr>
                                                                <h5>وضعیت نمایش منو ها</h5>
                                                            </div>
                                                            <div class="col-lg-3 mt-4">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="translations[{{ $locale_key }}][show_about_me_menu_btn]">نمایش منو و صفحه درباره من</label>
                                                                    <div class="form-control-select">
                                                                        <select name="translations[{{ $locale_key }}][show_about_me_menu_btn]" id="translations[{{ $locale_key }}][show_about_me_menu_btn]" class="form-control">
                                                                            <option value="active" {{ $setting && $setting->getTranslation('show_about_me_menu_btn', $locale_key) == 'active' ? 'selected' : '' }}>فعال</option>
                                                                            <option value="de_active" {{ $setting && $setting->getTranslation('show_about_me_menu_btn', $locale_key) == 'de_active' ? 'selected' : '' }}>غیرفعال</option>
                                                                        </select>
                                                                    </div>
                                                                    @error("translations.$locale_key.show_about_me_menu_btn")
                                                                        <small class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 mt-4">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="translations[{{ $locale_key }}][show_services_menu_btn]">نمایش منو و صفحه خدمات من</label>
                                                                    <div class="form-control-select">
                                                                        <select name="translations[{{ $locale_key }}][show_services_menu_btn]" id="translations[{{ $locale_key }}][show_services_menu_btn]" class="form-control">
                                                                            <option value="active" {{ $setting && $setting->getTranslation('show_services_menu_btn', $locale_key) == 'active' ? 'selected' : '' }}>فعال</option>
                                                                            <option value="de_active" {{ $setting && $setting->getTranslation('show_services_menu_btn', $locale_key) == 'de_active' ? 'selected' : '' }}>غیرفعال</option>
                                                                        </select>
                                                                    </div>
                                                                    @error("translations.$locale_key.show_services_menu_btn")
                                                                        <small class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 mt-4">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="translations[{{ $locale_key }}][show_works_menu_btn]">نمایش منو و صفحه کار و پروژه ها</label>
                                                                    <div class="form-control-select">
                                                                        <select name="translations[{{ $locale_key }}][show_works_menu_btn]" id="translations[{{ $locale_key }}][show_works_menu_btn]" class="form-control">
                                                                            <option value="active" {{ $setting && $setting->getTranslation('show_works_menu_btn', $locale_key) == 'active' ? 'selected' : '' }}>فعال</option>
                                                                            <option value="de_active" {{ $setting && $setting->getTranslation('show_works_menu_btn', $locale_key) == 'de_active' ? 'selected' : '' }}>غیرفعال</option>
                                                                        </select>
                                                                    </div>
                                                                    @error("translations.$locale_key.show_works_menu_btn")
                                                                        <small class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 mt-4">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="translations[{{ $locale_key }}][show_contact_menu_btn]">نمایش منو و صفحه ارتباط با من</label>
                                                                    <div class="form-control-select">
                                                                        <select name="translations[{{ $locale_key }}][show_contact_menu_btn]" id="translations[{{ $locale_key }}][show_contact_menu_btn]" class="form-control">
                                                                            <option value="active" {{ $setting && $setting->getTranslation('show_contact_menu_btn', $locale_key) == 'active' ? 'selected' : '' }}>فعال</option>
                                                                            <option value="de_active" {{ $setting && $setting->getTranslation('show_contact_menu_btn', $locale_key) == 'de_active' ? 'selected' : '' }}>غیرفعال</option>
                                                                        </select>
                                                                    </div>
                                                                    @error("translations.$locale_key.show_contact_menu_btn")
                                                                        <small class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-12 mt-4">
                                                                <hr>
                                                            </div>
                                                            <div class="col-lg-3 mt-0">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="translations[{{ $locale_key }}][google_authentication_status]">وضعیت ورود با گوگل</label>
                                                                    <div class="form-control-select">
                                                                        <select name="translations[{{ $locale_key }}][google_authentication_status]" id="translations[{{ $locale_key }}][google_authentication_status]" class="form-control">
                                                                            <option value="active" {{ $setting && $setting->getTranslation('google_authentication_status', $locale_key) == 'active' ? 'selected' : '' }}>فعال</option>
                                                                            <option value="de_active" {{ $setting && $setting->getTranslation('google_authentication_status', $locale_key) == 'de_active' ? 'selected' : '' }}>غیرفعال</option>
                                                                        </select>
                                                                    </div>
                                                                    @error("translations.$locale_key.google_authentication_status")
                                                                        <small class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="col-12 mt-5">
                                                <button onclick="return confirm('برای ویرایش اطلاعات تنظیمات سایت مطمئن هستید؟');" type="submit" class="btn btn-primary">ویرایش تنظیمات سایت</button>
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
