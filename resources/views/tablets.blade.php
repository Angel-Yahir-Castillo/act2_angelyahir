@extends('header')

@section('title', 'Tabletas')

@section('content')
    <div class="container">
        <div class="row section">
        {{ Breadcrumbs::render('tablets') }}
            <div class="col s12">
                @foreach ($tablets as $tableta)
                    <div class="row z-depth-2 section">
                        <div class="col s12 m4 l3">
                            <img class="responsive-img" src="{{ asset('productos_imagenes/'.$tableta->imagen) }}">
                        </div>
                        <div class="col s12 m8 l9">
                            <a href="{{ route('tableta.mostrar', $tableta->nombre) }}"><h4 class="black-text">{{$tableta->nombre}}</h4></a>
                            <h5>$ {{$tableta->precio}}</h5>
                            <h6>Marca: {{$tableta->marca}}</h6>
                            <h6>Modelo: {{$tableta->modelo}}</h6>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection


