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
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- favicon --}}
    <link rel="shortcut icon" href="https://d2zdpiztbgorvt.cloudfront.net/region1/us/447550/logo/b63c9daacadf44af9108f512d55660-elegance-hair-logo-a1ca5f284e5a457bbdb4e0427fc429-booksy.jpeg" type="image/x-icon">
  </head>
<style>
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
    <!-- END nav -->
  </body>
</html>
