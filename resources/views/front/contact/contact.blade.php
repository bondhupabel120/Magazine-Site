@extends('front.master')

@section('title')
    Contact
@endsection

@section('body')
    <div class="site-main-container">
        <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
        <!-- Start contact-page Area -->
        <section class="contact-page-area pt-50 pb-120">
            <div class="container">
                <div class="row contact-wrap">
                    <div class="map-wrap" style="width:100%; height: 445px;" id="map"></div>

                    <div class="col-lg-3 d-flex flex-column address-wrap">
                        <div class="single-contact-address d-flex flex-row">
                            <div class="icon">
                                <span class="lnr lnr-home"></span>
                            </div>
                            <div class="contact-details">
                                <h5>Dhaka, Bangladesh</h5>
                                <p>
                                    House #26, Road #5, Dhanmondi, Dhaka-1205
                                </p>
                            </div>
                        </div>
                        <div class="single-contact-address d-flex flex-row">
                            <div class="icon">
                                <span class="lnr lnr-phone-handset"></span>
                            </div>
                            <div class="contact-details">
                                <h5>+88 01621-355849</h5>
                                <p>Mon to Sat 9am to 6 pm</p>
                            </div>
                        </div>
                        <div class="single-contact-address d-flex flex-row">
                            <div class="icon">
                                <span class="lnr lnr-envelope"></span>
                            </div>
                            <div class="contact-details">
                                <h5>easternuni.bd.com</h5>
                                <p>Send us your query</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <p class="text-center text-warning" style="font: 20px 'Open Sans'">Give Your Feedback</p>
                        <form class="form-area contact-form text-right" action="{{ route('new-contact') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">

                                    <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">
                                    <input name="subject" placeholder="Enter subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control" required="" type="text">
                                </div>
                                <div class="col-lg-6">
                                    <textarea class="common-textarea form-control" name="message" placeholder="Enter Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" required=""></textarea>
                                </div>
                                <div class="col-lg-12">
                                    <div class="alert-msg" style="text-align: left;"></div>
                                    <button class="primary-btn primary" style="float: right;">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End contact-page Area -->
    </div>
@endsection
