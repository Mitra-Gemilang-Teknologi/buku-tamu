<table>
    <thead>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th><b>Laporan Survey</b></th>
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
            <th><b>Tanggal {{ $start }} Sampai {{ $end }}</b></th>
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
            <th>Alamat(Luar Ciamis)</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($Surveyor as $Surveyor)
            <tr>
                <td>{{ date('d-m-Y', strtotime($Surveyor->created_at)) }}</td>
                <td>
                    @foreach ($Surveyor->subServices as $subServices)
                        <li> {{ $subServices->subLayanan->sub_service_name }}</li> <br>
                    @endforeach

                </td>
                <td>{{ $Surveyor->surveyor_name }}</td>
                <td>{{ $Surveyor->surveyor_age }}</td>
                <td>{{ $Surveyor->surveyor_education }}</td>
                <td>{{ $Surveyor->surveyor_gender }}</td>
                <td>{{ $Surveyor->surveyor_disctrict !== null ? $Surveyor->district->name : '' }}
                </td>
                <td>{{ $Surveyor->surveyor_village !== null ? $Surveyor->village->name : '' }}
                </td>
                <td>{{ $Surveyor->surveyor_neighborhood_association }}</td>
                <td>{{ $Surveyor->surveyor_citizen_association }}</td>
                <td>{{ $Surveyor->surveyor_address }}</td>


            </tr>
        @endforeach

    </tbody>
</table>
