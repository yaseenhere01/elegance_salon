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
                <h1 class="text-center my-5 text-primary my-5">View Auth Data</h1>

                @if(session('authmessagedelete'))
                <center>
<div
    class="alert alert-danger w-50 mt-3"
    role="alert"
>
    <strong>{{session('authmessagedelete')}}</strong>
</div>
</center>


@endif

                <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th> User Name</th>
                            <th> User Email</th>
                            <th> Phone </th>
                            <th> Address</th>
                            <th> User Status </th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($data as $d)
                        <tr>
                            <td>{{$d->id}}</td>
                            <td>{{$d->name}}</td>
                            <td>{{$d->email}}</td>
                            <td>{{$d->phone}}</td>
                            <td>{{$d->address}}</td>
                            <!-- <td>{{$d->email}}</td> -->
                            <td>
                            @if($d->usertype == 0)
                            <span class="text-warning"><b>USER</b></span> 
                            @elseif($d->usertype == 2)
                            <span class="text-primary"><b>AUTHOR</b></span> 

                            @else
                            <span class="text-success"><b>ADMIN</b></span>
                            @endif
    </td>
                       
                            <td><a style="font-size:25px;"  class="fa-solid fa-trash-can text-danger" href="{{url('/auth_delete' , $d->id)}}"></a></td>
                            

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

