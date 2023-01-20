<?php

namespace App\Models;

use App\Models\JenisLayanan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Surveyor extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded  = ['id_surveyor']; //yang tidak  boleh di isi
    public $table = 'surveyor'; // dilakukan seperti ini agar tidak menjadi plural

    public function layanan()
    {
        return $this->belongsTo(JenisLayanan::class, 'id_service_type', 'id_service_type');
    }
}