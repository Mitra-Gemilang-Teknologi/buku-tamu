<?php

namespace App\Models;

use App\Models\ServiceType;
use App\Models\SubServiceType;
use App\Models\VisitorHasService;
use App\Models\IndonesiaVillage;
use App\Models\IndonesiaDistrict;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Visit extends Model
{
	use HasFactory, SoftDeletes;

	public $table = 'visits'; // dilakukan seperti ini agar tidak menjadi plural

	protected $guarded  = ['id']; //yang tidak  boleh di isi

	function village()
	{
		return $this->belongsTo(IndonesiaVillage::class, 'visitor_village');
	}
	function district()
	{
		return $this->belongsTo(IndonesiaDistrict::class, 'visitor_disctrict');
	}
	public function subServices()
	{
		return $this->hasMany(VisitorHasService::class, 'visitor_id', 'id')->with('subLayanan');
	}
	public function service()
	{
		return $this->hasMany(VisitorHasService::class, 'visitor_id', 'id')->with('layanan');
	}
}
