<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SurveyorHasService extends Model
{
	use HasFactory, SoftDeletes;

	public $table = 'surveyor_has_services'; // dilakukan seperti ini agar tidak menjadi plural

	protected $guarded  = ['id']; //yang tidak  boleh di isi

	public function subLayanan()
	{
		return $this->belongsTo(SubServiceType::class, 'sub_service_id', 'id_sub_service_type');
	}
	public function layanan()
	{
		return $this->belongsTo(ServiceType::class, 'service_id', 'id_service_type');
	}
}
