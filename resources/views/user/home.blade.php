<a href="{{ route('pengguna.peminjaman') }}">peminjaman</a>

<form method="GET" action="{{ route('pengguna.home') }}">
    <input type="text" name="keyword" placeholder="Cari nama barang..." value="{{ request('keyword') }}">
    <button type="submit">Cari</button>
</form>

<table border="1">
    <tr>
        <th>Id Inventaris</th>
        <th>Nama Barang</th>
        <th>Kondisi</th>
        <th>Stok</th>
        <th>Tanggal Register</th>
    </tr>
    @foreach ($inventaris as $item)
        <tr>
            <td>{{ $item->kode_inventaris }}</td>
            <td>{{ $item->nama_barang }}</td>
            <td>{{ $item->kondisi }}</td>
            <td>{{ $item->stok }}</td>
            <td>{{ $item->created_at }}</td>
        </tr>
    @endforeach

</table>
