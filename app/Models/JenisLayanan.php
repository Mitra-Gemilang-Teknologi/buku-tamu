<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JenisLayanan extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'jenis_layanan'; // dilakukan seperti ini agar tidak menjadi plural

    protected $fillable = [
        'nama_jenis_layanan'
    ];
}
