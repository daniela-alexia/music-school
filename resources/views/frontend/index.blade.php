@extends('frontend.main_master')
@section('main')

@section('title')
Acasa | Music School

@endsection

            <!-- banner-area -->
            @include('frontend.home_all.home_slide')
            <!-- banner-area-end -->

            <!-- about-area -->
            @include('frontend.home_all.home_about')
            <!-- about-area-end -->

           

            <!-- services-area -->
            <section class="services">
                <div class="container">
                    <div class="services__title__wrap">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-xl-5 col-lg-6 col-md-8">
                                <div class="section__title">
                                    <span class="sub-title">02 - Serviciile noastre</span>
                                    <h2 class="title">Creates amazing digital experiences</h2>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-6 col-md-4">
                                <div class="services__arrow"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-0 services__active">
                        <div class="col-xl-3">
                            <div class="services__item">
                                <div class="services__thumb">
                                    <a href="services-details.html"><img src="{{ asset('frontend/assets/img/images/services_img01.jpg') }}" alt=""></a>
                                </div>
                                <div class="services__content">
                                    <div class="services__icon">
                                        <img class="light" src="{{ asset('frontend/assets/img/icons/services_light_icon01.png') }}" alt="">
                                        <img class="dark" src="{{ asset('frontend/assets/img/icons/services_icon01.png') }}" alt="">
                                    </div>
                                    <h3 class="title"><a href="services-details.html">Business Strategy</a></h3>
                                    <p>Strategy is a forward-looking plan for your brand’s behavior. Strategy is a forward-looking plan.</p>
                                    <ul class="services__list">
                                        <li>Research & Data</li>
                                        <li>Branding & Positioning</li>
                                        <li>Business Consulting</li>
                                        <li>Go To Market</li>
                                    </ul>
                                    <a href="services-details.html" class="btn border-btn">Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="services__item">
                                <div class="services__thumb">
                                    <a href="services-details.html"><img src="{{ asset('frontend/assets/img/images/services_img02.jpg') }}" alt=""></a>
                                </div>
                                <div class="services__content">
                                    <div class="services__icon">
                                        <img class="light" src="{{ asset('frontend/assets/img/icons/services_light_icon02.png') }}" alt="">
                                        <img class="dark" src="{{ asset('frontend/assets/img/icons/services_icon02.png') }}assets/img/icons/services_icon02.png" alt="">
                                    </div>
                                    <h3 class="title"><a href="services-details.html">Brand Strategy</a></h3>
                                    <p>Strategy is a forward-looking plan for your brand’s behavior. Strategy is a forward-looking plan.</p>
                                    <ul class="services__list">
                                        <li>User Research & Testing</li>
                                        <li>UX Design</li>
                                        <li>Visual Design</li>
                                        <li>Information Architecture</li>
                                    </ul>
                                    <a href="services-details.html" class="btn border-btn">Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="services__item">
                                <div class="services__thumb">
                                    <a href="services-details.html"><img src="{{ asset('frontend/assets/img/images/services_img03.jpg') }}" alt=""></a>
                                </div>
                                <div class="services__content">
                                    <div class="services__icon">
                                        <img class="light" src="{{ asset('frontend/assets/img/icons/services_light_icon03.png') }}" alt="">
                                        <img class="dark" src="{{ asset('frontend/assets/img/icons/services_icon03.png') }}" alt="">
                                    </div>
                                    <h3 class="title"><a href="services-details.html">Product Design</a></h3>
                                    <p>Strategy is a forward-looking plan for your brand’s behavior. Strategy is a forward-looking plan.</p>
                                    <ul class="services__list">
                                        <li>User Research & Testing</li>
                                        <li>UX Design</li>
                                        <li>Visual Design</li>
                                        <li>Information Architecture</li>
                                    </ul>
                                    <a href="services-details.html" class="btn border-btn">Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="services__item">
                                <div class="services__thumb">
                                    <a href="services-details.html"><img src="{{ asset('frontend/assets/img/images/services_img04.jpg') }}" alt=""></a>
                                </div>
                                <div class="services__content">
                                    <div class="services__icon">
                                        <img class="light" src="{{ asset('frontend/assets/img/icons/services_light_icon04.png') }}" alt="">
                                        <img class="dark" src="{{ asset('frontend/assets/img/icons/services_icon04.png') }}" alt="">
                                    </div>
                                    <h3 class="title"><a href="services-details.html">Visual Design</a></h3>
                                    <p>Strategy is a forward-looking plan for your brand’s behavior. Strategy is a forward-looking plan.</p>
                                    <ul class="services__list">
                                        <li>User Research & Testing</li>
                                        <li>UX Design</li>
                                        <li>Visual Design</li>
                                        <li>Information Architecture</li>
                                    </ul>
                                    <a href="services-details.html" class="btn border-btn">Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="services__item">
                                <div class="services__thumb">
                                    <a href="services-details.html"><img src="assets/img/images/services_img03.jpg" alt=""></a>
                                </div>
                                <div class="services__content">
                                    <div class="services__icon">
                                        <img class="light" src="assets/img/icons/services_light_icon02.png" alt="">
                                        <img class="dark" src="assets/img/icons/services_icon02.png" alt="">
                                    </div>
                                    <h3 class="title"><a href="services-details.html">Web Development</a></h3>
                                    <p>Strategy is a forward-looking plan for your brand’s behavior. Strategy is a forward-looking plan.</p>
                                    <ul class="services__list">
                                        <li>User Research & Testing</li>
                                        <li>UX Design</li>
                                        <li>Visual Design</li>
                                        <li>Information Architecture</li>
                                    </ul>
                                    <a href="services-details.html" class="btn border-btn">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- services-area-end -->

            <!-- work-process-area -->
            
            <!-- work-process-area-end -->

             <!-- courses-area -->
             @include('frontend.home_all.courses')
            <!-- courses-area-end -->
        

            <!-- testimonial-area -->
            <section class="testimonial">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-lg-6 order-0 order-lg-2">
                            <ul class="testimonial__avatar__img">
                                <li><img src="assets/img/images/testi_img01.png" alt=""></li>
                                <li><img src="assets/img/images/testi_img02.png" alt=""></li>
                                <li><img src="assets/img/images/testi_img03.png" alt=""></li>
                                <li><img src="assets/img/images/testi_img04.png" alt=""></li>
                                <li><img src="assets/img/images/testi_img05.png" alt=""></li>
                                <li><img src="assets/img/images/testi_img06.png" alt=""></li>
                                <li><img src="assets/img/images/testi_img07.png" alt=""></li>
                            </ul>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <div class="testimonial__wrap">
                                <div class="section__title">
                                    <span class="sub-title">03 - Feedback Clienți</span>
                                    <h2 class="title">Happy clients feedback</h2>
                                </div>
                                <div class="testimonial__active">
                                    <div class="testimonial__item">
                                        <div class="testimonial__icon">
                                            <i class="fas fa-quote-left"></i>
                                        </div>
                                        <div class="testimonial__content">
                                            <p>We are motivated by the satisfaction of our clients. Put your trust in us &share in our H.Spond Asset Management is made up of a team of expert, committed and experienced people with a passion for financial markets. Our goal is to achieve continuous.</p>
                                            <div class="testimonial__avatar">
                                                <span>Rasalina De Wiliamson</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial__item">
                                        <div class="testimonial__icon">
                                            <i class="fas fa-quote-left"></i>
                                        </div>
                                        <div class="testimonial__content">
                                            <p>We are motivated by the satisfaction of our clients. Put your trust in us &share in our H.Spond Asset Management is made up of a team of expert, committed and experienced people with a passion for financial markets. Our goal is to achieve continuous.</p>
                                            <div class="testimonial__avatar">
                                                <span>Rasalina De Wiliamson</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial__arrow"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->

            <!-- blog-area -->
            <section class="blog">
                <div class="container">
                    <div class="row gx-0 justify-content-center">
                        <div class="col-lg-4 col-md-6 col-sm-9">
                            <div class="blog__post__item">
                                <div class="blog__post__thumb">
                                    <a href="blog-details.html"><img src="assets/img/blog/blog_post_thumb01.jpg" alt=""></a>
                                    <div class="blog__post__tags">
                                        <a href="blog.html">Story</a>
                                    </div>
                                </div>
                                <div class="blog__post__content">
                                    <span class="date">13 january 2021</span>
                                    <h3 class="title"><a href="blog-details.html">Facebook design is dedicated to what's new in design</a></h3>
                                    <a href="blog-details.html" class="read__more">Read mORe</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-9">
                            <div class="blog__post__item">
                                <div class="blog__post__thumb">
                                    <a href="blog-details.html"><img src="assets/img/blog/blog_post_thumb02.jpg" alt=""></a>
                                    <div class="blog__post__tags">
                                        <a href="blog.html">Social</a>
                                    </div>
                                </div>
                                <div class="blog__post__content">
                                    <span class="date">13 january 2021</span>
                                    <h3 class="title"><a href="blog-details.html">Make communication Fast and Effectively.</a></h3>
                                    <a href="blog-details.html" class="read__more">Read mORe</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-9">
                            <div class="blog__post__item">
                                <div class="blog__post__thumb">
                                    <a href="blog-details.html"><img src="assets/img/blog/blog_post_thumb03.jpg" alt=""></a>
                                    <div class="blog__post__tags">
                                        <a href="blog.html">Work</a>
                                    </div>
                                </div>
                                <div class="blog__post__content">
                                    <span class="date">13 january 2021</span>
                                    <h3 class="title"><a href="blog-details.html">How to increase your productivity at work - 2021</a></h3>
                                    <a href="blog-details.html" class="read__more">Read mORe</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog__button text-center">
                        <a href="blog.html" class="btn">more blog</a>
                    </div>
                </div>
            </section>
            <!-- blog-area-end -->

            <!-- contact-area -->
            <section class="homeContact">
                <div class="container">
                    <div class="homeContact__wrap">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="section__title">
                                    <span class="sub-title">04 - Contactează-ne</span>
                                    <h2 class="title">Adersează-ne o întrebare</h2>
                                </div>
                                <div class="homeContact__content">
                                    
                                    <h2 class="mail"><a href="mailto:Info@webmail.com">musicschool@gmail.com</a></h2>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="homeContact__form">
                                    <form action="#">
                                        <input type="text" placeholder="Enter name*">
                                        <input type="email" placeholder="Enter mail*">
                                        <input type="number" placeholder="Enter number*">
                                        <textarea name="message" placeholder="Enter Massage*"></textarea>
                                        <button type="submit">Trimite mesaj</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

@endsection