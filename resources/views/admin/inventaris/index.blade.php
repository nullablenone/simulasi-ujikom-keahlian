 <a href="{{ route('inventaris.create') }}">Tambah</a>
<br>
<a href="{{ route('peminjaman.index') }}">inventaris</a>

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
        <th>Id Inventaris</th>
        <th>Nama Barang</th>
        <th>Kondisi</th>
        <th>Stok</th>
        <th>Tanggal Register</th>
        <th>Aksi</th>
    </tr>
    @foreach ($inventaris as $item)
    <tr>
        <td>{{ $item->kode_inventaris }}</td>
        <td>{{ $item->nama_barang }}</td>
        <td>{{ $item->kondisi }}</td>
        <td>{{ $item->stok }}</td>
        <td>{{ $item->created_at }}</td>
        <td>
            <a href="{{ route('inventaris.edit', $item->id) }}">Edit</a>
            <form action="{{ route('inventaris.destroy', $item->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach

 </table>
