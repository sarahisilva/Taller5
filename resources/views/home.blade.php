@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">¡Bienvenido!</div>
                <div class="flex-center position-ref full-height">
                <div class="links">
                    <a href="{{ url('libro') }}">Calificar libros</a>
                    <a href="{{action('CalificacionController@show',auth()->user()->id)}}">Ver libros calificados</a>
                    <a href="{{action('AutorController@index')}}">Filtrar libros por autor</a>
                </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">Perfil de usuario</div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label for="nombre">Nombre:</label>
                        <label class="form-control" name="nombre" >{{auth()->user()->nombre}}</label>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label for="apellido">Apellido:</label>
                        <label class="form-control" name="apellido" >{{auth()->user()->apellido}}</label>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label for="email">Correo:</label>
                        <label class="form-control" name="email">{{auth()->user()->email}}</label>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label for="cedula">Cedula:</label>
                        <label class="form-control" name="cedula">{{auth()->user()->cedula}}</label>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label for="fecha_nacimiento">Fecha de nacimiento:</label>
                        <label class="form-control" name="fecha_nacimiento" >{{auth()->user()->fecha_nacimiento}}</label>
                    </div>
                    </div>
            </div>
        </div>

    </div>
</div>
@endsection
