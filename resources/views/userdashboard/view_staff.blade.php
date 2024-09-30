<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connect Plus</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../userdashboard/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../userdashboard/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../userdashboard/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../userdashboard/assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../userdashboard/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../userdashboard/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../userdashboard/assets/images/favicon.png" />
      {{-- favicon --}}
      <link rel="shortcut icon" href="https://d2zdpiztbgorvt.cloudfront.net/region1/us/447550/logo/b63c9daacadf44af9108f512d55660-elegance-hair-logo-a1ca5f284e5a457bbdb4e0427fc429-booksy.jpeg" type="image/x-icon">
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
@include('userdashboard.user_nav')


      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
@include('userdashboard.user_sidebar')

            <div class="container">
                <h1 class="text-center my-5 text-primary">All Staff</h1>
                <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Shift</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Image</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($staff as $s)

                        <tr>
                            <td>{{$s->id}}</td>
                            <td>{{$s->name}}</td>
                            <td>{{$s->email}}</td>
                            <td>{{$s->phone}}</td>
                            <td>{{$s->address}}</td>
                            <td>{{$s->shift}}</td>
                            <td>{{$s->date}}</td>
                            <td>{{$s->time}}</td>
                            <td><img style="height:50px;" src="{{url('../staffimg' , $s->image)}}" alt=""></td>

                        </tr>

                        @endforeach


                    </tbody>

                </table>
                </div>

            </div>





            <!-- Footer Start -->

            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <!-- <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a> -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="../userdashboard/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../userdashboard/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="../userdashboard/assets/vendors/jquery-circle-progress/js/circle-progress.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../userdashboard/assets/js/off-canvas.js"></script>
    <script src="../userdashboard/assets/js/hoverable-collapse.js"></script>
    <script src="../userdashboard/assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../userdashboard/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
    <!-- @include('userdashboard.user_js') -->
</body>

</html>
