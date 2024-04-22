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

                            <a href="#" data-toggle="modal" data-target="#modalKunjungan" class="btn btn-primary btn-rounded"><i class="fas fa-download"></i> Download Data Rekap Buku Tamu</i></a>
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Action</th>
                                        <th>Status</th>
                                        <th>Tanggal</th>
                                        <th width="50%">Jenis Pelayanan</th>
                                        <th>Nama</th>
                                        <th>Umur</th>
                                        <th>Pendidikan</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Kecamatan</th>
                                        <th>Desa</th>
                                        <th>RT</th>
                                        <th>RW</th>
                                        <th>Tujuan</th>
                                        <th>Alamat(Luar Ciamis)</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Visit as $kunjungan)
                                    <tr>
                                        <td></td>
                                        <td>
                                            <a class="hapus" class="btn btn-danger" href="/dashboard/bukutamu/delete/{{ $kunjungan->id }}"><button type="button" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Yakin Ingin Menghapus Data?')">Hapus</button></a>
                                        </td>
                                        <td>
                                            @if ($kunjungan->status == 0)
                                            <form method="POST" action="/bukutamu/update" class="mb-5" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="visitor_id" value="{{ $kunjungan->id }}" id="">
                                                <button class="btn btn-primary" onclick="return confirm('Apakah Yakin Ingin Mengisi Survey?')">Selesaikan<span data-feather="x-circle"></span></button>
                                            </form>
                                            @else
                                            <span class="badge badge-pill badge-success">Sudah Dilayani</span>
                                            @endif

                                        </td>
                                        <td>{{ date("d-m-Y", strtotime($kunjungan->visit_time));  }}</td>
                                        </td>
                                        <td>
																					@if(count($visit->subServices) == 0)
																					{{ $visit->jenis_layanan }}
																					@elseif(count($visit->subServices) > 1)
																					@foreach ($visit->subServices as $subServices)
																					<li class="ml-2"> {{ $subServices->subLayanan->sub_service_name }}</li>
																					@endforeach
																					@else
																					@foreach ($visit->service as $service)
																					<li class="ml-2"> {{ $service->layanan->service_name }}</li>
																					@endforeach

																					@endif
																				</td>
                                        <td>{{ $kunjungan->visitor_name }}</td>
                                        <td>{{ $kunjungan->visitor_age }}</td>
                                        <td>{{ $kunjungan->visitor_education }}</td>
                                        <td>{{ $kunjungan->visitor_gender }}</td>
                                        {{-- <td>{{ $kunjungan->visitor_disctrict !== null ? $kunjungan->district->name : '' }}</td>
                                        <td>{{ $kunjungan->visitor_village !== null ? $kunjungan->village->name : '' }}</td> --}}
																				<td>{{ $kunjungan->visitor_disctrict !== null ? $kunjungan->district->name : $kunjungan->kecamatan}}</td>
																				<td>{{ $kunjungan->visitor_village !== null ? $kunjungan->village->name :  $kunjungan->desa}}</td>
                                        <td>{{ $kunjungan->visitor_neighborhood_association }}</td>
                                        <td>{{ $kunjungan->visitor_citizen_association }}</td>
                                        <td>{{ $kunjungan->visit_purpose }}</td>
                                        <td>{{ $kunjungan->visitor_address }}</td>
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

@push('modal')
<!-- Modal -->
<div class="modal fade" id="modalKunjungan" tabindex="-1" role="dialog" aria-labelledby="modalKunjunganLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalKunjunganLabel">Laporan </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="/dashboard/kunjungan/export_excel">
                <div class="modal-body">
                    @csrf
                    <div class="form-group d-flex justify-content-start">
                        <div class="col-md-6">
                            <label for="">Dari Tanggal</label>
                            <input type="date" name="awal" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Sampai Tanggal</label>
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
