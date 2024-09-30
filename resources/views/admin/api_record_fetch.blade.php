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


            <!-- home -->
             <div class="container my-5">
                <h1 class="text-center">Api Record Fetch</h1>
                <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Shift</th>
                <th>Time</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="tbody">

        </tbody>
    </table>


             </div>



             <script>
    async function getData(){
        let str = "";
        let data = await fetch('http://127.0.0.1:8000/api/posts');
        data = await data.json();
        data.map((data,index)=>(
            str = str + `
             <tr>
                <td>${data.id}</td>
                <td>${data.name}</td>
                <td>${data.phone}</td>
                <td>${data.address}</td>
                <td>${data.shift}</td>
                <td>${data.time}</td>
                <td><button onclick="deleteData(${data.id})"  class="btn btn-danger">Delete</button></td>

            </tr>


            `

        ))

        document.getElementById("tbody").innerHTML=str;


    }
    getData();


    async function deleteData(id){
        let data = await fetch(`http://127.0.0.1:8000/api/posts/${id}` , {
            method : "DELETE"
        });
        data = await data.json();
    }
    deleteData();
             </script>

              <!-- Bootstrap JavaScript Libraries -->
        @include('admin.js')
</body>

</html>
