<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="admin/img/favicon.ico" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="../admin/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="../admin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

<!-- Customized Bootstrap Stylesheet -->
<link href="../admin/css/bootstrap.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="../admin/css/style.css" rel="stylesheet">


    <!-- Favicon -->
     <!-- @include('./admin.css') -->
   </head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
       

        <!-- Sidebar Start -->
        @include('./admin.sidebar')
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            @include('./admin.navbar')
            <!-- Navbar End -->

            <div class="container">
                <h1 class="text-center my-5 text-primary">Update Stock</h1>
                <!-- <div class="input-responsive"> -->
                <form action="{{url('update_stock' , $stock->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="my-3">
                        <input type="text" value="{{$stock->pname}}" name="pname" placeholder="Add Product Name" class="form-control" required>
                    </div>
                    <div class="my-3">
                        <input type="text" value="{{$stock->pitem}}" name="pitem" placeholder="Add Product Item" class="form-control" required>
                    </div>
                    <div class="my-3">
                        <input type="text" value="{{$stock->pprice}}" name="pprice" placeholder="Add Product Price" class="form-control" required>
                    </div>
                    <div class="my-3">
                        <label for="">Add Product Image</label>
                        <input type="file" value="{{$stock->pimage}}" name="pimage" class="form-control" required>
                    </div>
                    <div class="my-3">
                        <button class="btn btn-primary">Update Stock</button>
                    </div>
                    

                </form>
                <!-- </div> -->
            </div>

            <!-- Footer Start -->
           @include('./admin.footer')
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../admin/lib/chart/chart.min.js"></script>
    <script src="../admin/lib/easing/easing.min.js"></script>
    <script src="../admin/lib/waypoints/waypoints.min.js"></script>
    <script src="../admin/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../admin/lib/tempusdominus/js/moment.min.js"></script>
    <script src="../admin/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="admin/js/main.js"></script>



           