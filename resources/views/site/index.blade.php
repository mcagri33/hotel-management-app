@extends('site.site-master')
@section('title','Index')
@section('content')

<div id="search-popup" class="search-popup">
    <div class="close-search theme-btn"><span class="fal fa-times"></span></div>
    <div class="popup-inner">
        <div class="overlay-layer"></div>
        <div class="search-form">
            <form method="post" action="index.html">
                <div class="form-group">
                    <fieldset>
                        <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                        <input type="submit" value="Search Now!" class="theme-btn">
                    </fieldset>
                </div>
            </form>
            <br>
            <h3>Recent Search Keywords</h3>
            <ul class="recent-searches">
                <li><a href="#">Finance</a></li>
                <li><a href="#">Idea</a></li>
                <li><a href="#">Service</a></li>
                <li><a href="#">Growth</a></li>
                <li><a href="#">Plan</a></li>
            </ul>
        </div>
    </div>
</div>

<section class="banner-section">
    <div class="swiper-container banner-slider">
        <div class="swiper-wrapper">
            <!-- Slide Item -->
            <div class="swiper-slide" style="background-image: url({{asset('assets/site/images/main-slider/banner-2.jpg')}});">
                <div class="content-outer">
                    <div class="content-box">
                        <div class="inner">
                            <h4>Summer Vacations</h4>
                            <h1>Your Home For <br> Vacation.</h1>
                            <div class="link-box">
                                <a href="room-1.html" class="btn-1">Book Room <span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide Item -->
            <div class="swiper-slide" style="background-image: url({{asset('assets/site/images/main-slider/banner-1.jpg')}});">
                <div class="content-outer">
                    <div class="content-box">
                        <div class="inner">
                            <h4>Summer Vacations</h4>
                            <h1>Luxury Hotel For <br> Vacation.</h1>
                            <div class="link-box">
                                <a href="room-1.html" class="btn-1">Book Room <span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-slider-nav">
        <div class="banner-slider-control banner-slider-button-prev"><span><i class="icon-3"></i></span></div>
        <div class="banner-slider-control banner-slider-button-next"><span><i class="icon-2"></i></span> </div>
    </div>
</section>

<div class="hotel-booking-form-1 alt p-0">
    <div class="auto-container">
        <div class="hotel-booking-form-1-wrap">
            <form class="hotel-booking-form-1-form flex-grow-1 d-flex">
                <div class="form-group">
                    <p class="hotel-booking-form-1-label">Check - in:</p>
                    <input placeholder="17 Sep, 2022" class="" type="text" name="form-name" id="nd_booking_archive_form_date_range_from" value="" />
                </div>
                <div class="form-group">
                    <p class="hotel-booking-form-1-label">Check - Out:</p>
                    <input placeholder="21 Sep, 2022" class="" type="text" name="form-name" id="nd_booking_archive_form_date_range_to" value="" />
                </div>
                <div class="form-group">
                    <p class="hotel-booking-form-1-label">Rooms:</p>
                    <select>
                        <option data-display="1 Room">1 Room</option>
                        <option value="2 Rooms">2 Rooms</option>
                        <option value="3 Rooms">3 Rooms</option>
                        <option value="4 Rooms">4 Rooms</option>
                        <option value="5 Rooms">5 Rooms</option>
                    </select>
                </div>
                <div class="form-group">
                    <p class="hotel-booking-form-1-label">Adults:</p>
                    <select>
                        <option data-display="2 Adults">2 Adults</option>
                        <option value="1 Adult">1 Adult</option>
                        <option value="3 Adults">3 Adults</option>
                        <option value="4 Adults">4 Adults</option>
                        <option value="5 Adults">5 Adults</option>
                    </select>
                </div>
                <div class="form-group">
                    <p class="hotel-booking-form-1-label">Child:</p>
                    <select>
                        <option data-display="1 Children">1 Children</option>
                        <option value="0 Children">0 Children</option>
                        <option value="2 Childrens">2 Childrens</option>
                        <option value="3 Childrens">3 Childrens</option>
                        <option value="4 Childrens">4 Childrens</option>
                        <option value="5 Childrens">5 Childrens</option>
                    </select>
                </div>
                <div class="form-group text-lg-end">
                    <button type="submit" class="btn-1 btn-large">Check Availability<span></span></button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Feature three -->
