<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndonesiaVillage extends Model
{
	use HasFactory;

	public $table = 'indonesia_villages'; // dilakukan seperti ini agar tidak menjadi plural

}
