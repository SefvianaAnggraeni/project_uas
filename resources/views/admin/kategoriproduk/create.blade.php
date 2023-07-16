@extends('admin.includes.apps')

@section('title')
Admin - Tambah Kategori Produk
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <h1 class="h2">Tambah Kategori Produk</h1>
  <hr />

  <form method="POST" action="{{ url('admin/kategoriproduk/store') }}" class="mt-4">
    {{ csrf_field() }}
    <div class="form-group row">
      <label for="nama" class="col-2 col-form-label">Nama</label>
      <div class="col-8">
        <input id="nama" name="nama" type="text" class="form-control" spellcheck="false" data-ms-editor="true" required>
      </div>
    </div>

    <div class="form-group row">
      <div class="offset-2 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Tambah</button>
      </div>
    </div>
  </form>
</div>
<!-- End of Main Content -->

@endsection

@push('addon-script')

@endpush