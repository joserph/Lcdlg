<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Predica extends Model
{
    protected $table = 'predicas';

    protected $fillable = ['title', 'fecha', 'content', 'estatus', 'id_user', 'update_user', 'audio', 'video', 'predicador_id', 'mes_id', 'anio_id'];

    public function fecha()
    {
    	return $this->belongsTo('App\Fecha', 'mes_id', 'anio_id');
    }

    public function predicador()
    {
    	return $this->belongsTo('App\Predicador', 'predicador_id');
    }

    public function user()
    {
    	return $this->belongsTo('App\User', 'id_user');
    }
}