<section class="section-padding gray-bg">
    <div class="p_absolute l_0 b_0 r_0 t__85 gray-bg"></div>
    <div class="feature-3-shape-1 p_absolute r_30 b_0"><img src="{{asset('assets/site/images/shape/pattern-5.png')}}" alt=""></div>
    <div class="auto-container">
        <div class="row p_relative">
            <div class="feature-3-shape-2"></div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-3-block mb_30 wow fadeInLeft" data-wow-delay=".2s" data-wow-duration=".8s">
                    <div class="feature-3-image hvr-img-zoom-1"><img src="{{asset('assets/site/images/resource/feature-image-6.jpg')}}" alt=""></div>
                    <div class="feature-3-offer w_80 h_80 theme-bg p_absolute r_30 t_30 fs_18 text-center text-light pt_20 b_radius_50 lh_20"><span class="fs_22 fw_medium">15%</span><br> OFF</div>
                    <div class="feature-3-lower-content">
                        <h4 class="feature-3-title">Kick off Summer <br> in NYC</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-3-block mb_30 wow fadeInLeft" data-wow-delay=".2s" data-wow-duration=".8s">
                    <div class="feature-3-image hvr-img-zoom-1"><img src="{{asset('assets/site/images/resource/feature-image-7.jpg')}}" alt=""></div>
                    <div class="feature-3-offer w_80 h_80 theme-bg p_absolute r_30 t_30 fs_18 text-center text-light pt_20 b_radius_50 lh_20"><span class="fs_22 fw_medium">15%</span><br> OFF</div>
                    <div class="feature-3-lower-content">
                        <h4 class="feature-3-title">Free Breakfast <br> Packages</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-3-block mb_30 wow fadeInLeft" data-wow-delay=".2s" data-wow-duration=".8s">
                    <div class="feature-3-image hvr-img-zoom-1"><img src="{{asset('assets/site/images/resource/feature-image-8.jpg')}}" alt=""></div>
                    <div class="feature-3-offer w_80 h_80 theme-bg p_absolute r_30 t_30 fs_18 text-center text-light pt_20 b_radius_50 lh_20"><span class="fs_22 fw_medium">15%</span><br> OFF</div>
                    <div class="feature-3-lower-content">
                        <h4 class="feature-3-title">Free Breakfast <br> Packages</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About three -->
<section class="section-padding">
    <div class="auto-container">
        <div class="row align-items-center">
            <div class="col-lg-6 pe-lg-5">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-30 t__15 p_relative" data-parallax='{"y": 30}'><img src="{{asset('assets/site/images/resource/about-4.jpg')}}" alt=""></div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-30 t_15 p_relative" data-parallax='{"y": -30}'><img src="{{asset('assets/site/images/resource/about-5.jpg')}}" alt=""></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 ps-lg-5">
                <div class="section_heading mb_20">
                    <span class="section_heading_title_small">About Royalking</span>
                    <h2 class="section_heading_title_big">Luxury Hotel in The <br> Heart of Mexico.</h2>
                </div>
                <p class="aboout-1-desc mb_30">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Adipiscing integer
                    ultrices suspendisse varius etiam est. Est, felis, tempus nec vitae orci sodales
                    Metus, velit nec at diam in sed. Massa dui ipsum ornare sagittis dolor sagittis
                    amet odio est. Sit semper et velit fusce.</p>
                <ul class="list-1 mb_30">
                    <li><i class="icon-20"></i>Powerful Admin Panel</li>
                    <li><i class="icon-20"></i>Multi-Language Support</li>
                </ul>
                <div class="about-1-btn mb_30">
                    <a href="about.html" class="btn-1">Discover More<span></span></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Room three -->
