<!doctype html>
<html lang="en">
    <head>
        <title>My Appoinment</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />

        {{-- font awesome cdn --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

          {{-- favicon --}}
    <link rel="shortcut icon" href="https://d2zdpiztbgorvt.cloudfront.net/region1/us/447550/logo/b63c9daacadf44af9108f512d55660-elegance-hair-logo-a1ca5f284e5a457bbdb4e0427fc429-booksy.jpeg" type="image/x-icon">

    </head>

    <body>
        <div class="container">
       {{-- <a href="/user.index"><i style="font-size: 20px" class="fa-solid fa-arrow-left my-5"></i></a> --}}
                <h1 class="text-center my-5 text-primary">My Appoinment</h1>
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
                            <td><img style="height:50px;" src="{{url('stock-image' , $a->image)}}" alt=""></td>
                            <td>{{$a->status}}</td>
                            <td><a onclick="return confirm('Are You Sure This Message Delete')" class="btn btn-danger" href="{{url('/req_can' , $a->id)}}">Canceled</a><a onclick="return confirm('Are You Sure This Message Delete')" class="btn btn-danger mx-1" href="{{url('/app_delete' , $a->id)}}">Delete</a></td>


                        </tr>

                        @endforeach


                    </tbody>

                </table>
                </div>

            </div>

            
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
