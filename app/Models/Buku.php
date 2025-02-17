<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Buku extends Model
{
    use HasFactory, SoftDeletes;

    protected $table= 'buku';
    protected $primarykey= 'id';
    protected $fillable= ['id','id_kategori','judul','penulis', 'penerbit', 'isbn', 'tahun', 'jumlah'];

    public function kategori (): BelongsTo
    {
        return $this->belongsTo(kategori::class);

    }
}
