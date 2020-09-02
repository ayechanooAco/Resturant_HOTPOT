 <nav class="navbar  bg-gradient-danger navbar-expand-md navbar-light " id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
     
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
       <h1 class="navbar-brand shusha" style="font-size: 2.3rem;color: #f5ce36;">Wa Wa Hotpot</h1>
      
      <!-- User -->
         <ul class="nav align-items-center d-md-none">
        <!-- <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li> -->
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">

                <img alt="Image placeholder" src="{{asset('template/assets/img/theme/team-1-800x800.jpg')}}
">
              </span>
            </div>
          </a>
          <!-- <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-settings-gear-65"></i>
              <span>Settings</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-calendar-grid-58"></i>
              <span>Activity</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-support-16"></i>
              <span>Support</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#!" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div> -->
        </li>
      </ul>
    
      <!-- Collapse -->
      <div class="collapse navbar-collapse " id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-11 collapse-brand">
               <h1 class="text-center text-center shusha" style="font-size: 2rem;color:#f5ce36;">Wa Wa Hotpot</h1>
            </div>
            <div class="col-1 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        
        <!-- Navigation -->
        <ul class="navbar-nav ml-xl-auto ">
          
          
          <li class="nav-item">
            <a class="nav-link cart" onclick="return false"  href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html">
               
               <h2 class="d-inline   " style="color: #fbc040;font-size: 1.3rem;">Cart 
                <span class="counting  badge badge-pill  badge-danger">0</span></sup>
              </h2> 
            </a>
          </li>

          

          <li class="nav-item">
            <a class="nav-link cart" onclick="return false"  href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html">
               
               <h2 class="d-inline   " style="color: #fbc040;font-size: 1.3rem;">
                @if(Auth::user())
                {{Auth::user()->name}}
                @endif
                
              </h2> 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                 <h2 class="d-inline    " style="color: #fbc040;font-size: 1.3rem;">Logout 
                
              </h2> 
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </li>
         <!--  -->
          
        </ul>
      </div>
    </div>
  </nav>