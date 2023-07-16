<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Detail {{ $produk->nama }} </h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <table class="table">
        <tbody>
            <tr>
                <th scope="row">Kode</th>
                <td>: {{ $produk->kode }}</td>
            </tr>
            <tr>
                <th scope="row">Kategori</th>
                <td>: {{ $produk->kategori_produk->nama }}</td>
            </tr>
            <tr>
                <th scope="row">Nama</th>
                <td>: {{ $produk->nama }}</td>
            </tr>
            <tr>
                <th scope="row">Harga Beli</th>
                <td>: Rp. {{ number_format($produk->harga_beli,0,",",".") }}</td>
            </tr>
            <tr>
                <th scope="row">Harga Jual</th>
                <td>: Rp. {{ number_format($produk->harga_jual,0,",",".") }}</td>
            </tr>
            <tr>
                <th scope="row">Minimal Stok</th>
                <td>: {{ $produk->min_stok }}</td>
            </tr>
            <tr>
                <th scope="row">Stok</th>
                <td>: {{ $produk->stok }}</td>
            </tr>
            <tr>
                <th scope="row">Deskripsi</th>
                <td>: {{ $produk->deskripsi }}</td>
            </tr>
        </tbody>
    </table>
</div>
