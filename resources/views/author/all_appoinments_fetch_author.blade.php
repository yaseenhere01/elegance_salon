<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Author Dashboard</title>
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



        <!-- Navbar Start -->
        @include('author.nav')
        {{-- @include('author.partial') --}}
            <!-- Navbar End -->

            <div class="container my-5">
                <br>
                <h1 class="text-center my-5 text-primary">All Appoinments</h1>
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
                            <td><img style="height:50px;" src="{{url('stock-image' , $a->image)}}" alt=""></td>



                        </tr>

                        @endforeach


                    </tbody>

                </table>
                </div>

            </div>


        </div>
        <!-- Content End -->




    <!-- JavaScript Libraries -->
   <!-- @include('author.js') -->
</body>

</html>
