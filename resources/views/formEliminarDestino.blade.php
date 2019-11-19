@extends('layouts.plantilla')

    @section('home', '')
    @section('regiones', '')
    @section('destinos', 'active')

    @section('h1', 'Eliminar Destino')

    @section('main')

        <div class="alert alert-light p-4">
        <form action="/eliminarDestino" method="post" class="form">
            @csrf
            <input type="hidden" name="destID" value="{{$destino->destID}}">
            <div class="row">
                <div class="col-12">
                    <p class="mb-5 text-center">¿Eliminar el destino {{ $destino->destNombre }}?</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-2">
                    <button class="btn btn-outline-success btn-block">Eliminar</button>
                </div>
                <div class="col-2">
                    <a href="/adminDestinos" class="btn btn-outline-danger btn-block">Cancelar</a>
                </div>
            </div>

            </form>
        </div>

    @endSection
