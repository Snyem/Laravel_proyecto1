<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="/css/estilos.css"> -->
    <!-- se puede hacer con helpers -->
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <title>Document</title>
</head>
<body>
    <!-- {{date('d/m/Y')}} -->

    <h1>Hola Mundo</h1>

    @if ( isset($nombre) ) 
        Bienvenido {{ $nombre }}
    @endif

    <br>

    @for($i=0; $i<$numero; $i++)

    {{ $i }} <br>

    @endFor

    <ul>
        @forEach( $marcas as $marca )
    
        <li>{{ $marca }} </li>

        @endForEach
    </ul>

</body>
</html>