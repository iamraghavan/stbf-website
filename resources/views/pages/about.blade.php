@extends('layouts.app')
@section('content')

@livewire('banner-area', [
    'title' => 'Dedicated to Building Dreams, Crafting Quality, and Shaping the Future of Construction',
    'waterText' => 'About',
    'breadcrumbs' => [
        ['label' => 'Home', 'route' => 'index', 'active' => false],
        ['label' => 'About Us', 'route' => 'about', 'active' => true],
    ]
])

<style>
    .icon-ab{
        height: 90px;
    min-width: 90px;
    border-radius: 50%;
    background: var(--color-primary) !important;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    }
</style>

<div class="about-us-area-five rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about-wrapper-area-five">
                    <div class="about-left-wrapper">
                        <span class="pre">Our Commitment To Excellence</span>
                        <h2 class="title">Crafting structures <br> that last a lifetime</h2>
                        <p class="disc">
                            At SRI THIRUTHANI BUILDERS & FOUNDATION, we believe in turning your dreams into reality through meticulous planning, expert craftsmanship, and unwavering dedication. Established over 15 years ago, our company has built a solid reputation in the construction industry, driven by a passion for excellence and a commitment to delivering top-notch results.
                        </p>
                        <a href="about-us.html" class="rts-btn btn-primary">More About Us
                            <img src="{{ asset('assets/images/icons/arrow-up-right.svg') }}" alt="arrow-icon">
                        </a>
                    </div>
                    <div class="right-thumbnail">
                        <img src="{{ asset('/assets/r_files/460792561_120213854054680479_1784859191465524394_n.webp') }}" alt="about-sri-thiruthani">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="large-video-area rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-style-two-center inner">
                    <span class="pre">Watch Video</span>
                    <h2 class="title">Discover <b> Sri Thiruthani Builders &amp; Foundation </b> <br> Quality Construction and Trusted Services</h2>
                </div>
            </div>
        </div>
        <div class="row pt--60">
            <div class="col-lg-12">
                <div class="large-video-area-inner bg_image" style="background-image: url('https://img.youtube.com/vi/3rZZWgltcGc/maxresdefault.jpg');">
                    <div class="vedio-icone">
                        <a class="video-play-button play-video" href="https://www.youtube.com/watch?v=3rZZWgltcGc">
                            <span></span>
                        </a>
                        <div class="video-overlay">
                            <a class="video-overlay-close">×</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><div class="why-choose-us-area rts-section-gap in-about-page">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-12 pr--60 pr_md--0 pr_sm--0">
                <div class="reveal-item overflow-hidden aos-init">
                    <div class="reveal-animation reveal-end reveal-primary aos aos-init aos-animate" data-aos="reveal-end">
                    </div>
                    <img src="{{ asset("/assets/r_files/460904225_120213854607330479_5427884333862191558_n.webp") }}" alt="Sri Thiruthani Builders">
                </div>
            </div>
            <div class="col-xl-6 col-lg-12 pt_md--30 pt_sm--50">
                <div class="how-we-works-wrappers">
                    <div class="title-wrapper-left mb--50">
                        <span class="pre">Our Process</span>
                        <h2 class="title">
                            Building Your Dreams with <br>
                            SRI THIRUTHANI BUILDERS
                        </h2>
                    </div>
                    <div class="single-choose-us-one">
                        <div class="icon icon-ab">
                            <img src="{{ asset('assets/images/facts/icon/06.svg') }}" alt="service">
                            <span>1</span>
                        </div>
                        <div class="info-wrapper">
                            <h5 class="title">Vision & Strategy</h5>
                            <p class="disc">We start by listening to your aspirations and goals. Our team collaborates closely with you to craft a comprehensive strategy that aligns with your vision, timeline, and budget.</p>
                        </div>
                    </div>
                    <div class="single-choose-us-one">
                        <div class="icon icon-ab">
                            <img src="{{ asset("assets/images/facts/icon/07.svg") }}" alt="design">
                            <span>2</span>
                        </div>
                        <div class="info-wrapper">
                            <h5 class="title">Innovative Design & Planning</h5>
                            <p class="disc">Our expert architects and designers create innovative, functional, and aesthetic designs tailored to your needs. We ensure every detail is meticulously planned before construction begins.</p>
                        </div>
                    </div>
                    <div class="single-choose-us-one">
                        <div class="icon icon-ab">
                            <img src="{{ asset("assets/images/facts/icon/08.svg") }}" alt="construction">
                            <span>3</span>
                        </div>
                        <div class="info-wrapper">
                            <h5 class="title">Precision Construction & Delivery</h5>
                            <p class="disc">With over 15 years of expertise, our skilled engineers and craftsmen bring your project to life with unparalleled precision, ensuring timely delivery and exceptional quality.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt--60">
            <div class="col-lg-12">
                <div class="funfacts-list-wrapper-5">
                    <div class="single-fun-facts-area-5">

                        <div class="counter-wrapper">
                            <h2 class="counter title"><span class="odometer odometer-auto-theme odometer-triggered" data-count="15"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">5</span></span></span></span></span></div></span></h2>
                            <span class="bottom">Years Of Experience</span>
                        </div>
                    </div>
                    <div class="single-fun-facts-area-5 justify-content-center">

                        <div class="counter-wrapper">
                            <h2 class="counter title"><span class="odometer odometer-auto-theme odometer-triggered" data-count="250"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">2</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">5</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div></span>+</h2>
                            <span class="bottom">Completed Projects</span>
                        </div>
                    </div>
                    <div class="single-fun-facts-area-5 justify-content-center justify-content-md-start">

                        <div class="counter-wrapper">
                            <h2 class="counter title"><span class="odometer odometer-auto-theme odometer-triggered" data-count="200"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">2</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div></span>+</h2>
                            <span class="bottom">Satisfied Customers</span>
                        </div>
                    </div>
                    <div class="single-fun-facts-area-5 justify-content-end justify-content-md-center justify-content-sm-center">

                        <div class="counter-wrapper">
                            <h2 class="counter title"><span class="odometer odometer-auto-theme odometer-triggered" data-count="25000"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">2</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">5</span></span></span></span></span><span class="odometer-formatting-mark">,</span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div></span>+</h2>
                            <span class="bottom">Sq.Ft Completed</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@livewire('testimonial')
@endsection
