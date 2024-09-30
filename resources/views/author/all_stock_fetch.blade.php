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
        {{-- @include('author.partial') --}}
        {{-- @include('author.sidebar') --}}
            <!-- Navbar End -->

            <div class="container my-5">
                <br>
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
                            <td><img style="height:50px;" src="{{url('stock-image' , $s->pimage)}}" alt=""></td>



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
