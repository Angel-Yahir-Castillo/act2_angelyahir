@extends('header')

@section('title', $producto->nombre)

@section('content')
    <div class="container">
        <div class="row section">
        {{ Breadcrumbs::render('ver_tableta', $producto) }}
            <div class="col s12">
                <div class="row z-depth-2 section">
                    <div class="col s12 m4 l3">
                        <img class="responsive-img" src="{{ asset('productos_imagenes/'.$producto->imagen) }}">
                    </div>
                    <div class="col s12 m8 l9">
                        <h4 class="black-text">{{$producto->nombre}}</h4>
                        <h5>$ {{$producto->precio}}</h5>
                        <h6>Marca: {{$producto->marca}}</h6>
                        <h6>Modelo: {{$producto->modelo}}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
