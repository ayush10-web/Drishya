
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="/images/mini-logo.jpeg" alt="AdminLTELogo" height="60" width="60" style="border-radius: 50%;">
  </div>

  <!-- Navbar -->
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <img src="/images/mini-logo.jpeg" alt="" class="img-size-50 img-circle mr-3" style="border-radius: 50%;">
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <div class="media-body">
                 <p class="text-center"><i class="fas fa-key"></i> &nbsp; Change Password</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="{{route('logout')}}" class="dropdown-item">
            <!-- Message Start -->
            <div class="media-body">
              <p class="text-center"><i class="fas fa-sign-out-alt"></i> &nbsp; Log Out</p>
            </div>
            <!-- Message End -->
          </a>
         
        </div>
      </li>
    </ul>
  </nav>