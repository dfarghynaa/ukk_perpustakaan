<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Peminjaman extends Model
{
    use HasFactory,SoftDeletes;

    protected $table= 'peminjaman';
    protected $primarykey= 'id_peminjaman'; 
    protected $fillable= ['id_peminjaman', 'id_buku', 'id_user', 'tgl_peminjaman', 'tgl_pengembalian', 'status'];
    
    public function User(): BelongsTo
{
    return $this ->belongsTo(User::class);
}

    public function buku(): BelongsTo
{
    return $this-> belongsTo(Buku::class);
}

 }