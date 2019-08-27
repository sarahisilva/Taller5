<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\HybridRelations;
use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    use HybridRelations;
    protected $connection = 'mysql';
    protected $fillable = [
        'calificacion','id_user','id_libro'
    ];

    public function user()
    {
        return $this->hasOne('User');
    }

    public function libro()
    {
        return $this->hasOne('Libro');
    }
}
