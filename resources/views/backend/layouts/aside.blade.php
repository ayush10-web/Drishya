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
          <li class="nav-item  {{request()->is('backend/dashboard') ? 'menu-open' : '' }}">
            <a href="{{route('dashboard')}}" class="nav-link {{request()->is('admin/dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item {{request()->is('backend/room*') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-hotel"></i>
              <p>
                Hotel Rooms
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ">
              <li class="nav-item">
                <a href="{{route('room.create')}}" class="nav-link  {{request()->is('backend/room/create') ? 'active' : '' }}">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>New Hotel Rooms</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('room.index')}}" class="nav-link {{request()->is('backend/room') ? 'active' : '' }}">
                  <i class="fas fa-hotel nav-icon"></i>
                  <p>Hotel Rooms</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{request()->is('backend/event*') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-calendar"></i>
              <p>
                Events
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('event.create')}}" class="nav-link {{request()->is('backend/event/create') ? 'active' : '' }}">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Add New Events</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('event.index')}}" class="nav-link {{request()->is('backend/event') ? 'active' : '' }}">
                  <i class="far fa-calendar nav-icon"></i>
                  <p>Event Details</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{request()->is('backend/service*') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
              <i class="fa fa-rocket nav-icon"></i>
              <p>
                Services
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('service.create')}}" class="nav-link {{request()->is('backend/service*') ? 'active' : '' }}">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Add New Service</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('service.index')}}" class="nav-link {{request()->is('backend/service') ? 'active' : '' }}">
                  <i class="fa fa-rocket nav-icon"></i>
                  <p>Service Details</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{request()->is('backend/slider*') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-sliders-h"></i>
              <p>
                Sliders
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('slider.create')}}" class="nav-link {{request()->is('backend/slider/create') ? 'active' : '' }}">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Add New Slider</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('slider.index')}}" class="nav-link {{request()->is('backend/slider') ? 'active' : '' }}">
                  <i class="fas fa-sliders-h nav-icon"></i>
                  <p>Slider Details</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{request()->is('backend/restaurantmenu*') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-sliders-h"></i>
              <p>
                Restaurant Menu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('restaurantmenu.create')}}" class="nav-link {{request()->is('backend/restaurantmenu/create') ? 'active' : '' }}">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Add New Menu Item</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('restaurantmenu.createCategory')}}" class="nav-link {{request()->is('backend/restaurantMenuCategory/create') ? 'active' : '' }}">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Add New Menu Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('restaurantmenu.index')}}" class="nav-link {{request()->is('backend/restaurantmenu') ? 'active' : '' }}">
                  <i class="fas fa-sliders-h nav-icon"></i>
                  <p>Restaurant Menu Details</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('restaurantmenucategory.index')}}" class="nav-link {{request()->is('backend/restaurantMenuCategory') ? 'active' : '' }}">
                  <i class="fas fa-sliders-h nav-icon"></i>
                  <p>Menu Category Details</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{request()->is('backend/contactus*') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-address-book"></i>
              <p>
                Contact Us
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('contactus.index')}}" class="nav-link {{request()->is('backend/contactus*') ? 'active' : '' }}">
                  <i class="fa fa-address-book nav-icon"></i>
                  <p>Contact Details</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{request()->is('backend/bookings*') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-bed"></i>
              <p>
                Booking
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('booked.room')}}" class="nav-link {{request()->is('backend/bookings/booked-room') ? 'active' : '' }}">
                  <i class="fas fa-bed nav-icon"></i>
                  <p>Booked Room</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('bookingrequest.index')}}" class="nav-link {{request()->is('backend/bookings') ? 'active' : '' }}">
                  <i class="fas fa-bed nav-icon"></i>
                  <p>Booking Request</p>
                </a>
              </li>
            </ul>
              <li class="nav-item {{request()->is('backend/setting') ? 'menu-open' : '' }}">
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