<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $table = 'doctores';
    protected $fillable = [
        'prefijo','nombre', 'apellido_pa', 'apellido_ma','telefono','celular','estado','especialidad'
    ];
    public function user()
    {
        return $this->hasOne('App\User');
    }

    public function clinica(){
        return $this->hasOne('App\Clinica');
    }
}
