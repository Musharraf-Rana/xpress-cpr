  @extends('layouts.main')
  @section('content')
      <style>
          .card.neww {
              margin-top: 46px;
              border: 0;
              margin-bottom: 15%;
          }

          .card.neww img {
              border-top-left-radius: 18px;
              border-top-right-radius: 18px;
              height: 254px;
              width: 100% !important;
          }

          .card-body.neww {
              padding: 35px;
              background: #f7f9ff;
              text-align: center;
              height: 9rem;
          }

          .card-body.neww h5 {
              color: #C4403E;
          }

          .card-body.neww p {
              line-height: 17px;
              font-size: 14px;
          }

          .container.neww .row {
              justify-content: center;
          }

          a:hover {
              text-decoration: none;
          }

          a {
              color: #212567;
          }
      </style>
      <section>
          <div class="banner-page-sec">
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

      <!-- the Services server  -->

      <!-- grid section  -->

      <section>
          <div class="container neww">
              <div class="row">
                  @if (!empty($services))
                      @foreach ($services as $service)
                          <div class="col-lg-4 col-md-5 col-xl-4 col-xxl-4 col-12">
                              <a href="{{ route('services', $service['id']) }}">
                                  <div class="card neww">
                                      <img src="{{ env('IMG_URL') . @$service['image'] }}" class="card-img-top"
                                          alt="...">
                                      <div class="card-body neww">
                                          <h5 class="card-title">{{ $service['name'] }}</h5>
                                          <p class="card-text">{{ substr($service['description'], 0, 100) }}</p>
                                      </div>
                                  </div>
                              </a>
                          </div>
                      @endforeach
                  @endif
                  {{-- <div class="col-lg-4 col-md-5 col-xl-4 col-xxl-4 col-12">
                      <div class="card neww">
                          <img src="./assets/images/about-300x300.png" class="card-img-top" alt="...">
                          <div class="card-body neww">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                  of the card's content.</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-5 col-xl-4 col-xxl-4 col-12">
                      <div class="card neww">
                          <img src="./assets/images/about-300x300.png" class="card-img-top" alt="...">
                          <div class="card-body neww">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                  of the card's content.</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-5 col-xl-4 col-xxl-4 col-12">
                      <div class="card neww">
                          <img src="./assets/images/about-300x300.png" class="card-img-top" alt="...">
                          <div class="card-body neww">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                  of the card's content.</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-5 col-xl-4 col-xxl-4 col-12">
                      <div class="card neww">
                          <img src="./assets/images/about-300x300.png" class="card-img-top" alt="...">
                          <div class="card-body neww">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                  of the card's content.</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-5 col-xl-4 col-xxl-4 col-12">
                      <div class="card neww">
                          <img src="./assets/images/about-300x300.png" class="card-img-top" alt="...">
                          <div class="card-body neww">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                  of the card's content.</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-5 col-xl-4 col-xxl-4 col-12">
                      <div class="card neww">
                          <img src="./assets/images/about-300x300.png" class="card-img-top" alt="...">
                          <div class="card-body neww">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                  of the card's content.</p>
                          </div>
                      </div>
                  </div> --}}
              </div>
          </div>
      </section>
  @endsection
