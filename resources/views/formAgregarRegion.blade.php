@extends('layouts.plantilla')

    @section('home', '')
    @section('regiones', 'active')
    @section('destinos', '')

    @section('h1', 'Formulario para Agregar Región')

    @section('main')
        <div class="alert bg-light">
            <form action="/agregarRegion" method="POST" class="form">
                @csrf
                <input type="text" name="regNombre" placeholder="Nombre de la Región" class="form-control mb-3" required>

                <button class="btn btn-dark">Agregar Región</button>
                <a href="/adminRegiones" class="btn btn-outline-secondary text-dark">Volver a Admin Regiones</a>
            </form>

        </div>

    @endSection
