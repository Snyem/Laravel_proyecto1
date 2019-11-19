@extends('layouts.plantilla')

    @section('home', '')
    @section('regiones', 'active')
    @section('destinos', '')

    @section('h1', 'Formulario para Modificar Región')

    @section('main')
        <div class="alert bg-light">
            <form action="/modificarRegion" method="POST" class="form">
                @csrf
                <input type="text" name="regNombre" value="{{$region->regNombre}}" placeholder="Nombre de la Región" class="form-control mb-3" required>
                <input type="hidden" name="regID" value="{{$region->regID}}">

                <button class="btn btn-dark">Modificar Región</button>
                <a href="/adminRegiones" class="btn btn-outline-secondary text-dark">Volver a Admin Regiones</a>
            </form>

        </div>

    @endSection
