<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="obHUBx-zrEj7Jd6xBrd6JszeLtZXEVd7oQV5G79JBxo" />
    <link rel="shortcut icon" href="{{ asset('/assets/templateskm/assets/form/img/logoKab.png') }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- Bootstrap icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    {{-- my style --}}
    <link rel="stylesheet" href="/css/style.css">

    {{-- admin Lte --}}

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets/adminlte/plugins/fontawesome-free/css/all.min.css')}}">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('assets/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('assets/adminlte/dist/css/adminlte.min.css')}}">

    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('assets/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">

    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('assets/adminlte/plugins/daterangepicker/daterangepicker.css')}}">

    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('assets/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('assets/adminlte/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">


    <title>Ciamis |{{$title}}</title>

</head>

<body>
    @include('partials.navbar')

    <div class="container mt-4">
        @yield('container')
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
{{-- Admin Lte --}}


<!-- jQuery -->
<script src="{{asset('assets/adminlte/plugins/jquery/jquery.min.js')}}"></script>

<!-- jQuery UI 1.11.4 -->
<script src="{{asset('assets/adminlte/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>

<!-- Bootstrap 4 -->
<script src="{{asset('assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- ChartJS -->
<script src="{{asset('assets/adminlte/plugins/chart.js/Chart.min.js')}}"></script>

<!-- Sparkline -->
<script src="{{asset('assets/adminlte/plugins/sparklines/sparkline.js')}}"></script>

<!-- JQVMap -->
<script src="{{asset('assets/adminlte/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('assets/adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>

<!-- jQuery Knob Chart -->
<script src="{{asset('assets/adminlte/plugins/jquery-knob/jquery.knob.min.js')}}"></script>

<!-- daterangepicker -->
<script src="{{asset('assets/adminlte/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('assets/adminlte/plugins/daterangepicker/daterangepicker.js')}}"></script>

<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('assets/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>

<!-- Summernote -->
<script src="{{asset('assets/adminlte/plugins/summernote/summernote-bs4.min.js')}}"></script>

<!-- overlayScrollbars -->
<script src="{{asset('assets/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>

<!-- AdminLTE App -->
<script src="{{asset('assets/adminlte/dist/js/adminlte.js')}}"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('assets/adminlte/dist/js/pages/dashboard.js')}}"></script>
<script src="{{asset("assets/adminlte/dist/js/pages/dashboardSKM.js")}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('assets/adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>

<script src="{{asset('assets/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/adminlte/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

<!-- Select2 -->
<script src="{{asset('assets/adminlte/plugins/select2/js/select2.full.min.js')}}"></script>

<!-- Page specific script -->
<script>
    $(function () {
        $('#idallCategory').prop('checked', false);

        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });

        //Initialize Select2 Elements
        $('.select2').select2()
    });
</script>
@stack('scripts')
  </body>

</html>
