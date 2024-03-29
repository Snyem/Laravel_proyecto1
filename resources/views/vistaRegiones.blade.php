@extends('layouts.plantilla')

    @section('home', '')
    @section('regiones', 'active')
    @section('destinos', '')

    @section('h1', 'Listado de Regiones')

    @section('main')

    @if (session('mensaje'))
    <div class="alert alert-success">
        {{ session('mensaje') }}
    </div>
    @endif

    <ul>
        @foreach ($regiones as $region)
            <li>{{$region->regID}} - {{$region->regNombre}} </li>

        @endforeach
    </ul>

    @endSection
