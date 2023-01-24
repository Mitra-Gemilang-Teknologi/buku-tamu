<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndonesiaDistrict extends Model
{
	use HasFactory;
	public $table = 'indonesia_districts'; // dilakukan seperti ini agar tidak menjadi plural
}
