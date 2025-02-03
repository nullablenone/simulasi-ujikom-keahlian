@extends('admin.layouts')

@section('content')
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Header Section -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-900">Data Peminjaman</h1>
        </div>

        <div class="mt-8 bg-white shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Id
                            Peminjaman</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Id
                            Inventaris</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama
                            Barang</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama
                            Peminjam</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal
                            Pinjam</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal
                            Kembali</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Petugas
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($peminjaman as $item)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 text-sm text-gray-900">{{ $item->id }}</td>
                            <td class="px-6 py-4 text-sm text-gray-900">{{ $item->kode_inventaris }}</td>
                            <td class="px-6 py-4 text-sm text-gray-900">{{ $item->inventaris->nama_barang }}</td>
                            <td class="px-6 py-4 text-sm text-gray-900">{{ $item->nama_peminjam }}</td>
                            <td class="px-6 py-4 text-sm text-gray-900">{{ $item->tanggal_pinjam }}</td>
                            <td class="px-6 py-4 text-sm text-gray-900">{{ $item->tanggal_kembali }}</td>
                            <td class="px-6 py-4 text-sm">
                                <form action="{{ route('peminjaman.updateStatus', $item->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <select name="status" onchange="this.form.submit()" class="border-gray-300 rounded-md">
                                        <option value="belum kembali"
                                            {{ $item->status == 'belum kembali' ? 'selected' : '' }}>Belum Kembali</option>
                                        <option value="sudah kembali"
                                            {{ $item->status == 'sudah kembali' ? 'selected' : '' }}>Sudah Kembali</option>
                                        <option value="proses" {{ $item->status == 'proses' ? 'selected' : '' }}>Proses
                                        </option>
                                        <option value="batal" {{ $item->status == 'batal' ? 'selected' : '' }}>Batal
                                        </option>
                                    </select>
                                </form>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-900">{{ $item->petugas }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
