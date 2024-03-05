@extends('layouts.main')
@section('content')
    <style>
        .banner-page-sec {
            background-image: url("http://xpress-cpr-admin.test/storage/{{ $blogs['cover_picture'] }} ") !important
        }

        .description img {
            width: 50%;
            margin: 35px;
        }
    </style>
    <section>
        <div class="banner-page-sec" onmouseover="hoverclick()">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="text-center">{{ $blogs['title'] }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container mb-5 mt-3">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-dark text-hover-primary fs-2 fw-bold">{{ $blogs['title'] }}</h1>
                </div>
            </div>

            <div class=" description">
                <p class="text-dark text-hover-primary fs-2 fw-bold ">{!! $blogs['desciption'] !!}</p>
            </div>
        </div>
    </section>
@endsection
