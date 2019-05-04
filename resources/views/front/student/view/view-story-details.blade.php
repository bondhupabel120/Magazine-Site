@extends('front.master')

@section('title')
    Story Details
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
                            <img class="rounded img-rounded img-fluid" src="{{ asset($stories->image) }}" alt="" style="height: 400px;width: 100%;">
                        </div>
                        <div class="content-wrap">
                            <!--<ul class="tags mt-10">-->
                            <!--<li><a href="#">Food Habit</a></li>-->
                            <!--</ul>-->
                            <a>
                                <h3>{{ $stories->heading }}</h3>
                            </a>
                            <ul class="meta pb-20">
                                <li><a href="#"><span class="lnr lnr-user"></span>{{ $stories->name }}</a></li>
                                <li class="float-right"><a><span class="lnr lnr-calendar-full"></span>{{ $stories->created_at->format('j F Y') }}</a></li><br/>
                                <li><a href="#"><span class="lnr lnr-arrow-right-circle"></span>Dept. of {{ $stories->department }}</a></li><br/>
                                <li><a href="#"><span class="lnr lnr-arrow-right-circle"></span>ID : {{ $stories->student_id }}</a></li>
                            </ul>
                            <p>
                                {!! $stories->description !!}
                            </p>

                            {{--<div class="comment-form">--}}
                                {{--<h4>Post Comment</h4>--}}
                                {{--<form action="{{ route('new-comment') }}" method="POST">--}}
                                    {{--@csrf--}}
                                    {{--<div class="form-group form-inline">--}}
                                        {{--<div class="form-group col-lg-6 col-md-12 name">--}}
                                            {{--<input type="text" class="form-control" name="name" placeholder="Enter Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'">--}}
                                            {{--<input type="hidden" name="news_id" value="{{ $news->id }}" />--}}
                                        {{--</div>--}}
                                        {{--<div class="form-group col-lg-6 col-md-12 email">--}}
                                            {{--<input type="email" class="form-control" name="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group">--}}
                                        {{--<textarea class="form-control mb-10" rows="5" name="comment" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>--}}
                                    {{--</div>--}}
                                    {{--<button href="#" class="primary-btn text-uppercase">Post Comment</button>--}}
                                {{--</form>--}}
                            {{--</div>--}}

                            {{--<div class="comment-sec-area">--}}
                                {{--<div class="container">--}}
                                    {{--<div class="row flex-column">--}}
                                        {{--<h6>05 Comments</h6>--}}
                                        {{--@foreach($comments as $comment)--}}
                                            {{--<div class="comment-list">--}}
                                                {{--<div class="single-comment justify-content-between d-flex">--}}
                                                    {{--<div class="user justify-content-between d-flex">--}}
                                                        {{--<div class="thumb">--}}
                                                            {{--<img src="{{ asset('/') }}front/img/com-one.jpg" alt="" style="height: 70px;width: 70px;border-radius: 50%">--}}
                                                        {{--</div>--}}
                                                        {{--<div class="desc">--}}
                                                            {{--<h5><a href="#">{{ $comment->name }}</a></h5>--}}
                                                            {{--<hr/>--}}
                                                            {{--                                                        <p class="date">{{ $comment->created_at->format('j F Y') }} </p>--}}
                                                            {{--<p class="comment">--}}
                                                                {{--{{ $comment->comment }}--}}
                                                            {{--</p>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--@endforeach--}}

                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </div>

                    </div>
                    <!-- End single-post Area -->
                </div>
                <div class="col-lg-4">
                    <div class="sidebars-area">
                        <div class="single-sidebar-widget editors-pick-widget">
                            <h6 class="title">News</h6>
                            <div class="editors-pick-post">

                                @foreach($details_story_ones as $details_story_one)
                                    <div class="feature-img-wrap relative">
                                        <div class="feature-img relative">
                                            <div class="overlay overlay-bg"></div>
                                            <a href="{{ route('story-details', ['id'=>$details_story_one->id]) }}">
                                                <img class="rounded img-fluid" src="{{ asset($details_story_one->image) }}" alt="{{ $details_story_one->heading }}" style="height: 200px;width: 100%;">
                                            </a>
                                        </div>
                                        <!--<ul class="tags">-->
                                        <!--<li><a href="#">Travel</a></li>-->
                                        <!--</ul>-->
                                    </div>
                                    <div class="details">
                                        <a href="{{ route('story-details', ['id'=>$details_story_one->id]) }}">
                                            <h4 class="mt-20">{{ $details_story_one->heading }}</h4>
                                        </a>
                                        <ul class="meta">
                                            {{--<li><a href="#"><span class="lnr lnr-user"></span>Foysal</a></li>--}}
                                            <li><a href="#"><span class="lnr lnr-user"></span>{{ $details_story_one->name }}</a></li>
                                            <li><a><span class="lnr lnr-calendar-full"></span>{{ $details_story_one->created_at->format('j F Y') }}</a></li>
                                        </ul>
                                    </div>
                                @endforeach

                                <div class="post-lists">

                                    @foreach($details_story_twos as $details_story_two)
                                        <div class="single-post d-flex flex-row">
                                            <div class="thumb">
                                                <a href="{{ route('story-details', ['id'=>$details_story_two->id]) }}">
                                                    <img src="{{ asset($details_story_two->image) }}" alt="{{ $details_story_two->heading }}" style="height: 100px;width: 100px">
                                                </a>
                                            </div>
                                            <div class="detail">
                                                <a href="{{ route('story-details', ['id'=>$details_story_two->id]) }}"><h6>{{ $details_story_two->heading }}</h6></a>
                                                <ul class="meta">
                                                    <li><a href="#"><span class="lnr lnr-user"></span>{{ $details_story_two->name }}</a></li>
                                                    <li><a><span class="lnr lnr-calendar-full"></span>{{ $details_story_two->created_at->format('j F Y') }}</a></li>
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



                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
