@include('admin.css')
   </head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        @include('admin.spinner')
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        @include('admin.sidebar')
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            @include('admin.navbar')
            <!-- Navbar End -->


    <body>
        <div class="container my-5">
                <h1 class="my-5">Add Staffs</h1>
       <form action="/upload_staff_admin" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="my-3">
            <input type="text" name="name" placeholder="Name" class="form-control" required>
        </div>
        <div class="my-3">
            <input type="email" name="email" placeholder="Email" class="form-control" required>
        </div>
        <div class="my-3">
            <input type="text" name="phone" placeholder="Phone" class="form-control" required>
        </div>
        <div class="my-3">
            <input type="text" name="address" placeholder="Address" class="form-control" required>
        </div>
        <div class="my-3">
            <input type="text" name="shift" placeholder="Shift" class="form-control" required>
        </div>
        <div class="my-3">
            <input type="date" name="date"  class="form-control" required>
        </div>
        <div class="my-3">
            <input type="text" name="time" placeholder="Time"  class="form-control" required>
        </div>
        <div class="my-3">
            <label for="">Staff Cover Image</label>
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

