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
                <h1 class="text-center my-5 text-primary">View Feedback</h1>
                <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Time</th>
                            <th>Visit</th>
                            <th>Appoinment</th>
                            <th>Experience</th>
                            <th>Quality</th>
                            <th>Checked</th>
                            <th>Comfort</th>
                            <th>Friendliness</th>
                            <th>price</th>
                            <th>overall</th>
                            <th>Likely</th>
                            <th>Comments</th>
                            <th>Discuss</th>
                            <th>Email</th>
                            <th>Delete</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($data as $d)

                        <tr>
                            <td>{{$d->time}}</td>
                            <td>{{$d->visit}}</td>
                            <td>{{$d->appointment}}</td>
                            <td>{{$d->experience}}</td>
                            <td>{{$d->quality}}</td>
                            <td>{{$d->checked}}</td>
                            <td>{{$d->comfort}}</td>
                            <td>{{$d->friendliness}}</td>
                            <td>{{$d->price}}</td>
                            <td>{{$d->overall}}</td>
                            <td>{{$d->likely}}</td>
                            <td>{{$d->comments}}</td>
                            <td>{{$d->discuss}}</td>
                            <td>{{$d->email}}</td>
                            <td><a onclick="return confirm('Are You Sure This Message Delete')" style="font-size:25px;"  class="fa-solid fa-trash-can text-danger" href="{{url('delete_feedback' , $d->id)}}"></a></td>



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
