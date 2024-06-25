
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" >



          <!-- Nav Item - Dashboard -->
          <li class="nav-item active">
              <a class="nav-link" href="{{route('home')}}">
                  <i class="fas fa-fw fa-tachometer-alt"></i>
                  <span>Dashboard</span></a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider">

          <!-- Nav Item - Pages Collapse Menu -->

        <li class="nav-item">
          <a class="nav-link collapsed" href="{{route('rooms.index')}}" data-toggle="collapse" data-target="#collapseUtilities"
              aria-expanded="true" aria-controls="collapseUtilities">
              <i class="fas fa-fw fa-wrench"></i>
              <span>Rooms</span>
          </a>
          <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
              data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                  <a class="collapse-item" href="{{route('rooms.create')}}">Create</a>
                  <a class="collapse-item" href="{{route('rooms.index')}}">View</a>
              </div>
          </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('rooms.index')}}" data-toggle="collapse" data-target="#collapseUtilities1"
            aria-expanded="true" aria-controls="collapseUtilities1">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Advent & Attractions</span>
        </a>
        <div id="collapseUtilities1" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('attractions.create')}}">Create</a>
                <a class="collapse-item" href="{{route('attractions.index')}}">View</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('rooms.index')}}" data-toggle="collapse" data-target="#collapseUtilities12"
            aria-expanded="true" aria-controls="collapseUtilities12">
            <i class="fas fa-fw fa-wrench"></i>
            <span>About Content</span>
        </a>
        <div id="collapseUtilities12" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('about.create')}}">Create</a>
                <a class="collapse-item" href="{{route('about.index')}}">View</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('rooms.index')}}" data-toggle="collapse" data-target="#collapseUtilities1234"
            aria-expanded="true" aria-controls="collapseUtilities1234">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Testimonials</span>
        </a>
        <div id="collapseUtilities1234" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('testimonials.create')}}">Create</a>
                <a class="collapse-item" href="{{route('testimonials.index')}}">View</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities123s"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Slider</span>
        </a>
        <div id="collapseUtilities123s" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('slider.create')}}">Create</a>
                <a class="collapse-item" href="{{route('slider.index')}}">View</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities123"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Gallery</span>
        </a>
        <div id="collapseUtilities123" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('gallery1.create')}}">Create</a>
                <a class="collapse-item" href="{{route('gallery1.index')}}">View</a>
            </div>
        </div>
    </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
      <li class="nav-item ">
        <a class="nav-link" href="{{route('roomenquiry.index')}}">
            <i class="far fa-images"></i>
            <span>Room Enquiry</span></a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="{{route('contact.index')}}">
            <i class="far fa-images"></i>
            <span>Contact Details</span></a>
    </li>



          <!-- Divider -->
          {{-- <hr class="sidebar-divider d-none d-md-block">

          <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('usermaster.index')}}" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Create User</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Components:</h6>
                    <a class="collapse-item" href="{{route('usermaster.index')}}">View Users</a>
                    <a class="collapse-item" href="{{route('usermaster.create')}}">Create User</a>

                </div>
            </div>
        </li> --}}



        <!-- Heading -->
          <!-- Sidebar Toggler (Sidebar) -->
          <div class="text-center d-none d-md-inline">
              <button class="rounded-circle border-0" id="sidebarToggle"></button>
          </div>

          <!-- Sidebar Message -->

      </ul>
      <!-- End of Sidebar -->
