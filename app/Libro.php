<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\Model;

class Libro extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'libros';
    
    protected $fillable = [
        'id','titulo', 'autores','isbn','calificacion_promedio'
    ];

    public function autors()
    {
        return $this->belongsTo('Autor');
    }

    public function calificacion()
    {
        return $this->hasMany('Calificacion');
    }
}
