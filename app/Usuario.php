<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';

    public function eventos()
    {
    	return $this->belongsToMany('App\Evento','usuario_eventos','usuario_id','evento_id');
    }
}
