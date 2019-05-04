@extends('front.master')

@section('title')
    View Story
@endsection

@section('body')
    <div class="site-main-container">
        <!-- Start top-post Area -->
        <section class="top-post-area pt-10">
            <div class="container no-padding">
                <div class="row small-gutters">
                    @foreach($story_ones as $story_one)
                        <div class="col-lg-8 top-post-left">
                            <div class="feature-image-thumb relative">
                                <div class="overlay overlay-bg"></div>
                                <a href="{{ route('story-details', ['id'=>$story_one->id]) }}">
                                    <img class="img-fluid rounded" src="{{ asset($story_one->image) }}" alt="{{ $story_one->heading }}" style="height: 443px;width: 100%;">
                                </a>
                            </div>
                            <div class="top-post-details">

                                <a href="{{ route('story-details', ['id'=>$story_one->id]) }}">
                                    <h3>{{ $story_one->heading }}</h3>
                                </a>
                                <ul class="meta">
                                    <li><a href="#"><span class="lnr lnr-user"></span>{{ $story_one->name }}</a></li>
                                    <li><a><span class="lnr lnr-calendar-full"></span>{{ $story_one->created_at->format('j F Y') }}</a></li>
                                </ul>
                            </div>
                        </div>
                    @endforeach

                    <div class="col-lg-4 top-post-right">
                        @foreach($story_twos as $story_two)
                            <div class="single-top-post mb-2">
                                <div class="feature-image-thumb relative">
                                    <div class="overlay overlay-bg"></div>
                                    <a href="{{ route('story-details', ['id'=>$story_two->id]) }}">
                                        <img class="img-fluid" src="{{ asset($story_two->image) }}" alt="{{ $story_two->heading }}" style="height: 216px;width: 100%;">
                                    </a>
                                </div>
                                <div class="top-post-details">
                                    <a href="{{ route('story-details', ['id'=>$story_two->id]) }}">
                                        <h4>{{ $story_two->heading }}</h4>
                                    </a>
                                    <ul class="meta">
                                        <li><a href="#"><span class="lnr lnr-user"></span>{{ $story_two->name }}</a></li>
                                        <li><a><span class="lnr lnr-calendar-full"></span>{{ $story_two->created_at->format('j F Y') }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    </div>

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
                            <h4 class="cat-title">Latest Story</h4>

                            @foreach($story_threes as $story_three)
                                <div class="single-latest-post row align-items-center">
                                    <div class="col-lg-5 post-left">
                                        <div class="feature-img relative">
                                            <div class="overlay overlay-bg"></div>
                                            <a href="{{ route('story-details', ['id'=>$story_three->id]) }}">
                                                <img class="rounded img-fluid" src="{{ asset($story_three->image) }}" alt="{{ $story_three->heading }}" style="height: 200px;width: 100%;">
                                            </a>
                                        </div>

                                    </div>
                                    <div class="col-lg-7 post-right">
                                        <a href="{{ route('story-details', ['id'=>$story_three->id]) }}">
                                            <h4>{{ $story_three->heading }}</h4>
                                        </a>
                                        <ul class="meta">
                                            <li><a href="#"><span class="lnr lnr-user"></span>{{ $story_three->name }}</a></li>
                                            <li><a><span class="lnr lnr-calendar-full"></span>{{ $story_three->created_at->format('j F Y') }}</a></li>
                                        </ul>
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
                            <h4 class="title">Story</h4>

                            @foreach($story_fours as $story_four)
                                <div class="feature-post relative">
                                    <div class="feature-img relative">
                                        <div class="overlay overlay-bg"></div>
                                        <a href="{{ route('story-details', ['id'=>$story_four->id]) }}">
                                            <img class="img-fluid rounded" src="{{ asset($story_four->image) }}" alt="{{ $story_four->heading }}" style="height: 400px;width: 100%;">
                                        </a>
                                    </div>
                                    <div class="details">
                                        <a href="{{ route('story-details', ['id'=>$story_four->id]) }}">
                                            <h3>{{ $story_four->heading }}</h3>
                                        </a>
                                        <ul class="meta">
                                            {{--<li><a href="#"><span class="lnr lnr-user"></span>Foysal</a></li>--}}
                                            <li><a href="#"><span class="lnr lnr-user"></span>{{ $story_four->name }}</a></li>
                                            <li><a><span class="lnr lnr-calendar-full"></span>{{ $story_four->created_at->format('j F Y') }}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            @endforeach

                            <div class="row mt-20 medium-gutters">
                                @foreach($story_fives as $story_five)
                                    <div class="col-lg-6 single-popular-post">
                                        <div class="feature-img-wrap relative">
                                            <div class="feature-img relative">
                                                <div class="overlay overlay-bg"></div>
                                                <a href="{{ route('story-details', ['id'=>$story_five->id]) }}">
                                                    <img class="rounded img-fluid" src="{{ asset($story_five->image) }}" alt="{{ $story_five->heading }}" style="height: 215px;width: 100%;">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="details">
                                            <a href="{{ route('story-details', ['id'=>$story_five->id]) }}">
                                                <h4>{{ $story_five->heading }}</h4>
                                            </a>
                                            <ul class="meta">
                                                <li><a href="#"><span class="lnr lnr-user"></span>{{ $story_five->name }}</a></li>
                                                <li><a><span class="lnr lnr-calendar-full"></span>{{ $story_five->created_at->format('j F Y') }}</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- End News One Area -->

                        <!-- Start News Three Area -->
                        <div class="relavent-story-post-wrap mt-30">
                            <h4 class="title">Relavent Story</h4>
                            <div class="relavent-story-list-wrap">
                                @foreach($story_eights as $story_eight)
                                    <div class="single-relavent-post row align-items-center">
                                        <div class="col-lg-5 post-left mt-1">
                                            <div class="feature-img relative">
                                                <div class="overlay overlay-bg"></div>
                                                <a href="{{ route('story-details', ['id'=>$story_eight->id]) }}">
                                                    <img class="rounded img-fluid" src="{{ asset($story_eight->image) }}" alt="{{ $story_eight->heading }}" style="height: 200px;width: 100%;">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 post-right">
                                            <a href="{{ route('story-details', ['id'=>$story_eight->id]) }}">
                                                <h4>{{ $story_eight->heading }}</h4>
                                            </a>
                                            <ul class="meta">
                                                <li><a href="#"><span class="lnr lnr-user"></span>{{ $story_eight->name }}</a></li>
                                                <li><a><span class="lnr lnr-calendar-full"></span>{{ $story_eight->created_at->format('j F Y') }}</a></li>
                                            </ul>
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
                                <h6 class="title">Story</h6>
                                <div class="editors-pick-post">

                                    @foreach($story_sixes as $story_six)
                                        <div class="feature-img-wrap relative">
                                            <div class="feature-img relative">
                                                <div class="overlay overlay-bg"></div>
                                                <a href="{{ route('story-details', ['id'=>$story_six->id]) }}">
                                                    <img class="rounded img-fluid" src="{{ asset($story_six->image) }}" alt="{{ $story_six->heading }}"  style="height: 220px;width: 100%;">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="details">
                                            <a href="{{ route('story-details', ['id'=>$story_six->id]) }}">
                                                <h4 class="mt-20">{{ $story_six->heading }}</h4>
                                            </a>
                                            <ul class="meta">
                                                <li><a href="#"><span class="lnr lnr-user"></span>{{ $story_six->name }}</a></li>
                                                <li><a><span class="lnr lnr-calendar-full"></span>{{ $story_six->created_at->format('j F Y') }}</a></li>
                                            </ul>
                                        </div>
                                    @endforeach

                                    <div class="post-lists">
                                        @foreach($story_sevens as $story_seven)
                                            <div class="single-post d-flex flex-row">
                                                <div class="thumb">
                                                    <a href="{{ route('story-details', ['id'=>$story_seven->id]) }}">
                                                        <img src="{{ asset($story_seven->image) }}" alt="{{ $story_seven->heading }}" style="height: 100px;width: 100px;">
                                                    </a>
                                                </div>
                                                <div class="detail">
                                                    <a href="{{ route('story-details', ['id'=>$story_seven->id]) }}"><h6>{{ $story_seven->heading }}</h6></a>
                                                    <ul class="meta">
                                                        <li><a href="#"><span class="lnr lnr-user"></span>{{ $story_seven->name }}</a></li>
                                                        <li><a><span class="lnr lnr-calendar-full"></span>{{ $story_seven->created_at->format('j F Y') }}</a></li>
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

                            {{--Most Popular News--}}
                            <div class="single-sidebar-widget most-popular-widget" style="margin-top: 80px">
                                <h6 class="title">Most Popular</h6>

                                @foreach($popularNewses as $popularNews)
                                    <div class="single-list flex-row d-flex">
                                        <a class="thumb" href="{{ route('story-details', ['id'=>$popularNews->id]) }}">
                                            <img src="{{ asset($popularNews->image) }}" alt="{{ $popularNews->heading }}" style="height: 100px;width: 100px;">
                                        </a>
                                        <div class="details">
                                            <a href="{{ asset('/') }}front/image-post.html">
                                                <h6>{{ $popularNews->heading }}</h6>
                                            </a>
                                            <ul class="meta">
                                                <li><a href="#"><span class="lnr lnr-user"></span>{{ $popularNews->name }}</a></li>
                                                <li><a><span class="lnr lnr-calendar-full"></span>{{ $popularNews->created_at->format('j F Y') }}</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            {{--End of the Most Popular News--}}

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End latest-post Area -->
    </div>
@endsection
