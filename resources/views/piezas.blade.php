<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piezas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div>
        <h1 class="bg-primary text-center text-white">Piezas</h1>
    </div>    

    <form class="m-3" action="/registroPieza" method="POST">
        @csrf
        Nombre<input type="text" name="nombre">
        Descripción<input type="text" name="descripcion">
        No. Piezas<input type="number" name="numeroPiezas">
        Precio <input type="number" step="any" name="precio">
        <input type="submit">
    </form>

    <div class="row mr-3 ml-3">
        <div class="col bg-primary text-center text-white border-right">
            Nombre
        </div>
        <div class="col bg-primary text-center text-white border-right">
            Descripción
        </div>
        <div class="col bg-primary text-center text-white  border-right">
            No. Piezas
        </div>
        <div class="col bg-primary text-center text-white">
            Precio MXN
        </div>
        <div class="col bg-primary text-center text-white">
            Borrar
        </div>
    </div>

    @if(!is_null($piezas))   
                @foreach($piezas as $p)  
                <div class="row mr-3 ml-3 bg-light border-bottom"> 
                    <div class="col text-center">
                        <a href="/editarPieza/{{$p->id}}">{{$p->nombre}}</a>
                    </div>  
                    <div class="col">
                        {{$p->descripcion}}
                    </div>  
                    <div class="col text-center">
                        {{$p->numeroPiezas}}
                    </div>  
                    <div class="col text-center">
                        {{$p->precio}}
                    </div>  
                    <div class="col text-center">
                        <a href="/borrarPieza/{{$p->id}}">Si</a>
                    </div>  
                </div>
                @endforeach         
        @endif
  
  

</body>
</html>