<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'eventos';

    public function usuarios()
    {
    	return $this->belongsToMany('App\Usuario', 'usuario_eventos', 'usuario_id', 'evento_id');
    }
}
