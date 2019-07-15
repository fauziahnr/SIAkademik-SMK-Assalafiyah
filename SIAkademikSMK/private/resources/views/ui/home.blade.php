@extends('layouts.frontend')

@section('content')

    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
      <div class="overlay overlay-bg"></div>
      <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-between">
          <div class="banner-content col-lg-9 col-md-12">
            <h1 class="text-uppercase">
              {{config('sekolah.welcome_message')}}
            </h1>
            <p class="pt-10 pb-10">
              {{config('sekolah.sub_welcome_message')}}
            </p>
            <a href="{{config('sekolah.welcome_message_button_url')}}" class="primary-btn text-uppercase">{{config('sekolah.welcome_message_button_text')}}</a>
          </div>
        </div>
      </div>
    </section>
    <!-- End banner Area -->

    <!-- Start feature Area -->
    <section class="feature-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="single-feature">
              <div class="title">
                <h4>{{config('sekolah.home_feature_column_1_title')}}</h4>
              </div>
              <div class="desc-wrap">
                <p>
                  {{config('sekolah.home_feature_column_1_content')}}
                </p>
                <a href="{{config('sekolah.home_feature_column_1_link_url')}}">{{config('sekolah.home_feature_column_1_link_text')}}</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="single-feature">
              <div class="title">
                <h4>{{config('sekolah.home_feature_column_2_title')}}</h4>
              </div>
              <div class="desc-wrap">
                <p>
                  {{config('sekolah.home_feature_column_2_content')}}
                </p>
                <a href="{{config('sekolah.home_feature_column_2_link_url')}}">{{config('sekolah.home_feature_column_2_link_text')}}</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="single-feature">
              <div class="title">
                <h4>{{config('sekolah.home_feature_column_3_title')}}</h4>
              </div>
              <div class="desc-wrap">
                <p>
                {{config('sekolah.home_feature_column_3_content')}}
                </p>
                <a href="{{config('sekolah.home_feature_column_3_link_url')}}">{{config('sekolah.home_feature_column_3_link_text')}}</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End feature Area -->

    <!-- Start popular-course Area -->
    <section class="popular-course-area section-gap">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="menu-content pb-70 col-lg-8">
            <div class="title text-center">
              <h1 class="mb-10">Galeri Smk Assalafiyah</h1>
              <p>Moment terbaik di Assalafiyah.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="active-popular-carusel">
            <div class="single-popular-carusel">
              <div class="thumb-wrap relative">
                <div class="thumb relative">
                  <div class="overlay overlay-bg"></div>
                  <img class="img-fluid" src="{{url('public/frontend/img/g1.jpg')}}" alt="">
                </div>
                <div class="meta d-flex justify-content-between">
                  <p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
                  <h4></h4>
                </div>
              </div>
              <div class="details">
                <a href="#">
                  <h4>
                    Ekstrakurikuler Hadroh
                  </h4>
                </a>
                <p>

                </p>
              </div>
            </div>
            <div class="single-popular-carusel">
              <div class="thumb-wrap relative">
                <div class="thumb relative">
                  <div class="overlay overlay-bg"></div>
                  <img class="img-fluid" src="{{url('public/frontend/img/g2.jpg')}}" alt="">
                </div>
                <div class="meta d-flex justify-content-between">
                  <p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
                  <h4></h4>
                </div>
              </div>
              <div class="details">
                <a href="#">
                  <h4>
                    Laboratorium Komputer Jaringan
                  </h4>
                </a>
                <p>

                </p>
              </div>
            </div>
            <div class="single-popular-carusel">
              <div class="thumb-wrap relative">
                <div class="thumb relative">
                  <div class="overlay overlay-bg"></div>
                  <img class="img-fluid" src="{{url('public/frontend/img/g3.jpg')}}" alt="">
                </div>
                <div class="meta d-flex justify-content-between">
                  <p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
                  <h4></h4>
                </div>
              </div>
              <div class="details">
                <a href="#">
                  <h4>
                    Suasana Ruang Kelas
                  </h4>
                </a>
                <p>
                </p>
              </div>
            </div>
            <div class="single-popular-carusel">
              <div class="thumb-wrap relative">
                <div class="thumb relative">
                  <div class="overlay overlay-bg"></div>
                  <img class="img-fluid" src="{{url('public/frontend/img/g4.jpg')}}" alt="">
                </div>
                <div class="meta d-flex justify-content-between">
                  <p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
                  <h4></h4>
                </div>
              </div>
              <div class="details">
                <a href="#">
                  <h4>
                  Ekstrakurikuler volley
                  </h4>
                </a>
                <p>
                    </p>
              </div>
            </div>
            <div class="single-popular-carusel">
              <div class="thumb-wrap relative">
                <div class="thumb relative">
                  <div class="overlay overlay-bg"></div>
                  <img class="img-fluid" src="{{url('public/frontend/img/g1.jpg')}}" alt="">
                </div>
                <div class="meta d-flex justify-content-between">
                  <p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
                  <h4></h4>
                </div>
              </div>
              <div class="details">
                <a href="#">
                  <h4>
                  Ekstrakurikuler Hadroh
                  </h4>
                </a>
                <p>
                </p>
              </div>
            </div>
            <div class="single-popular-carusel">
              <div class="thumb-wrap relative">
                <div class="thumb relative">
                  <div class="overlay overlay-bg"></div>
                  <img class="img-fluid" src="{{url('public/frontend/img/g2.jpg')}}" alt="">
                </div>
                <div class="meta d-flex justify-content-between">
                  <p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
                  <h4></h4>
                </div>
              </div>
              <div class="details">
                <a href="#">
                  <h4>
                    Laboratorium Komputer Jaringan
                  </h4>
                </a>
                <p>
                  </p>
              </div>
            </div>
            <div class="single-popular-carusel">
              <div class="thumb-wrap relative">
                <div class="thumb relative">
                  <div class="overlay overlay-bg"></div>
                  <img class="img-fluid" src="{{url('public/frontend/img/g3.jpg')}}" alt="">
                </div>
                <div class="meta d-flex justify-content-between">
                  <p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
                  <h4></h4>
                </div>
              </div>
              <div class="details">
                <a href="#">
                  <h4>
                    Suasana Ruang Kelas
                  </h4>
                </a>
                <p>
                  </p>
              </div>
            </div>
            <div class="single-popular-carusel">
              <div class="thumb-wrap relative">
                <div class="thumb relative">
                  <div class="overlay overlay-bg"></div>
                  <img class="img-fluid" src="{{url('public/frontend/img/g4.jpg')}}" alt="">
                </div>
                <div class="meta d-flex justify-content-between">
                  <p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
                  <h4></h4>
                </div>
              </div>
              <div class="details">
                <a href="#">
                  <h4>
                    Ekstrakurikuler volley Ball
                  </h4>
                </a>
                <p>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End popular-course Area -->

@stop
