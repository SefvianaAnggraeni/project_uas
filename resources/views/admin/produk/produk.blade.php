@extends('admin.includes.apps')

@section('title')
    Admin - Produk
@endsection

@section('content')
@if (Auth::user()->role != 'pelanggan')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <h1 class="mt-4">Tables</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Produk</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
            @if (Auth::user()->role == 'admin')
                <a href="{{ url('admin/produk/create') }}" class="btn btn-primary">
                    Tambah Data</a>
            @endif        
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Data Produk
                </div>
                <div class="card-header">
                    <div class="card-body">
                        <table id="datatablesSimple" class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th>Harga Jual</th>
                                    <th>Harga Beli</th>
                                    <th>Stok</th>
                                    <th>Minimal Stok</th>
                                    <th>Deskripsi</th>
                                    <th>Kategori Produk</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($produk as $prod)
                                    <tr>
                                        <td> {{ $no }}</td>
                                        <td>{{ $prod->kode }} </td>
                                        <td>{{ $prod->nama }}</td>
                                        <td>Rp. {{ number_format($prod->harga_beli,0,",",".") }}</td>
                                        <td>Rp. {{ number_format($prod->harga_beli,0,",",".") }}</td>
                                        <td>{{ $prod->stok }}</td>
                                        <td>{{ $prod->min_stok }}</td>
                                        <td>{{ $prod->deskripsi }}</td>
                                        <td>{{ $prod->kategori_produk->nama }}</td>
                                        <td>
                                            <a href="{{ url('admin/produk/edit/' . $prod->id) }}"
                                                class="btn btn-warning m-1">Edit</a>
                                            <button type="button" class="btn btn-info m-1 btn-detail"
                                                data-id="{{ $prod->id }}">
                                                Detail
                                            </button>
                                            @if (Auth::user()->role == 'admin')
                                            <a href="{{ url('admin/produk/delete/' . $prod->id) }}"
                                                class="btn btn-danger m-1">Delete</a>
                                            @endif    
                                        </td>

                                        <td></td>

                                    </tr>
                                    @php
                                        $no++;
                                    @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Main Content -->
    <div class="modal fade" id="modalDetail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

            </div>
        </div>
    </div>
@endif
@endsection

@push('addon-script')
    <script>
        $(function() {
            $('.btn-detail').click(function(e) {
                e.preventDefault();
                var id = $(this).data('id');
                $.ajax({
                    type: "GET",
                    url: `{{ url('admin/produk/${id}') }}`,
                    cache: false,
                    success: function(response) {
                        $('.modal-content').html(response);
                        $('#modalDetail').modal('show');
                    }
                });
            });
        });
    </script>
@endpush
