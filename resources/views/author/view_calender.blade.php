
  <!-- plugins:css -->
   @include('author.css')
</head>
<body>



      <div class="container">
                <h1 class="text-center my-5 text-primary">All Staffs</h1>
                <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Number</th>
                            <th>Address</th>
                            <th>Shift</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Image</th>


                        </tr>
                    </thead>

                    <tbody>
                        @foreach($staff as $s)

                        <tr>
                            <td>{{$s->id}}</td>
                            <td>{{$s->name}}</td>
                            <td>{{$s->email}}</td>
                            <td>{{$s->phone}}</td>
                            <td>{{$s->address}}</td>
                            <td>{{$s->shift}}</td>
                            <td>{{$s->date}}</td>
                            <td>{{$s->time}}</td>
                            <td><img style="height:50px;" src="{{url('staffimg' , $s->image)}}" alt=""></td>




                        </tr>

                        @endforeach


                    </tbody>

                </table>
                </div>

            </div>

        </div>
        <!-- Content End -->


        <!-- Back to Top -->


    <!-- JavaScript Libraries -->
   <!-- @include('author.js') -->
</body>

</html>
