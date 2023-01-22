<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'question'; // dilakukan seperti ini agar tidak menjadi plural

    protected $fillable = [
        'question_description',
        'question_image',
    ];
}
