<form action="{{ route('inventaris.update', $inventaris->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="">Kode Inventaris</label>
    <input type="text" name="kode_inventaris">
    <br>
    <label for="">Nama Barang</label>
    <input type="text" name="nama_barang">
    <br>
    <label for="">Kondisi</label>
    <input type="text" name="kondisi">
    <br>
    <label for="">Stok</label>
    <input type="number" name="stok">
    <br>
    <button type="submit">Kirim</button>
</form>
