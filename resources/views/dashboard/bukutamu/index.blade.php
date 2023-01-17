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
              <li class="breadcrumb-item active">Daftar Tamu</li>
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
                <h3 class="card-title">Daftar Tamu</h3>
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
										<th>Nomor Telepon</th>
                    <th>Jenis Kelamin</th>
										<th>Jenis Pelayanan</th>
											<th>Alamat</th>
											<th>Keterangan</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>19-01-2023</td>
										 <td>Dani</td>
                    <td>32 Tahun
                    </td>
										<td>03242321</td>
                       <td>Laki-Laki</td>
                    <td>Kesehtan</td>

										<td>Kujang-Cikoneng</td>
										 <td>Laki</td>

                  </tr>

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

