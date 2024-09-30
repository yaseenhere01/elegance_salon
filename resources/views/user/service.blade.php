<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Salon Management</title>
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

    <!-- Bootstrap CSS v5.2.1 -->
    <link
                href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
                rel="stylesheet"
                integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
                crossorigin="anonymous"
            />
              {{-- favicon --}}
    <link rel="shortcut icon" href="https://d2zdpiztbgorvt.cloudfront.net/region1/us/447550/logo/b63c9daacadf44af9108f512d55660-elegance-hair-logo-a1ca5f284e5a457bbdb4e0427fc429-booksy.jpeg" type="image/x-icon">
  </head>
  <style>
    body{
      background-color: #f8f8f8;"
    }

    @media (max-width: 991.98px) {
    .ftco-navbar-light .navbar-brand {
        color: #dcc15a;
    }

    .ftco-navbar-light .navbar-nav > .nav-item > .nav-link{
        color: rgb(0 0 0 / 70%);

    }
}



  </style>
  <body>
    <nav class="navbar navbar-expand-lg bg-light sticky-top  py-0 ftco-navbar-light" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="/"><i class="fa-solid fa-scissors"></i>Elegance Salon </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>
          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
              <li class="nav-item active"><a href="/about" class="nav-link">About</a></li>
              <li class="nav-item active"><a href="/specialist" class="nav-link">Specialists</a></li>

              <li class="nav-item active"><a href="/service" class="nav-link">Service</a></li>

              <li class="nav-item active"><a href="/feedback" class="nav-link">Feedback</a></li>
              <li class="nav-item active"><a href="/contact" class="nav-link">Contact</a></li>


              @if(Auth::check())
              <li class="nav-item d-flex align-items-center">
                          <a href="/profile"  class="nav-link"><i class="fa-solid fa-user-pen"></i></a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-inline">
                              @csrf
                              <button type="submit" class="nav-link btn btn-primary">Logout</button>
                          </form>

                </li>
              @else
                <li ><a href="/register" class=" btn btn-primary mx-1 my-3">Register</a></li>
                <li ><a href="/login" class=" btn btn-primary my-3">Login</a></li>
              @endif
            </ul>
          </div>
        </div>
      </nav>


      <section class="ftco-section ftco-section-services bg-light">
        <div class="container-fluid px-md-5">
            <div class="row text-center">
                <div class="col-12 mb-4">
                    <h1>Menu Items</h1>
                </div>
                @foreach ($stock as $s)
                    <div class="col-md-6 col-lg-3 mb-4 d-flex justify-content-center">
                        <div class="text mt-3">
                            <p>
                                <img style="height:120px; width:120px;" src="{{ url('stock-image/' . $s->pimage) }}" alt="">
                            </p>
                            <h5>{{ $s->pname }}</h5>
                            <p>{{ $s->pitem }}</p>
                            <p>{{ $s->pprice }}</p>

                            @auth
                                @if ($s->usertype !== '0')
                                    <a href="/add_appoinments">
                                        <button class="btn btn-primary text-light">Appoinments</button>
                                    </a>
                                @endif
                            @else
                                <a href="/login">
                                    <button class="btn btn-primary text-light">Subscribe</button>
                                </a>
                            @endauth
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


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




       <!-- Bootstrap JavaScript Libraries -->
       <script
                src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
                integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
                crossorigin="anonymous"
            ></script>

            <script
                src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
                integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
                crossorigin="anonymous"
            ></script>

            <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

