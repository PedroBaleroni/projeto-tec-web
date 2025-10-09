<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
	'funcionario_id',
	'data',
	'descricao',
	'user_id'
]
}
