@php
$route = Route::current()->getName();
@endphp



<header>
            <div id="sticky-header" class="menu__area transparent-header">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile__nav__toggler"><i class="fas fa-bars"></i></div>
                            <div class="menu__wrap">
                                <nav class="menu__nav">
                                    <!-- <div class="logo">
                                        <a href="index.html" class="logo__black"><img src="{{ asset('frontend/assets/img/logo/logo_black.png') }}" alt=""></a>
                                        <a href="index.html" class="logo__white"><img src="{{ asset('frontend/assets/img/logo/logo_white.png') }}" alt=""></a>
                                    </div> -->
                                    <div class="navbar__wrap main__menu d-none d-xl-flex">
                                        <ul class="navigation">
                                        <li class="{{ ($route == 'home')? 'active' : '' }}"><a href="{{ route('home') }}">Acasă</a></li>

                    <li class="{{ ($route == 'home.about')? 'active' : '' }}"><a href="{{ route('home.about') }}">Despre noi</a></li>

                                            <li><a href="services-details.html">Servicii</a></li>
                                            <li class="{{ ($route == 'home') }}"><a href="{{ route('all.courses') }}">Courses</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{ route('all.courses') }}">Courses</a></li>
                                                    <li><a href="{{ route('all.courses') }}">Detalii Courses</a></li>
                                                </ul>
                                            </li>
                                            <!-- <li class="menu-item-has-children"><a href="#">Blogul nostru</a>
                                                <ul class="sub-menu">
                                                    <li><a href="blog.html">Noutăți</a></li>
                                                    <li><a href="blog-details.html">Detalii</a></li>
                                                </ul>
                                            </li> -->
                                            <li  class="{{ ($route == 'contact.me') ? 'active' : '' }}"><a href="{{ route('contact.me') }}">Contactează-ne</a></li>
                                        </ul>
                                    </div>
                                    <div class="header__btn d-none d-md-block">
                                        <a href="contact" class="btn contact-button">Contactează-ne</a>
                                    </div>
                                    <div class="header__btn d-none d-md-block ps-4">
                                        <a href="login" class="btn login-button">Login</a>
                                    </div>
                                </nav>
                            </div>
                            <!-- Mobile Menu  -->
                            <div class="mobile__menu">
                                <nav class="menu__box">
                                    <div class="close__btn"><i class="fal fa-times"></i></div>
                                    <div class="nav-logo">
                                        <a href="index.html" class="logo__black"><img src="assets/img/logo/logo_black.png" alt=""></a>
                                        <a href="index.html" class="logo__white"><img src="assets/img/logo/logo_white.png" alt=""></a>
                                    </div>
                                    <div class="menu__outer">
                                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                    </div>
                                    <div class="social-links">
                                        <ul class="clearfix">
                                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                            <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="menu__backdrop"></div>
                            <!-- End Mobile Menu -->
                        </div>
                    </div>
                </div>
            </div>
        </header>