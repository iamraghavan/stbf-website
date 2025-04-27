<div>
    <!-- resources/views/components/TestimonialsSection.blade.php -->
<section class="rts-testimonials-area rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-center-style-one dark-title">
                    <span class="pre">Client’s Feedback</span>
                    <h2 class="title">What Our Client’s Say After <br> Get Our Service</h2>
                </div>
            </div>
        </div>
        <div class="row g-24 mt--30 mt_sm--10">
            <div class="col-lg-12">
                <div class="swiper-silder-testimonials-wrapper">
                    <div class="swiper mySwiper-testimonails">
                        <div class="swiper-wrapper">
                            @foreach([
                                [
                                    'name' => 'Suresh Kumar',
                                    'title' => 'Property Manager at Chennai Realty',
                                    'image' => 'assets/images/testimonials/suresh.webp',
                                    'testimonial' => 'SRI THIRUTHANI BUILDERS & FOUNDATION made our dream home a reality. Their attention to detail and commitment to quality was outstanding. From start to finish, they kept us informed and delivered on time.',
                                    'rating' => 4.9
                                ],
                                [
                                    'name' => 'Priya Lakshmi',
                                    'title' => 'Business Owner',
                                    'image' => 'assets/images/testimonials/priya.webp',
                                    'testimonial' => 'The team at SRI THIRUTHANI BUILDERS & FOUNDATION was professional and dedicated. They understood our needs perfectly and built a commercial space that exceeded our expectations.',
                                    'rating' => 4.8
                                ],
                                [
                                    'name' => 'Ramesh Balaji',
                                    'title' => 'Homeowner',
                                    'image' => 'assets/images/testimonials/ramesh.webp',
                                    'testimonial' => 'We are thrilled with the work done by SRI THIRUTHANI BUILDERS & FOUNDATION. Their craftsmanship and timely delivery made the entire process stress-free and satisfying.',
                                    'rating' => 4.7
                                ]
                            ] as $testimonial)
                                <div class="swiper-slide">
                                    <div class="single-testimonials-area-one">
                                        <p class="disc">
                                            "{{ $testimonial['testimonial'] }}"
                                        </p>
                                        <div class="bottom-area">
                                            <div class="user">

                                                <div class="info">
                                                    <h5 class="title">{{ $testimonial['name'] }}</h5>
                                                    {{-- <span>{{ $testimonial['title'] }}</span> --}}
                                                </div>
                                            </div>
                                            <div class="stars-area">
                                                <div class="stars">
                                                    @for ($i = 0; $i < 5; $i++)
                                                        <i class="fa-solid fa-star"></i>
                                                    @endfor
                                                </div>
                                                <p>{{ $testimonial['rating'] }} <span>Ratings</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide">
                        <i class="fa-sharp-duotone fa-light fa-arrow-right"></i>
                    </div>
                    <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide">
                        <i class="fa-sharp-duotone fa-light fa-arrow-left"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
