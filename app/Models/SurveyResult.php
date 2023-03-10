<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SurveyResult extends Model
{
    use HasFactory, SoftDeletes;
    
    public $table = 'survey_result'; // dilakukan seperti ini agar tidak menjadi plural

    protected $guarded  = ['id_survey_result']; //yang tidak  boleh di isi

}
