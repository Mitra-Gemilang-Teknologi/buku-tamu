<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AnswerOption extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'answer_option'; // dilakukan seperti ini agar tidak menjadi plural

    protected $fillable = [
        'answer_value',
        'answer_description',
        'answer_icon',
    ];
}
