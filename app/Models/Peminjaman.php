<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = 'peminjaman';

    public function inventaris(): BelongsTo
    {
        return $this->belongsTo(Inventaris::class, 'kode_inventaris', 'kode_inventaris');
    }
}
