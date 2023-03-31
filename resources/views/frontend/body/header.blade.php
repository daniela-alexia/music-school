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
                                    <a href="{{ route('cart.list') }}" class="flex items-center space-x-1">
                                    <svg class="w-5 h-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet" viewBox="0 0 36 36"><circle cx="13.5" cy="29.5" r="2.5" fill="currentColor" class="clr-i-solid clr-i-solid-path-1"/><circle cx="26.5" cy="29.5" r="2.5" fill="currentColor" class="clr-i-solid clr-i-solid-path-2"/><path fill="currentColor" d="M33.1 6.39a1 1 0 0 0-.79-.39H9.21l-.45-1.43a1 1 0 0 0-.66-.65L4 2.66a1 1 0 1 0-.59 1.92L7 5.68l4.58 14.47l-1.63 1.34l-.13.13A2.66 2.66 0 0 0 9.74 25A2.75 2.75 0 0 0 12 26h16.69a1 1 0 0 0 0-2H11.84a.67.67 0 0 1-.56-1l2.41-2h15.43a1 1 0 0 0 1-.76l3.2-13a1 1 0 0 0-.22-.85Z" class="clr-i-solid clr-i-solid-path-3"/><path fill="none" d="M0 0h36v36H0z"/></svg>
                                        <span class="text-gray-700">{{ Cart::getTotalQuantity()}}</span> 
                                    </a>
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