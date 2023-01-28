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
                                <a href="#" data-toggle="modal" data-target="#modalSurvey" class="btn btn-primary"><i
                                        class="fa fa-excel">Export</i></a>
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Tanggal</th>
                                            <th>Jenis Layanan</th>
                                            <th>Nama</th>
                                            <th>Umur</th>
                                            <th>Pendidikan</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Kecamatan</th>
                                            <th>Desa</th>
                                            <th>RT</th>
                                            <th>RW</th>
                                            <th>Alamat(Luar Ciamis)</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($Surveyor as $Surveyor)
                                            <tr>
                                                <td>{{ date('d-m-Y', strtotime($Surveyor->surveyor_time )) }}</td>
                                                <td>
                                                    @foreach ($Surveyor->subServices as $subServices)
                                                        <li> {{ $subServices->subLayanan->sub_service_name }}</li>
                                                    @endforeach

                                                </td>
                                                <td>{{ $Surveyor->surveyor_name }}</td>
                                                <td>{{ $Surveyor->surveyor_age }} Tahun</td>
                                                <td>{{ $Surveyor->surveyor_education }}</td>
                                                <td>{{ $Surveyor->surveyor_gender }}</td>
                                                <td>{{ $Surveyor->surveyor_disctrict !== null ? $Surveyor->district->name : '' }}
                                                </td>
                                                <td>{{ $Surveyor->surveyor_village !== null ? $Surveyor->village->name : '' }}
                                                </td>
                                                <td>{{ $Surveyor->surveyor_neighborhood_association }}</td>
                                                <td>{{ $Surveyor->surveyor_citizen_association }}</td>
                                                <td>{{ $Surveyor->visitor_address }}</td>



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

@push('modal')
    <!-- Modal -->
    <div class="modal fade" id="modalSurvey" tabindex="-1" role="dialog" aria-labelledby="modalSurveyLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalSurveyLabel">Laporan </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form  method="POST" action="/dashboard/survey/export_excel">
											@csrf
                        <div class="form-group row d-flex justify-content-center">

                            <div class="col-xs-3 mr-5">
                                <label for="">Dari</label>
                                <input type="date" name="awal" class="form-control">
                            </div>


                            <div class="col-xs-8">
                                <label for="">sampai</label>
                                <input type="date" name="akhir" class="form-control">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
							</form>

            </div>
        </div>
    </div>
@endpush
