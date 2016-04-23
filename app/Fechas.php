<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fechas extends Model
{
    protected $table = 'fechas';

    protected $fillable = ['fecha', 'tipo', 'id_user', 'update_user'];
}
