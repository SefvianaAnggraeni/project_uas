@extends('admin.includes.apps')

@section('title')
Admin - Kategori Produk
@endsection

@section('content')
@if (Auth::user()->role != 'pelanggan')
<!-- Begin Page Content -->
<div class="container-fluid">
  <h1 class="mt-4">Kategori Produk</h1>
  <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
    <li class="breadcrumb-item active">Kategori Produk</li>
  </ol>
  <div class="card mb-4">
    <div class="card-header">
    @if (Auth::user()->role == 'admin')
          <a href="{{ url('admin/kategoriproduk/create') }}" class="btn btn-primary">
        Tambah Data</a>
    @endif
    </div>
    <div class="card mb-4">
      <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Data Kategori Produk
      </div>
      <div class="card-header">
        <div class="card-body">
          <table id="datatablesSimple" class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @php $no = 1; @endphp
              @foreach ($kategori_produk as $kategori)
              <tr>
                <td> {{$no}}</td>
                <td>{{$kategori->nama}} </td>
                <td>
                  <a href="{{ url ('admin/kategoriproduk/edit/'. $kategori->id) }}" class="btn btn-warning">Edit</a>
                  @if (Auth::user()->role == 'admin') 
                  <a href="{{ url ('admin/kategoriproduk/delete/'. $kategori->id) }}" class="btn btn-danger">Delete</a>
                  @endif
                </td>
              </tr>
              @php $no++ @endphp
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End of Main Content -->
    @else
        @include('admin.access_denied')
    @endif
@endsection

@push('addon-script')

@endpush