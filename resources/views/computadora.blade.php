@extends('header')

@section('title', $producto->nombre)

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
        <div class="row ">
        {{ Breadcrumbs::render('ver_computadora', $producto) }}
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

