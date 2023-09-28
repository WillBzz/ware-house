<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = ['id'];
    public function Category(){
        return $this->belongsTo(Category::class);
    }
    public function Peminjaman(){
        return $this->hasMany(Peminjaman::class);
    }
}
