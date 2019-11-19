@extends('layouts.plantilla')

    @section('home', '')
    @section('regiones', '')
    @section('destinos', 'active')

    @section('h1', 'Formulario para Agregar Destino')

    @section('main')
        <div class="alert bg-light">
            <form action="/agregarDestino" method="POST" class="form">
                @csrf
                <input type="text" name="destNombre" placeholder="Nombre del Destino" class="form-control mb-3" required>

                <select name="regID" id="" class="form-control mb-3" required>

                    @foreach($regiones2 as $region)
                <option value="{{$region->regID}}"> {{$region->regNombre}} </option>
                    @endforeach

                </select>

                <input type="number" name="destPrecio" id="" placeholder="Precio" class="form-control mb-3" required>

                <input type="number" name="destAsientos" id="" placeholder="Asientos" class="form-control mb-3" required>

                <input type="number" name="destDisponibles" id="" placeholder="Disponibles" class="form-control mb-3" required>

                <button class="btn btn-dark">Agregar Destino</button>
                <a href="/adminDestinos" class="btn btn-outline-secondary text-dark">Volver a Admin Destinos</a>
            </form>

        </div>

    @endSection
