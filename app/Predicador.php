<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Predicador extends Model implements SluggableInterface
{
	use SluggableTrait;

    protected $sluggable = [
        'build_from' => 'nombre',
        'save_to'    => 'slug',
    ];
    
    protected $table = 'predicadores';

    protected $fillable = ['nombre', 'id_user', 'update_user'];
}
