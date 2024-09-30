<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Elegance Salon</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Prata&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="user/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="user/css/animate.css">
    <link rel="stylesheet" href="user/css/owl.carousel.min.css">
    <link rel="stylesheet" href="user/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="user/css/magnific-popup.css">
    <link rel="stylesheet" href="user/css/aos.css">
    <link rel="stylesheet" href="user/css/ionicons.min.css">
    <link rel="stylesheet" href="user/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="user/css/jquery.timepicker.css">
    <link rel="stylesheet" href="user/css/flaticon.css">
    <link rel="stylesheet" href="user/css/icomoon.css">
    <link rel="stylesheet" href="user/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      {{-- favicon --}}
      <link rel="shortcut icon" href="https://d2zdpiztbgorvt.cloudfront.net/region1/us/447550/logo/b63c9daacadf44af9108f512d55660-elegance-hair-logo-a1ca5f284e5a457bbdb4e0427fc429-booksy.jpeg" type="image/x-icon">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="/index"> <i class="fa-solid fa-scissors"></i>Elegance Salon </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
            <li class="nav-item active"><a href="/about" class="nav-link">About</a></li>
            <!-- <li class="nav-item active"><a href="/treatment" class="nav-link">Treatments</a></li> -->
            <li class="nav-item active"><a href="/specialist" class="nav-link">Specialists</a></li>
            <li class="nav-item active"><a href="/service" class="nav-link">Service</a></li>
            <li class="nav-item active"><a href="/feedback" class="nav-link">Feedback</a></li>
            <li class="nav-item active"><a href="/contact" class="nav-link">Contact</a></li>

            @if(Auth::check())
              <li class="nav-item">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-inline">
                  @csrf
                  <button type="submit" class="nav-link btn btn-primary my-2">Logout</button>
                </form>
              </li>
            @else
              <li class="nav-item"><a href="/register" class="nav-link btn btn-primary mx-1 rounded">Register</a></li>
              <li class="nav-item"><a href="/login" class="nav-link btn btn-primary">Login</a></li>
            @endif
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <footer class="ftco-footer ftco-section">
        <div class="container">
          <div class="row d-flex">
            <div class="col-md">
              <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Elegance Salon</h2>
                <p>This salon is customer satisfaction place my website is future plan customer service and satisfaction place..</p>
                <ul class="ftco-footer-social list-unstyled float-lft mt-3">
                  <li class="ftco-animate"><a href="https://twitter.com/"><span class="icon-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="https://www.facebook.com/"><span class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="https://www.instagram.com/"><span class="icon-instagram"></span></a></li>


                </ul>
              </div>
            </div>
            <div class="col-md">
              <div class="ftco-footer-widget mb-4 ml-md-4">
                <h2 class="ftco-heading-2">Popular Links</h2>
                <ul class="list-unstyled">
                    <li><a href="/">Home</a></li>
                  <li><a href="/specialist">Specialists</a></li>
                  <li><a href="/service">Service</a></li>
                  <li><a href="/userdashboard.user_dashboard">Dashboard</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md">
              <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="/">Home</a></li>
                  <li><a href="/about">About</a></li>
                  <li><a href="/specialist">Specialists</a></li>
                  <li><a href="/service">Service</a></li>
                  <li><a href="/feedback">Feedback</a></li>
                  <li><a href="/contact">Contact</a></li>
                  <li><a href="/userdashboard.user_dashboard">Dashboard</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md">
              <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Have a Questions?</h2>
                <div class="block-23 mb-3">
                  <ul>
                    <li><span class="icon icon-map-marker"></span><span class="text-dark">Garden East Karachi Pakistan</span></li>
                    <li><a href="#"><span class="icon icon-phone"></span><span class="text">+92 3102523495</span></a></li>
                    <li><a href="#"><span class="icon icon-envelope"></span><span class="text">memonyaseen908@gmail.com</span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">

              <p class="mb-0">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>
                  document.write(new Date().getFullYear());

                </script> All rights reserved | This website is made by <i class="icon-heart" aria-hidden="true"></i> by <a href="/" target="_blank">Elegance Salon</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
            </div>
          </div>
        </div>
      </footer>
  </body>
</html>
