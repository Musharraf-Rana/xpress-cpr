@extends('layouts.main')
@section('content')
    <!-- the banner page section  -->
    <section>
        <div onmouseover="hoverclick()" class="banner-page-sec">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1>Services</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- the heart server  -->
    <section>
        <div data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000" class="CAB sec-space" class="CAB sec-space"
            onmouseover="hoverclick()">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-6 col-sm-12 col-xxl-6 col-md-6">
                        <div data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000"
                            class="aos-init main-CAB terms aos-animate">
                            <div class="inner-contenct-cab">
                                <h2>PRIVATE SERVICES
                                </h2>
                                <div class="inner_wpb_wrapper">

                                    <p>To make you feel comfortable we offer one-on-one instruction with the instructor.
                                        No pressure, no interruptions, just high-quality instruction that is
                                        personalized to your speed and learning preferences.
                                    </p>
                                    <p>SPEACIAL EVENTS – NEED INFO
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-sm-12 col-xxl-6 col-md-6">
                        <div data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000" class="aos-init CAB-img new">
                            <img id="imgid" src="./assets/images/highlight-279x300.png" alt="" srcset="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
