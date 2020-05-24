<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinica extends Model
{
    protected $table = 'clinicas';

    public function administrador(){
        return $this->hasOne('App\Admin');
    }
    public function doctor(){
        return $this->belongsTo('App\Doctor');
    }
}
