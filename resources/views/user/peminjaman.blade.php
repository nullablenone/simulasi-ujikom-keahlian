@extends('user.layouts')

@section('title', 'Halaman Peminjaman')

@section('content')
    <!-- Link ke Beranda -->
    <div class="mb-6">
        <a href="{{ route('pengguna.home') }}" class="text-blue-500 hover:underline text-sm font-medium">
            &larr; Beranda
        </a>
    </div>

    <!-- Tabel Data Inventaris -->
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Id Inventaris
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Barang
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kondisi</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Stok</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($inventaris as $item)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $item->kode_inventaris }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $item->nama_barang }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $item->kondisi }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $item->stok }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <form action="{{ route('pengguna.peminjaman.inventaris', $item->id) }}" method="POST"
                                class="pinjam-form">
                                @csrf
                                <button type="submit"
                                    class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg shadow-md pinjam-button">
                                    Pinjam
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const forms = document.querySelectorAll(".pinjam-form");

            forms.forEach(form => {
                form.addEventListener("submit", function(e) {
                    const button = form.querySelector(".pinjam-button");
                    // Disable button dan ubah teks
                    button.textContent = "Processing...";
                    button.disabled = true;

                    // Tambahkan animasi spinner
                    const spinner = document.createElement("span");
                    spinner.classList.add("animate-spin", "ml-2", "h-5", "w-5", "border-2",
                        "border-t-transparent", "border-white", "rounded-full");
                    button.appendChild(spinner);

                    // Form submit (biarin ini lanjut proses default-nya)
                });
            });
        });
    </script>

@endsection
