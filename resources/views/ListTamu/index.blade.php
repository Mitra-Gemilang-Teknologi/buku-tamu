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

                                <th>Nama</th>
                                <th>Jenis Pelayanan</th>
                                <th>Tanggal</th>
                                {{-- <th>Alamat</th> --}}
                                <th>Status</th>
                                <th>Aksi</th

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($Visit as $kunjungan)
                                <tr>
                                    <td>{{ $kunjungan->visitor_name }}</td>
                                    <td>
                                       	@if (count($kunjungan->subServices) > 1)

																										@foreach ($kunjungan->subServices as $subServices)
                                                        <li> {{ $subServices->subLayanan->sub_service_name }}</li>
                                                    @endforeach
																										@else
																											@foreach ($kunjungan->service as $service)
                                                        <li> {{ $service->layanan->service_name }}</li>
                                                    @endforeach

																									@endif
                                    </td>
                                    <td>{{ $kunjungan->visit_time }}</td>
                                    {{-- <td>
                                        @if ($kunjungan->district != null)
                                            Rt {{ $kunjungan->visitor_neighborhood_association }} /Rw
                                            {{ $kunjungan->visitor_citizen_association }} Desa
                                            {{ $kunjungan->village->name }} Kec. {{ $kunjungan->district->name }}

                                        @else
                                            {{ $kunjungan->visitor_address }}
                                        @endif
                                    </td> --}}
                                    <td>
                                        @if ($kunjungan->status == 0)
                                            <span class="badge badge-pill badge-danger">Belum Dilayani</span>
                                        @else
                                            <span class="badge badge-pill badge-success">Sudah Dilayani</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($kunjungan->status == 1)
                                            <form action="/form/isi-survey" class="d-inline"method="post">
                                                @csrf
                                                <input type="hidden" name="id_visitor" value="{{ $kunjungan->id }}"
                                                    id="">
                                                <button class="btn btn-primary"
                                                    onclick="return confirm('Apakah Yakin Ingin Mengisi Survey?')">Masuk
                                                    Survey<span data-feather="x-circle"></span></button>
                                            </form>
                                        @elseif ($kunjungan->status == 2)
                                            <span class="badge badge-pill badge-success">Sudah Mengisi Survey</span>
                                        @else
                                            <span class="badge badge-pill badge-danger">Belum Dilayani</span>
                                        @endif

                                    </td>




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
@push('scripts')
<script>
    $(document).ready(function() {
        $('#example2').DataTable({
            "order": [[2, "desc"]]
        });
    });
</script>
@endpush
