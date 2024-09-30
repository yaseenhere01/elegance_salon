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
                <h1 class="text-center my-5 text-primary">All Appointment</h1>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Number</th>
                                <th>Address</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($appo as $a)
                            <tr>
                                <td>{{$a->id}}</td>
                                <td>{{$a->name}}</td>
                                <td>{{$a->email}}</td>
                                <td>{{$a->phone}}</td>
                                <td>{{$a->address}}</td>
                                <td><img style="height:50px;" src="{{url('stock-image', $a->image)}}" alt=""></td>
                                <td>{{$a->status}}</td>
                                <td>
                                    <div class="d-flex justify-content-start">
                                        <a class="btn btn-success mx-1" href="{{url('/req_app', $a->id)}}">Approved</a>
                                        <a onclick="return confirm('Are You Sure This Message Delete')" class="btn btn-danger mx-1" href="{{url('/req_can', $a->id)}}">Canceled</a>
                                        <a onclick="return confirm('Are You Sure This Message Delete')" class="btn btn-primary mx-1" href="{{url('/app_delete', $a->id)}}">Remove</a>
                                    </div>
                                </td>
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
