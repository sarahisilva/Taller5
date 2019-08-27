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
        <th>Libro</th>
        <th>Usuario</th>
        <th>Calificación</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($calificacions as $calificacion)
      <tr>
        <td>{{$calificacion->id}}</td>
        <td>{{$calificacion->id_libro}}</td>
        <td>{{$calificacion->id_user}}</td>
        <td>{{$calificacion->calificación}}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>