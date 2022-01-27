  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('dashboard')}}" class="brand-link">
      <img src="{{asset('backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Drishya</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          {{-- <li class="nav-item">
            <a href="{{route('room.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Hotel Rooms
               
              </p>
            </a>
          </li> --}}
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Hotel Rooms
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('room.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>New Hotel Rooms</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('room.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Hotel Rooms</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Events
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('event.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Events</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('event.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Event Details</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Services
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('service.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Service</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('service.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Service Details</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Sliders
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('slider.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Slider</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('slider.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Slider Details</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Contact Us
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('contactus.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact Details</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Booking
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('booked.room')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Booked Room</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('bookingrequest.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Booking Request</p>
                </a>
              </li>
            </ul>
              <li class="nav-item">
              <a href="{{route('setting.index')}}" class="nav-link">
                <i class="nav-icon fas fa-cog"></i>
                <p>
                  Setting
                </p>
              </a>
              </li>
            
          </li>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>