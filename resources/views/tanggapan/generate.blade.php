<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Tanggal</th>
            <th scope="col">NIK</th>
            <th scope="col">Isi Laporan</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pengaduan as $p)
        <tr>
            <th scope="row">{{ $p->id_pengaduan }}</th>
            <td>{{ $p->tgl_pengaduan }}</td>
            <td>{{ $p->nik }}</td>
            <td>{{ $p->isi_laporan }}</td>
            <td>{{ $p->status }}</td>
        </tr>
        @endforeach
    </tbody>
</table>