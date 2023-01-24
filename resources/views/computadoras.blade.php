@extends('header')

@section('title', 'Computadoras')

@section('content')
    <div class="container">
        <div class="row section">
        {{ Breadcrumbs::render('computadoras') }}
            <div class="col s12">
                @foreach ($computadoras as $computadora)
                    <div class="row z-depth-2 section">
                        <div class="col s12 m4 l3">
                            <img class="responsive-img" src="{{ asset('productos_imagenes/'.$computadora->imagen) }}">
                        </div>
                        <div class="col s12 m8 l9">
                            <a href="{{ route('computadoras.mostrar', $computadora->nombre) }}"><h4 class="black-text">{{$computadora->nombre}}</h4></a>
                            <h5>$ {{$computadora->precio}}</h5>
                            <h6>Marca: {{$computadora->marca}}</h6>
                            <h6>Modelo: {{$computadora->modelo}}</h6>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection




