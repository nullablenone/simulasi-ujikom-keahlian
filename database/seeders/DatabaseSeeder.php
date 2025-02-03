<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin@example.com'), // Default password

        ]);

        DB::table('inventaris')->insert([
            [
                'kode_inventaris' => 'A001',
                'nama_barang' => 'Projektor HP',
                'kondisi' => 'Baik',
                'stok' => 20,
                'created_at' => Carbon::createFromFormat('d-m-Y', '06-06-2012'),
                'updated_at' => Carbon::now(),
            ],
            [
                'kode_inventaris' => 'A002',
                'nama_barang' => 'Projektor Acer',
                'kondisi' => 'Baik',
                'stok' => 30,
                'created_at' => Carbon::createFromFormat('d-m-Y', '05-06-2011'),
                'updated_at' => Carbon::now(),
            ],
            [
                'kode_inventaris' => 'A003',
                'nama_barang' => 'Projektor BenQ',
                'kondisi' => 'Baik',
                'stok' => 10,
                'created_at' => Carbon::createFromFormat('d-m-Y', '24-10-2015'),
                'updated_at' => Carbon::now(),
            ],
            [
                'kode_inventaris' => 'A004',
                'nama_barang' => 'Projector Infocus',
                'kondisi' => 'Baik',
                'stok' => 20,
                'created_at' => Carbon::createFromFormat('d-m-Y', '06-07-2014'),
                'updated_at' => Carbon::now(),
            ],
            [
                'kode_inventaris' => 'B001',
                'nama_barang' => 'Laptop HP',
                'kondisi' => 'Perbaikan',
                'stok' => 2,
                'created_at' => Carbon::createFromFormat('d-m-Y', '10-06-2011'),
                'updated_at' => Carbon::now(),
            ],
            [
                'kode_inventaris' => 'B002',
                'nama_barang' => 'Laptop Toshiba',
                'kondisi' => 'Baik',
                'stok' => 6,
                'created_at' => Carbon::createFromFormat('d-m-Y', '29-01-2015'),
                'updated_at' => Carbon::now(),
            ],
            [
                'kode_inventaris' => 'C001',
                'nama_barang' => 'Kabel VGA',
                'kondisi' => 'Baik',
                'stok' => 50,
                'created_at' => Carbon::createFromFormat('d-m-Y', '06-06-2012'),
                'updated_at' => Carbon::now(),
            ],
            [
                'kode_inventaris' => 'C002',
                'nama_barang' => 'Kabel HDMI',
                'kondisi' => 'Baik',
                'stok' => 10,
                'created_at' => Carbon::createFromFormat('d-m-Y', '06-06-2015'),
                'updated_at' => Carbon::now(),
            ],
            [
                'kode_inventaris' => 'D001',
                'nama_barang' => 'Converter VGA to HDMI',
                'kondisi' => 'Baik',
                'stok' => 5,
                'created_at' => Carbon::createFromFormat('d-m-Y', '06-07-2014'),
                'updated_at' => Carbon::now(),
            ],
            [
                'kode_inventaris' => 'D002',
                'nama_barang' => 'Terminal Listrik 4 Port',
                'kondisi' => 'Baik',
                'stok' => 20,
                'created_at' => Carbon::createFromFormat('d-m-Y', '05-06-2011'),
                'updated_at' => Carbon::now(),
            ],
        ]);

        // Seed peminjaman table
        DB::table('peminjaman')->insert([
            [
                'kode_inventaris' => 'A004',
                'nama_peminjam' => 'Oce Komarudin, S.Ag.',
                'tanggal_pinjam' => Carbon::createFromFormat('d-m-Y', '15-01-2024'),
                'tanggal_kembali' => Carbon::createFromFormat('d-m-Y', '15-01-2024'),
                'status' => 'belum kembali',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'petugas' => 'M.Yasir'
            ],
            [
                'kode_inventaris' => 'C002',
                'nama_peminjam' => 'Oce Komarudin, S.Ag.',
                'tanggal_pinjam' => Carbon::createFromFormat('d-m-Y', '15-01-2024'),
                'tanggal_kembali' => Carbon::createFromFormat('d-m-Y', '15-01-2024'),
                'status' => 'belum kembali',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'petugas' => 'M.Yasir'
            ],
            [
                'kode_inventaris' => 'D002',
                'nama_peminjam' => 'Oce Komarudin, S.Ag.',
                'tanggal_pinjam' => Carbon::createFromFormat('d-m-Y', '15-01-2024'),
                'tanggal_kembali' => Carbon::createFromFormat('d-m-Y', '15-01-2024'),
                'status' => 'belum kembali',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'petugas' => 'M.Yasir'
            ],
            [
                'kode_inventaris' => 'B002',
                'nama_peminjam' => 'Selvia Prihastyani, S.Kom.',
                'tanggal_pinjam' => Carbon::createFromFormat('d-m-Y', '12-01-2024'),
                'tanggal_kembali' => Carbon::createFromFormat('d-m-Y', '15-01-2024'),
                'status' => 'sudah kembali',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'petugas' => 'Risfan Novrian'
            ],
            [
                'kode_inventaris' => 'A003',
                'nama_peminjam' => 'Septyandi Utama, A.Md.',
                'tanggal_pinjam' => Carbon::createFromFormat('d-m-Y', '16-01-2024'),
                'tanggal_kembali' => Carbon::createFromFormat('d-m-Y', '18-01-2024'),
                'status' => 'proses',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'petugas' => 'M.Yasir'
            ],
            [
                'kode_inventaris' => 'C001',
                'nama_peminjam' => 'Septyandi Utama, A.Md.',
                'tanggal_pinjam' => Carbon::createFromFormat('d-m-Y', '16-01-2024'),
                'tanggal_kembali' => Carbon::createFromFormat('d-m-Y', '18-01-2024'),
                'status' => 'batal',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'petugas' => 'M.Yasir'
            ],
        ]);
    }
}
