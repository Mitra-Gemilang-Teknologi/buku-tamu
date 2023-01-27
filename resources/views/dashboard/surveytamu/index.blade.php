@extends('dashboard.layouts.main')

@section('container')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Daftar Survey</li>
          </ol>
      </div>
  </div>
</div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Daftar Survey</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
           <a href="" class="btn btn-primary"><i class="fa fa-excel">Export</i></a>
           <table id="example2" class="table table-bordered table-hover">
              <thead>
                  <tr>
                    <th>Tanggal</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    {{-- <th>Nomor Telepon</th> --}}
                    <th>Jenis Kelamin</th>
                    {{-- <th>Jenis Pelayanan</th> --}}
                    <th>Alamat</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Surveyor as $Surveyor)
              <tr>
                <td>{{ date("d-m-Y", strtotime($Surveyor->created_at)) }}</td>
                <td>{{ $Surveyor->surveyor_name }}</td>
                <td>32 Tahun
                </td>
                {{-- <td>{{ $Surveyor->surveyor_phone }}</td> --}}
                <td>{{ $Surveyor->surveyor_gender }}</td>
                {{-- <td>{{ $Surveyor }}</td> --}}

                <td>Kujang-Cikoneng</td>
                <td>Laki</td>

            </tr>
            @endforeach

        </tbody>

    </table>
</div>
<!-- /.card-body -->
</div>
<!-- /.card -->

</div>
<!-- /.col -->
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
