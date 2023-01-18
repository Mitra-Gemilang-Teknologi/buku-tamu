<?php

namespace App\Models;

use App\Models\Kunjungan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JenisLayanan extends Model
{
	use HasFactory, SoftDeletes;

	public $table = 'jenis_layanan'; // dilakukan seperti ini agar tidak menjadi plural

	protected $fillable = [
		'nama_jenis_layanan'
	];

	public function kunjungan()
	{
		return $this->belongsTo(Kunjungan::class, 'id_service_type');
	}
}
