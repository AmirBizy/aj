@extends('layouts.home.master')

@section('content')
    <section id="about" class="about-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="about-image-part wow fadeInUp delay-0-3s pt-0"><img src="{{ url('assets/images/about/aj.png') }}" alt="About Me">
                        @if($setting && $setting->getTranslation('display_title_home_sidebars'))
                            <h2 class="mt-3">{{ $setting->getTranslation('display_title_home_sidebars') ?? 'Amirreza Jafari' }}</h2>
                        @endif
                        @if($setting && $setting->getTranslation('short_text_display_title_home_sidebars'))
                            <p>{{ $setting->getTranslation('short_text_display_title_home_sidebars') }}</p>
                        @endif
                        @if($setting && ($setting->getTranslation('instagram') || $setting->getTranslation('telegram') || $setting->getTranslation('linkedin') || $setting->getTranslation('github')))
                            <div class="about-social text-center">
                                <ul>
                                    @if($setting->getTranslation('instagram'))
                                        <li><a href="{{ $setting->getTranslation('instagram') }}" target="_blank"><i class="ri-instagram-fill"></i></a></li>
                                    @endif
                                    @if($setting->getTranslation('telegram'))
                                        <li><a href="{{ $setting->getTranslation('telegram') }}" target="_blank"><i class="ri-telegram-fill"></i></a></li>
                                    @endif
                                    @if($setting->getTranslation('linkedin'))
                                        <li><a href="{{ $setting->getTranslation('linkedin') }}" target="_blank"><i class="ri-linkedin-fill"></i></a></li>
                                    @endif
                                    @if($setting->getTranslation('github'))
                                        <li><a href="{{ $setting->getTranslation('github') }}" target="_blank"><i class="ri-github-line"></i></a></li>
                                    @endif
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-8">
                    @if($setting && ($setting->getTranslation('home_page_text') || $setting->getTranslation('work_status')))
                        <div class="about-content-part wow fadeInUp delay-0-2s">
                            @if($setting->getTranslation('home_page_text'))
                                {!! $setting->getTranslation('home_page_text') !!}
                            @endif
                            @if($setting->getTranslation('work_status'))
                                <div class="adress-field">
                                    @php
                                        $statusData = $setting->workStatus($setting->getTranslation('work_status') , app()->getLocale());
                                    @endphp
                                    <ul>
                                        <li><i @if($statusData['color']) style="color: {{ $statusData['color'] }}" @endif class="ri-circle-fill"></i>{!! $statusData[app()->getLocale()] !!}</li>
                                    </ul>
                                </div>
                            @endif
                            @if($setting->getTranslation('resume') && $setting->getTranslation('show_resume_btn') && $setting->getTranslation('show_resume_btn') == 'active')
                                <div class="hero-btns"><a href="{{ $setting->getTranslation('resume') }}" download="" class="theme-btn">{{ $setting->getTranslation('resume_btn_title') ?? __('messages.download_cv') }}<i class="ri-download-line"></i></a></div>
                            @endif
                        </div>
                    @endif
                    <div class="about-content-part-bottom wow fadeInUp delay-0-2s"><h2>{{ __('messages.company_i_worked') }}</h2>
                        <div class="company-list">
                            <div class="scroller" data-direction="left" data-speed="slow">
                                <div class="scroller__inner">
                                    <a href="https://adib.com.tr/en" target="_blank"><img src="{{ url('assets/images/client-logos/adib.png') }}" width="120px" height="40px" class="object-fit-cover" alt=""></a>
                                    <a href="https://pevas.ir" target="_blank"><img src="{{ url('assets/images/client-logos/pivas.webp') }}" width="40px" height="40px" class="object-fit-cover" alt=""></a>
                                    <a href="https://www.kayer.co.ir/en" target="_blank"><img src="{{ url('assets/images/client-logos/kayer.png') }}" width="100px" height="40px" class="object-fit-cover" alt=""></a>
                                    <a href="https://www.karlancer.com" target="_blank"><img src="{{ url('assets/images/client-logos/karlancer.ico') }}" width="40px" height="40px" class="object-fit-cover" alt=""></a>
                                    <a href="https://ponisha.ir" target="_blank"><img src="{{ url('assets/images/client-logos/ponisha.png') }}" width="40px" height="40px" class="object-fit-cover" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if($setting && $setting->getTranslation('home_page_works_and_projects_box_status') && $setting->getTranslation('home_page_works_and_projects_box_status') == 'active')
        <section id="portfolio" class="projects-area">
            <div class="container">
                <div class="container-inner">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="section-title text-center wow fadeInUp delay-0-2s"><h2>Works & Projects</h2>
                                <p>Check out some of my design projects, meticulously crafted with love and dedication, each one
                                    reflecting the passion and soul I poured into every detail.</p></div>
                        </div>
                    </div>
                    <ul class="project-filter filter-btns-one justify-content-left pb-15 wow fadeInUp delay-0-2s">
                        <li data-filter="*" class="current">Show All</li>
                        <li data-filter=".design">Design</li>
                        <li data-filter=".branding">Branding</li>
                        <li data-filter=".marketing">Marketing</li>
                    </ul>
                    <div class="row project-masonry-active">
                        <div class="col-lg-4 col-md-6 item branding game">
                            <div class="project-item style-two wow fadeInUp delay-0-3s">
                                <div class="project-image"><img src="{{ url('assets/images/projects/work1.jpg') }}" alt="Project"><a
                                        href="single-project.html" class="details-btn"><i
                                            class="ri-arrow-right-up-line"></i></a></div>
                                <div class="project-content"><span class="sub-title">Branding</span>
                                    <h3>Mobile Application Design</h3></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 item design marketing graphics">
                            <div class="project-item style-two wow fadeInUp delay-0-4s">
                                <div class="project-image"><img src="{{ url('assets/images/projects/work2.jpg') }}" alt="Project"><a
                                        href="https://www.youtube.com/watch?v=qZEPs3vmYB4" class="details-btn popup-youtube"><i
                                            class="ri-arrow-right-up-line"></i></a></div>
                                <div class="project-content"><span class="sub-title">Design</span>
                                    <h3>Website Makeup Design</h3></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 item game graphics">
                            <div class="project-item style-two wow fadeInUp delay-0-5s">
                                <div class="project-image"><img src="{{ url('assets/images/projects/work3.jpg') }}" alt="Project"><a
                                        href="{{ url('assets/images/projects/work3.jpg') }}" class="details-btn work-popup"><i
                                            class="ri-arrow-right-up-line"></i></a></div>
                                <div class="project-content"><span class="sub-title">Graphics</span>
                                    <h3>Brand Identity and Motion Design</h3></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 item design game">
                            <div class="project-item style-two wow fadeInUp delay-0-6s">
                                <div class="project-image"><img src="{{ url('assets/images/projects/work4.jpg') }}" alt="Project"><a
                                        href="{{ url('assets/images/projects/work4.jpg') }}" class="details-btn work-popup"><i
                                            class="ri-arrow-right-up-line"></i></a></div>
                                <div class="project-content"><span class="sub-title">Game</span>
                                    <h3>Mobile Application Design</h3></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 item branding game">
                            <div class="project-item style-two wow fadeInUp delay-0-7s">
                                <div class="project-image"><img src="{{ url('assets/images/projects/work5.jpg') }}" alt="Project"><a
                                        href="{{ url('assets/images/projects/work5.jpg') }}" class="details-btn work-popup"><i
                                            class="ri-arrow-right-up-line"></i></a></div>
                                <div class="project-content"><span class="sub-title">Branding</span>
                                    <h3>Application Design</h3></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 item design marketing graphics">
                            <div class="project-item style-two wow fadeInUp delay-0-8s">
                                <div class="project-image"><img src="{{ url('assets/images/projects/work6.jpg') }}" alt="Project"><a
                                        href="https://www.youtube.com/watch?v=qZEPs3vmYB4" class="details-btn popup-youtube"><i
                                            class="ri-arrow-right-up-line"></i></a></div>
                                <div class="project-content"><span class="sub-title">Design</span>
                                    <h3>Website Development</h3></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    @if($setting && $setting->getTranslation('show_call_to_action_box') && $setting->getTranslation('show_call_to_action_box') == 'active' && $setting->getTranslation('call_to_action_text'))
        <section class="call-to-action-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="call-to-action-part wow fadeInUp delay-0-2s text-center">
                            {!! $setting->getTranslation('call_to_action_text') !!}
                            @if($setting && $setting->getTranslation('call_to_action_btn_title'))
                                <div class="hero-btns"><a href="{{ route('home.contact') }}" class="theme-btn"> {{ $setting->getTranslation('call_to_action_btn_title') }} <i class="ri-download-line"></i></a></div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection
