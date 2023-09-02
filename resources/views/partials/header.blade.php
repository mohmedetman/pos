 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('admin-panel') }}" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                <i class="flag-icon flag-icon-us"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right p-0" style="left: inherit; right: 0px;">
                <a href="{{ url('admin/change-lang/en') }}" class="dropdown-item active">
                    <i class="flag-icon flag-icon-us mr-2"></i> English
                </a>
                <a href="{{ url('admin/change-lang/ar') }}" class="dropdown-item">
                    <i class="flag-icon flag-icon-eg mr-2"></i> Arabic
                </a>
            </div>
        </li>
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <img src="{{asset('/')}}admin/dist/img/user2-160x160.jpg" class="user-image img-circle elevation-2" alt="">
          {{-- <span class="d-none d-md-inline">{{ auth()->user()->name }}</span> --}}
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-primary">
            <img src="{{asset('/')}}admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">

            <p>
              {{-- {{ auth()->user()->name  }} --}}
              {{-- <small>Member since {{ auth()->user()->created_at }}</small> --}}
            </p>
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
            <a href="#" class="btn btn-default btn-flat float-right">Sign out</a>
          </li>
        </ul>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->