<section class="section-padding gray-bg">
    <div class="container-fluid">
        <div class="section_heading text-center mb_50">
            <span class="section_heading_title_small">Discover</span>
            <h2 class="section_heading_title_big">Rooms & Suites</h2>
        </div>
        <div class="swiper-container four-item-carousel">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="room-2-block alt wow fadeInUp" data-wow-delay=".2s" data-wow-duration=".8s" style="background-image: url({{asset('assets/site/images/resource/room-7.jpg')}});">
                        <div class="room-2-content">
                            <h4 class="room-2-title"><a href="room-details.html">Luxury Room</a></h4>
                        </div>
                        <div class="room-2-content2">
                            <div class="room-2-rating">
                                <i class="icon-6"></i>
                                <i class="icon-6"></i>
                                <i class="icon-6"></i>
                                <i class="icon-6"></i>
                                <i class="icon-7"></i>
                            </div>
                            <h4 class="room-2-title"><a href="room-details.html">Luxury Room</a></h4>
                            <p class="room-2-meta-info">Start from <span class="theme-color">$55.0</span>/night</p>
                            <p class="room-2-text mb_20">Mattis cras magna morb punar
                                aliquet in. Risus a arcu eget.</p>
                            <div class="link-btn"><a href="javascript:void(0);" class="btn-1 btn-small">Book Now <span></span></a></div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="room-2-block alt wow fadeInUp" data-wow-delay=".2s" data-wow-duration=".8s" style="background-image: url({{asset('assets/site/images/resource/room-8.jpg')}});">
                        <div class="room-2-content">
                            <h4 class="room-2-title"><a href="room-details.html">Delux Room</a></h4>
                        </div>
                        <div class="room-2-content2">
                            <div class="room-2-rating">
                                <i class="icon-6"></i>
                                <i class="icon-6"></i>
                                <i class="icon-6"></i>
                                <i class="icon-6"></i>
                                <i class="icon-7"></i>
                            </div>
                            <h4 class="room-2-title"><a href="room-details.html">Delux Room</a></h4>
                            <p class="room-2-meta-info">Start from <span class="theme-color">$55.0</span>/night</p>
                            <p class="room-2-text mb_20">Mattis cras magna morb punar <br> aliquet in. Risus a arcu eget.</p>
                            <div class="link-btn"><a href="javascript:void(0);" class="btn-1 btn-small">Book Now <span></span></a></div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="room-2-block alt wow fadeInUp" data-wow-delay=".2s" data-wow-duration=".8s" style="background-image: url({{asset('assets/site/images/resource/room-9.jpg')}});">
                        <div class="room-2-content">
                            <h4 class="room-2-title"><a href="room-details.html">Luxury Room</a></h4>
                        </div>
                        <div class="room-2-content2">
                            <div class="room-2-rating">
                                <i class="icon-6"></i>
                                <i class="icon-6"></i>
                                <i class="icon-6"></i>
                                <i class="icon-6"></i>
                                <i class="icon-7"></i>
                            </div>
                            <h4 class="room-2-title"><a href="room-details.html">Queen Room</a></h4>
                            <p class="room-2-meta-info">Start from <span class="theme-color">$55.0</span>/night</p>
                            <p class="room-2-text mb_20">Mattis cras magna morb punar <br> aliquet in. Risus a arcu eget.</p>
                            <div class="link-btn"><a href="javascript:void(0);" class="btn-1 btn-small">Book Now <span></span></a></div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="room-2-block alt wow fadeInUp" data-wow-delay=".2s" data-wow-duration=".8s" style="background-image: url({{asset('assets/site/images/resource/room-10.jpg')}});">
                        <div class="room-2-content">
                            <h4 class="room-2-title"><a href="room-details.html">Classic Room</a></h4>
                        </div>
                        <div class="room-2-content2">
                            <div class="room-2-rating">
                                <i class="icon-6"></i>
                                <i class="icon-6"></i>
                                <i class="icon-6"></i>
                                <i class="icon-6"></i>
                                <i class="icon-7"></i>
                            </div>
                            <h4 class="room-2-title"><a href="room-details.html">Classic Room</a></h4>
                            <p class="room-2-meta-info">Start from <span class="theme-color">$55.0</span>/night</p>
                            <p class="room-2-text mb_20">Mattis cras magna morb punar <br> aliquet in. Risus a arcu eget.</p>
                            <div class="link-btn"><a href="javascript:void(0);" class="btn-1 btn-small">Book Now <span></span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-nav-style-2 justify-content-center mt_60">
            <div class="slider-control slider-button-prev"><span><i class="icon-3"></i></span></div>
            <div class="slider-control slider-button-next"><span><i class="icon-2"></i></span> </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="section-padding">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section_heading mb_20">
                    <span class="section_heading_title_small">Testimonials</span>
                    <h2 class="section_heading_title_big">What <br> They’re Say <br> About Us?</h2>
                </div>
                <p class="testimonial-1-desc">Amet dui scelerisque vel habitant eget <br> tincidunt facilisis pretium. Porttitor mi <br> nisi, non vitae tempus.</p>
                <div class="slider-nav-style-2 testimonial-1-nav">
                    <div class="slider-control slider-button-prev hvr-zoom-1 hvr-zoom-1-primary"><span><i class="icon-3"></i></span></div>
                    <div class="slider-control slider-button-next hvr-zoom-1 hvr-zoom-1-primary"><span><i class="icon-2"></i></span> </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="testimonial-1-block-wrap">
                    <div class="testimonial-1-shape-1"><img src="{{asset('assets/site/images/shape/pattern-1.png')}}" alt=""></div>
                    <div class="swiper-container two-item-carousel">
                        <div class="swiper-wrapper">
                            <!-- Slide Item -->
                            <div class="swiper-slide">
                                <div class="testimonial-1-block">
                                    <div class="testimonial-1-quote-icon"><i class="icon-18"></i></div>
                                    <p class="testimonial-1-review-desc">“Mattis cras magna morb nula punar
                                        aenean aliquet in. Risus a arcu eget
                                        mi hendrerit gravida elit scelerisque
                                        tempor Pharetra fringilla tellus vivera
                                        eget sapien viverra faucibus facilisis
                                        sed facilisi dictum.”</p>
                                    <h4 class="testimonial-1-name">Jacob Jones</h4>
                                    <p class="testimonial-1-designation">Manager</p>
                                    <div class="testimonial-1-author-thumb">
                                        <img src="{{asset('assets/site/images/resource/testimonial-1.jpg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- Slide Item -->
                            <div class="swiper-slide">
                                <div class="testimonial-1-block">
                                    <div class="testimonial-1-quote-icon"><i class="icon-18"></i></div>
                                    <p class="testimonial-1-review-desc">“Mattis cras magna morb nula punar
                                        aenean aliquet in. Risus a arcu eget
                                        mi hendrerit gravida elit scelerisque
                                        tempor Pharetra fringilla tellus vivera
                                        eget sapien viverra faucibus facilisis
                                        sed facilisi dictum.”</p>
                                    <h4 class="testimonial-1-name">Ralph Edwards</h4>
                                    <p class="testimonial-1-designation">Manager</p>
                                    <div class="testimonial-1-author-thumb">
                                        <img src="{{asset('assets/site/images/resource/testimonial-2.jpg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Funfacts -->
