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
                <h1 class="text-center my-5 text-primary">All Blog</h1>
                <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($blog as $b)
                        
                        <tr>
                            <td>{{$b->id}}</td>
                            <td>{{$b->blogtitle}}</td>
                            <td>{{$b->blogname}}</td>
                            <td>{{$b->blogdescription}}</td>
                            
                            <td><img style="height:50px;" src="{{url('blogimg' , $b->image)}}" alt=""></td>
                            <td><a style="font-size:25px;"  class="fa-solid fa-pen-to-square mx-1" href="{{url('edit_blog_fetch_admin' , $b->id)}}"></a><a onclick="return confirm('Are You Sure This Message Delete')" style="font-size:25px;"  class="fa-solid fa-trash-can text-danger" href="{{url('delete_blog_fetch_admin' , $b->id)}}"></a></td>
                            

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