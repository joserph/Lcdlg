<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Predica extends Model
{
    protected $table = 'predicas';

    protected $fillable = ['title', 'fecha', 'content', 'estatus', 'id_user', 'update_user', 'audio', 'video', 'id_predicador', 'id_mes', 'id_anio'];

    public function fecha()
    {
    	return $this->belongsTo('App\Fecha');
    }

    public function predicador()
    {
    	return $this->belongsTo('App\Predicador');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
