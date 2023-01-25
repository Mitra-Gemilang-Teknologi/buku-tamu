@include('dashboard.layouts.header')
  <!-- Navbar -->
 @include('dashboard.layouts.navbar')

  <!-- Main Sidebar Container -->
 @include('dashboard.layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
    @yield('container')
  <!-- /.content-wrapper -->
 {{-- @include('dashboard.layouts.footer') --}}

 {{-- Modal --}}

 @stack('modal')
<!-- ./wrapper -->
 @include('dashboard.layouts.js')
		@stack('scripts')
