<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Vista de respuesta del formulario</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center my-5">Proceso de datos desde el Form</h1>

        <div class="row justify-content-center">
            <div class="col-6 alert alert-success">
                <p class="text-center mb-0">Tu nombre es: {{ $nombre }}</p>
            </div>
        </div>
    </div>
</body>
</html>