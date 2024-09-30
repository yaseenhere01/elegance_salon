<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
     @include('admin.css')
   </head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
       

        <!-- Sidebar Start -->
        @include('admin.sidebar')
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            @include('admin.navbar')
            <!-- Navbar End -->

            <div class="container">
                <h1 class="text-center my-5 text-primary">Add Stock</h1>
                <!-- <div class="input-responsive"> -->
                <form action="/upload_stock" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="my-3">
                        <input type="text" name="pname" placeholder="Add Product Name" class="form-control" required>
                    </div>
                    <div class="my-3">
                        <input type="text" name="pitem" placeholder="Add Product Item" class="form-control" required>
                    </div>
                    <div class="my-3">
                        <input type="text" name="pprice" placeholder="Add Product Price" class="form-control" required>
                    </div>
                    <div class="my-3">
                        <label for="">Add Product Image</label>
                        <input type="file" name="pimage" class="form-control" required>
                    </div>
                    <div class="my-3">
                        <button class="btn btn-primary">Add Stock</button>
                    </div>
                    

                </form>
                <!-- </div> -->
            </div>



            <!-- Footer Start -->
           @include('admin.footer')
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
   @include('admin.js')
</body>

</html>