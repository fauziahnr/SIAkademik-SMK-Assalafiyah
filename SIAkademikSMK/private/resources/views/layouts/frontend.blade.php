<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="{{url('public/frontend/img/favicon1.png')}}">
  <!-- Author Meta -->
  <meta name="author" content="colorlib">
  <!-- Meta Description -->
  <meta name="description" content="">
  <!-- Meta Keyword -->
  <meta name="keywords" content="">
  <!-- meta character set -->
  <meta charset="UTF-8">
  <!-- Site Title -->
  <title>{{config('sekolah.title')}}</title>

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="{{url('public/frontend/css/linearicons.css')}}">
    <link rel="stylesheet" href="{{url('public/frontend/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('public/frontend/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('public/frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{url('public/frontend/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{url('public/frontend/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{url('public/frontend/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{url('public/frontend/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{url('public/frontend/css/main.css')}}">
  </head>
  <body>
    <header id="header" id="home">
      <div class="header-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
              <ul>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
              </ul>
            </div>
            <div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
              <a href="tel:+953 012 3654 896"><span class="lnr lnr-phone-handset"></span> <span class="text">{{config('sekolah.telpon')}}</span></a>
              <a href="mailto:support@colorlib.com"><span class="lnr lnr-envelope"></span> <span class="text">{{config('sekolah.email')}}</span></a>
            </div>
          </div>
        </div>
    </div>
      <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
          <div id="logo">
            <a href=""><img src="{{url('public/frontend/img/smk.png')}}" alt="" title="" /></a>
          </div>
          <nav id="nav-menu-container">
            <ul class="nav-menu">
              <li><a href="{{url('/')}}">Home</a></li>
              <li><a href="{{url('register')}}">Daftar</a></li>
            </ul>
          </nav><!-- #nav-menu-container -->
        </div>
      </div>
    </header><!-- #header -->

    @yield('content')

    <!-- start footer Area -->
    <footer class="footer-area section-gap">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h4>Fasilitas Memadai</h4>

            </div>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h4>Lingkungan Nyaman</h4>

            </div>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h4>Kurikulum Update</h4>

            </div>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h4>Smk Bisa</h4>

            </div>
          </div>
          <div class="col-lg-4  col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h4>Kritik dan Saran Website</h4>
              <p>Isilah komentar dan saran untuk Sekolah Assalafiyah</p>
              <div class="" id="mc_embed_signup">
                 <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
                  <div class="input-group">
                    <input type="text" class="form-control" name="EMAIL" placeholder="Enter Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email Address '" required="" type="email">
                    <div class="input-group-btn">
                      <button class="btn btn-default" type="submit">
                        <span class="lnr lnr-arrow-right"></span>
                      </button>
                    </div>
                      <div class="info"></div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-bottom row align-items-center justify-content-between">
          <p class="footer-text m-0 col-lg-6 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Develop <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://smkass.com" target="_blank">Fauziah</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          <div class="col-lg-6 col-sm-12 footer-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-behance"></i></a>
          </div>
        </div>
      </div>
    </footer>
    <!-- End footer Area -->


    <script src="{{url('public/frontend/js/vendor/jquery-2.2.4.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{{url('public/frontend/js/vendor/bootstrap.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
      <script src="{{url('public/frontend/js/easing.min.js')}}"></script>
    <script src="{{url('public/frontend/js/hoverIntent.js')}}"></script>
    <script src="{{url('public/frontend/js/superfish.min.js')}}"></script>
    <script src="{{url('public/frontend/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{url('public/frontend/js/jquery.magnific-popup.min.js')}}"></script>
      <script src="{{url('public/frontend/js/jquery.tabs.min.js')}}"></script>
    <script src="{{url('public/frontend/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{url('public/frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{url('public/frontend/js/mail-script.js')}}"></script>
    <script src="{{url('public/frontend/js/main.js')}}"></script>
  </body>
</html>
