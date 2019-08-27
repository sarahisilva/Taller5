<?php

namespace App;
use Jenssegers\Mongodb\Eloquent\HybridRelations;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HybridRelations;
    protected $connection = 'mysql';
    protected $fillable = [
        'nombre', 'apellido','email', 'cedula','password','fecha_nacimiento'
    ];

    protected $hidden = [
        'password',
    ];

    public function calificacions()
    {
        return $this->hasMany('Calificacion');
    }
}
