<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = "user";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','name'
    ];
    use HasFactory;
}
