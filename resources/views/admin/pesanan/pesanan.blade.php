@extends('admin.includes.apps')

@section('title')
Admin - Pesanan
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="mt-4">Pesanan</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
        <li class="breadcrumb-item active">Pesanan</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <a href="{{ url('admin/pesanan/create') }}" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Pesanan
        </div>
        <div class="card-body">
            <table id="datatablesSimple" class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nama Pemesan</th>
                        <th>No Hp</th>
                        <th>Email</th>
                        <th>Jumlah Pesanan</th>
                        <th>Deskripsi</th>
                        <th>Produk</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($pesanan as $pes)
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $pes->tanggal }}</td>
                        <td>{{ $pes->nama_pesanan }}</td>
                        <td>{{ $pes->no_hp }}</td>
                        <td>{{ $pes->email }}</td>
                        <td>{{ $pes->jumlah_pesanan }}</td>
                        <td>{{ $pes->keterangan }}</td>
                        <td>{{ $pes->produk->nama }}</td>
                        <td>
                            <a href="{{ url('admin/pesanan/edit/'. $pes->id) }}" class="btn btn-warning m-1">Edit</a> 
                            <button type="button" class="btn btn-info m-1 btn-detail" data-id="{{ $pes->id }}">Detail </button>
                            <a href="{{ url('admin/pesanan/delete/'. $pes->id) }}" class="btn btn-danger m-1">Delete</a>
                        </td>
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
<!-- End of Main Content -->
<div class="modal fade" id="modalDetail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

        </div>
    </div>
</div>

@endsection

@push('addon-script')
<script>
    $(function() {
        $('.btn-detail').click(function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            $.ajax({
                type: "GET",
                url: `{{ url('admin/pesanan/${id}') }}`,
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
