<?php

namespace App\Models;

use App\Models\Visit;
use App\Models\Surveyor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ServiceType extends Model
{
	use HasFactory, SoftDeletes;

	public $table = 'service_type'; // dilakukan seperti ini agar tidak menjadi plural

	protected $fillable = [
		'service_name'
	];


	public function subServices()
	{
		return $this->hasMany(SubServiceType::class, 'id_service_type', 'id_service_type');
	}
	public function visit()
	{
		return $this->belongsTo(Visit::class, 'id_service_type');
	}

	public function surveyor()
	{
		return $this->belongsTo(Surveyor::class, 'id_service_type');
	}
}
