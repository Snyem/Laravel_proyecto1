@extends('layouts.plantilla')

    @section('home', '')
    @section('regiones', 'active')
    @section('destinos', '')

    @section('h1', 'Eliminar Región')

    @section('main')

        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card border-danger text-dark">
                    <div class="card-header">
                        <p class="mb-0 text-center">Datos de la Región a Eliminar</p>
                    </div>
                    <div class="card-body">
                        <p class="mb-0">ID de Región: {{ $region->regID}}</p>
                        <p class="mb-0">Nombre de Región: {{ $region->regNombre}}</p>
                    </div>

                    <form action="/eliminarRegion" method="post" class="form m-3">

                        @csrf
                        <input type="hidden" name="regID" value="{{ $region->regID }}">

                        <div class="row">
                            <div class="col-6">
                                <button class="btn btn-danger btn-block">Confirmar Baja</button>
                            </div>
                            <div class="col-6">
                                <a href="/adminRegiones" class="btn btn-secondary btn-block">Volver a Admin Regiones</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script>
            Swal.fire({
                title: '¿Desea Eliminar el destino?',
                text: "Esta acción no se puede deshacer",
                icon: 'error',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                confirmButtonText: 'Confirmar Baja',
                cancelButtonColor: '#666',
                cancelButtonText: 'Cancelar',
            }).then((result) => {
                if (!result.value) {
                    // redirección
                    window.location = '/adminRegiones';
                }
            });

        </script>

    @endSection
