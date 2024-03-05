@extends('layouts.main')
@section('content')
    <style>
        .learnmore {
            background-color: #C4403E;
            color: #fff;
            padding: 14px 35px;
            font-size: 16px;
            border-radius: 10px;
            font-weight: 400;
            border: 0;

        }
    </style>
    <!-- banner sec  -->
    <section>
        <div class="banner-sec">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-6 col-xl-6 col-sm-12 col-xxl-6 col-md-6">

                        <div class="main-inner">
                            <div class="inner-box">
                                <div data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000" class="aos-init animate">
                                    <h1>X PRESS CPR aims at saving lives, one heart at a time!
                                    </h1>
                                    <p>Knowing how to respond in a crisis, whether anyone needs a band aid or CPR, saves
                                        both
                                        lives
                                        and time. At X PRESS CPR, our mission is to bring awareness on the importance on
                                        Cardio-Pulmonary Resuscitation and how it may save lives. Join us and help us
                                        spread
                                        knowledge because every minute counts and every life matter.</p>
                                </div>
                                <a href="{{ route('about') }}" data-aos="zoom-in" class="learnmore btn text-light"
                                    data-aos-delay="500" data-aos-duration="1000" class="aos-init">Learn More</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 col-xl-6 col-sm-12 col-xxl-6 col-md-6 sec-pad">
                        <div class="img-back">

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Help us save lives section  -->
    <section>
        <div class="save-sec">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-xl-6 col-sm-12 col-xxl-6 col-md-6">

                        </div>
                        <div class="col-lg-6 col-xl-6 col-sm-12 col-xxl-6 col-md-6">
                            <div data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000"
                                class="aos-init save-right-box">
                                <h2>Help us save lives
                                </h2>
                                <h2>Book your slots today!
                                </h2>
                                <form class="leadForm">
                                    <div class="inputs-flex">
                                        <div class="input-1">
                                            <select name="service_id" id="service_id" class="form-control " required>
                                                <option value="">Select Service</option>
                                                @if (!empty(Helper::services()))
                                                    @foreach (Helper::services() as $service)
                                                        <option value="{{ $service['id'] }}">{{ $service['name'] }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                        <div class="input-1">
                                            <select name="class_id" id="class_id" class="form-control" required>
                                                <option value="">Select Class</option>
                                            </select>
                                        </div>
                                        <div class="input-1">
                                            <input type="text" name="name" value="" size="40"
                                                class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                aria-required="true" aria-invalid="false" placeholder="Your Full Name *"
                                                required>
                                        </div>
                                        <div class="input-1">
                                            <input type="email" name="email" value="" size="40"
                                                class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                aria-required="true" aria-invalid="false" placeholder="Your Email *"
                                                required>
                                        </div>
                                        <div class="input-1">
                                            <input type="number" name="contact_no" value="" size="40"
                                                class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                aria-required="true" aria-invalid="false" placeholder="Your Number *"
                                                required>
                                        </div>
                                        <div class="input-1">
                                            <button type="submit"><span></span> Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- WHY X-PRESS?  -->
    <section>
        <div class="sec-space x-press">
            <div class="container">
                <div data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000" class="aos-init wpb_wrapper2">
                    <h2> Why X PRESS CPR? </h2>
                </div>
                <div class="row">


                    <div class="col-lg-3 col-xl-3 col-sm-12 col-xxl-3 col-md-6">
                        <div data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000"
                            class="aos-init main-box-inside">
                            <div class="rounded-box one">
                                <img src="{{ asset('assets/images/icon-4.png') }}" alt="">
                                <div class="choose-flex">
                                    <div>
                                        <h5>Individual Assistance
                                        </h5>
                                    </div>
                                    {{-- <i class="fa-solid fa-circle-plus"></i> --}}
                                </div>
                                <p>
                                    We at X PRESS CPR set up sessions when individual support is required based on your
                                    particular requirements and circumstances.

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xl-3 col-sm-12 col-xxl-3 col-md-6">
                        <div data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000"
                            class="aos-init main-box-inside">
                            <div class="rounded-box two">
                                <img src="{{ asset('assets/images/icon-2.png') }}" alt="">
                                <div class="choose-flex">
                                    <div>
                                        <h5>Affordable & Friendly Classes
                                        </h5>
                                    </div>
                                    {{-- <i class="fa-solid fa-circle-plus"></i> --}}
                                </div>
                                <p>
                                    X PRESS CPR takes pride in its ability to use numerous tools at its disposal to
                                    rigorously
                                    focus on dealing with each of its students individually. Our programme offers more
                                    accessibility than the other average programme without the added costs, from
                                    personal
                                    instructor interaction to mentors and on-site staff helping students.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xl-3 col-sm-12 col-xxl-3 col-md-6">
                        <div data-aos="fade-right" data-aos-delay="500" data-aos-duration="1000"
                            class="aos-init main-box-inside">
                            <div class="rounded-box three">
                                <img src="{{ asset('assets/images/icon-1.png') }}" alt="">
                                <div class="choose-flex">
                                    <div>
                                        <h5>AHA Certified Courses</h5>
                                    </div>
                                    {{-- <i class="fa-solid fa-circle-plus"></i> --}}
                                </div>
                                <p>
                                    Learners in the AHA certified course learn how to quickly identify a number of
                                    life-threatening crises, provide effective cardiopulmonary resuscitation, and
                                    administer
                                    the
                                    proper ventilations. These
                                    courses are developed for medical staff and other workers who must be familiar with
                                    CPR
                                    and
                                    other fundamental cardiac life - supporting techniques.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xl-3 col-sm-12 col-xxl-3 col-md-6">
                        <div data-aos="fade-down" data-aos-delay="500" data-aos-duration="1000"
                            class="aos-init main-box-inside">
                            <div class="rounded-box four">
                                <img src="{{ asset('assets/images/icon-3.png') }}" alt="">
                                <div class="choose-flex">
                                    <div>
                                        <h5>Flexible Timings
                                        </h5>
                                    </div>
                                    {{-- <i class="fa-solid fa-circle-plus"></i> --}}
                                </div>
                                <p>
                                    We at X PRESS CPR make sure that everyone of you learns at the times that are most
                                    convenient
                                    for you because flexible work schedules strongly favour people and offer them
                                    numerous
                                    benefits.

                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- BLS medical training section  -->
    <section>
        <div class="bls-medical">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-xl-6 col-sm-12 col-xxl-6 col-md-6">
                            <div data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1000"
                                class="aos-init side-img">
                                <img src="{{ asset('assets/images/Inser-Image-Here-536x403.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6 col-sm-12 col-xxl-6 col-md-6">
                            <div class="main-training">
                                <div data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000"
                                    class="aos-init wpb_wrapper3">
                                    <h3><strong>We provide BLS medical training because we believe in saving
                                            lives</strong>.
                                    </h3>
                                    <p>The cornerstone for rescuing lives following&nbsp;cardiac arrest and numerous
                                        other
                                        life-threatening situations is Basic Life Support (BLS) training. Our BLS
                                        certification
                                        training teaches learners how to identify a variety of life-threatening cardiac
                                        situations swiftly and effectively. We provide a range of courses, such as:</p>
                                    <ul>
                                        <li><i class="fa-solid fa-check"></i> BLS (Basic Life Support) Complete Course
                                        </li>
                                        <li><i class="fa-solid fa-check"></i> BLS (Basic Life Support) Renewal Course
                                        </li>
                                        <li><i class="fa-solid fa-check"></i> HeartCode BLS (Hybrid Course)</li>
                                        <li><i class="fa-solid fa-check"></i> HeartCode BLS (Online Certification)</li>
                                        <li><i class="fa-solid fa-check"></i> Heartsaver First Aid/CPR/AED complete
                                            course</li>
                                        <li><i class="fa-solid fa-check"></i> Little Angel’s Sitter course</li>
                                    </ul>
                                    {{-- <div class="donfer">
                                        <img src="{{ asset('assets/images/joseph.png') }}" alt="">
                                        <div class="inner-sec">
                                            <h5>AVE
                                            </h5>
                                            <span>
                                                <h5 class="color-red">Founder
                                                </h5>
                                            </span>

                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- amerian heart section  -->
    <section>
        <div class="amerian-heart sec-space">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-xl-4 col-sm-12 col-xxl-4 col-md-4">
                        <div data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000" class="aos-init img-1">
                            <img src="{{ asset('assets/images/American-Heart-1.png') }}" alt="" srcset="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-4 col-sm-12 col-xxl-4 col-md-4">
                        <div data-aos="fade-down" data-aos-delay="500" data-aos-duration="1000"
                            class="aos-init img-1 borders-combine">
                            <img src="{{ asset('assets/images/hipaa_blue (1).png') }}" alt="" srcset="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-4 col-sm-12 col-xxl-4 col-md-4">
                        <div data-aos="fade-right" data-aos-delay="500" data-aos-duration="1000" class="aos-init img-1">
                            <img src="{{ asset('assets/images/national (1).png') }}" alt="" srcset="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- The Story of X PRESS CPR section  -->
    <section>
        <div class="story-express">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-xl-6 col-sm-12 col-xxl-6 col-md-6">
                        <div class="main-story">
                            <div data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000"
                                class="aos-init inner-spress-content" onmouseover="hoverclick()">
                                <h2>The Story of X PRESS CPR
                                </h2>
                                <p>Our founder and amazing instructor Lorraine over the span of 30 years as a nurse has
                                    experienced several life threating scenarios. In 2010 during the birthday party of
                                    Lorraine’s 10-year-old son an incident occurred which made her realize CPR education
                                    was
                                    the need of time. A beautiful 6-year-old who was attending the birthday party
                                    drowned in
                                    the pool and had been unconscious for several minutes before Lorraine noticed her
                                    and
                                    pulled her out.

                                </p>
                                <a href="{{ route('all.services') }}" class=" learnmore  btn text-light"
                                    data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1000"
                                    class="aos-init">Explore More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-sm-12 col-xxl-6 col-md-6">
                        <div class="story-img">
                            <img src="{{ asset('assets/images/about-720x604.png') }}" alt="" srcset="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- C-A-B is the key to performing CPR  -->
    <section>
        <div class="CAB sec-space" onmouseover="hoverclick()">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-6 col-sm-12 col-xxl-6 col-md-6">
                        <div data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000"
                            class="aos-init main-CAB lab">
                            <div class="inner-contenct-cab">
                                <h3>C-A-B is the key to performing CPR</h3>
                                <div class="inner_wpb_wrapper">
                                    <div class="dashed">
                                        <div class="item-box1">
                                            <span class="dashed-boxes">1</span>
                                            <div><strong>Chest Compressions</strong><br>
                                                Deliver chest compressions with hard and fast pressure <br> to the
                                                victim’s
                                                chest.
                                            </div>
                                        </div>

                                        <div class="item-box2">
                                            <span class="dashed-boxes">2</span>
                                            <div><strong>Airway
                                                </strong><br>
                                                open the airway by tilting the victim’s head back and <br> lifting their
                                                chin.
                                            </div>
                                        </div>

                                        <div class="item-box3">
                                            <span class="dashed-boxes">3</span>
                                            <div><strong>Chest Compressions</strong><br>
                                                administer mouth-to-mouth breathing.
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-sm-12 col-xxl-6 col-md-6">
                        <div data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000" class="aos-init CAB-img">
                            <img id="imgid" src="{{ asset('assets/images/highlight-279x300.png') }}" alt=""
                                srcset="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Watch How we do it  -->
    <section>
        <div class="watch-do-it" onmouseover="hoverclick()">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-xl-6 col-sm-12 col-xxl-6 col-md-6 sec-pad">
                        <div class="img-box">
                            <img data-aos="fade-right" data-aos-delay="500" data-aos-duration="1000"
                                src="{{ asset('assets/images/jecy.png') }}" class="aos-init" alt=""
                                srcset="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-sm-12 col-xxl-6 col-md-6">
                        <div class="main-watch">
                            <div data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000"
                                class="aos-init inner-watch">
                                <span class="youtube-icon playbtn"><img src="{{ asset('assets/images/thumb (1).png') }}"
                                        alt="" srcset=""></span>
                                <div class="content-youtube">
                                    <h2>Watch How we do it</h2>
                                    <p>We’re here to promote awareness about CPR and make sure you have the necessary
                                        information to react appropriately in a crisis. To learn about the fundamentals
                                        of
                                        CPR
                                        and be ready for an emergency circumstance, watch our video.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="revies-sec">
            <div class="container-xl">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-reviews">

                            <div class="box-review">
                                <div class="rounds-qoute">
                                    <i class="fa-solid fa-quote-left"></i>
                                </div>
                            </div>

                            <h2>Customer Reviews </h2>
                        </div>

                        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                            <!-- Carousel indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                            </ol>
                            <!-- Wrapper for carousel items -->
                            <div class="carousel-inner">
                                <div class="item carousel-item active">
                                    <div class="row">
                                        <div data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000"
                                            class="col-sm-4">
                                            <div class="round-box">
                                                <div class="title-head">
                                                    <div class="img-titile">
                                                        <img src="{{ asset('assets/images/review-2.png') }}"
                                                            alt="" srcset="">
                                                        <h3>Samantha</h3>
                                                    </div>
                                                    <div class="img-qoute">
                                                        <img src="{{ asset('assets/images/quote.png') }}" alt=""
                                                            srcset="">
                                                    </div>
                                                </div>

                                                <hr>
                                                <div class="para-caresoul">
                                                    <p>I attended the CPR and First Aid course with one of your teachers
                                                        on
                                                        August
                                                        20. I chose to enroll in the course solely so that I would have
                                                        the
                                                        information and abilities in case I ever needed them. My sister
                                                        started
                                                        having a stroke yesterday. I kept my composure and sprang into
                                                        action to
                                                        assist her. I used the techniques and procedures I had learnt in
                                                        that
                                                        class
                                                        right away. I’m glad I took the&nbsp;course because I never
                                                        anticipated
                                                        this
                                                        kind of thing to happen – Samantha</p>
                                                </div>


                                            </div>
                                        </div>
                                        <div data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000"
                                            class="col-sm-4">

                                            <div class="round-box">
                                                <div class="title-head">
                                                    <div class="img-titile">
                                                        <img src="{{ asset('assets/images/review-2.png') }}"
                                                            alt="" srcset="">
                                                        <h3>Samantha</h3>
                                                    </div>
                                                    <div class="img-qoute">
                                                        <img src="{{ asset('assets/images/quote.png') }}" alt=""
                                                            srcset="">
                                                    </div>
                                                </div>

                                                <hr>
                                                <div class="para-caresoul">
                                                    <p>I attended the CPR and First Aid course with one of your teachers
                                                        on
                                                        August
                                                        20. I chose to enroll in the course solely so that I would have
                                                        the
                                                        information and abilities in case I ever needed them. My sister
                                                        started
                                                        having a stroke yesterday. I kept my composure and sprang into
                                                        action to
                                                        assist her. I used the techniques and procedures I had learnt in
                                                        that
                                                        class
                                                        right away. I’m glad I took the&nbsp;course because I never
                                                        anticipated
                                                        this
                                                        kind of thing to happen – Samantha</p>
                                                </div>


                                            </div>

                                        </div>
                                        <div data-aos="fade-right" data-aos-delay="500" data-aos-duration="1000"
                                            class="col-sm-4">
                                            <div class="round-box">
                                                <div class="title-head">
                                                    <div class="img-titile">
                                                        <img src="{{ asset('assets/images/review-2.png') }}"
                                                            alt="" srcset="">
                                                        <h3>Samantha</h3>
                                                    </div>
                                                    <div class="img-qoute">
                                                        <img src="{{ asset('assets/images/quote.png') }}" alt=""
                                                            srcset="">
                                                    </div>
                                                </div>

                                                <hr>
                                                <div class="para-caresoul">
                                                    <p>I attended the CPR and First Aid course with one of your teachers
                                                        on
                                                        August
                                                        20. I chose to enroll in the course solely so that I would have
                                                        the
                                                        information and abilities in case I ever needed them. My sister
                                                        started
                                                        having a stroke yesterday. I kept my composure and sprang into
                                                        action to
                                                        assist her. I used the techniques and procedures I had learnt in
                                                        that
                                                        class
                                                        right away. I’m glad I took the&nbsp;course because I never
                                                        anticipated
                                                        this
                                                        kind of thing to happen – Samantha</p>
                                                </div>


                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="item carousel-item">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="round-box">
                                                <div class="title-head">
                                                    <div class="img-titile">
                                                        <img src="{{ asset('assets/images/review-2.png') }}"
                                                            alt="" srcset="">
                                                        <h3>Samantha</h3>
                                                    </div>
                                                    <div class="img-qoute">
                                                        <img src="{{ asset('assets/images/quote.png') }}" alt=""
                                                            srcset="">
                                                    </div>
                                                </div>

                                                <hr>
                                                <div class="para-caresoul">
                                                    <p>I attended the CPR and First Aid course with one of your teachers
                                                        on
                                                        August
                                                        20. I chose to enroll in the course solely so that I would have
                                                        the
                                                        information and abilities in case I ever needed them. My sister
                                                        started
                                                        having a stroke yesterday. I kept my composure and sprang into
                                                        action to
                                                        assist her. I used the techniques and procedures I had learnt in
                                                        that
                                                        class
                                                        right away. I’m glad I took the&nbsp;course because I never
                                                        anticipated
                                                        this
                                                        kind of thing to happen – Samantha</p>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="col-sm-4">

                                            <div class="round-box">
                                                <div class="title-head">
                                                    <div class="img-titile">
                                                        <img src="{{ asset('assets/images/review-2.png') }}"
                                                            alt="" srcset="">
                                                        <h3>Samantha</h3>
                                                    </div>
                                                    <div class="img-qoute">
                                                        <img src="{{ asset('assets/images/quote.png') }}" alt=""
                                                            srcset="">
                                                    </div>
                                                </div>

                                                <hr>
                                                <div class="para-caresoul">
                                                    <p>I attended the CPR and First Aid course with one of your teachers
                                                        on
                                                        August
                                                        20. I chose to enroll in the course solely so that I would have
                                                        the
                                                        information and abilities in case I ever needed them. My sister
                                                        started
                                                        having a stroke yesterday. I kept my composure and sprang into
                                                        action to
                                                        assist her. I used the techniques and procedures I had learnt in
                                                        that
                                                        class
                                                        right away. I’m glad I took the&nbsp;course because I never
                                                        anticipated
                                                        this
                                                        kind of thing to happen – Samantha</p>
                                                </div>


                                            </div>

                                        </div>
                                        <div class="col-sm-4">
                                            <div class="round-box">
                                                <div class="title-head">
                                                    <div class="img-titile">
                                                        <img src="{{ asset('assets/images/review-2.png') }}"
                                                            alt="" srcset="">
                                                        <h3>Samantha</h3>
                                                    </div>
                                                    <div class="img-qoute">
                                                        <img src="{{ asset('assets/images/quote.png') }}" alt=""
                                                            srcset="">
                                                    </div>
                                                </div>

                                                <hr>
                                                <div class="para-caresoul">
                                                    <p>I attended the CPR and First Aid course with one of your teachers
                                                        on
                                                        August
                                                        20. I chose to enroll in the course solely so that I would have
                                                        the
                                                        information and abilities in case I ever needed them. My sister
                                                        started
                                                        having a stroke yesterday. I kept my composure and sprang into
                                                        action to
                                                        assist her. I used the techniques and procedures I had learnt in
                                                        that
                                                        class
                                                        right away. I’m glad I took the&nbsp;course because I never
                                                        anticipated
                                                        this
                                                        kind of thing to happen – Samantha</p>
                                                </div>


                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <iframe width="504" height="270" src="https://www.youtube.com/embed/nurz9qPGKws"
                    title="Administering Naloxone" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
@section('page_script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
<script>
    $('.leadForm').submit(function(e) {
        e.preventDefault();
        var elem = $(this).serialize()
        $(this).find('button[type="submit"]').attr('disabled', true)
        $(this).find('button[type="submit"]').find('span').addClass(
            'spinner-border spinner-border-sm')
        $.post('{{ env('API_URL') }}' + 'storelead', elem, function(d) {
            toastr.success(d.msg)
            setTimeout(() => {
                window.location.href = "{{ route('thankyou') }}";
            }, 1000);
        }, 'json')
        return false
    })

    $('#service_id').change(function(e) {
        var id = $(this).val();
        $.get('{{ env('API_URL') }}get-class/' + id, function(d) {
            $('#class_id').empty();
            $('#class_id').append('<option value=""> Select Class </option>')
            $.each(d, function(i, v) {
                $('#class_id').append('<option value="' + v.id + '">' + v.title + ' </option>')
            })


        })
    })
    $('#videoModal').on('hidden.bs.modal', function() {
        alert('asfasfdasfd')
        // $("#videoModal iframe").attr("src", $("#modal-video iframe").attr("src"));
    });

    $('.playbtn').click(function(e) {
        $('#videoModal').modal('show')
    })
</script>

@endsection
