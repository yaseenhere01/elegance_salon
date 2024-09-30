@include('user.nav')
<div class="container my-5">
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Shift</th>
                    <th>Time</th>
                </tr>
            </thead>
            <tbody id="tbody">

            </tbody>
        </table>
    </div>

</div>
@include('user.loader')
@include('user.js')

<script>
    async function getData(){
        let str = "";
        let data = await fetch('http://127.0.0.1:8000/api/posts');
        data = await data.json();
        data.map((data,index)=>(
            str = str + `
             <tr>
                <td>${data.id}</td>
                <td>${data.name}</td>
                <td>${data.phone}</td>
                <td>${data.address}</td>
                <td>${data.shift}</td>
                <td>${data.time}</td>
            </tr>


            `

        ))

        document.getElementById("tbody").innerHTML=str;


    }
    getData();
</script>

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
