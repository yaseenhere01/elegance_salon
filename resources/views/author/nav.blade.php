<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="index.html">
            <!-- <img src="author/images/logo.svg" alt="logo" /> -->
            <span class="d-none d-lg-inline-flex">{{Auth::User()->name}}</span>
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.html">
            <img src="author/images/logo-mini.svg" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
          <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome  {{ Auth::user()->name }}</h3>
                </div>
            <h3 class="welcome-sub-text">Your performance summary this week </h3>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown d-none d-lg-block">
            <a class="nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false"> Select Category </a>

            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
              
              <div class="dropdown-divider"></div>
                <div class="preview-item-content flex-grow py-2">
                  <a href="/view_payment" class="dropdown-item">View Payment</a>
                </div>

                <div class="dropdown-divider"></div>
                <div class="preview-item-content flex-grow py-2">
                  <a href="/view_calender" class="dropdown-item">View Staffs</a>
                </div>

                
              
             
            </div>
          </li>
          <li class="nav-item d-none d-lg-block">
            <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
              <span class="input-group-addon input-group-prepend border-right">
                <span class="icon-calendar input-group-text calendar-icon"></span>
              </span>
              <input type="text" class="form-control">
            </div>
          </li>
        
          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="author/images/faces/IMG_20221008_230828_537.jpg" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img style="height:120px;" class="img-md rounded-circle" src="author/images/faces/IMG_20221008_230828_537.jpg" alt="Profile image">
                <p class="mb-1 mt-3 font-weight-semibold">{{Auth::User()->name}}</p>
                <p class="fw-light text-muted mb-0">{{Auth::User()->email}}</p>
              </div>
              <a href="author/images/IMG_20221008_230828_537.jpg" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
             
              <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button style="font-size:15px;" type="submit" class="btn nav-item dropdown-item mdi mdi-logout menu-icon text-dark">Logout</button>
                        </form>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>