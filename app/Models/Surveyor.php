<?php

namespace App\Models;

use App\Models\ServiceType;
use App\Models\SubServiceType;
use App\Models\SurveyorHasService;
use App\Models\IndonesiaVillage;
use App\Models\IndonesiaDistrict;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Surveyor extends Model
{
	use HasFactory, SoftDeletes;

	public $table = 'surveyor'; // dilakukan seperti ini agar tidak menjadi plural
	
	protected $guarded  = ['id']; //yang tidak  boleh di isi

	function village()
	{
		return $this->belongsTo(IndonesiaVillage::class, 'surveyor_village');
	}
	function district()
	{
		return $this->belongsTo(IndonesiaDistrict::class, 'surveyor_disctrict');
	}

	public function subServices()
	{
		return $this->hasMany(SurveyorHasService::class, 'surveyor_id', 'id')->with('subLayanan');
	}
}
