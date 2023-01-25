@extends('header')


@section('title', 'Productos')


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
        {{ Breadcrumbs::render('productos') }}
        <h1>Productos</h1>
            <div class="row">
                <a class="btn" href="{{ route('productos.computadoras') }}"> Computadoras  </a>
            </div>

            <div class="row">
                <a class="btn" href="{{ route('productos.telefonos') }}"> SmarthPhones </a> <br>
            </div>

            <div class="row">
                <a class="btn" href="{{ route('productos.tablets') }}"> Tablets </a> <br>
            </div>
        </div>
    </div>
@endsection

