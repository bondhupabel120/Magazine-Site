@extends('front.master')

@section('title')
    View Poem
@endsection

@section('body')
    <section style="margin-top: 50px;margin-bottom: 50px">
        <div class="container">
            <div class="row">

                @foreach($poem_ones as $poem_one)
                    <div class="col-lg-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h4 class="card-title">{{ $poem_one->heading }}</h4>
                                <ul class="meta">
                                    <li><a href="#"><span class="lnr lnr-user"></span> {{ $poem_one->name }}</a></li>
                                    <li><a><span class="lnr lnr-calendar-full"></span> {{ $poem_one->created_at->format('j F Y') }}</a></li>
                                </ul>
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('poem-details', ['id' => $poem_one->id]) }}" class="btn btn-outline-success btn-block">View Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
