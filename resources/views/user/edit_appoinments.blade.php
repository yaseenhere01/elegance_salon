

            <div class="container">
                <h1 class="text-center my-5 text-primary">Update Appoinments</h1>
                <!-- <div class="input-responsive"> -->
                <form action="{{url('update_appoinments' , $appo->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="my-3">
                        <input type="text" value="{{$appo->name}}" name="name" placeholder="Add Name" class="form-control" required>
                    </div>
                    <div class="my-3">
                        <input type="email" value="{{$appo->email}}" name="email" placeholder="Add Email" class="form-control" required>
                    </div>
                    <div class="my-3">
                        <input type="text" value="{{$appo->phone}}" name="phone" placeholder="Add Phone" class="form-control" required>
                    </div>
                    <div class="my-3">
                        <input type="text" value="{{$appo->address}}" name="address" placeholder="Address" class="form-control" required>
                    </div>
                    <!-- <div class="my-3">
                        <input type="text" value="{{$appo->description}}" name="description" placeholder="Description" class="form-control" required>
                    </div> -->
                    <div class="my-3">
                        <label for="">Add Product Image</label>
                        <input type="file" value="{{$appo->image}}" name="image" class="form-control" required>
                    </div>
                    <div class="my-3">
                        <button class="btn btn-primary">Update Appoinments</button>
                    </div>


                </form>
                <!-- </div> -->
            </div>

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


