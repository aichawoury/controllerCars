<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'action',
        'model',
        'id_model',
        'id_user'


    ];
}
