<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\HybridRelations;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HybridRelations;
    protected $connection = 'mysql';
    protected $fillable = [
        'nombre'
    ];

    public function libros()
    {
        return $this->belongsTo('Libro');
    }
}
