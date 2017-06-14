<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Colores</title>
    <style media="screen">
      table{
        width: 80%;
        margin-left: 10%;
        text-align: center;
      }
      td, th{
        padding: 8px 0;
      }
    </style>
  </head>
  <body>
    <table>
      <thead>
        <th>Id</th>
        <th>Nombre</th>
        <th>Código</th>
        <th>Habilitado</th>
      </thead>
      @foreach($colores as $color)
        <tr style="background-color: #{{$color->rgb}}">
          <td>{{ $color->id }}</td>
          <td>{{ $color->name }}</td>
          <td>#{{ $color->rgb }}</td>
          @if ($color->enabled)
            <td>SI</td>
          @else
            <td>NO</td>
          @endif
        </tr>
      @endforeach
    </table>
  </body>
</html>
