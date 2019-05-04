@extends('front.master')

@section('title')
    About
@endsection

@section('body')
    <section class="service-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-service d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-sun"></span>
                        </div>
                        <div class="details">
                            <a href="#">
                                <h4>Good Study</h4>
                            </a>
                            <p>
                                Here, I focus on a range of items and features that we use in life without giving them a second thought such as Coca Cola.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-service d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-code"></span>
                        </div>
                        <div class="details">
                            <a href="#">
                                <h4>Programming Event</h4>
                            </a>
                            <p>
                                Over 92% of computers are infected with Adware and spyware. Such software is rarely accompanied by uninstall utility.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-service d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-clock"></span>
                        </div>
                        <div class="details">
                            <a href="#">
                                <h4>Cultural Event</h4>
                            </a>
                            <p>
                                If you own an Iphone, you’ve probably already worked out how much fun it is to use it to watch movies-it has that nice big screen.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End service Area -->

    <!-- Start info Area -->
    <section class="info-area section-gap relative">
        <div class="container">
            <div class="row align-items-center justify-content-end">
                <div class="col-lg-6 no-padding info-right">
                    <h1>
                        Who we are <br>
                        to Serve the nation
                    </h1>
                    <p>
                        inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach.
                    </p>
                    <div class="row no-gutters">
                        <div class="single-services col">
                            <span class="lnr lnr-diamond"></span>
                            <a href="#">
                                <h4>Expert Services</h4>
                            </a>
                            <p>
                                Usage of the Internet is becoming more common due to rapid advancement of technology.
                            </p>
                        </div>
                        <div class="single-services col">
                            <span class="lnr lnr-phone"></span>
                            <a href="#">
                                <h4>Great Support</h4>
                            </a>
                            <p>
                                Usage of the Internet is becoming more common due to rapid advancement of technology.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End info Area -->

    <!-- Start feedback Area -->
    <section class="feedback-area section-gap" id="feedback">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 pb-50 header-text text-center">
                    <h1 class="mb-10">Goals to Achieve for the leadership</h1>
                </div>
            </div>
            <div class="row feedback-contents justify-content-between align-items-center">
                <div class="col-lg-6 feedback-left">
                    <div class="mn-accordion" id="accordion">
                        <!--Accordion item-->
                        <div class="accordion-item">
                            <div class="accordion-heading">
                                <h3>Success</h3>
                                <div class="icon">
                                    <i class="lnr lnr-chevron-right"></i>
                                </div>
                            </div>
                            <div class="accordion-content">
                                <p>For many of us, our very first experience of learning about the celestial bodies begins when we saw our first full moon in the sky. It is truly a magnificent view even to the naked eye. If the night is clear, you can see amazing detail of the lunar surface just star gazing on in your back yard.</p>
                            </div>
                        </div>
                        <!--Accordion item-->
                        <!--Accordion item-->
                        <div class="accordion-item">
                            <div class="accordion-heading">
                                <h3>Info</h3>
                                <div class="icon">
                                    <i class="lnr lnr-chevron-right"></i>
                                </div>
                            </div>
                            <div class="accordion-content">
                                <p>For many of us, our very first experience of learning about the celestial bodies begins when we saw our first full moon in the sky. It is truly a magnificent view even to the naked eye. If the night is clear, you can see amazing detail of the lunar surface just star gazing on in your back yard.</p>
                            </div>
                        </div>
                        <!--Accordion item-->
                        <!--Accordion item-->
                        <div class="accordion-item">
                            <div class="accordion-heading">
                                <h3>danger</h3>
                                <div class="icon">
                                    <i class="lnr lnr-chevron-right"></i>
                                </div>
                            </div>
                            <div class="accordion-content">
                                <p>For many of us, our very first experience of learning about the celestial bodies begins when we saw our first full moon in the sky. It is truly a magnificent view even to the naked eye. If the night is clear, you can see amazing detail of the lunar surface just star gazing on in your back yard.</p>
                            </div>
                        </div>
                        <!--Accordion item-->
                        <!--Accordion item-->
                        <div class="accordion-item">
                            <div class="accordion-heading">
                                <h3>Warning</h3>
                                <div class="icon">
                                    <i class="lnr lnr-chevron-right"></i>
                                </div>
                            </div>
                            <div class="accordion-content">
                                <p>For many of us, our very first experience of learning about the celestial bodies begins when we saw our first full moon in the sky. It is truly a magnificent view even to the naked eye. If the night is clear, you can see amazing detail of the lunar surface just star gazing on in your back yard.</p>
                            </div>
                        </div>
                        <!--Accordion item-->
                    </div>
                </div>
                <div class="col-lg-5 feedback-right relative d-flex justify-content-center align-items-center">
                    <div class="overlay overlay-bg"></div>
                    <a class="play-btn" href="{{ asset('/') }}front/img/video.mov"><img class="img-fluid" src="{{ asset('/') }}front/img/play-btn.png" alt=""></a>
                </div>
            </div>
        </div>
    </section>
    <!-- End feedback Area -->

    <!-- Start testimonial Area -->
    <section class="testimonial-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10" style="font: 35px Nunito;color: #23272b;text-shadow: 2px 2px #686868;">What Our Readers Say</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="active-testimonial">

                    @foreach($view_contacts as $view_contact)
                    <div class="single-testimonial item d-flex flex-row">
                        <div class="thumb">
                            <img class="img-fluid" src="{{ asset('/') }}front/img/testimonial.jpg" alt="" style="height: 60px;width: 100px;border-radius: 50%">
                        </div>
                        <div class="desc">
                            <h4 mt-30>{{ $view_contact->name }}</h4>
                            <p>{{ $view_contact->message }}</p>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- End testimonial Area -->
    <!-- Start brands Area -->
    <section class="brands-area pb-60 pt-60">
        <div class="container no-padding">
            <h3 class="text-center" style="font: 30px 'New Peninim MT';color: #4a8cdb">Our Partner</h3>
            <div class="brand-wrap">
                <div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
                    <div class="col single-brand">
                        <a href="#"><img class="mx-auto" src="{{ asset('/') }}front/img/l1.png" alt=""></a>
                    </div>
                    <div class="col single-brand">
                        <a href="#"><img class="mx-auto" src="{{ asset('/') }}front/img/l2.png" alt=""></a>
                    </div>
                    <div class="col single-brand">
                        <a href="#"><img class="mx-auto" src="{{ asset('/') }}front/img/l3.png" alt=""></a>
                    </div>
                    <div class="col single-brand">
                        <a href="#"><img class="mx-auto" src="{{ asset('/') }}front/img/l4.png" alt=""></a>
                    </div>
                    <div class="col single-brand">
                        <a href="#"><img class="mx-auto" src="{{ asset('/') }}front/img/l5.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End brands Area -->
@endsection

