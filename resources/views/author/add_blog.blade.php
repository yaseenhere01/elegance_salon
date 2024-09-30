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


        <!-- Content Start -->

        @include('author.nav')
        {{-- @include('author.partial')
        @include('author.sidebar') --}}

    <body>
        <div class="container my-5">
            <br>
                <h1 class="my-5">Add Blog's</h1>
       <form action="/upload_blog" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="my-3">
            <input type="text" name="blogtitle" placeholder="Blog Title" class="form-control" required>
        </div>
        <div class="my-3">
            <input type="text" name="blogname" placeholder="Blog Name" class="form-control" required>
        </div>
        <div class="my-3">
            <input type="text" name="blogdescription" placeholder="Blog Description" class="form-control" required>
        </div>
        <div class="my-3">
            <label for="">Blog Cover Image</label>
            <input type="file" name="image" class="form-control" required>
        </div>
        <div class="my-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
       </form>
        </div>

        <!-- Bootstrap JavaScript Libraries -->
        @include('author.js')
</body>

</html>

