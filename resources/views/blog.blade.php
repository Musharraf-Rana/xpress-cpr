@extends('layouts.main')
@section('content')
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Open+Sans&family=Source+Sans+Pro:wght@400;700&display=swap");




        img {
            max-width: 100%;
            display: block;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .card {
            display: grid;
            position: relative;

            width: min(100% - 2rem, 380px);
            background-color: var(--clr-neutral-100);

            overflow: hidden;
            border-radius: 0.8em;
            box-shadow: 0px 4px 3px rgba(0, 0, 0, 0.1);
            transition: var(--transition);
        }

        .card:is(:hover, :focus) {
            transform: translateY(-5px);
            box-shadow: 0px 10px 8px rgba(0, 0, 0, 0.1);
        }

        .card:focus-visible {
            outline: 2px dashed;
            outline-offset: 0.4em;
        }

        .card__img-container {
            width: 100%;
            position: relative;
            overflow: hidden;
            isolation: isolate;
            aspect-ratio: 16 / 9;
        }

        /* image overlay */
        .card__img-container::before {
            content: "";
            position: absolute;
            inset: 0;
            background-color: rgba(0, 0, 0, 0.4);
            opacity: 0;
            z-index: 1;
            transition: var(--transition);
        }

        .card__tags {
            --_pad: 10px;
            position: absolute;
            inset: var(--_pad) var(--_pad) auto var(--_pad);

            display: flex;
            justify-content: end;
            flex-wrap: wrap;
            gap: 0.25em;

            opacity: 0;
            transition: var(--transition);
        }

        .card__tag {
            display: inline-block;
            padding: 0.1em 0.5em;

            font-size: 14px;
            text-transform: uppercase;

            background-color: rgba(0, 0, 0, 0.6);
            color: var(--clr-neutral-100);
            border-radius: 5px;
            z-index: 2;
        }

        .card__img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .card__body {
            padding: 1em 1.5em;
        }

        .card__title {
            margin: 0;
            font-size: clamp(1.4rem, 4vw, 1.7rem);
            text-transform: capitalize;
            color: var(--clr-neutral-800);
        }

        .card__date {
            font-size: 0.875rem;
            color: var(--clr-neutral-500);
        }

        .card__cta {
            position: relative;
            width: fit-content;
            margin-top: auto;
            color: var(--clr-primary);
        }

        /* underline */
        .card__cta::before {
            content: "";
            position: absolute;
            inset: 100% 0 0 0;
            height: 2px;

            background-color: currentColor;
            transition: var(--transition);
            transform-origin: right;
        }

        /* right arrow */
        .card__cta::after {
            content: " →";
            display: inline-block;
            margin-left: 5px;
            transition: var(--transition);
        }

        /* image overlay */
        .card:is(:hover, :focus) .card__img-container::before {
            opacity: 1;
        }

        /* remove underline */
        .card:is(:hover, :focus) .card__cta::before {
            transform: scale(0);
        }

        /* move arrow */
        .card:is(:hover, :focus) .card__cta::after {
            transform: translateX(6px);
        }

        /* show tag */
        .card:is(:hover, :focus) .card__tags {
            opacity: 1;
        }
    </style>
    <!-- the banner page section  -->
    <section>
        <div class="banner-page-sec" onmouseover="hoverclick()">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="text-center">Blogs</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            @if (!empty($blogs))
                @foreach ($blogs as $blog)
                    <div class="col-md-3">
                        <a href="{{ route('blog.details', $blog['id']) }}" class="card  mb-lg-5 ml-5 mt-5 ml-lg-3">
                            <div class="card__img-container">
                                <img class="card__img" src="http://xpress-cpr.test/storage/{{ $blog['thumbnail'] }}"
                                    alt="unsplash random image" />
                                {{-- <div class="card__tags">
                                    <span class="card__tag">html</span>
                                    <span class="card__tag">css</span>
                                    <span class="card__tag">javascript</span>
                                </div> --}}
                            </div>
                            <div class="card__body">
                                <h3 class="card__title">{{ $blog['title'] }}</h3>
                                <p class="card__date">Updated on
                                    <time datetime="2022-10-24">{!! date('M d, Y', strtotime($blog['created_at'])) !!}</time>
                                </p>
                                <p class="card__cta">Read more</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            @endif

        </div>

    </section>

    <!-- C-A-B is the key to performing CPR  -->
    {{-- <section>
        <div class="CAB sec-space" onmouseover="hoverclick()">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-6 col-sm-12 col-xxl-6 col-md-6">
                        <div class="aos-init main-CAB terms">
                            <div class="inner-contenct-cab">
                                <h2>Tagline:
                                </h2>
                                <div class="inner_wpb_wrapper">
                                    <p>Be in the know!

                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000"
                        class="col-lg-6 col-xl-6 col-sm-12 col-xxl-6 col-md-6">
                        <div class="aos-init CAB-img new">
                            <img id="imgid" src="./assets/images/highlight-279x300.png" alt="" srcset="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
