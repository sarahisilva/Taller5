<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    
    <form method="post" action="{{action('LibroController@show')}}">
        @csrf
    <div class="column">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="autores">Autor:</label>
            <input type="text" class="form-control" name="autores">
          </div>
        </div>
        <div class="column">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Buscar</button>
          </div>
        </div>
    </form>
  </div>
  </body>
</html>