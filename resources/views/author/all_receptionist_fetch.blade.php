<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
     @include('author.css')
   </head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">


        <!-- Sidebar Start -->
        <!-- Sidebar End -->


        <!-- Content Start -->

        @include('author.nav')
        {{-- @include('author.partial')
        @include('author.sidebar') --}}
            <!-- Navbar End -->

            <div class="container my-5">
                <br>
                <h1 class="text-center my-5 text-primary">All Receptionist</h1>
                <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Image</th>

                        </tr>
                    </thead>

                    <tbody>
                        @foreach($recep as $r)

                        <tr>
                            <td>{{$r->id}}</td>
                            <td>{{$r->name}}</td>
                            <td>{{$r->email}}</td>
                            <td>{{$r->phone}}</td>
                            <td><img style="height:50px;" src="{{url('stock-image' , $r->image)}}" alt=""></td>



                        </tr>

                        @endforeach


                    </tbody>

                </table>
                </div>

            </div>






        <
        <!-- Content End -->




    <!-- JavaScript Libraries -->
   @include('author.js')
</body>

</html>
