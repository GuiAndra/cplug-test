<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $table = 'clientes';

    protected $fillable = ['nome', 'telefone'];

    public function animais()
    {
        return $this->hasMany('App\Animais', 'dono_id');
    }
}
