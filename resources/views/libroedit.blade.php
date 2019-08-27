<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Actualizar libro</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  </head>
  <body>
    <div class="container">
      <h2>Actualizar libro</h2><br/>
      <div class="container">
    </div>
      <form method="post" action="{{action('LibroController@update',[$id,auth()->user()->id])}}">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="id">Titulo:</label>
            <label type="text" class="form-control" name="id" value="{{$libro->id}}">{{$id}}</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="titulo">Titulo:</label>
            <label type="text" class="form-control" name="titulo" value="{{$libro->titulo}}">{{$libro->titulo}}</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="autores">Autores:</label>
            <label type="text" class="form-control" name="autores" value="{{$libro->autores}}">{{$libro->autores}}</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="isbn">ISBN:</label>
            <label type="text" class="form-control" name="isbn" value="{{$libro->isbn}}">{{$libro->isbn}}</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="calificacion_promedio">ISBN:</label>
            <input type="text" class="form-control" name="calificacion_promedio" value="{{$libro->calificacion_promedio}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Actualizar</button>
          </div>
        </div>
      </form>
   </div>
  </body>
</html>