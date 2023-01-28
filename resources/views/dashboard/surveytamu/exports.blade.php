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
            <th>Pendidikan</th>
            <th>Jenis Kelamin</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($Surveyor as $Surveyor)
            <tr>
                <td>{{ date('d-m-Y', strtotime($Surveyor->created_at)) }}</td>
                <td>
                    @foreach ($Surveyor->subServices as $subServices)
                        <li> {{ $subServices->subLayanan->sub_service_name }}</li>
                    @endforeach

                </td>
                <td>{{ $Surveyor->surveyor_name }}</td>
                <td>{{ $Surveyor->surveyor_education }}</td>
                <td>{{ $Surveyor->surveyor_gender }}</td>



            </tr>
        @endforeach

    </tbody>
</table>
