<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitorHasService extends Model
{
	use HasFactory;

	public $table = 'visitor_has_services'; // dilakukan seperti ini agar tidak menjadi plural

	protected $guarded  = ['id']; //yang tidak  boleh di isi

	public function subLayanan()
	{
		return $this->belongsTo(SubServiceType::class, 'sub_service_id', 'id_sub_service_type');
	}
}
