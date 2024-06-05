<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encaissement extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'montant',
        'date_confirmation',
        'status',
        'id_user',
    ];
}
