@extends('layouts.home.master')

@section('content')
    <section id="services" class="services-area innerpage-single-area">
        <div class="container">
            <div class="container-inner">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="section-title text-center wow fadeInUp delay-0-2s"><p>{{ __('messages.services') }}</p>
                            <h2>Quality Services</h2></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item wow fadeInUp delay-0-2s"><i class="ri-global-fill"></i><h4>Brand Identity
                                Design</h4>
                            <p>Bentos gives you the blocks & kits you need to create a true website within minutes.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item wow fadeInUp delay-0-4s"><i class="ri-quill-pen-line"></i><h4>Website
                                Design</h4>
                            <p>Bentos gives you the blocks & kits you need to create a true website within minutes.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item wow fadeInUp delay-0-6s"><i class="ri-pantone-fill"></i><h4>Application
                                Design</h4>
                            <p>Bentos gives you the blocks & kits you need to create a true website within minutes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pricing-area">
        <div class="container">
            <div class="container-inner">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="section-title text-center wow fadeInUp delay-0-2s"><p>Pricing</p>
                            <h2>Flexible Pricing Plan</h2></div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-item wow fadeInUp delay-0-2s">
                            <div class="pricing-header"><h4 class="title mt-0">Basic</h4>
                                <p class="save-percent">Have design ready to build?<br>or small budget</p><span
                                    class="price">15</span></div>
                            <div class="pricing-details">
                                <ul>
                                    <li><i class="ri-arrow-right-line"></i>Need your wireframe</li>
                                    <li><i class="ri-arrow-right-line"></i>Design with Figma, Framer</li>
                                    <li><i class="ri-arrow-right-line"></i>Product Design</li>
                                    <li class="unable"><i class="ri-arrow-right-line"></i>Digital Marketing</li>
                                    <li class="unable"><i class="ri-arrow-right-line"></i>Custom Support</li>
                                </ul>
                                <a href="#" class="theme-btn">Order Now<i class="ri-shopping-basket-line"></i></a></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-item wow fadeInUp delay-0-4s">
                            <div class="pricing-header"><h4 class="title mt-0">Standard</h4>
                                <p class="save-percent">Not have any design?<br>Leave its for me</p><span
                                    class="price">59</span></div>
                            <div class="pricing-details">
                                <ul>
                                    <li><i class="ri-arrow-right-line"></i>Website Design</li>
                                    <li><i class="ri-arrow-right-line"></i>Mobile Apps Design</li>
                                    <li><i class="ri-arrow-right-line"></i>Product Design</li>
                                    <li><i class="ri-arrow-right-line"></i>Digital Marketing</li>
                                    <li class="unable"><i class="ri-arrow-right-line"></i>Custom Support</li>
                                </ul>
                                <a href="#" class="theme-btn">Order Now<i class="ri-shopping-basket-line"></i></a></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-item wow fadeInUp delay-0-4s">
                            <div class="pricing-header"><h4 class="title mt-0">Standard</h4>
                                <p class="save-percent">Not have any design?<br>Leave its for me</p><span
                                    class="price">59</span></div>
                            <div class="pricing-details">
                                <ul>
                                    <li><i class="ri-arrow-right-line"></i>Website Design</li>
                                    <li><i class="ri-arrow-right-line"></i>Mobile Apps Design</li>
                                    <li><i class="ri-arrow-right-line"></i>Product Design</li>
                                    <li><i class="ri-arrow-right-line"></i>Digital Marketing</li>
                                    <li class="unable"><i class="ri-arrow-right-line"></i>Custom Support</li>
                                </ul>
                                <a href="#" class="theme-btn">Order Now<i class="ri-shopping-basket-line"></i></a></div>
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
