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


      <div class="container my-5">
          <h1 style="margin-top:120px;" class="text-center">Salon Customer Satisfaction Form</h1>
          <p  class="text-center text-dark">Thank you for choosing our salon for your recent service(s) / treatment(s). We do hope that you enjoyed your time with us and will come back to see us very soon. To provide the best possible customer service, we’re reaching out to find out how we’re doing. We’d love your honest feedback so that we can make your salon experience even better. Please take a few moments to complete this form.</p>
          <form action="/insert" method="POST">
                    @csrf
                    <div class="my-3">
                      <label class="text-dark" for=""><b>1. Was this your first time visiting our salon?</b></label>
                        <input type="text" name="time" placeholder=" Enter Your Answer" class="form-control" required>
                    </div>

                    <div class="my-3">
                    <label class="text-dark" for=""><b>2. What service(s) / treatment(s) did you receive during your visit?</b></label>
                        <input type="text" name="visit" placeholder=" Enter Your Answer" class="form-control" required>
                    </div>

                    <div class="my-3">
                    <label class="text-dark" for=""><b>3. Please rate the experience of booking your appointment:</b></label>
                        <input type="text" name="appointment" placeholder=" Enter Your Answer" class="form-control" required>
                    </div>

                    <div class="my-3">
                    <label class="text-dark" for=""><b>4. Please rate the experience when you were greeted and checked in:</b></label>
                        <input type="text" name="experience" placeholder=" Enter Your Answer" class="form-control" required>
                    </div>

                    <div class="my-3">
                    <label class="text-dark" for=""><b>5. Please rate the quality of service/treatment received:</b></label>
                        <input type="text" name="quality" placeholder=" Enter Your Answer" class="form-control" required>
                    </div>

                    <div class="my-3">
                    <label class="text-dark" for=""><b>6. Please rate the experience when you paid and checked out:</b></label>
                        <input type="text" name="checked" placeholder=" Enter Your Answer" class="form-control" required>
                    </div>

                    <div class="my-3">
                    <label class="text-dark" for=""><b>7. Cleanliness, organization and comfort of the salon:</b></label>
                        <input type="text" name="comfort" placeholder=" Enter Your Answer" class="form-control" required>
                    </div>

                    <div class="my-3">
                    <label class="text-dark" for=""><b>8. Staff friendliness, attitude, and professionalism:</b></label>
                        <input type="text" name="friendliness" placeholder=" Enter Your Answer" class="form-control" required>
                    </div>

                    <div class="my-3">
                    <label class="text-dark" for=""><b>9. Value of service/treatment for price paid:</b></label>
                        <input type="text" name="price" placeholder=" Enter Your Answer" class="form-control" required>
                    </div>

                    <div class="my-3">
                    <label class="text-dark" for=""><b>10. Overall experience:</b></label>
                        <input type="text" name="overall" placeholder=" Enter Your Answer" class="form-control" required>
                    </div>

                    <div class="my-3">
                    <label class="text-dark" for=""><b>11. How likely are you to recommend us to a friend/colleague/family member?</b></label>
                        <input type="text" name="likely" placeholder=" Enter Your Answer" class="form-control" required>
                    </div>

                    <div class="my-3">
                    <label class="text-dark" for=""><b>12. Any additional comments or suggestions:</b></label>
                        <input type="text" name="comments" placeholder=" Enter Your Answer" class="form-control" required>
                    </div>

                    <div class="my-3">
                    <label class="text-dark" for=""><b>13. Would you like us to contact you to discuss your visit?</b></label>
                        <input type="text" name="discuss" placeholder=" Enter Your Answer" class="form-control" required>
                    </div>

                    <p  class="text-center text-dark">Thank you for taking the time to complete this form. Your satisfaction is important to us and we will be using the feedback you provided to make improvements to ensure we offer an exceptional experience for our customers in the future.</p>

                    <div class="my-3">
                    <label class="text-dark" for=""><b>Your Email</b></label>
                        <input type="email" name="email" placeholder=" Enter Your Email" class="form-control" required>
                    </div>



                    <div class="my-3">
                        <button class="btn btn-primary">Submit</button>
                    </div>



                </form>
      </div>
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
