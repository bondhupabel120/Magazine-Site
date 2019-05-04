@extends('front.master')

@section('title')
    Home
@endsection

@section('body')
    <div class="site-main-container">
        <!-- Start top-post Area -->
        <section class="top-post-area pt-10">
            <div class="container no-padding">
                <p class="text-center text-secondary" style="font: 20px 'Open Sans'">{{ Session::get('msg') }}</p>
                <div class="row small-gutters">
                    @foreach($news_ones as $news_one)
                    <div class="col-lg-8 top-post-left">
                        <div class="feature-image-thumb relative">
                            <div class="overlay overlay-bg"></div>
                            <a href="{{ route('news-details', ['id'=>$news_one->id]) }}">
                                <img class="img-fluid rounded" src="{{ asset($news_one->news_image) }}" alt="{{ $news_one->news_title }}" style="height: 443px;width: 100%;">
                            </a>
                        </div>
                        <div class="top-post-details">
                            <!--<ul class="tags">-->
                            <!--<li><a href="#">Food Habit</a></li>-->
                            <!--</ul>-->
                            <a href="{{ route('news-details', ['id'=>$news_one->id]) }}">
                                <h3>{{ $news_one->news_title }}</h3>
                            </a>
                            <ul class="meta">
                                {{--<li><a href="#"><span class="lnr lnr-user"></span>Pabel</a></li>--}}
                                <li><a><span class="lnr lnr-calendar-full"></span>{{ $news_one->created_at->format('j F Y') }}</a></li>
                                <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                            </ul>
                        </div>
                    </div>
                    @endforeach

                    <div class="col-lg-4 top-post-right">
                        @foreach($news_twos as $news_two)
                        <div class="single-top-post mb-2">
                            <div class="feature-image-thumb relative">
                                <div class="overlay overlay-bg"></div>
                                <a href="{{ route('news-details', ['id'=>$news_two->id]) }}">
                                    <img class="img-fluid" src="{{ asset($news_two->news_image) }}" alt="{{ $news_two->news_title }}" style="height: 216px;width: 100%;">
                                </a>
                            </div>
                            <div class="top-post-details">
                                <!--<ul class="tags">-->
                                <!--<li><a href="#">Food Habit</a></li>-->
                                <!--</ul>-->
                                <a href="{{ route('news-details', ['id'=>$news_two->id]) }}">
                                    <h4>{{ $news_two->news_title }}</h4>
                                </a>
                                <ul class="meta">
                                    {{--<li><a href="#"><span class="lnr lnr-user"></span>Foysal</a></li>--}}
                                    <li><a><span class="lnr lnr-calendar-full"></span>{{ $news_two->created_at->format('j F Y') }}</a></li>
                                    <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                                </ul>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    {{--<div class="col-lg-12">--}}
                        {{--<div class="news-tracker-wrap">--}}
                            {{--<!--<h6><span>Breaking News :</span>   <a href="#"> Student pilot, takeaway owner, child among victims of NZ shootings</a></h6>-->--}}
                            {{--<marquee  scrollamount="4" scrolldelay="10">--}}
                                {{--<div>--}}
                                    {{--<p class="pt-3 text-danger">যে কোন প্রয়োজনে যোগাযোগ করুন – ০৯৬১২ ৭০০ ৭০০ | দেশ বিদেশের সর্বশেষ সংবাদ পাড়ুন ৭১ বাংলায় | জরুরী যে কোন খবর পড়ুন ৭১ বাংলায় | আপনার আসে পাশে কোনো অপরাধ দেখলে কল করুন ৭১ বাংলায়</p>--}}
                                {{--</div>--}}
                            {{--</marquee>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                </div>
            </div>
        </section>
        <!-- End top-post Area -->
        <!-- Start latest-post Area -->
        <section class="latest-post-area pb-120">
            <div class="container no-padding">
                <div class="row">
                    <div class="col-lg-8 post-list">
                        <!-- Start latest-post Area -->
                        <div class="latest-post-wrap">
                            <h4 class="cat-title">Latest News</h4>

                            @foreach($news_threes as $news_three)
                            <div class="single-latest-post row align-items-center">
                                <div class="col-lg-5 post-left">
                                    <div class="feature-img relative">
                                        <div class="overlay overlay-bg"></div>
                                        <a href="{{ route('news-details', ['id'=>$news_three->id]) }}">
                                        <img class="rounded img-fluid" src="{{ asset($news_three->news_image) }}" alt="{{ $news_three->news_title }}" style="height: 200px;width: 100%;">
                                        </a>
                                    </div>
                                    <!--<ul class="tags">-->
                                    <!--<li><a href="#">Lifestyle</a></li>-->
                                    <!--</ul>-->
                                </div>
                                <div class="col-lg-7 post-right">
                                    <a href="{{ route('news-details', ['id'=>$news_three->id]) }}">
                                        <h4>{{ $news_three->news_title }}</h4>
                                    </a>
                                    <ul class="meta">
                                        {{--<li><a href="#"><span class="lnr lnr-user"></span>Tania</a></li>--}}
                                        <li><a><span class="lnr lnr-calendar-full"></span>{{ $news_three->created_at->format('j F Y') }}</a></li>
                                        <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                                    </ul>
                                    <p class="excert">
                                        {{ $news_three->news_short_description }}
                                    </p>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <!-- End latest-post Area -->

                        <!-- Start banner-ads Area -->
                        <div class="col-lg-12 ad-widget-wrap mt-30 mb-30">
                            <img class="img-fluid" src="{{ asset('/') }}front/img/add-one.jpg" alt="">
                        </div>
                        <!-- End banner-ads Area -->
                        <!-- Start News One Area -->
                        <div class="popular-post-wrap">
                            <h4 class="title">News</h4>

                            @foreach($news_fours as $news_four)
                            <div class="feature-post relative">
                                <div class="feature-img relative">
                                    <div class="overlay overlay-bg"></div>
                                    <a href="{{ route('news-details', ['id'=>$news_four->id]) }}">
                                        <img class="img-fluid rounded" src="{{ asset($news_four->news_image) }}" alt="{{ $news_four->news_title }}" style="height: 400px;width: 100%;">
                                    </a>
                                </div>
                                <div class="details">
                                    <!--<ul class="tags">-->
                                    <!--<li><a href="#">Food Habit</a></li>-->
                                    <!--</ul>-->
                                    <a href="{{ route('news-details', ['id'=>$news_four->id]) }}">
                                        <h3>{{ $news_four->news_title }}</h3>
                                    </a>
                                    <ul class="meta">
                                        {{--<li><a href="#"><span class="lnr lnr-user"></span>Foysal</a></li>--}}
                                        <li><a><span class="lnr lnr-calendar-full"></span>{{ $news_four->created_at->format('j F Y') }}</a></li>
                                        <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                                    </ul>
                                </div>
                            </div>
                            @endforeach

                            <div class="row mt-20 medium-gutters">
                                @foreach($news_fives as $news_five)
                                <div class="col-lg-6 single-popular-post">
                                    <div class="feature-img-wrap relative">
                                        <div class="feature-img relative">
                                            <div class="overlay overlay-bg"></div>
                                            <a href="{{ route('news-details', ['id'=>$news_five->id]) }}">
                                                <img class="rounded img-fluid" src="{{ asset($news_five->news_image) }}" alt="{{ $news_five->news_title }}" style="height: 215px;width: 100%;">
                                            </a>
                                        </div>
                                        <!--<ul class="tags">-->
                                        <!--<li><a href="#">Travel</a></li>-->
                                        <!--</ul>-->
                                    </div>
                                    <div class="details">
                                        <a href="{{ route('news-details', ['id'=>$news_five->id]) }}">
                                            <h4>{{ $news_five->news_title }}</h4>
                                        </a>
                                        <ul class="meta">
                                            {{--<li><a href="#"><span class="lnr lnr-user"></span>Foysal</a></li>--}}
                                            <li><a><span class="lnr lnr-calendar-full"></span>{{ $news_five->created_at->format('j F Y') }}</a></li>
                                            <li><a href="#"><span class="lnr lnr-bubble"></span>06 </a></li>
                                        </ul>
                                        <p class="excert">
                                            {{ $news_five->news_title }}
                                        </p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- End News One Area -->

                        <!-- Start News Three Area -->
                        <div class="relavent-story-post-wrap mt-30">
                            <h4 class="title">Relavent News</h4>
                            <div class="relavent-story-list-wrap">
                                @foreach($news_eights as $news_eight)
                                <div class="single-relavent-post row align-items-center">
                                    <div class="col-lg-5 post-left mt-1">
                                        <div class="feature-img relative">
                                            <div class="overlay overlay-bg"></div>
                                            <a href="{{ route('news-details', ['id'=>$news_eight->id]) }}">
                                                <img class="rounded img-fluid" src="{{ asset($news_eight->news_image) }}" alt="{{ $news_eight->news_title }}" style="height: 200px;width: 100%;">
                                            </a>
                                        </div>
                                        <!--<ul class="tags">-->
                                        <!--<li><a href="#">Lifestyle</a></li>-->
                                        <!--</ul>-->
                                    </div>
                                    <div class="col-lg-7 post-right">
                                        <a href="{{ route('news-details', ['id'=>$news_eight->id]) }}">
                                            <h4>{{ $news_eight->news_title }}</h4>
                                        </a>
                                        <ul class="meta">
                                            {{--<li><a href="#"><span class="lnr lnr-user"></span>Pervez</a></li>--}}
                                            <li><a><span class="lnr lnr-calendar-full"></span>{{ $news_eight->created_at->format('j F Y') }}</a></li>
                                            <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                                        </ul>
                                        <p class="excert">
                                            {{ $news_eight->news_short_description }}
                                        </p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- End News Three Area -->
                    </div>

                    {{--Side bar news--}}
                    <div class="col-lg-4">
                        <div class="sidebars-area">
                            {{--Start News Two Area--}}
                            <div class="single-sidebar-widget editors-pick-widget">
                                <h6 class="title">News</h6>
                                <div class="editors-pick-post">

                                    @foreach($news_sixes as $news_six)
                                    <div class="feature-img-wrap relative">
                                        <div class="feature-img relative">
                                            <div class="overlay overlay-bg"></div>
                                            <a href="{{ route('news-details', ['id'=>$news_six->id]) }}">
                                                <img class="rounded img-fluid" src="{{ asset($news_six->news_image) }}" alt="{{ $news_six->news_title }}"  style="height: 220px;width: 100%;">
                                            </a>
                                        </div>
                                        <!--<ul class="tags">-->
                                        <!--<li><a href="#">Travel</a></li>-->
                                        <!--</ul>-->
                                    </div>
                                    <div class="details">
                                        <a href="{{ route('news-details', ['id'=>$news_six->id]) }}">
                                            <h4 class="mt-20">{{ $news_six->news_title }}</h4>
                                        </a>
                                        <ul class="meta">
                                            {{--<li><a href="#"><span class="lnr lnr-user"></span>Tania</a></li>--}}
                                            <li><a><span class="lnr lnr-calendar-full"></span>{{ $news_six->created_at->format('j F Y') }}</a></li>
                                            <li><a href="#"><span class="lnr lnr-bubble"></span>06 </a></li>
                                        </ul>
                                        <p class="excert">
                                            {{ $news_six->news_short_description }}
                                        </p>
                                    </div>
                                    @endforeach

                                    <div class="post-lists">
                                        @foreach($news_sevens as $news_seven)
                                        <div class="single-post d-flex flex-row">
                                            <div class="thumb">
                                                <a href="{{ route('news-details', ['id'=>$news_seven->id]) }}">
                                                    <img src="{{ asset($news_seven->news_image) }}" alt="{{ $news_seven->news_title }}" style="height: 100px;width: 100px;">
                                                </a>
                                            </div>
                                            <div class="detail">
                                                <a href="{{ route('news-details', ['id'=>$news_seven->id]) }}"><h6>{{ $news_seven->news_title }}</h6></a>
                                                <ul class="meta">
                                                    <li><a><span class="lnr lnr-calendar-full"></span>{{ $news_six->created_at->format('j F Y') }}</a></li>
                                                    <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                            {{--End of the News Two Area--}}
                            <div class="ad-widget-wrap">
                                <img class="img-fluid" src="{{ asset('/') }}front/img/add-side-one.jpg" alt="" style="height: 300px;width: 100%;">
                            </div>

                            {{--<!--<div class="single-sidebar-widget newsletter-widget">-->
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
                            <!--</div>-->--}}

                            {{--Most Popular News--}}
                            <div class="single-sidebar-widget most-popular-widget" style="margin-top: 80px">
                                <h6 class="title">Most Popular</h6>

                                @foreach($popularNewses as $popularNews)
                                <div class="single-list flex-row d-flex">
                                    <a class="thumb" href="{{ route('news-details', ['id'=>$popularNews->id]) }}">
                                        <img src="{{ asset($popularNews->news_image) }}" alt="{{ $popularNews->news_title }}" style="height: 100px;width: 100px;">
                                    </a>
                                    <div class="details">
                                        <a href="{{ asset('/') }}front/image-post.html">
                                            <h6>{{ $popularNews->news_title }}</h6>
                                        </a>
                                        <ul class="meta">
                                            <li><a><span class="lnr lnr-calendar-full"></span>{{ $popularNews->created_at->format('j F Y') }}</a></li>
                                            <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                                        </ul>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                            {{--End of the Most Popular News--}}

                            <div class="single-sidebar-widget social-network-widget" style="margin-top: 80px">
                                <h6 class="title">Social Networks</h6>
                                <ul class="social-list">
                                    <li class="d-flex justify-content-between align-items-center fb">
                                        <div class="icons d-flex flex-row align-items-center">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                            <p>983 Likes</p>
                                        </div>
                                        <a href="#">Like our page</a>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center tw">
                                        <div class="icons d-flex flex-row align-items-center">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                            <p>983 Followers</p>
                                        </div>
                                        <a href="#">Follow Us</a>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center yt">
                                        <div class="icons d-flex flex-row align-items-center">
                                            <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                            <p>983 Subscriber</p>
                                        </div>
                                        <a href="#">Subscribe</a>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center rs">
                                        <div class="icons d-flex flex-row align-items-center">
                                            <i class="fa fa-rss" aria-hidden="true"></i>
                                            <p>983 Subscribe</p>
                                        </div>
                                        <a href="#">Subscribe</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End latest-post Area -->
    </div>
@endsection
