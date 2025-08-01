@extends('layouts.home.master')

@section('content')
    <section id="about" class="about-single-area innerpage-single-area">
        <div class="container">
            <div class="row">
                @if($about_me && $about_me->getTranslation('image_show_status') && $about_me->getTranslation('image_show_status') == 'active' && $about_me->getTranslation('image'))
                    <div class="col-lg-4">
                        <div class="about-image-part wow fadeInUp delay-0-3s pt-4"><img src="{{ url($about_me->getTranslation('image')) }}" alt="About Me"></div>
                    </div>
                @endif
                <div class="col-lg-8 flex-grow-1">
                    <div class="about-content-part wow fadeInUp delay-0-2s"><h2>{{ $about_me->getTranslation('title') }}</h2>
                        @if($about_me)
                            <div>
                                {!! $about_me->getTranslation('content') !!}
                            </div>
                        @endif
                        @if($about_me && ($about_me->getTranslation('btn_link') || $about_me->getTranslation('resume')))
                            @if ($about_me->getTranslation('btn_link'))
                                <div class="hero-btns"><a href="{{ $about_me->getTranslation('btn_link') ?? url('/') }}" class="theme-btn">{!! $about_me->getTranslation('btn_title') !!} <i class="ri-mail-send-line"></i></a></div>
                            @elseif($about_me->getTranslation('resume'))
                                <div class="hero-btns"><a href="{{ $about_me->getTranslation('resume') ? url($about_me->getTranslation('resume')) : url('/') }}" class="theme-btn">{!! $about_me->getTranslation('btn_title') !!} <i class="ri-mail-send-line"></i></a></div>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="resume" class="resume-area">
        <div class="container">
            <div class="resume-items">
                <div class="row">
                    @if($about_me && $about_me->getTranslation('experiences_show_status') && $about_me->getTranslation('experiences_show_status') == 'active')
                        <div class="col-xl-6 col-md-6">
                            <div class="single-resume"><h2>{{ __('messages.experience') }}</h2>
                                <div class="experience-list">
                                    <div class="resume-item wow fadeInUp delay-0-3s">
                                        <div class="icon"><i class="ri-book-line"></i></div>
                                        <div class="content"><span class="years">2021 - Present</span><h4>Themeforest
                                                Market</h4><span class="company">Web Designer</span></div>
                                    </div>
                                    <div class="resume-item wow fadeInUp delay-0-3s">
                                        <div class="icon"><i class="ri-book-line"></i></div>
                                        <div class="content"><span class="years">2021 - 2023</span><h4>Envato Theme
                                                Developer</h4><span class="company">Web Development</span></div>
                                    </div>
                                    <div class="resume-item wow fadeInUp delay-0-3s">
                                        <div class="icon"><i class="ri-book-line"></i></div>
                                        <div class="content"><span class="years">2021 - 2022</span><h4>Marketing Expert GRP</h4>
                                            <span class="company">Web Developer & Business Partner</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if($about_me && $about_me->getTranslation('education_show_status') && $about_me->getTranslation('education_show_status') == 'active')
                        <div class="col-xl-6 col-md-6">
                            <div class="experience-list">
                                <div class="single-resume"><h2>{{ __('messages.education') }}</h2>
                                    <div class="resume-item wow fadeInUp delay-0-3s">
                                        <div class="icon"><i class="ri-book-line"></i></div>
                                        <div class="content"><span class="years">2013 - 2015</span><h4>Bachelor Degree of
                                                Information Technology</h4><span class="company">State University bangladesh</span>
                                        </div>
                                    </div>
                                    <div class="resume-item wow fadeInUp delay-0-3s">
                                        <div class="icon"><i class="ri-book-line"></i></div>
                                        <div class="content"><span class="years">2021 - 2024</span><h4>Higher secoundery
                                                Education</h4><span class="company">Premium College United VC</span></div>
                                    </div>
                                    <div class="resume-item wow fadeInUp delay-0-3s">
                                        <div class="icon"><i class="ri-book-line"></i></div>
                                        <div class="content"><span class="years">2021 - 2024</span><h4>Webster College</h4><span
                                                class="company">UI/UX Design</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <section class="testimonials-area">
        <div class="container">
            <div class="container-inner">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="section-title text-center wow fadeInUp delay-0-2s"><p>Testinomials</p>
                            <h2>{{ __('messages.what_clients_say') }}</h2></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="testimonials-wrap">
                            <div class="testimonial-item wow fadeInUp delay-0-3s">
                                <div class="author"><img src="{{ url('assets/images/testimonials/author1.jpg') }}" alt="Author"></div>
                                <div class="text">Financial planners help people to knowledge in about how to invest and in
                                    save their moneye the most efficient way eve plan ners help people tioniio know ledige
                                    in about how.
                                </div>
                                <div class="testi-des"><h5>Zonathon Doe</h5><span>CEO & Founder X</span></div>
                            </div>
                            <div class="testimonial-item wow fadeInUp delay-0-4s">
                                <div class="author"><img src="{{ url('assets/images/testimonials/author2.jpg') }}" alt="Author"></div>
                                <div class="text">Financial planners help people to knowledge in about how to invest and in
                                    save their moneye the most efficient way eve plan ners help people tioniio know ledige
                                    in about how.
                                </div>
                                <div class="testi-des"><h5>Liana Marie</h5><span>Lead Designer Meta</span></div>
                            </div>
                            <div class="testimonial-item wow fadeInUp delay-0-2s">
                                <div class="author"><img src="{{ url('assets/images/testimonials/author1.jpg') }}" alt="Author"></div>
                                <div class="text">Financial planners help people to knowledge in about how to invest and in
                                    save their moneye the most efficient way eve plan ners help people tioniio know ledige
                                    in about how.
                                </div>
                                <div class="testi-des"><h5>Zonathon Doe</h5><span>CEO & Founder X</span></div>
                            </div>
                            <div class="testimonial-item wow fadeInUp delay-0-4s">
                                <div class="author"><img src="{{ url('assets/images/testimonials/author2.jpg') }}" alt="Author"></div>
                                <div class="text">Financial planners help people to knowledge in about how to invest and in
                                    save their moneye the most efficient way eve plan ners help people tioniio know ledige
                                    in about how.
                                </div>
                                <div class="testi-des"><h5>Liana Marie</h5><span>Lead Designer Meta</span></div>
                            </div>
                        </div>
                        <div class="slider-arrows wow fadeInUp delay-0-6s text-center pt-40">
                            <button class="testimonial-prev"><i class="ri-arrow-left-s-line"></i></button>
                            <button class="testimonial-next"><i class="ri-arrow-right-s-line"></i></button>
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
