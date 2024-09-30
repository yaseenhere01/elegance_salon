@include('user.nav')


<style>
    /* doctors */
    .team-item img {
        position: relative;
        top: 0;
        transition: .5s;
    }

    .team-item:hover img {
        top: -30px;
    }

    .team-item .team-text {
        position: relative;
        height: 100px;
        transition: .5s;
    }

    .team-item:hover .team-text {
        margin-top: -60px;
        height: 160px;
    }

    .team-item .team-text .team-social {
        opacity: 0;
        transition: .5s;
    }

    .team-item:hover .team-text .team-social {
        opacity: 1;
    }

    .team-item .team-social .btn {
        display: inline-flex;
        color: var(--primary);
        background: #FFFFFF;
        border-radius: 40px;
    }

    .team-item .team-social .btn:hover {
        color: gray;
        background: var(--primary);
    }

    body{
      background-color: #f8f8f8;"
    }

   /* @media (max-width: 667px) {
    .ftco-navbar-light .navbar-brand {
        color: #cebb6c;
    }


} */

</style>

<body>



    <!--  specialists title -->

    <div style="border: none;" class="card text-light">
        <img style="height: 500px;" src="user/images/herosection15.jpg" class="card-img1" alt="...">
        <div class="card-img-overlay">
            <!-- <h1 style="text-align: center;  margin-top: 110px;" class="card-title "> <b>Our Specialists</b> </h1>
            <p style="text-align: center; color: #d4d0da;" class="card-text text-light">Here’s a list of  fictional veterinarians with different specialties tailored of "Animal Companion Health
            </p> -->
        </div>
    </div>

    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <h1 class="text-center my-5">Our Specialists</h1>
            <div class="row no-gutters">
                @foreach ($staff as $s)
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="offer-deal text-center px-2 px-lg-5">
                            <div class="img" style="background-image: url('{{ url('staffimg/' . $s->image) }}'); height: 200px; background-size: cover; background-position: center;"></div>
                            <div class="text mt-4">
                                <p class="font-weight-bold">{{ $s->name }}</p>
                                <p>{{ $s->email }}</p>
                                <p>{{ $s->phone }}</p>
                                <p>{{ $s->shift }}</p>
                                <p>{{ $s->date }}</p>
                                <p>{{ $s->time }}</p>
                                <p><a href="#" class="btn btn-white px-4 py-3">Book A Treatment <span class="ion-ios-arrow-round-forward"></span></a></p>
                            </div>
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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
