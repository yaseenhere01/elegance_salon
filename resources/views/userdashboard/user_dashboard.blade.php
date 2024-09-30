@include('userdashboard.user_header')
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
@include('userdashboard.user_nav')

     
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
@include('userdashboard.user_sidebar')

        
        <!-- partial -->
@include('userdashboard.user_main-panel')

        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
@include('userdashboard.user_js')

   
  </body>
</html>