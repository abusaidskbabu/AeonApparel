<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #B17F31">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard" style="background-color: black;">
      <div class="sidebar-brand-icon">
        <img src="{{asset($wss->logo ?? '')}}" height="60px" alt="">
      </div>
      <div class="sidebar-brand-text mx-3">ELEGRAND</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
      <a class="nav-link" href="/dashboard">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Main Menu
    </div>

    <li class="nav-item">
        <a class="nav-link" href="/dashboard/sliders">
            <i class="fas fa-image"></i>
            <span>Sliders</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="/dashboard/item-sliders">
            <i class="fas fa-image"></i>
            <span>Items Slider</span></a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="/dashboard/teammembers">
          <i class="fas fa-users"></i>
          <span>Team Members</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/dashboard/ourclients">
            <i class="fas fa-th-large"></i>
            <span>Our Clients</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="/dashboard/our-partners">
            <i class="fas fa-th-large"></i>
            <span>Our Partners</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="/dashboard/factory">
            <i class="fas fa-th-large"></i>
            <span>Our Factories</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="/dashboard/showroom">
            <i class="fas fa-th-large"></i>
            <span>Our Showrooms</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('review.index') }}">
            <i class="fas fa-th-large"></i>
            <span>Client Reviews</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Services Section
    </div>

    <li class="nav-item">
        <a class="nav-link" href="/dashboard/servicesinformation">
            <i class="fas fa-th-large"></i>
            <span>Services Information</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      page & Blog Posts
    </div>

    <li class="nav-item">
        <a class="nav-link" href="/dashboard/pagecms">
            <i class="fas fa-th-large"></i>
            <span>Page CMS</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('blogs') }}">
            <i class="fas fa-th-large"></i>
            <span>Blogs</span></a>
    </li>
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Career
    </div>
    <li class="nav-item">
        <a class="nav-link" href="/dashboard/career">
            <i class="fas fa-th-large"></i>
            <span>Career Requests</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/dashboard/jobs">
            <i class="fas fa-th-large"></i>
            <span>Career</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Inventory
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-th-large"></i>
          <span>Manage Products</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Products</h6>
            <a class="collapse-item" href="{{route('products.index')}}">View Products</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Categories</h6>
              <a class="collapse-item" href="{{route('division.index')}}">Product Division</a>
            <a class="collapse-item" href="{{route('category.index')}}">Product Category</a>
            <a class="collapse-item" href="{{route('gender.index')}}">Gender Category</a>
          </div>
        </div>
      </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
       Setting
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('website.settings') }}">
            <i class="fas fa-th-large"></i>
            <span>Website Setting</span></a>
    </li>
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>
  <!-- End of Sidebar -->
