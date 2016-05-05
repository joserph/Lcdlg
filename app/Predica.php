<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Predica extends Model
{
    protected $table = 'predicas';

    protected $fillable = ['title', 'fecha', 'content', 'estatus', 'id_user', 'update_user', 'audio', 'video', 'id_predicador', 'id_mes', 'id_anio'];
}
