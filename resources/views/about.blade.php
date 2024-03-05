@extends('layouts.main')
@section('content')
    <section>
        <div class="banner-page-sec">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1>About Us</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="story-express about">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-xl-6 col-xxl-6 col-md-6 col-sm-12">
                        <div class="main-story">
                            <div data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000"
                                class="inner-spress-content">
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
                                <a href="{{ route('all.services') }}" class=" learnmore  btn text-light" data-aos="zoom-in"
                                    data-aos-delay="500" data-aos-duration="1000" class="aos-init">Explore More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-xxl-6 col-md-6 col-sm-12">
                        <div class="story-img">
                            <img src="{{ asset('assets/images/about-720x604.png') }}" alt="" srcset="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
