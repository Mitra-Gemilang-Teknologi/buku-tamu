<?php

namespace App\Models;

use App\Models\ServiceType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Visit extends Model
{
	use HasFactory, SoftDeletes;

	public $table = 'visit'; // dilakukan seperti ini agar tidak menjadi plural
	
	protected $guarded  = ['id_visit']; //yang tidak  boleh di isi

	public function layanan()
	{
		return $this->belongsTo(ServiceType::class, 'id_service_type', 'id_service_type');
	}
}
