<!-- Topbar Navbar -->
@php 
  $wss = DB::table('website_setting')->orderBy('id','DESC')->first();
@endphp
<nav class="navbar navbar-expand navbar-light  topbar mb-4 static-top shadow" style="background-color: black;">
    <ul class="navbar-nav ml-auto">  
        <div class="topbar-divider d-none d-sm-block"></div>
        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{session()->get('username')}}</span>
            <img class="img-profile" src="{{asset($wss->logo ?? '')}}">
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="{{route('dashboard.settings')}}">
            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
            Settings
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Logout
            </a>
        </div>
        </li>

    </ul>
</nav>
<!-- End of Topbar -->