@extends('front.master')

@section('title')
    News Details
@endsection

@section('body')
    <section class="latest-post-area pb-120">
        <div class="container no-padding">
            <div class="row">
                <div class="col-lg-8 post-list">
                    <!-- Start single-post Area -->
                    <div class="single-post-wrap">
                        <div class="feature-img-thumb relative">
                            <div class="overlay"></div>
                            <img class="rounded img-rounded img-fluid" src="{{ asset($news->news_image) }}" alt="" style="height: 400px;width: 100%;">
                        </div>
                        <div class="content-wrap">
                            <!--<ul class="tags mt-10">-->
                            <!--<li><a href="#">Food Habit</a></li>-->
                            <!--</ul>-->
                            <a>
                                <h3>{{ $news->news_title }}</h3>
                            </a>
                            <ul class="meta pb-20">
                                {{--<li><a href="#"><span class="lnr lnr-user"></span>Pabel</a></li>--}}
                                <li><a><span class="lnr lnr-calendar-full"></span>{{ $news->created_at->format('j F Y') }}</a></li>
                            </ul>
                            <ul>
                                <!--<li style="margin-top: -20px"><iframe href="#" src="img/aud.mp3"><span class="lnr lnr-bubble"></span>Audio News</iframe></li>-->
                                <div class="feature-img-thumb relative">
                                    <h4 style="color: #4a8cdb;text-align: center">You can listen or watch the news</h4>
                                    <hr/>
                                    <video controls class="audio-player">
                                        <source src="{{ asset($news->news_audio) }}">
                                    </video>
                                    <hr/>
                                </div>
                            </ul>
                            <p>
                                {!! $news->news_long_description !!}
                            </p>
                            <!--<div class="navigation-wrap justify-content-between d-flex">-->
                            <!--<a class="prev" href="#"><span class="lnr lnr-arrow-left"></span>Prev Post</a>-->
                            <!--<a class="next" href="#">Next Post<span class="lnr lnr-arrow-right"></span></a>-->
                            <!--</div>-->

                            <div class="comment-form">
                                <h4>Post Comment</h4>
                                <form action="{{ route('new-comment') }}" method="POST">
                                    @csrf
                                    <div class="form-group form-inline">
                                        <div class="form-group col-lg-6 col-md-12 name">
                                            <input type="text" class="form-control" name="name" placeholder="Enter Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'">
                                            <input type="hidden" name="news_id" value="{{ $news->id }}" />
                                        </div>
                                        <div class="form-group col-lg-6 col-md-12 email">
                                            <input type="email" class="form-control" name="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control mb-10" rows="5" name="comment" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                                    </div>
                                    <button href="#" class="primary-btn text-uppercase">Post Comment</button>
                                </form>
                            </div>

                            <div class="comment-sec-area mt-5">
                                <div class="container">
                                    <div class="row flex-column">
                                        {{--<h6>05 Comments</h6>--}}
                                        @foreach($comments as $comment)
                                        <div class="comment-list">
                                            <div class="single-comment justify-content-between d-flex">
                                                <div class="user justify-content-between d-flex">
                                                    <div class="thumb">
                                                        <img src="{{ asset('/') }}front/img/com-one.jpg" alt="" style="height: 70px;width: 70px;border-radius: 50%">
                                                    </div>
                                                    <div class="desc">
                                                        <h5><a href="#">{{ $comment->name }}</a></h5>
                                                        <hr/>
{{--                                                        <p class="date">{{ $comment->created_at->format('j F Y') }} </p>--}}
                                                        <p class="comment">
                                                            {{ $comment->comment }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- End single-post Area -->
                </div>
                <div class="col-lg-4">
                    <div class="sidebars-area">
                        <div class="single-sidebar-widget editors-pick-widget">
                            <h6 class="title">News</h6>
                            <div class="editors-pick-post">

                                @foreach($details_ones as $details_one)
                                <div class="feature-img-wrap relative">
                                    <div class="feature-img relative">
                                        <div class="overlay overlay-bg"></div>
                                        <a href="{{ route('news-details', ['id'=>$details_one->id]) }}">
                                        <img class="rounded img-fluid" src="{{ asset($details_one->news_image) }}" alt="{{ $details_one->news_title }}" style="height: 200px;width: 100%;">
                                        </a>
                                    </div>
                                    <!--<ul class="tags">-->
                                    <!--<li><a href="#">Travel</a></li>-->
                                    <!--</ul>-->
                                </div>
                                <div class="details">
                                    <a href="{{ route('news-details', ['id'=>$details_one->id]) }}">
                                        <h4 class="mt-20">{{ $details_one->news_title }}</h4>
                                    </a>
                                    <ul class="meta">
                                        {{--<li><a href="#"><span class="lnr lnr-user"></span>Foysal</a></li>--}}
                                        <li><a><span class="lnr lnr-calendar-full"></span>{{ $details_one->created_at->format('j F Y') }}</a></li>
                                        <li><a href="#"><span class="lnr lnr-bubble"></span>06 </a></li>
                                    </ul>
                                    <p class="excert">
                                        {{ $details_one->news_short_description }}
                                    </p>
                                </div>
                                @endforeach

                                <div class="post-lists">

                                    @foreach($details_twos as $details_two)
                                    <div class="single-post d-flex flex-row">
                                        <div class="thumb">
                                            <a href="{{ route('news-details', ['id'=>$details_two->id]) }}">
                                                <img src="{{ asset($details_two->news_image) }}" alt="{{ $details_two->news_title }}" style="height: 100px;width: 100px">
                                            </a>
                                        </div>
                                        <div class="detail">
                                            <a href="{{ route('news-details', ['id'=>$details_two->id]) }}"><h6>{{ $details_two->news_title }}</h6></a>
                                            <ul class="meta">
                                                <li><a><span class="lnr lnr-calendar-full"></span>{{ $details_two->created_at->format('j F Y') }}</a></li>
                                                <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        <div class="ad-widget-wrap">
                            <img class="img-fluid" src="{{ asset('/') }}front/img/add-side-two.jpg" alt="" style="height: 300px;width: 100%;">
                        </div>

                        <!--<div class="single-sidebar-widget newsletter-widget">-->
                        <!--<h6 class="title">Newsletter</h6>-->
                        <!--<p>-->
                        <!--Here, I focus on a range of items-->
                        <!--andfeatures that we use in life without-->
                        <!--giving them a second thought.-->
                        <!--</p>-->
                        <!--<div class="form-group d-flex flex-row">-->
                        <!--<div class="col-autos">-->
                        <!--<div class="input-group">-->
                        <!--<input class="form-control" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" type="text">-->
                        <!--</div>-->
                        <!--</div>-->
                        <!--<a href="#" class="bbtns">Subcribe</a>-->
                        <!--</div>-->
                        <!--<p>-->
                        <!--You can unsubscribe us at any time-->
                        <!--</p>-->
                        <!--</div>-->


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
