<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surveyor extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded  = ['id_surveyor']; //yang tidak  boleh di isi
    public $table = 'surveyor'; // dilakukan seperti ini agar tidak menjadi plural
}
