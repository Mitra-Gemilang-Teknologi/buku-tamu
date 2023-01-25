<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
        <img src="{{ asset('/assets/templateskm/assets/form/img/logoKab.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-5"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Buku Tamu</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

 <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset("assets/adminlte/dist/img/user2-160x160.jpg")}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/dashboard/profile" class="d-block">{{ auth()->user()->name }}</a>
        </div>
      </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Statistik Buku Tamu
                        </p>
                    </a>
                </li>
								<li class="nav-item">
                    <a href="/dashboard/bukutamu" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Data Tamu
                        </p>
                    </a>
                </li>
								<li class="nav-item">
                    <a href="/dashboard/surveytamu" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Data Survey
                        </p>
                    </a>
                </li>
                 <li class="nav-item">
                    <form action="/dashboard/logout" method="POST">
          @csrf
          <button type="submit"class="nav-link px-3 bg-dark border-0">Logout      <span data-feather="log-out"></span></button>
        </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
