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
                <h1 class="text-center">Api Record Add</h1>

                <div class="my-3">
                    <input type="text" id="name" name="name" placeholder="Name" class="form-control" required>
                </div>


                <div class="my-3">
                    <input type="text" id="phone" name="phone" placeholder="Phone" class="form-control" required>
                </div>

                <div class="my-3">
                    <input type="text" id="address" name="address" placeholder="Address" class="form-control" required>
                </div>

                <div class="my-3">
                    <input type="text" id="shift" name="shift" placeholder="Shift" class="form-control" required>
                </div>


                <div class="my-3">
                    <input type="text" id="time" name="time" placeholder="Time"  class="form-control" required>
                </div>

                <div class="my-3">
                    <button onclick="submitData()" class="btn btn-primary">Submit</button>
                </div>

             </div>



             <script>
                async function submitData(){
                    const name = document.getElementById("name").value;
                    const phone = document.getElementById("phone").value;
                    const address = document.getElementById("address").value;
                    const shift = document.getElementById("shift").value;
                    const time = document.getElementById("time").value;
                
                    try {
                        const response = await fetch('http://127.0.0.1:8000/api/posts' , {
                            method : "POST",
                            headers : {
                                "Content-Type" : "application/json"
                            },
                            body : JSON.stringify({
                                name : name,
                                phone : phone,
                                address : address,
                                shift : shift,
                                time : time,
                            })

                        })
                        const data = await response.json();
                        alert("Data Submitted Successfully");
                    } catch (error) {
                        alert("Failed To Submit Data");
                    }

                    
                }
                submitData();
             </script>

              <!-- Bootstrap JavaScript Libraries -->
        @include('admin.js')
</body>

</html>