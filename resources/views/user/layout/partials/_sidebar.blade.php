<nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <span class="font-weight-bold">Bhutan Insurance Limited</span>
                  <!--change to offline or busy as needed-->
                </div>
               
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('Dashboard') }}">
                
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#lead-routes" aria-expanded="false" aria-controls="lead-routes">
                <span class="menu-title">My Blog</span>
                
              </a>
              <div class="collapse" id="lead-routes">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{ route('Leads') }}">View Blog</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ route('NewLead') }}">New Blog</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" target="_blank">
                <span class="menu-title">User</span>
              </a>
            </li>
          </ul>
        </nav>