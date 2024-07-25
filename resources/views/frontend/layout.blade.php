<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>TravelAmbon</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/img/favicon.png') }}" />
  
  <!-- CSS here -->
  <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}" />
  <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('frontend/css/themify-icons.css') }}" />
  <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css') }}" />
  <link rel="stylesheet" href="{{ asset('frontend/css/flaticon.css') }}" />
  <link rel="stylesheet" href="{{ asset('frontend/css/gijgo.css') }}" />
  <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}" />
  <link rel="stylesheet" href="{{ asset('frontend/css/slick.css') }}" />
  <link rel="stylesheet" href="{{ asset('frontend/css/slicknav.css') }}" />
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
  <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />
</head>
<body>
  <!--[if lte IE 9]>
    <p class="browserupgrade">
      You are using an <strong>outdated</strong> browser. Please
      <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.
    </p>
  <![endif]-->

  <!-- header-start -->
  <header>
    <div class="header-area">
      <div id="sticky-header" class="main-header-area">
        <div class="container-fluid">
          <div class="header_bottom_border">
            <div class="row align-items-center">
              <div class="col-xl-2 col-lg-2">
                <div class="logo">
                  <a href="index.html">
                    <img src="{{ asset('frontend/img/logo.png') }}" alt="Logo" />
                  </a>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6">
                <div class="main-menu d-none d-lg-block">
                  <nav>
                    <ul id="navigation">
                    <li><a href="{{ route('frontend.home') }}">Home</a></li>
                      <li><a  href="{{route('frontend.destination.index') }}">Destinasi</a></li>
                      <li><a href="{{route('frontend.galeri') }}">Galeri</a></li>
                      <li><a href="{{route('frontend.news') }}">Berita</a></li>
                      <li><a href="{{route('frontend.lokasi') }}">Peta</a></li>
                    </ul>
                  </nav>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                <div class="social_wrap d-flex align-items-center justify-content-end">
                  <div class="number">
                    <p>
                      <i class="fa fa-phone"></i>
                      +62
                    </p>
                  </div>
                  <div class="social_links d-none d-xl-block">
                    <ul>
                      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="seach_icon">
                <a data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="fa fa-search"></i></a>
              </div>
              <div class="col-12">
                <div class="mobile_menu d-block d-lg-none"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- header-end -->

  @yield('content')

  <!-- footer -->
  <footer class="footer">
    <div class="footer_top">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-md-6 col-lg-4">
            <div class="footer_widget">
              <h3 class="footer_title">Contact Us</h3>
              <ul class="address_line">
                <li><i class="fa fa-map-marker"></i>Maluku Inodnesia Bagian Timur</li>
                <li><i class="fa fa-phone"></i> +62#########</li>
                <li><i class="fa fa-envelope"></i>pesonatimurindonesiamaluku@example.com</li>
              </ul>
              <div class="social_links">
                <ul>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6 col-lg-4">
            <div class="footer_widget">
              <h3 class="footer_title">Useful Links</h3>
              <ul class="links">
                <li><a href="#">Home</a></li>
                <li><a href="#">galeri</a></li>
                <li><a href="#">berita</a></li>
                <li><a href="#">Destinations</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-xl-4 col-md-6 col-lg-4">
            <div class="footer_widget">
              <h3 class="footer_title">Subscribe</h3>
              <form action="#" class="newsletter_form">
                <input type="email" placeholder="Enter your email" />
                <button type="submit">Subscribe</button>
              </form>
              <p>Subscribe to our newsletter to get the latest updates and offers.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- /footer -->

  <!-- JS here -->
  <script src="{{ asset('frontend/js/vendor/modernizr-3.5.0.min.js') }}"></script>
  <script src="{{ asset('frontend/js/vendor/jquery-1.12.4.min.js') }}"></script>
  <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
  <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('frontend/js/ajax-form.js') }}"></script>
  <script src="{{ asset('frontend/js/waypoints.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.counterup.min.js') }}"></script>
  <script src="{{ asset('frontend/js/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('frontend/js/scrollIt.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.scrollUp.min.js') }}"></script>
  <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
  <script src="{{ asset('frontend/js/nice-select.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.slicknav.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('frontend/js/plugins.js') }}"></script>
  <script src="{{ asset('frontend/js/gijgo.min.js') }}"></script>
  <script src="{{ asset('frontend/js/slick.min.js') }}"></script>
  <script src="{{ asset('frontend/js/contact.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.ajaxchimp.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.form.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.validate.min.js') }}"></script>
  <script src="{{ asset('frontend/js/mail-script.js') }}"></script>
  <script src="{{ asset('frontend/js/main.js') }}"></script>
  <script>
    $('#datepicker').datepicker({
      iconsLibrary: 'fontawesome',
      icons: {
        rightIcon: '<span class="fa fa-caret-down"></span>',
      },
    });
  </script>
</body>
</html>
