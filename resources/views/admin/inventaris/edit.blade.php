@extends('admin.layouts')

@section('content')
    <div class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Edit Inventaris </h2>

        <form action="{{ route('inventaris.update', $inventaris->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="space-y-2">
                <label for="kode_inventaris" class="block text-sm font-medium text-gray-700">Kode Inventaris</label>
                <input type="text" name="kode_inventaris" id="kode_inventaris"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    value="{{ $inventaris->kode_inventaris }}">
            </div>

            <div class="space-y-2">
                <label for="nama_barang" class="block text-sm font-medium text-gray-700">Nama Barang</label>
                <input type="text" name="nama_barang" id="nama_barang"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    value="{{ $inventaris->nama_barang }}">
            </div>

            <div class="space-y-2">
                <label for="kondisi" class="block text-sm font-medium text-gray-700">Kondisi</label>
                <input type="text" name="kondisi" id="kondisi"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    value="{{ $inventaris->kondisi }}">
            </div>

            <div class="space-y-2">
                <label for="stok" class="block text-sm font-medium text-gray-700">Stok</label>
                <input type="number" name="stok" id="stok"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    value="{{ $inventaris->stok }}">
            </div>

            <div class="pt-4">
                <button type="submit"
                    class="w-full px-4 py-2 text-white bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Simpan Data
                </button>
            </div>
        </form>
    </div>
@endsection
