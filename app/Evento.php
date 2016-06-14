<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'eventos';

    protected $fillable = ['nombre', 'descripcion', 'fecha'];

    public function usuarios()
    {
    	return $this->belongsToMany('App\Usuario', 'usuario_eventos', 'usuario_id', 'evento_id');
    }
}
