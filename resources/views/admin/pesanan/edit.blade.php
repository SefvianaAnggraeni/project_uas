@extends('admin.includes.apps')

@section('title')
Admin - Edit Pesanan
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <h1 class="h4">Edit Pesanan</h1>
    <hr />

    <form action="{{ url('admin/pesanan/update/'.$pesanan->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" name="tanggal" id="tanggal" class="form-control" required value="{{ $pesanan->tanggal }}">
        </div>
        <div class="form-group">
            <label for="nama_pesanan">Nama Pesanan</label>
            <input type="text" name="nama_pesanan" id="nama_pesanan" class="form-control" required value="{{ $pesanan->nama_pesanan }}">
        </div>
        <div class="form-group">
            <label for="alamat_pesanan">Alamat Pesanan</label>
            <input type="text" name="alamat_pesanan" id="alamat_pesanan" class="form-control" required value="{{ $pesanan->alamat_pesanan }}">
        </div>

        <div class="form-group">
            <label for="no_hp">No HP</label>
            <input type="text" name="no_hp" id="no_hp" class="form-control" required value="{{ $pesanan->no_hp }}">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required value="{{ $pesanan->email }}">
        </div>

        <div class="form-group">
            <label for="jumlah_pesanan">Jumlah Pesanan</label>
            <input type="jumlah_pesanan" name="jumlah_pesanan" id="jumlah_pesanan" class="form-control" required value="{{ $pesanan->jumlah_pesanan }}">
        </div>

        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea name="keterangan" id="keterangan" class="form-control" required>{{ $pesanan->keterangan }}</textarea>
        </div>

        <div class="form-group">
            <label for="keterangan">Produk</label>
            <select name="produk_id" id="produk_id" class="form-control" required>
                @foreach($produk as $prod)
                <option value="{{ $prod->id }}" {{ $pesanan->produk_id == $prod->id ? 'selected' : '' }}>{{ $prod->nama }}</option>
                @endforeach
            </select>
        </div>

        <!-- Tambahkan input untuk kolom lainnya sesuai kebutuhan -->
        <button type="submit" class="btn btn-primary">Ubah</button>
    </form>
</div>
<!-- End of Main Content -->

@endsection

@push('addon-script')

@endpush