<section class="section-padding gray-bg text-center small-padding">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="funfact-1-block text-center">
                    <div class="d-flex align-items-center justify-content-center">
                        <h2 class="funfact-1-number odometer" data-count="150">00</h2>
                        <h2 class="funfact-1-number-prefix">+</h2>
                    </div>
                    <p class="funfact-1-title">Booking Month</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="funfact-1-block">
                    <div class="d-flex align-items-center justify-content-center">
                        <h2 class="funfact-1-number odometer" data-count="2">00</h2>
                        <h2 class="funfact-1-number-prefix">k+</h2>
                    </div>
                    <p class="funfact-1-title">Visitors Daily</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="funfact-1-block">
                    <div class="d-flex align-items-center justify-content-center">
                        <h2 class="funfact-1-number odometer" data-count="95">00</h2>
                        <h2 class="funfact-1-number-prefix">%</h2>
                    </div>
                    <p class="funfact-1-title">Positive Feedback</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="funfact-1-block">
                    <div class="d-flex align-items-center justify-content-center">
                        <h2 class="funfact-1-number odometer" data-count="30">00</h2>
                        <h2 class="funfact-1-number-prefix">+</h2>
                    </div>
                    <p class="funfact-1-title">Award Wining</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-1-section">
    <div class="cta-1-bg" data-parallax='{"y": 30}' style="background-image: url({{asset('assets/site/images/background/parallax-bg2.jpg')}});"></div>
    <div class="auto-container">
        <div class="section_heading text-center mb_40">
            <span class="section_heading_title_small">Testimonials</span>
            <h2 class="section_heading_title_big alt">Looking for a Relaxing Country <br> Vacation Rental?</h2>
        </div>
        <div class="text-center">
            <div class="cta-1-link-bt"><a href="javascript:void(0);" class="btn-1">Check Availability<span></span></a></div>
        </div>
    </div>
</section>

<!-- Amenities -->
<section class="section-padding">
    <div class="p_absolute l_0 b_0 r_0 t_0" style="background: url({{asset('assets/site/images/shape/pattern-6.png')}}) no-repeat center bottom"></div>
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section_heading mb_50">
                    <span class="section_heading_title_small">Discover</span>
                    <h2 class="section_heading_title_big mb_20">Our Best <br> Amenities</h2>
                    <p>Amet dui scelerisque vel habitant eget <br> tincidunt facilisis pretium. Porttitor mi nisi, <br> non vitae tempus.</p>
                </div>
            </div>
            <div class="col-lg-7 ps-lg-4">
                <div class="row">
                    <div class="col-md-4 col-ms-6">
                        <div class="icon_box-1 alt2">
                            <div class="icon_box-1-icon alt"><i class="icon-8"></i></div>
                            <p class="fw_500">Fast wifi</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-ms-6">
                        <div class="icon_box-1 alt2">
                            <div class="icon_box-1-icon"><i class="icon-9"></i></div>
                            <p class="fw_500">Coffee</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-ms-6">
                        <div class="icon_box-1 alt2">
                            <div class="icon_box-1-icon"><i class="icon-10"></i></div>
                            <p class="fw_500">Bath</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-ms-6">
                        <div class="icon_box-1 alt2">
                            <div class="icon_box-1-icon"><i class="icon-13"></i></div>
                            <p class="fw_500">Laundry service</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-ms-6">
                        <div class="icon_box-1 alt2">
                            <div class="icon_box-1-icon"><i class="icon-14"></i></div>
                            <p class="fw_500">Breakfast</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-ms-6">
                        <div class="icon_box-1 alt2">
                            <div class="icon_box-1-icon"><i class="icon-15"></i></div>
                            <p class="fw_500">Spa & Wellness</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog -->
<section class="section-padding gray-bg">
    <div class="auto-container">
        <div class="section_heading text-center mb_60">
            <span class="section_heading_title_small">Our Article</span>
            <h2 class="section_heading_title_big">Get More Update For <br> Royalking</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="blog-1-block wow fadeInLeft" data-wow-delay=".2s" data-wow-duration=".8s">
                    <div class="blog-1-image">
                        <a href="blog-details.html"><img src="{{asset('assets/site/images/resource/blog-1.jpg')}}" alt=""></a>
                    </div>
                    <div class="blog-1-bottom-content">
                        <div class="blog-1-date">15 APRIL</div>
                        <h4 class="blog-1-title"><a href="blog-details.html">Our New Miami Beach
                                Hotel Is Open!</a></h4>
                        <ul class="d-flex blog-1-meta-info">
                            <li>Admin</li>
                            <li>0 Comment</li>
                        </ul>
                        <p class="blog-1-excerpt">Amet minim mollit no duis sit enim aliqua dolor do amet officia.</p>
                        <div class="blog-1-link-btn"><a href="blog-details.html" class="h_50 w_50 hvr-zoom-1 circle-btn lh_50 fs_13 hvr-zoom-1-primary"><i class="icon-5"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-1-block wow fadeInLeft" data-wow-delay=".2s" data-wow-duration=".8s">
                    <div class="blog-1-image">
                        <a href="blog-details.html"><img src="{{asset('assets/site/images/resource/blog-2.jpg')}}" alt=""></a>
                    </div>
                    <div class="blog-1-bottom-content">
                        <div class="blog-1-date">15 APRIL</div>
                        <h4 class="blog-1-title"><a href="blog-details.html">Know the secreat of
                                Royalking Resort </a></h4>
                        <ul class="d-flex blog-1-meta-info">
                            <li>Admin</li>
                            <li>0 Comment</li>
                        </ul>
                        <p class="blog-1-excerpt">Amet minim mollit no duis sit enim aliqua dolor do amet officia.</p>
                        <div class="blog-1-link-btn"><a href="blog-details.html" class="h_50 w_50 hvr-zoom-1 circle-btn lh_50 fs_13 hvr-zoom-1-primary"><i class="icon-5"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay=".2s" data-wow-duration=".8s">
                <div class="blog-1-block">
                    <div class="blog-1-image">
                        <a href="blog-details.html"><img src="{{asset('assets/site/images/resource/blog-3.jpg')}}" alt=""></a>
                    </div>
                    <div class="blog-1-bottom-content">
                        <div class="blog-1-date">15 APRIL</div>
                        <h4 class="blog-1-title"><a href="blog-details.html">How to book a Resort in best price on Mountains</a></h4>
                        <ul class="d-flex blog-1-meta-info">
                            <li>Admin</li>
                            <li>0 Comment</li>
                        </ul>
                        <p class="blog-1-excerpt">Amet minim mollit no duis sit enim aliqua dolor do amet officia.</p>
                        <div class="blog-1-link-btn"><a href="blog-details.html" class="h_50 w_50 hvr-zoom-1 circle-btn lh_50 fs_13 hvr-zoom-1-primary"><i class="icon-5"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
