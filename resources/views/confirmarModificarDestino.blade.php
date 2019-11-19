@extends('layouts.plantilla')

    @section('home', '')
    @section('regiones', '')
    @section('destinos', 'active')

    @section('h1', 'Confirmar los Nuevos Datos de Destino')

    @section('main')

            <div class="row justify-content-center">
                <div class="col-6 bg-light text-dark p-3">
                    <p>Nombre: {{$nuevoDestino['destNombre']}}</p>
                    <p>Región: {{$regNombre}}</p>
                    <p>Precio: {{$nuevoDestino['destPrecio']}}</p>
                    <p>Asientos: {{$nuevoDestino['destAsientos']}}</p>
                    <p>Disponibles: {{$nuevoDestino['destDisponibles']}}</p>

                    <form action="/modificarDestino" method="POST" class="form">
                        @csrf
                        <input type="hidden" name="destID" value="{{$nuevoDestino['destID']}}">
                        <input type="hidden" name="destNombre" value="{{$nuevoDestino['destNombre']}}" placeholder="Nombre del Destino" class="form-control mb-3" required>
                        <input type="hidden" name="regID" value="{{$nuevoDestino['regID']}}">
                        <input type="hidden" name="destPrecio" value="{{$nuevoDestino['destPrecio']}}" id="" placeholder="Precio" class="form-control mb-3" required>
                        <input type="hidden" name="destAsientos" value="{{$nuevoDestino['destAsientos']}}" id="" placeholder="Asientos" class="form-control mb-3" required>
                        <input type="hidden" name="destDisponibles" value="{{$nuevoDestino['destDisponibles']}}" id="" placeholder="Disponibles" class="form-control mb-3" required>

                        <div class="row my-3 mx-0">
                            <div class="col-4">
                                <button class="btn btn-block btn-outline-success">Correcto</button>
                            </div>
                            <div class="col-4">
                                <a href="/formModificarDestino/{{$nuevoDestino['destID']}}" class="btn btn-block btn-outline-warning">Corregir</a>
                            </div>
                            <div class="col-4">
                                <a href="/adminDestinos" class="btn btn-block btn-outline-danger">Cancelar</a>
                            </div>
                        </div>
                    </form>



                </div>
            </div>


    @endSection
