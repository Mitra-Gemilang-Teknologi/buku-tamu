<?php

namespace App\Models;

use App\Models\JenisLayanan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Kunjungan extends Model
{
	use HasFactory, SoftDeletes;

	public $table = 'kunjungan'; // dilakukan seperti ini agar tidak menjadi plural
	protected $guarded  = ['id_kunjungan']; //yang tidak  boleh di isi

	public function jenislayanan()
    {
        return $this->hasMany(JenisLayanan::class);
    }
}