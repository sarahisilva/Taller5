<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
      <th>Id</th>
        <th>Titulo</th>
        <th>Autores</th>
        <th>ISBN</th>
        <th>Calificación promedio</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($libros as $libro)
      <tr>
        <td>{{$libro->id}}</td>
        <td>{{$libro->titulo}}</td>
        <td>{{$libro->autores}}</td>
        <td>{{$libro->isbn}}</td>
        <td>{{$libro->calificacion_promedio}}</td>
        <td><a href="{{action('LibroController@edit', $libro->id)}}" class="btn btn-warning">Calificar</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>