<form action="" enctype="multipart/form-data" method="post">
    @csrf
    <h2>Info Laporan Masyarakat</h2>
    <img src="{{ asset('storage/'. $pengaduan->foto) }}" style="width:300px;">
    <p>{{$pengaduan->isi_laporan}}</p>
</form>
<form action="{{ route('balesin', $pengaduan->id_pengaduan)}}" enctype="multipart/form-data" method="post">
    @METHOD('POST')
    @csrf
    <label>Beri Tanggapan</label>
    <input type="text" name="tanggapan" placeholder="Berikan tanggapan atau balasan...">
    <input type="hidden" name="id_pengaduan" value="{{ $pengaduan->id_pengaduan}}">
    <div class="form-button">
        <input type="submit" value="Kirim" class="ybtn ybtn-accent-color">
    </div>
    @if (session('success'))
    <div class="alert alert-success">
        <strong>{{ session('success') }}</strong>
    </div>
    @endif
</form>