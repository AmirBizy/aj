@extends('layouts.home.master')

@section('content')
    <section id="about" class="about-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="about-image-part wow fadeInUp delay-0-3s pt-0"><img src="{{ url('assets/images/about/aj.png') }}" alt="About Me">
                        <h2 class="mt-3">Amirreza Jafari</h2>
                        <p>I build scalable web solutions with creative vision.</p>
                        <div class="about-social text-center">
                            <ul>
                                <li><a href="#"><i class="ri-instagram-fill"></i></a></li>
                                <li><a href="#"><i class="ri-telegram-fill"></i></a></li>
                                <li><a href="#"><i class="ri-linkedin-fill"></i></a></li>
                                <li><a href="#"><i class="ri-github-line"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="about-content-part wow fadeInUp delay-0-2s">
{{--                        <p>Hello There!</p>--}}
                        <h2>{{ __('messages.about_web') }}</h2>
                        <div class="adress-field">
                            <ul>
                                <li><i class="ri-circle-fill"></i>{{ __('messages.available_part_time') }}</li>
                            </ul>
                        </div>
                        <div class="hero-btns"><a href="contact.html" download="" class="theme-btn">{{ __('messages.download_cv') }}<i class="ri-download-line"></i></a></div>
                    </div>
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
