<?php
namespace App;

use Illuminate\Foundation\Auth\User;

class Usuario extends User
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function eventos()
    {
    	return $this->belongsToMany('App\Evento','usuario_eventos','usuario_id','evento_id');
    }
}
