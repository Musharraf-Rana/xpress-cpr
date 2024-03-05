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
    <section onmouseover="hoverclick()">
        <div data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000" class="CAB sec-space">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-6 col-sm-12 col-xxl-6 col-md-6">
                        <div data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000"
                            class="aos-init main-CAB terms aos-animate">
                            <div class="inner-contenct-cab">
                                <h2>BLS</h2>
                                <div>

                                    <p>We provide BLS (Basic Life Support) services. BLS primarily applies to the kind
                                        of assistance that first responders, healthcare experts, and public health and
                                        safety experts give to someone who is going through cardiogenic shock, having
                                        breathing difficulties, or having their airway blocked.</p>

                                    <p>It necessitates expertise in treating airway blockages in patients of all ages,
                                        employing automated external defibrillators (AEDs), and performing
                                        cardiopulmonary resuscitation (CPR).
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
