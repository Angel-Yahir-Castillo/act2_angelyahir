@extends('header')

@section('title', 'SmarthPhones')

@section('content')
    <div class="container">
    <div class="row ">
            <br><div class="col m7 l8 s0 "></div>
            <form action="{{ route('busqueda.simple') }}" method="get" class="col l4 m8 s12">
                <div class="row ">
                    <div class="input-field col s11">
                        <input id="nombre" name="nombre" type="text" class="validate" required>
                        <label for="nombre">Buscar Producto:</label>
                    </div>
                    <div class="col s1">
                        <button style="background-color: #fff; border:#fff; cursor:pointer;" type="submit" value=""><i class="material-icons medium">search</i></button>
                    </div>
                </div>
            </form>
        </div>
        <div class="row">
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




