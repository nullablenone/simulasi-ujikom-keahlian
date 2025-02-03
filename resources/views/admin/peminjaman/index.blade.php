<a href="{{ route('inventaris.index') }}">inventaris</a>
<br>
<!-- Authentication -->
<form method="POST" action="{{ route('logout') }}">
    @csrf

    <x-responsive-nav-link :href="route('logout')"
        onclick="event.preventDefault();
                       this.closest('form').submit();">
        {{ __('Log Out') }}
    </x-responsive-nav-link>
</form>

<table border="1">
    <tr>
        <th>Id Peminjaman</th>
        <th>Id Inventaris</th>
        <th>Nama Barang</th>
        <th>Nama Peminjaman</th>
        <th>Tanggal Pinjam</th>
        <th>Tanggal Kembali</th>
        <th>Status</th>
        <th>Petugas</th>
    </tr>
    @foreach ($peminjaman as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->kode_inventaris }}</td>
            <td>{{ $item->inventaris->nama_barang }}</td>


            <td>{{ $item->nama_peminjam }}</td>
            <td>{{ $item->tanggal_pinjam }}</td>
            <td>{{ $item->tanggal_kembali }}</td>
            <td>
                <form action="{{ route('peminjaman.updateStatus', $item->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <select name="status" onchange="this.form.submit()">
                        <option value="belum kembali" {{ $item->status == 'belum kembali' ? 'selected' : '' }}>Belum
                            Kembali</option>
                        <option value="sudah kembali" {{ $item->status == 'sudah kembali' ? 'selected' : '' }}>Sudah
                            Kembali</option>
                        <option value="proses" {{ $item->status == 'proses' ? 'selected' : '' }}>Proses</option>
                        <option value="batal" {{ $item->status == 'batal' ? 'selected' : '' }}>Batal</option>
                    </select>
                </form>
            </td>
            <td>{{ $item->petugas }}</td>

        </tr>
    @endforeach

</table>
