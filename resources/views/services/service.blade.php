@extends('layouts.main')
@section('content')
    <!-- the banner page section  -->
    <section>
        <div onmouseover="hoverclick()" class="banner-page-sec">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1>{{ ucfirst(@$service['name']) }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- {{ dd($service['get_class']) }} --}}
    <!-- the heart server  -->
    <section onmouseover="hoverclick()">
        <div data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000" class="CAB sec-space">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-6 col-sm-12 col-xxl-6 col-md-6">
                        <div data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000"
                            class="aos-init main-CAB terms aos-animate">
                            <div class="inner-contenct-cab">
                                <h2>{{ ucfirst(@$service['name']) }}</h2>
                                <div>
                                    {{ ucfirst(@$service['description']) }}
                                </div>
                                @if (!empty($service['get_class']))
                                    <div class="mt-5">
                                        <p class="h3">Classes</p>
                                        <ul>
                                            @foreach ($service['get_class'] as $class)
                                                <li>{{ $class['title'] }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6 col-xl-6 col-sm-12 col-xxl-6 col-md-6">
                        <div data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000" class="aos-init CAB-img new">
                            <img id="imgid" src="{{ env('IMG_URL') . @$service['image'] }}" alt=""
                                srcset="" style="border-radius: 70px;">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
