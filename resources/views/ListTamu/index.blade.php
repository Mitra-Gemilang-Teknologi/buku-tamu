@extends('layouts.main')

<style>
    .nav-link {
        color: blueviolet !important;
    }

    .submit {
        background-color: blueviolet !important;
        color: #ffffff !important;
    }
</style>
@section('container')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Tamu</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Form Survey</th>
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
                                <th>Alamat(Luar Ciamis)</th>
                                <th>Keterangan</th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($Visit as $kunjungan)
                                <tr>
                                    <td>
																			@if ($kunjungan->status == 1)
																				<form action="/isi-survey/" method="POST" class="d-inline">
                                            @csrf
																						<input type="hidden" name="id_visitor" value="{{$kunjungan->id}}" id="">
                                            <button class="btn btn-primary"
                                                onclick="return confirm('Apakah Yakin Ingin Mengisi Survey?')">Masuk Survey<span
                                                    data-feather="x-circle"></span></button>
                                        </form>
																				@elseif ($kunjungan->status == 2)
																				<span class="badge badge-pill badge-success">Sudah Dilayani</span>
																				@else
																					<span class="badge badge-pill badge-danger">Belum Dilayani</span>
																			@endif

                                    </td>
                                    <td>{{ $kunjungan->visit_time }}</td>

                                    <td>
                                        @foreach ($kunjungan->subServices as $subServices)
                                            <li> {{ $subServices->subLayanan->sub_service_name }}</li>
                                        @endforeach

                                    </td>
                                    <td>{{ $kunjungan->visitor_name }}</td>
                                    <td>{{ $kunjungan->visitor_age }}</td>
                                    <td>{{ $kunjungan->visitor_education }}</td>
                                    <td>{{ $kunjungan->visitor_gender }}</td>
                                    <td>{{ $kunjungan->visitor_disctrict !== null ? $kunjungan->district->name : '' }}
                                    </td>
                                    <td>{{ $kunjungan->visitor_village !== null ? $kunjungan->village->name : '' }}
                                    </td>
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
@endsection
