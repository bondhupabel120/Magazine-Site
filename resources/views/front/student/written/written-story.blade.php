@extends('front.master')

@section('title')
    Written Story
@endsection

@section('body')
    <html lang="en">

    <head>
        <!-- Required meta tags-->
        <meta charset="UTF-8">

        <!-- Title Page-->
        <title>Written Story</title>

        <!-- Icons font CSS-->
        <link href="{{ asset('/') }}front/write/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
        <link href="{{ asset('/') }}front/write/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
        <!-- Font special for pages-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

        <!-- Vendor CSS-->
        <link href="{{ asset('/') }}front/write/vendor/select2/select2.min.css" rel="stylesheet" media="all">
        <link href="{{ asset('/') }}front/write/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

        <!-- Main CSS-->
        <link href="{{ asset('/') }}front/write/css/main.css" rel="stylesheet" media="all">
    </head>

    <body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <h2 class="text-warning text-center">{{ Session::get('message') }}</h2>
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Written Your Story</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('new-written-story') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="name">Name<span class="text-danger"> *</span></div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="name" placeholder="Enter Your Name">
                                    <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : ' ' }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Department<span class="text-danger"> *</span></div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="department">
                                            <option disabled="disabled" selected="selected"></option>
                                            <option>ENGLISH</option>
                                            <option>CSE</option>
                                            <option>EEE</option>
                                            <option>BBA</option>
                                            <option>LAW</option>
                                        </select>
                                        <span class="text-danger">{{ $errors->has('department') ? $errors->first('department') : ' ' }}</span>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Student ID<span class="text-danger"> *</span></div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="student_id" placeholder="Enter Your ID No">
                                    <span class="text-danger">{{ $errors->has('student_id') ? $errors->first('student_id') : ' ' }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Image of Story<span class="text-danger"> *</span></div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="file" name="image" placeholder="Enter Your Story Image">
                                    <span class="text-danger">{{ $errors->has('image') ? $errors->first('image') : ' ' }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Heading of Story<span class="text-danger"> *</span></div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="heading" placeholder="Enter Your Story Heading">
                                    <span class="text-danger">{{ $errors->has('heading') ? $errors->first('heading') : ' ' }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Description of Story</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="input--style-5 btn-block" type="text" name="description" placeholder="Enter Your Story Description"></textarea>
                                    <span class="text-danger">{{ $errors->has('description') ? $errors->first('description') : ' ' }}</span>
                                </div>
                            </div>
                        </div>

                        <div>
                            <button class="btn btn--radius-2 btn--red btn-block" type="submit">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{ asset('/') }}front/write/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="{{ asset('/') }}front/write/vendor/select2/select2.min.js"></script>
    <script src="{{ asset('/') }}front/write/vendor/datepicker/moment.min.js"></script>
    <script src="{{ asset('/') }}front/write/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="{{ asset('/') }}front/write/js/global.js"></script>

    </body><!-- This templates was made by Colorlib (https://colorlib.com) -->

    </html>
    <!-- end document-->
@endsection