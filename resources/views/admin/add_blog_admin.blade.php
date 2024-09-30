@include('admin.css');
   </head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        @include('admin.spinner');
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        @include('admin.sidebar');
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            @include('admin.navbar');
            <!-- Navbar End -->


    <body>
        <div class="container my-5"> 
                <h1 class="my-5">Add Blog's</h1>
       <form action="/upload_blog_admin" method="POST" enctype="multipart/form-data">
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
        @include('admin.js')
</body>

</html>
   
