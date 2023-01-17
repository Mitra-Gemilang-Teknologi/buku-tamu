<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Kunjungan extends Model
{
	use HasFactory, SoftDeletes;

	public $table = 'kunjungan'; // dilakukan seperti ini agar tidak menjadi plural
	protected $guarded  = ['id_kunjungan']; //yang tidak  boleh di isi
}
