<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Predicador extends Model
{    
    protected $table = 'predicadores';

    protected $fillable = ['nombre', 'id_user', 'update_user'];

    public function predicas()
    {
        return $this->hasMany('App\Predica');
    }
}
