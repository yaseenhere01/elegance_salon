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
      <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
  />
  </head>
<body>
<div class="container">
    <h1 class="text-center my-5 text-primary">All Stock</h1>
    <div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>P-Name</th>
                <th>P-Item</th>
                <th>P-Price</th>
                <th>P-Image</th>

            </tr>
        </thead>

        <tbody>
            @foreach($stock as $s)

            <tr>
                <td>{{$s->id}}</td>
                <td>{{$s->pname}}</td>
                <td>{{$s->pitem}}</td>
                <td>{{$s->pprice}}</td>
                <td><img style="height:50px;" src="{{url('../stock-image' , $s->pimage)}}" alt=""></td>



            </tr>

            @endforeach


        </tbody>

    </table>
    </div>

</div>



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
