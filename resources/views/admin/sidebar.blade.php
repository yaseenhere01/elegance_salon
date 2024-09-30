<div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa-solid fa-user-tie"></i> Salon Admin</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="admin/img/IMG_20221008_230828_537.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">{{Auth::User()->name}}</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                <a href="/dashboard" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="/view_auth" class="nav-item nav-link active"><i class="fa-solid fa-users"></i>All Users</a>

                    <!-- <a href="/add_stock" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Add Stock</a>

                    <a href="/all_stock" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>All Stock</a> -->


                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link active dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="fa-solid fa-business-time"></i>
                            <span class="nav-item nav-link active d-none d-lg-inline-flex">Stock</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                        <a href="/add_stock"  class="nav-item nav-link dropdown-item">Add Stock</a>
                        <a href="/all_stock" class="nav-item nav-link dropdown-item">All Stock</a>


                        </div>
                    </div>


                    <!-- <a href="/add_receptionist" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Add Receptionist</a>

                    <a href="/all_receptionist" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>All Receptionist</a> -->

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link active dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="fa-solid fa-stethoscope"></i>
                            <span class="nav-item nav-link active d-none d-lg-inline-flex">Receptionist</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                        <a href="/add_receptionist"  class="nav-item nav-link dropdown-item">Add Receptionist</a>
                        <a href="/all_receptionist" class="nav-item nav-link dropdown-item">All Receptionist</a>


                        </div>
                    </div>


                    <!-- <a href="/all_appoinments_fetch" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>All Appoinments</a> -->



                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link active dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="fa-solid fa-blog"></i>
                            <span class="nav-item nav-link active d-none d-lg-inline-flex">Blogs</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                        <a href="/add_blog_admin"  class="nav-item nav-link dropdown-item">Add Blog</a>
                        <a href="/all_blog_admin" class="nav-item nav-link dropdown-item">All Blog</a>


                        </div>
                    </div>


                    <!-- <a href="/add_blog_admin" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Add Blog </a>

                    <a href="/all_blog_admin" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>All Blog </a> -->

                    <!-- <a href="/add_staff_admin" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Add Staff</a>

                    <a href="/all_staff_admin" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>All Staff</a> -->


                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link active dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="fa-solid fa-clipboard-user"></i>
                            <span class="nav-item nav-link active d-none d-lg-inline-flex">Staffs</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                        <a href="/add_staff_admin"  class="nav-item nav-link dropdown-item">Add Staff</a>
                        <a href="/all_staff_admin" class="nav-item nav-link dropdown-item">All Staff</a>


                        </div>
                    </div>


                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link active dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="fa-brands fa-quinscape"></i>
                            <span class="nav-item nav-link active d-none d-lg-inline-flex">Api Record</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                        <a href="/api_record_add"  class="nav-item nav-link dropdown-item">Add Record</a>
                        <a href="/api_record_fetch" class="nav-item nav-link dropdown-item">All Record</a>


                        </div>
                    </div>


                    <!-- <a href="/api_record_add" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Api Record</a>

                    <a href="/api_record_fetch" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Api Record Fetch</a> -->


                    <!-- <a href="index.html" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Update Content</a> -->

                    <!-- <a href="index.html" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Appointment Management</a>

                    <a href="index.html" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Client Management</a>

                    <a href="index.html" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Staff Management</a>

                    <a href="index.html" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Scheduling and Calendar Integration</a>

                    <a href="index.html" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Reporting and Analytics</a>

                    <a href="index.html" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Payment and Invoicing</a>

                    <a href="index.html" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Notifications and Reminders</a>
                     -->



                     <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle text-primary" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2 text-primary"></i>Management</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.html" class="dropdown-item text-primary">Appointment Management</a>
                            <a href="signup.html" class="dropdown-item text-primary">Client Management</a>
                            <a href="404.html" class="dropdown-item text-primary">Staff Management</a>
                            <a href="blank.html" class="dropdown-item text-primary">Scheduling and Calendar</a>
                            <a href="blank.html" class="dropdown-item text-primary">Reporting and Analytics</a>
                            <a href="blank.html" class="dropdown-item text-primary">Payment and Invoicing</a>
                            <a href="blank.html" class="dropdown-item text-primary">Notifications and Reminders</a>
                        </div>
                    </div> -->
                </div>
            </nav>
        </div>
