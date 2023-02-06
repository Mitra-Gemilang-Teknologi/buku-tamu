<table>
    <thead>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th><b>Laporan Pengunjung</b></th>
        </tr>
        <tr>
					<th></th>
            <th></th>
            <th></th>
            <th></th>
						<th><b>Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu</b></th>
				</tr>
        <tr>
						<th></th>
            <th></th>
            <th></th>
            <th></th>
						<th></th>

						<th><b>Tanggal {{$start}} Sampai {{$end}}</b></th>
				</tr>
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
            <th>Alamat(Luar Ciamis)</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($visits as $visit)
            <tr>
                <td>{{ $visit->visit_time }}</td>

								<td>
									@if(count($visit->subServices) > 1)
									@foreach ($visit->subServices as $subServices)
									<li class="ml-2"> {{ $subServices->subLayanan->sub_service_name }}</li>
									@endforeach
									@else
									@foreach ($visit->service as $service)
									<li class="ml-2"> {{ $service->layanan->service_name }}</li>
									@endforeach

									@endif
								</td>

                <td>{{ $visit->visitor_name }}</td>
                <td>{{ $visit->visitor_age }}</td>
                <td>{{ $visit->visitor_education }}</td>
                <td>{{ $visit->visitor_gender }}</td>
                <td>{{ $visit->visitor_disctrict !== null ? $visit->district->name : '' }}
                </td>
                <td>{{ $visit->visitor_village !== null ? $visit->village->name : '' }}
                </td>
                <td>{{ $visit->visitor_neighborhood_association }}</td>
                <td>{{ $visit->visitor_citizen_association }}</td>
                <td>{{ $visit->visit_purpose }}</td>
                <td>{{ $visit->visitor_address }}</td>
                <td>{{ $visit->visitor_description }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
