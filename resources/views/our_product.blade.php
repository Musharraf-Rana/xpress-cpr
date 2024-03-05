@extends('layouts.main')
@section('content')
    <!-- the banner page section  -->
    <section>
        <div class="banner-page-sec">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1>Our Products</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- the our product server  -->
    <div class="sec-space x-press">
        <div class="container">
            <div class="wpb_wrapper2">
                <h2>Why X PRESS CPR? </h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-xl-3 col-xxl-3 col-md-6 col-sm-12">
                    <div data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000" class="main-box-inside">
                        <div class="rounded-box oneour">
                            <img src="./assets/images/icon-1.png" alt="">
                            <div class="choose-flex">
                                <div>
                                    <h5>AHA Certified Courses</h5>
                                </div>
                                {{-- <i class="fa-solid fa-circle-plus"></i> --}}
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xl-3 col-xxl-3 col-md-6 col-sm-12">
                    <div data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000" class="main-box-inside">
                        <div class="rounded-box twoour">
                            <img src="./assets/images/icon-2.png" alt="">
                            <div class="choose-flex">
                                <div>
                                    <h5>Affordable &amp; Friendly Classes
                                    </h5>
                                </div>
                                {{-- <i class="fa-solid fa-circle-plus"></i> --}}
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xl-3 col-xxl-3 col-md-6 col-sm-12">
                    <div data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000" class="main-box-inside">
                        <div class="rounded-box threeour">
                            <img src="./assets/images/icon-3.png" alt="">
                            <div class="choose-flex">
                                <div>
                                    <h5>Flexible Timings
                                    </h5>
                                </div>
                                {{-- <i class="fa-solid fa-circle-plus"></i> --}}
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xl-3 col-xxl-3 col-md-6 col-sm-12">
                    <div data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000" class="main-box-inside">
                        <div class="rounded-box fourour">
                            <img src="./assets/images/icon-4.png" alt="">
                            <div class="choose-flex">
                                <div>
                                    <h5>Individual Assistance
                                    </h5>
                                </div>
                                {{-- <i class="fa-solid fa-circle-plus"></i> --}}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
