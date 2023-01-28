<?php

namespace App\Models;

use App\Models\ServiceType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\SurveyorHasService;

class Surveyor extends Model
{
	use HasFactory, SoftDeletes;

	protected $guarded  = ['id']; //yang tidak  boleh di isi
	public $table = 'surveyor'; // dilakukan seperti ini agar tidak menjadi plural

	public function subServices()
	{
		return $this->hasMany(SurveyorHasService::class, 'surveyor_id', 'id')->with('subLayanan');
	}
}
