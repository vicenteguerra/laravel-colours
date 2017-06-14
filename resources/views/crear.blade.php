<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Crear</title>
    <style media="screen">
      form{
        width: 100%;
      }
      input, label{
        display: inline-block;
        width: 60%;
        height: 20px;
        margin-left: 20%
      }
    </style>
  </head>
  <body>
    <h1 style="text-align: center">Crear color</h1>
    <form action="/api/colours" method="post">
      <input type="text" name="name" placeholder="Nombre">
      <input type="color" name="rgb" placeholder="código">
      <label for="enabled">Habilitar</label>
      <input type="checkbox" name="enabled">
      <button type="submit" name="button">Guardar Color</button>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>
  </body>
</html>
