<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = 'peminjaman';
    protected $fillable = [
        'nama',
        'products_id',
        'jumlah_pinjam',
        'tanggal_pinjam',
        'tanggal_kembali'
    ];
    protected $guarded = ['id'];
    public function products(){
        return $this->belongsTo(product::class);
    }
}
