@extends('layouts.plantilla')

    @section('home', '')
    @section('regiones', '')
    @section('destinos', 'active')

    @section('h1', 'Formulario para Modificar Destino')

    @section('main')
        <div class="alert bg-light">
            <form action="/modificarDestino" method="POST" class="form">
                @csrf
                <input type="hidden" name="destID" value="{{$destino->destID}}">

                <input type="hidden" name="regID" value="{{$destino->regID}}">

                <input type="text" name="destNombre" value="{{$destino->destNombre}}" placeholder="Nombre del Destino" class="form-control mb-3" required>

                <select name="regID" id="" class="form-control mb-3" required>

                    @foreach($regiones as $region)
                        @if($region->regID == $destino->regID)
                <option value="{{$region->regID}}" selected> {{$region->regNombre}} </option>
                        @else
                <option value="{{$region->regID}}"> {{$region->regNombre}} </option>
                        @endif
                    @endforeach

                </select>

                <input type="number" name="destPrecio" value="{{$destino->destPrecio}}" id="" placeholder="Precio" class="form-control mb-3" required>

                <input type="number" name="destAsientos" value="{{$destino->destAsientos}}" id="" placeholder="Asientos" class="form-control mb-3" required>

                <input type="number" name="destDisponibles" value="{{$destino->destDisponibles}}" id="" placeholder="Disponibles" class="form-control mb-3" required>

                <button class="btn btn-dark">Modificar Destino</button>
                <a href="/adminDestinos" class="btn btn-outline-secondary text-dark">Volver a Admin Destinos</a>
            </form>

        </div>

    @endSection
