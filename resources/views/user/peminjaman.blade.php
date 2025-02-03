<a href="{{ route('pengguna.home') }}">beranda</a>


<table border="1">
    <tr>
        <th>Id Inventaris</th>
        <th>Nama Barang</th>
        <th>Kondisi</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>
    @foreach ($inventaris as $item)
        <tr>
            <td>{{ $item->kode_inventaris }}</td>
            <td>{{ $item->nama_barang }}</td>
            <td>{{ $item->kondisi }}</td>
            <td>{{ $item->stok }}</td>
            <td>
                <form action="{{ route('pengguna.peminjaman.inventaris', $item->id) }}" method="POST" class="pinjam-form">
                    @csrf
                    <button type="submit" class="pinjam-button">Pinjam</button>
                </form>
            </td>

            <td>

            </td>
        </tr>
    @endforeach

</table>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const forms = document.querySelectorAll(".pinjam-form");

        forms.forEach(form => {
            form.addEventListener("submit", function(e) {
                const button = form.querySelector(".pinjam-button");
                button.textContent = "Processing..."; // Ubah teks tombol
                button.disabled = true; // Disable tombol biar gak bisa diklik lagi
            });
        });
    });
</script>
