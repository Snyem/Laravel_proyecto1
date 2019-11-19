<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Formulario</title>
</head>
<body>
    <main class="container">
        <h1 class="text-center my-5">Formulario de Envío</h1>
        <div class="row justify-content-center">
            <div class="alert bg-light col-4 p-4">
                <form action="mostrar" method="post" class="form ">
                    @csrf
                    <label for="nombre">Ingrese su nombre:</label>
                    <input type="text" class="form-control mb-4" placeholder="Nombre" name="nombre">

                    <button class="btn btn-primary btn-block">Enviar</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>