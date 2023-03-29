@extends('frontend.main_master')
@section('main')

@section('title')
Contact | Music School

@endsection

 <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb__wrap">
                <div class="container custom-container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8 col-md-10">
                            <div class="breadcrumb__wrap__content">
                                <h2 class="title">Contactează-ne</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/">Acasă</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="breadcrumb__wrap__icon">
                    <ul>
                        <li><img src="assets/img/icons/breadcrumb_icon01.png" alt=""></li>
                        <li><img src="assets/img/icons/breadcrumb_icon02.png" alt=""></li>
                        <li><img src="assets/img/icons/breadcrumb_icon03.png" alt=""></li>
                        <li><img src="assets/img/icons/breadcrumb_icon04.png" alt=""></li>
                        <li><img src="assets/img/icons/breadcrumb_icon05.png" alt=""></li>
                        <li><img src="assets/img/icons/breadcrumb_icon06.png" alt=""></li>
                    </ul>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- contact-map -->
            <div id="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96811.54759587669!2d-74.01263924803828!3d40.6880494567041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25bae694479a3%3A0xb9949385da52e69e!2sBarclays%20Center!5e0!3m2!1sen!2sbd!4v1636195194646!5m2!1sen!2sbd"
                    allowfullscreen loading="lazy"></iframe>
            </div>
            <!-- contact-map-end -->

            <!-- contact-area -->
            <div class="contact-area">
                <div class="container">
                    <form method="post" action="{{ route('store.message') }}" class="contact__form">
                        <div class="row">
                            <div class="col-md-6">
                                <input name="name" type="text" placeholder="Nume*">
                            </div>
                            <div class="col-md-6">
                                <input name="email" type="email" placeholder="Email*">
                            </div>
                            <div class="col-md-6">
                                <input name="subject" type="text" placeholder="Subiect*">
                            </div>
                            <div class="col-md-6">
                                <input name="phone" type="text" placeholder="Telefon*">
                            </div>
                        </div>
                        <textarea name="message" id="message" placeholder="Mesaj*"></textarea>
                        <button type="submit" class="btn">trimite mesaj</button>
                    </form>
                </div>
            </div>
            <!-- contact-area-end -->

            <!-- contact-info-area -->
            <section class="contact-info-area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="contact__info">
                                <div class="contact__info__icon">
                                    <img src="{{ asset('frontend/assets/img/icons/contact_icon01.png')}}" alt="">
                                </div>
                                <div class="contact__info__content">
                                    <h4 class="title">Adresă</h4>
                                    <span>Str. Mureșului, nr. 53, Cluj Napoca, <br> România</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="contact__info">
                                <div class="contact__info__icon">
                                    <img src="{{ asset('frontend/assets/img/icons/contact_icon02.png')}}" alt="">
                                </div>
                                <div class="contact__info__content">
                                    <h4 class="title">Telefon</h4>
                                    <span>0747964020</span>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="contact__info">
                                <div class="contact__info__icon">
                                    <img src="{{ asset('frontend/assets/img/icons/contact_icon03.png')}}" alt="">
                                </div>
                                <div class="contact__info__content">
                                    <h4 class="title">Email</h4>
                                    <span>musicschool@gmail.com</span>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-info-area-end -->

            <!-- contact-area -->
            <section class="homeContact homeContact__style__two">
                <div class="container">
                    <div class="homeContact__wrap">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="section__title">
                                    <span class="sub-title">04 - Contactează-ne</span>
                                    <h2 class="title">Adresează-ne o întrebare</h2>
                                </div>
                                <div class="homeContact__content">
                                    
                                    <h2 class="mail"><a href="mailto:Info@webmail.com">musicschool@gmail.com</a></h2>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="homeContact__form">
                                    <form action="#">
                                        <input type="text" placeholder="Nume*">
                                        <input type="email" placeholder="Mail*">
                                        <input type="number" placeholder="Telefonr*">
                                        <textarea name="message" placeholder="Mesaj*"></textarea>
                                        <button type="submit">Trimite mesaj</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

        </main>









@endsection