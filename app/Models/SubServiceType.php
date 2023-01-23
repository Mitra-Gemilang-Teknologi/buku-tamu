<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubServiceType extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'sub_service_type'; // dilakukan seperti ini agar tidak menjadi plural

    protected $fillable = [
        'id_service_type',
        'sub_service_name'
    ];
}
