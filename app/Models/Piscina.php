<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Piscina extends Model
{
    protected $fillable =[
        'nome',
        'capacidade',
        'agenda',
        'ativa'
    ];

    protected $table = 'piscinas';
}
