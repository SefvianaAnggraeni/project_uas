<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Detail Pesanan {{ $pesanan->nama_pesanan }} </h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <table class="table">
        <tbody>
            <tr>
                <th>Tanggal</th>
                <td>: {{ date('d-m-Y', strtotime($pesanan->tanggal)) }}</td>
            </tr>
            <tr>
                <th>Nama Produk</th>
                <td>: {{ $pesanan->produk->nama }}</td>
            </tr>
            <tr>
                <th>Nama Pemesan</th>
                <td>: {{ $pesanan->nama_pesanan }}</td>
            </tr>
            <tr>
                <th>Alamat Pemesan</th>
                <td>: {{ $pesanan->alamat_pesanan }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>: {{ $pesanan->email }}</td>
            </tr>
            <tr>
                <th>No Hp</th>
                <td>: {{ $pesanan->no_hp }}</td>
            </tr>
            <tr>
                <th>Jumlah Pesanan</th>
                <td>:{{ $pesanan->jumlah_pesanan }}</td>
            </tr>
            <tr>
                <th>Keterangan</th>
                <td>: {{ $pesanan->keterangan }}</td>
            </tr>
        </tbody>
    </table>
</div>
