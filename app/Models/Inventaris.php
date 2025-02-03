<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Inventaris extends Model
{
    use HasFactory;

    protected $table = 'inventaris';
  

    // Scope untuk pencarian nama_barang
    public function scopeCariNama($query, $keyword)
    {
        return $query->where('nama_barang', 'LIKE', '%' . $keyword . '%');
    }

    public function peminjaman(): HasMany
    {
        return $this->hasMany(Peminjaman::class, 'kode_inventaris', 'kode_inventaris');
    }

}
