@extends('layouts.plantilla')

    @section('home', '')
    @section('regiones', '')
    @section('destinos', 'active')

    @section('h1', 'Administración de Destinos')

    @section('main')

    @if (session('mensaje'))
    <div class="alert alert-success text-center">
        {{ session('mensaje') }}
    </div>
    @endif

    <table class="table table-striped table-hover">
        <thead class="thead-dark text-center">
            <tr>
                <th class="align-middle">ID</th>
                <th class="align-middle">Destino</th>
                <th class="align-middle">Región</th>
                <th class="align-middle">Precio</th>
                <th class="align-middle">Asientos</th>
                <th class="align-middle">Disponibles</th>
                <th colspan="2" class="text-right">
                    <a href="/formAgregarDestino" class="btn btn-outline-success">Agregar Nuevo Destino</a>
                </th>
            </tr>
        </thead>
        <tbody class="bg-light text-center">
            @foreach( $destinos as $destino)
            <tr>
                <td class="align-middle"> {{ $destino->destID }} </td>
                <td class="align-middle">{{ $destino->destNombre }}</td>
                {{-- <td class="align-middle">{{ $destino->regNombre }}</td> --}}
                <td class="align-middle">{{ $destino->relRegion->regNombre }}</td>
                <td class="align-middle">{{ $destino->destPrecio }}</td>
                <td class="align-middle">{{ $destino->destAsientos }}</td>
                <td class="align-middle">{{ $destino->destDisponibles }}</td>
                <td class="accionesTabla">
                    <a href="/formModificarDestino/{{ $destino->destID }}" class="btn btn-outline-warning text-center">Modificar</a>
                </td>
                <td class="accionesTabla">
                    <a href="/formEliminarDestino/{{ $destino->destID }}" class="btn btn-outline-danger text-center">Eliminar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endSection
