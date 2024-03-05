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
                                <h2>MOBILE SERVICES
                                </h2>
                                <div class="inner_wpb_wrapper">
                                    <p>We provide telephonic assistance to help save lives. The responsibility of
                                        emergency responders in cases of unexpected cardiac arrest (CA) has expanded
                                        with each subsequent update to the cardiopulmonary resuscitation (CPR)
                                        standards. Until emergency medical service (EMS) personnel arrive, we provide
                                        callers with CPR instructions. This is commonly referred to as dispatch-assisted
                                        CPR or telephone CPR (TCPR) (DACPR). Research have demonstrated the
                                        effectiveness of TCPR in boosting abrupt CA survivorship rates.
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
