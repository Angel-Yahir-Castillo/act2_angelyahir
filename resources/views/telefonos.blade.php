@extends('header')

@section('title', 'SmarthPhones')

@section('content')
    <div class="container">
        <div class="row section">
        {{ Breadcrumbs::render('telefonos') }}
            <div class="col s12">
                @foreach ($telefonos as $telefono)
                    <div class="row z-depth-2 section">
                        <div class="col s12 m4 l3">
                            <img class="responsive-img" src="{{ asset('productos_imagenes/'.$telefono->imagen) }}">
                        </div>
                        <div class="col s12 m8 l9">
                            <a href="{{ route('telefono.mostrar', $telefono->nombre) }}"><h4 class="black-text">{{$telefono->nombre}}</h4></a>
                            <h5>$ {{$telefono->precio}}</h5>
                            <h6>Marca: {{$telefono->marca}}</h6>
                            <h6>Modelo: {{$telefono->modelo}}</h6>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection




