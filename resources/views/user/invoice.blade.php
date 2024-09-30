<!doctype html>
<html lang="en">
    <head>
        <title>Invoice</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

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

    <body>
    <div class="invoice-box">
        <h1>Invoice</h1>
        <p>Invoice Id: {{$invoice_id}}</p>
        <p>Date: {{$date}}</p>
        <p>Customer: {{$customer_name}}</p>
    </div>


    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Number</th>
                <th>Address</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
            <tr>
            <td><h1>Invoice ID: {{ $invoice_id }}</h1>
            </td>
            <td>{{item['email']}}</td>
            <td>{{item['number']}}</td>
            <td>{{item['address']}}</td>
            <td>{{item['amount']}}</td>
            </tr>

            @endforeach
        </tbody>
    </table>
    <p class="total">Total Amount: ${{$total_amount}}</p>


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
    </body>
</html>
