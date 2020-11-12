<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Pieza</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <div>
        <h1 class="bg-primary text-center text-white">Editar {{$pieza->nombre}}</h1>
    </div>  

    <form class="m-3" action="guardaPieza" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$pieza->id}}">
        Nombre<input type="text" name="nombre" value="{{$pieza->nombre}}">
        Descripción<input type="text" name="descripcion" value="{{$pieza->descripcion}}">
        No. Piezas<input type="number" name="numeroPiezas" value="{{$pieza->numeroPiezas}}">
        Precio <input type="number" step="any" name="precio" value="{{$pieza->precio}}">
        <input type="submit" value="Actualizar">
    </form>


</body>
</html>