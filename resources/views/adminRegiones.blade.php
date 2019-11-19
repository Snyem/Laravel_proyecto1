@extends('layouts.plantilla')

    @section('home', '')
    @section('regiones', 'active')
    @section('destinos', '')

    @section('h1', 'Panel de Administración de Regiones')

    @section('main')

    @if (session('mensaje'))
    <div class="alert alert-success text-center">
        {{ session('mensaje') }}
    </div>
    @endif

    <table class="table  table-striped table-hover">
        <thead class="thead-dark text-center">
            <tr>
                <th class="align-middle">ID</th>
                <th class="align-middle">Región</th>
                <th colspan="2" class="text-right">
                    <a href="/formAgregarRegion" class="btn btn-outline-success">Agregar Nueva Región</a>
                </th>
            </tr>
        </thead>
        <tbody class="bg-light text-center">
            @foreach( $regiones as $region)
            <tr>
                <td class="align-middle"> {{ $region->regID}} </td>
                <td class="align-middle">{{ $region->regNombre}}</td>
                <td class="accionesTabla">
                    <a href="/formModificarRegion/{{ $region->regID}}" class="btn btn-outline-warning text-center">Modificar</a>
                </td>
                <td class="accionesTabla">
                    <a href="/formEliminarRegion/{{ $region->regID}}" class="btn btn-outline-danger text-center">Eliminar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @endSection
