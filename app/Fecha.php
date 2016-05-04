<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Fecha extends Model implements SluggableInterface
{
	use SluggableTrait;

    protected $sluggable = [
        'build_from' => 'fecha',
        'save_to'    => 'slug',
    ];
    
    protected $table = 'fechas';

    protected $fillable = ['fecha', 'tipo', 'id_user', 'update_user'];
}
