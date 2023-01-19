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

                                <a href="/dashboard/kunjungan/export_excel" class="btn btn-primary"><i class="fa fa-excel">Export</i></a>

                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>

                                            <th>Tanggal</th>
                                            <th>Jenis Pelayanan</th>
                                            <th>Nama</th>
                                            <th>Umur</th>
                                            <th>Pendidikan</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Kecamatan</th>
                                            <th>Desa</th>
                                            <th>RT</th>
                                            <th>RW</th>
																						<th>Tujuan</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($kunjungan as $kunjungan)
                                            <tr>
                                                <td>{{ $kunjungan->visit_time }}</td>
                                                <td>{{ $kunjungan->layanan->service_name }}</td>
                                                <td>{{ $kunjungan->visitor_name }}</td>
																								<td>{{ $kunjungan->visitor_age }}</td>
                                                <td>{{ $kunjungan->visitor_education }}</td>
                                                <td>{{ $kunjungan->visitor_gender }}</td>
                                                <td>{{ $kunjungan->visitor_disctrict }}</td>

                                                <td>{{ $kunjungan->visitor_village }}</td>
                                                <td>{{ $kunjungan->visitor_neighborhood_association }}</td>
                                                <td>{{ $kunjungan->visit_purpose }}</td>
																								 <td>{{ $kunjungan->visi }}</td>
                                                <td>{{ $kunjungan->visitor_description }}</td>


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
