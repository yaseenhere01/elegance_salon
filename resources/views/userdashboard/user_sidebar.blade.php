<nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="userdashboard/user_dashboard">
                <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                <span class="menu-title">Dashboard</span>
              </a>
            </li> -->
            {{-- <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
                <span class="menu-title">Available Stock</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="userdashboard/view_stock">View Stock</a></li>

                </ul>
              </div>
            </li> --}}




            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <span class="icon-bg"><i class="mdi mdi-lock menu-icon"></i></span>
                <span class="menu-title">View Staffs</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="userdashboard/view_staff"> View </a></li>
                </ul>
              </div>
            </li>


            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                  <span class="icon-bg"><i class="mdi mdi-lock menu-icon"></i></span>
                  <span class="menu-title">Sylists</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="auth">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="/stylists">Fashion Stylists</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/hair-stylists">Hair Stylist </a></li>
                    <li class="nav-item"> <a class="nav-link" href="/makeup-artists">Makeup Artist </a></li>
                  </ul>
                </div>
              </li>



            <li class="nav-item sidebar-user-actions">
              <div class="sidebar-user-menu">
                <a href="/profile" class="nav-link"><i class="mdi mdi-settings menu-icon"></i>
                  <span class="menu-title">Settings</span>
                </a>
              </div>
            </li>

            <li class="nav-item sidebar-user-actions">
              <!-- <div class="sidebar-user-menu">
                <a href="#" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
                  <span class="menu-title">Log Out</span></a>
              </div> -->
              <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button style="font-size:15px;" type="submit" class="btn nav-item mdi mdi-logout menu-icon">Logout</button>
                        </form>
            </li>
          </ul>
        </nav>
