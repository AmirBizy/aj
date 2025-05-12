@extends('layouts.home.master')

@section('content')
    <section id="about" class="about-single-area innerpage-single-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="about-image-part wow fadeInUp delay-0-3s pt-4"><img src="{{ url('assets/images/about/aj.png') }}" alt="About Me"></div>
                </div>
                <div class="col-lg-8">
                    <div class="about-content-part wow fadeInUp delay-0-2s"><h2>I’m Bentos Walker, a product designer.</h2>
                        <p>I am a San francisco-based product designer with a focus on web design, illustration, a visual
                            development. I have a diverse range of experience having worked across various fields and
                            industries.</p>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                            classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                            Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin
                            words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in
                            classical literature, discovered the undoubtable source.</p>
                        <div class="hero-btns"><a href="contact.html" class="theme-btn">Get In touch<i
                                    class="ri-mail-send-line"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="resume" class="resume-area">
        <div class="container">
            <div class="resume-items">
                <div class="row">
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
    <section class="call-to-action-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-content-part call-to-action-part wow fadeInUp delay-0-2s text-center"><h2>Are You
                            Ready to kickstart your project with a touch of magic?</h2>
                        <p>Reach out and let's make it happen ✨. I'm also available for full-time or Part-time opportunities
                            to push the boundaries of design and deliver exceptional work.</p>
                        <div class="hero-btns"><a href="contact.html" class="theme-btn">Let's Talk<i
                                    class="ri-download-line"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
