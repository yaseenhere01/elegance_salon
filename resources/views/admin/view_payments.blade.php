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
                <h1 class="text-center my-5 text-primary">All Payments</h1>
                <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Nic Number </th>
                            <th>Address</th>
                            <th>Image</th>
                            <th>Amounts</th>
                            <th>Print PDF</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($pay as $p)

                        <tr>
                            <td>{{$p->id}}</td>
                            <td>{{$p->name}}</td>
                            <td>{{$p->email}}</td>
                            <td>{{$p->phone}}</td>
                            <td>{{$p->address}}</td>
                            <td><img style="height:50px;" src="{{url('pay-image' , $p->image)}}" alt=""></td>
                            <td>{{$p->amount}}</td>
                            <td><a href="{{url('print_pdf' , $p->id)}}" class="btn btn-danger">Print PDF</a></td>



                        </tr>

                        @endforeach


                    </tbody>

                </table>
                </div>

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
