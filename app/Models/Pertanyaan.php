<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pertanyaan extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'pertanyaan'; // dilakukan seperti ini agar tidak menjadi plural

    protected $fillable = [
        'deskripsi_pertanyaan',
        'gambar',
    ];
}
