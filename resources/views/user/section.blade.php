<style>
    @media (max-width: 680px) {
        body {
            text-align: center;


        }
    }

    @media(max-width:879px) {
        .hero-wrap .slider-text h1 {
            font-size: 18px;
        }

        .row {
            --bs-gutter-x: -1.5rem;
        }

        .hero-wrap .slider-text .btn-primary,
        .hero-wrap .slider-text .btn-outline-primary {
            width: 83%;
        }

        .navbar-nav .nav-link {
            margin-left: auto;
        }

        .navbar-nav .nav-link {
            padding-right: 3px;
            padding-left: 4px;
        }

        .navbar-nav .nav-link {
            margin-top: 4px;
        }

        .py-4 {
            margin-top: 2px;
        }

    }

    body {
        background-color: #f8f8f8;


    }
</style>

<section class="hero-wrap js-fullheight" style="background-image: url('user/images/bg_1.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
            <div class="col-md-10 ftco-animate text-center">
                {{-- <div class="icon">
                    <span class="flaticon-lotus"></span>

                </div> --}}
                <div class="icon">
                <h1>Elegance &amp; Beauty Salon</h1>
            </div>
                <div class="row justify-content-center">
                    <div class="col-md-7 mb-3">

                        <p>This salon is customer satisfaction place my website is future plan customer service and
                            satisfaction place.</p>
                    </div>
                </div>
                <p>

                    <a href="/add_appoinments" class="btn btn-primary p-3 px-5 py-4 mr-md-2">Appoinments</a>
                    <!-- <a href="/contact" class="btn btn-primary p-3 px-5 py-4 ml-md-2">Contact</a> -->
                    <a href="/staffmanagement" class="btn btn-primary p-3 px-5 py-4 ml-md-2">Staff Management</a>

                    @if (Auth::id())
                        @if (Auth::user()->usertype == '0')
                            @if (Auth::user()->usertype == '0')
                                <a href="/myappoinment" class="btn btn-primary  p-3 px-5 py-4 ml-md-2">My Appoinment</a>
                            @elseif(Auth::user()->usertype != '0')
                                <a href="/myappoinment"
                                    class="disabled btn btn-outline-primary p-3 px-5 py-4 ml-md-2">My Appoinment</a>
                            @endif
                        @endif
                    @endif

                </p>
            </div>
        </div>
    </div>
</section>

<!-- <section class="ftco-section ftco-intro" style="background-image: url(user/images/herosection13.jpg);">
   <div class="container">
    <div class="row justify-content-end">
     <div class="col-md-6">
      <div class="heading-section ftco-animate">
 <h2 class="mb-4 text-white">Benefits of Doing Spa &amp; Massage</h2>
 </div>
 <p class="ftco-animate text-white">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>

     </div>
    </div>
   </div>
  </section> -->

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
                            <p><a href="/add_appoinments" class="btn btn-white px-4 py-3">Book A Treatment <span class="ion-ios-arrow-round-forward"></span></a></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


<div class="container">

</div>
<section class="ftco-section ftco-section-services bg-light">
    <div class="container-fluid px-md-5">
        <div class="row">
            <h1>Menu Items</h1>
            @foreach ($stock as $s)
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="text mt-3">
                        <p><img style="height:120px; width:120px;" src="{{ url('stock-image/' . $s->pimage) }}"
                                alt=""></p>
                        <h5>{{ $s->pname }}</h3>
                            <p>{{ $s->pitem }}</p>
                            <p>{{ $s->pprice }}</p>

                            @auth
                                @if ($s->usertype !== '0')
                                    <!-- User is logged in and product type is not "0" -->
                                    <a href="/add_appoinments"><button
                                            class="btn btn-primary text-light">Appoinments</button></a>
                                @else
                                @endif
                            @else
                                <!-- User is not logged in -->
                                @if ($s->usertype !== '0')
                                    <a href="/login"><button class="btn btn-primary text-light">Subscribe</button></a>
                                @else
                                    <a href="/login"><button class="btn btn-primary text-light">Subscribe</button></a>
                                @endif
                            @endauth
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>



{{-- <section class="ftco-section">
    <div class="container-fluid px-md-5">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-12 heading-section ftco-animate text-center">
                <h3 class="subheading">Services</h3>
                <h2 class="mb-1">Treatments</h2>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="row no-gutters">
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div
                            class="treatment w-100 text-center ftco-animate border border-right-0 border-bottom-0 p-3 py-4">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-candle"></span>
                            </div>
                            <div class="text mt-2">
                                <h3>Salt &amp; Aroma</h3>
                                <p>A small river named Duden flows by their place and supplies.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="treatment w-100 text-center ftco-animate border border-bottom-0 p-3 py-4">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-spa-1"></span>
                            </div>
                            <div class="text mt-2">
                                <h3>Hydro</h3>
                                <p>A small river named Duden flows.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="treatment w-100 text-center ftco-animate border border-right-0 p-3 py-4">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-stone"></span>
                            </div>
                            <div class="text mt-2">
                                <h3>Hot Stone</h3>
                                <p>A small river named Duden flows by their place and supplies.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="treatment w-100 text-center ftco-animate border p-3 py-4">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-lotus"></span>
                            </div>
                            <div class="text mt-2">
                                <h3>Aroma</h3>
                                <p>A small river named Duden flows.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 d-flex align-items-stretch">
                <div id="accordion" class="myaccordion w-100 text-center py-5 px-1 px-md-4">
                    <div>
                        <h3>Prices</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia</p>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="d-flex align-items-center justify-content-between btn btn-link"
                                    data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    Spa Therapies
                                    <i class="fa" aria-hidden="true"></i>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordion">
                            <div class="card-body text-left">
                                <ul>
                                    <li class="d-flex">
                                        <span>Face Treatments</span>
                                        <span>40 min.</span>
                                        <span>$10</span>
                                    </li>
                                    <li class="d-flex">
                                        <span>Nail Treatments</span>
                                        <span>30 min.</span>
                                        <span>$20</span>
                                    </li>
                                    <li class="d-flex">
                                        <span>Medical Treatments</span>
                                        <span>60 min.</span>
                                        <span>$10</span>
                                    </li>
                                    <li class="d-flex">
                                        <span>Hair Treatments</span>
                                        <span>30 min.</span>
                                        <span>$30</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button
                                    class="d-flex align-items-center justify-content-between btn btn-link collapsed"
                                    data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    Massage Therapies
                                    <i class="fa" aria-hidden="true"></i>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#accordion">
                            <div class="card-body text-left">
                                <ul>
                                    <li class="d-flex">
                                        <span>Face Treatments</span>
                                        <span>40 min.</span>
                                        <span>$10</span>
                                    </li>
                                    <li class="d-flex">
                                        <span>Nail Treatments</span>
                                        <span>30 min.</span>
                                        <span>$20</span>
                                    </li>
                                    <li class="d-flex">
                                        <span>Medical Treatments</span>
                                        <span>60 min.</span>
                                        <span>$10</span>
                                    </li>
                                    <li class="d-flex">
                                        <span>Hair Treatments</span>
                                        <span>30 min.</span>
                                        <span>$30</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4">
                <div class="row no-gutters">
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div
                            class="treatment w-100 text-center ftco-animate border border-right-0 border-bottom-0 p-3 py-4">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-beauty-treatment"></span>
                            </div>
                            <div class="text mt-2">
                                <h3>Relaxation</h3>
                                <p>A small river named Duden flows by their place and supplies.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="treatment w-100 text-center ftco-animate border border-bottom-0 p-3 py-4">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-relax"></span>
                            </div>
                            <div class="text mt-2">
                                <h3>Athlete</h3>
                                <p>A small river named Duden flows.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="treatment w-100 text-center ftco-animate border border-right-0 p-3 py-4">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-massage"></span>
                            </div>
                            <div class="text mt-2">
                                <h3>Thai</h3>
                                <p>A small river named Duden flows by their place and supplies.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="treatment w-100 text-center ftco-animate border p-3 py-4">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-rose"></span>
                            </div>
                            <div class="text mt-2">
                                <h3>Rose</h3>
                                <p>A small river named Duden flows.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}


<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h3 class="subheading">Pricing Tables</h3>
                <h2 class="mb-1">Pricing Treatments</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 ftco-animate">
                <div class="block-7">
                    <div class="text-center">
                        <h2 class="heading">Year Card</h2>
                        <span class="price"><sup>$</sup> <span class="number">449</span></span>
                        <span class="excerpt d-block">For 1 Year</span>

                        <h3 class="heading-2 my-4">Enjoy All The Features</h3>

                        <ul class="pricing-text mb-5">
                            <li>Face Treatments</li>
                            <li>Nail Treatments</li>
                            <li>Medical Treatments</li>
                            <li>Hair Removal</li>
                        </ul>

                        <a href="#" class="btn btn-primary d-block px-2 py-4">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="block-7">
                    <div class="text-center">
                        <h2 class="heading">Monthly Card</h2>
                        <span class="price"><sup>$</sup> <span class="number">200</span></span>
                        <span class="excerpt d-block">For 1 Month</span>

                        <h3 class="heading-2 my-4">Enjoy All The Features</h3>

                        <ul class="pricing-text mb-5">
                            <li>Face Treatments</li>
                            <li>Nail Treatments</li>
                            <li>Medical Treatments</li>
                            <li>Hair Removal</li>
                        </ul>

                        <a href="#" class="btn btn-primary d-block px-2 py-4">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="block-7">
                    <div class="text-center">
                        <h2 class="heading">Weekly Card</h2>
                        <span class="price"><sup>$</sup> <span class="number">85</span></span>
                        <span class="excerpt d-block">For 1 Week</span>

                        <h3 class="heading-2 my-4">Enjoy All The Features</h3>

                        <ul class="pricing-text mb-5">
                            <li>Face Treatments</li>
                            <li>Nail Treatments</li>
                            <li>Medical Treatments</li>
                            <li>Hair Removal</li>
                        </ul>

                        <a href="#" class="btn btn-primary d-block px-2 py-4">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- <section class="ftco-section testimony-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-10 heading-section ftco-animate text-center">
                <h3 class="subheading">Testimony</h3>
                <h2 class="mb-1">Successful Stories</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">

                <div class="testimony-wrap p-4 pb-5">
                    @foreach ($data as $d)
                        <div class="text">
                            <div class="line pl-5">
                                <p class="mb-4 pb-1">{{ $d->time }}</p>
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="d-flex align-items-center">
                                <!-- <div class="user-img" style="background-image: url(user/images/person_1.jpg)">
  </div> -->
                                <div class="ml-4">
                                    <p class="name">{{ $d->visit }}</p>
                                    <span class="position text-dark">{{ $d->appointment }}</span>
                                    <br>
                                    <span class="position text-dark">{{ $d->experience }}</span>
                                    <br>
                                    <span class="position text-dark">{{ $d->quality }}</span>
                                    <br>
                                    <span class="position text-dark">{{ $d->checked }}</span>
                                    <br>
                                    <span class="position text-dark">{{ $d->comfort }}</span>
                                    <br>
                                    <span class="position text-dark">{{ $d->friendliness }}</span>
                                    <br>
                                    <span class="position text-dark">{{ $d->price }}</span>
                                    <br>
                                    <span class="position text-dark">{{ $d->overall }}</span>
                                    <br>
                                    <span class="position text-dark">{{ $d->likely }}</span>
                                    <br>
                                    <span class="position text-dark">{{ $d->comments }}</span>
                                    <br>
                                    <span class="position text-dark">{{ $d->discuss }}</span>
                                    <br>
                                    <span class="position text-dark">{{ $d->email }}</span>
                                    <br>
                                </div>
                    @endforeach



</section> --}}


<section class="ftco-counter img" id="section-counter" style="background-image: url(user/images/bg_3.jpg);"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="2560">0</strong>
                                <span>Happy Customers</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="60">0</strong>
                                <span>Treatments</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="50">0</strong>
                                <span>Years of Experience</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="100">0</strong>
                                <span>Lesson Conducted</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h3 class="subheading">Blog</h3>
                <h2 class="mb-1">Recent Posts</h2>
            </div>
        </div>
        <div class="row d-flex">
            @foreach ($blog as $b)
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="blog-single.html" class="block-20"
                            style="background-image: url('{{ url('blogimg/' . $b->image) }}');">
                        </a>
                        <div class="text p-4 float-right d-block">
                            <div class="d-flex align-items-center pt-2 mb-4">
                                <div class="">
                                    <h4>{{ $b->blogtitle }}</h4>
                                    <p>{{ $b->blogname }}</p>
                                    <p>{{ $b->blogdescription }}</p>
                                    <p><a href="#">{{ $b->author }}</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


<section class="ftco-gallery ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h3 class="subheading">Gallery</h3>
                <h2 class="mb-1">See the latest photos</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 ftco-animate">
                <a href="images/gallery-1.jpg" class="gallery image-popup img d-flex align-items-center"
                    style="background-image: url(user/images/blog1.jfif);">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-instagram"></span>
                    </div>
                </a>
            </div>
            <div class="col-md-3 ftco-animate">
                <a href="images/gallery-2.jpg" class="gallery image-popup img d-flex align-items-center"
                    style="background-image: url(user/images/blog2.jpg);">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-instagram"></span>
                    </div>
                </a>
            </div>
            <div class="col-md-3 ftco-animate">
                <a href="images/gallery-3.jpg" class="gallery image-popup img d-flex align-items-center"
                    style="background-image: url(user/images/blog3.jpg);">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-instagram"></span>
                    </div>
                </a>
            </div>
            <div class="col-md-3 ftco-animate">
                <a href="images/gallery-4.jpg" class="gallery image-popup img d-flex align-items-center"
                    style="background-image: url(user/images/blog4.jpg);">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-instagram"></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
