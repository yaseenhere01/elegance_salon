<!DOCTYPE html>
<html lang="en">

   @include('author.css')
</head>
<body>



      <div class="container">
                <h1 class="text-center my-5 text-primary">All Payment</h1>
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
                            <th>Amount</th>


                        </tr>
                    </thead>

                    <tbody>
                        @foreach($pay as $p)

                        <tr>
                            <td>{{$p->id}}</td>
                            <td>{{$p->name}}</td>
                            <td>{{$p->email}}</td>
                            <td>{{$p->phone}}</td>
                            <td>{{$p->address}}</td>
                            <td><img style="height:50px;" src="{{url('pay-image' , $p->image)}}" alt=""></td>
                            <td>{{$p->amount}}</td>



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
