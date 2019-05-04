@extends('front.master')

@section('title')
    Category News
@endsection

@section('body')
    <section class="latest-post-area pb-120">
        <div class="container no-padding">
            <div class="row">
                <div class="col-lg-8 post-list">
                    <!-- Start latest-post Area -->
                    <div class="latest-post-wrap">
                        <h4 class="cat-title">Category News</h4>

                        @foreach($newses_one as $news_one)
                            <div class="single-latest-post row align-items-center">
                                <div class="col-lg-5 post-left">
                                    <div class="feature-img relative">
                                        <div class="overlay overlay-bg"></div>
                                        <a href="{{ route('news-details', ['id'=>$news_one->id]) }}">
                                            <img class="rounded img-fluid" src="{{ asset($news_one->news_image) }}" alt="{{ $news_one->news_title }}" style="height: 200px;width: 100%;">
                                        </a>
                                    </div>
                                    <!--<ul class="tags">-->
                                    <!--<li><a href="#">Lifestyle</a></li>-->
                                    <!--</ul>-->
                                </div>
                                <div class="col-lg-7 post-right">
                                    <a href="{{ route('news-details', ['id'=>$news_one->id]) }}">
                                        <h4>{{ $news_one->news_title }}</h4>
                                    </a>
                                    <ul class="meta">
                                        {{--<li><a href="#"><span class="lnr lnr-user"></span>Tania</a></li>--}}
                                        <li><a href="#"><span class="lnr lnr-calendar-full"></span>{{ $news_one->created_at->format('j F Y') }}</a></li>
                                        <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                                    </ul>
                                    <p class="excert">
                                        {{ $news_one->news_short_description }}
                                    </p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- End latest-post Area -->
                </div>

                {{--Side bar news--}}
                <div class="col-lg-4">
                    <div class="sidebars-area">
                        {{--Start News Two Area--}}
                        <div class="single-sidebar-widget editors-pick-widget">
                            <h6 class="title">News</h6>
                            <div class="editors-pick-post">

                                <div class="post-lists">
                                    @foreach($newses_two as $news_two)
                                        <div class="single-post d-flex flex-row">
                                            <div class="thumb">
                                                <a href="{{ route('news-details', ['id'=>$news_two->id]) }}">
                                                    <img src="{{ asset($news_two->news_image) }}" alt="{{ $news_two->news_title }}" style="height: 100px;width: 100px;">
                                                </a>
                                            </div>
                                            <div class="detail">
                                                <a href="{{ route('news-details', ['id'=>$news_two->id]) }}"><h6>{{ $news_two->news_title }}</h6></a>
                                                <ul class="meta">
                                                    <li><a><span class="lnr lnr-calendar-full"></span>{{ $news_two->created_at->format('j F Y') }}</a></li>
                                                    <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        {{--End of the News Two Area--}}

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection