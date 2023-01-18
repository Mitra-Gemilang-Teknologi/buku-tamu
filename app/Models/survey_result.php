<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class survey_result extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded  = ['id_survey_result']; //yang tidak  boleh di isi
    public $table = 'survey_result'; // dilakukan seperti ini agar tidak menjadi plural
}
