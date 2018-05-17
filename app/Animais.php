<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animais extends Model
{
    protected $table = 'animais';

    protected $fillable = ['nome', 'raca', 'peso', 'dono_id'];

    public function cliente()
    {
        return $this->belongsTo('app\Clientes', 'dono_id');
    }
}
