@extends('layout.layout')
@section('content')

<table class="table table-bordered" style="margin-top: 6%; margin-left: 99px;">
    <thead>
        <tr>
            <th scope="col">Nomor</th>
            <th scope="col">NIK</th>
            <th scope="col">Foto Bukti</th>
            <th scope="col">Status Validasi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pengaduan as $p)
        <tr>
            <td>{{ $p->id_pengaduan }}</td>
            <td>{{ $p->nik }}</td>
            <td><img src="{{ asset('storage/'.$p->foto)}}" alt="" style="width:300px;"></td>
            <td>{{ $p->status }}</td>
            <td><a href="{{ route('show',$p->id_pengaduan) }}" class="show">Show</a></td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection