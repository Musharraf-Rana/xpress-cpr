<div class="desktop-header">
    <!-- header  desktop -->
    <header>
        <div class="container-fluid">
            <!-- top head  -->
            <div class="first-head">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <div class="flex topMenu">
                                <ul>
                                    <li> <span class="material-symbols-outlined">
                                            mail
                                        </span> &nbsp;<a href="mailto:info@xpresscprclasses.com" style="color: black;">
                                            info@xpresscprclasses.com</a>
                                    </li>
                                    <li><span class="material-symbols-outlined">
                                            call
                                        </span> &nbsp;<a href="tel:+1909-757-7611"
                                            style="color: black;">909-757-7611</a> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="flex topMenu next">
                                <ul>
                                    <li><span><i class="fa-brands fa-facebook"></i></span></li>
                                    <li><span><i class="fa-brands fa-twitter"></i></span></li>
                                    <li><span><i class="fa-brands fa-instagram"></i></span></li>
                                    <li><span><i class="fa-brands fa-youtube"></i></span></li>
                                    <li><span><i class="fa-brands fa-pinterest"></i></span></li>

                                    {{-- <li><span>Login</span></li>
                                    <li class='inner-width'><span>|</span></li>
                                    <li><span>Singup</span></li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- secound head  -->

            <div class="secound-head">
                <div class="container">
                    <div class="row">
                        <div class="col-10">

                            <div class="flex topMenu secound">
                                <ul>
                                    <li><span> <img src="{{ asset('assets/images/logo-1.png') }}" alt=""
                                                srcset=""></span>
                                    </li>
                                    <li> <a href="{{ route('home') }}"><span>Home</span></a> </li>
                                    <li> <a href="{{ route('about') }}"><span>About Us</span></a> </li>
                                    <li>
                                        <span>
                                            <div class="dropdown">
                                                <a href="{{ route('all.services') }}"><span
                                                        class="dropbtn">Services</span></a>
                                                <div class="dropdown-content">
                                                    @if (!empty(Helper::services()))
                                                        @foreach (Helper::services() as $service)
                                                            <a
                                                                href="{{ route('services', $service['id']) }}">{{ $service['name'] }}</a>
                                                        @endforeach

                                                    @endif
                                                    {{-- <a href="{{ route('bls') }}">BLS</a>
                                                    <a href="{{ route('cpr_for_pets') }}">Heart Saver</a>
                                                    <a href="{{ route('group_services') }}">CPR for Pets</a>
                                                    <a href="{{ route('heart_server') }}">Mobile Services</a>
                                                    <a href="{{ route('mobile_services') }}">Group Services</a>
                                                    <a href="{{ route('private_services') }}">Private Services</a> --}}
                                                    {{-- <a href="{{ route('special_events') }}">Special Events</a> --}}
                                                </div>
                                            </div>
                                        </span>
                                    </li>
                                    <li> <a href="{{ route('blog') }}"><span>Blog</span></a> </li>
                                    <li> <a href="{{ route('our_product') }}"><span>Our Products</span></a> </li>
                                    <li> <a href="{{ route('contact_us') }}"><span>Contact Us</span></a> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="flex topMenu btn">
                                <ul>
                                    <li> <a href="{{ route('appointment') }}"> <span> <button>Appointment</button>
                                            </span> </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>

<div class="mobile-header">
    <div id="mySidenav" class="sidenav">
        <span class="itemsmenu"> <img src="{{ asset('assets/images/logo-1.png') }}" alt="" srcset=""> <a
                href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a></span>

        <div class="menu-items">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">About Us </a>
            <div class="drop">
                <a onclick="myFunction()" href="#">Services +</a>
                <div class="drop-items" id="myDIV">
                    @if (!empty(Helper::services()))
                        @foreach (Helper::services() as $service)
                            <a href="{{ route('services', $service['id']) }}">{{ $service['name'] }}</a>
                        @endforeach

                    @endif
                </div>
            </div>

            <a href="{{ route('blog') }}">Blog</a>
            <a href="{{ route('our_product') }}">Our Products</a>
            <a href="{{ route('contact_us') }}">Contact Us</a>
        </div>
    </div>
    <div class="mobile-head">
        <span class="img-logo"><img src="{{ asset('assets/images/logo-1.png') }}" alt="" srcset="">
        </span>
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

    </div>
</div>
