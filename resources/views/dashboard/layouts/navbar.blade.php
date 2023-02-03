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
        <!-- Notifications Dropdown Menu -->
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">{{ $countNotif }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">{{ $countNotif }} Notifications</span>
                <div class="dropdown-divider"></div>
                @foreach ($dataNotif as $item)
                    <form method="POST" action="/bukutamu/update" class="mb-5" enctype="multipart/form-data">
                    @csrf
                        <!-- <a href="#" class="dropdown-item" onclick="return confirm('Apakah Yakin Ingin Mengisi Survey?')">
                            <i class="fas fa-user mr-2"></i>
    							{{$item->visitor_name}}
                            <span class="float-right text-muted text-sm">{{$item->created_at}}</span>
                        </a> -->

                        <input type="hidden" name="visitor_id" value="{{ $item->id }}" id="">
                        <button class="btn btn-default" onclick="return confirm('Apakah sudah dilayani?')"> <i class="fas fa-user mr-2"></i> {{$item->visitor_name}} - {{$item->created_at}}<span data-feather="x-circle"></span></button>
                    </form>
                @endforeach


                <div class="dropdown-divider"></div>
                <a href="/dashboard/bukutamu" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                {{-- <%= name %> --}}
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

                <a href="/logout" class="dropdown-item">
                    Logout
                </a>

            </div>
        </li>

    </ul>
</nav>
<!-- /.navbar -->
