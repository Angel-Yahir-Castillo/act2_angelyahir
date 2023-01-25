@extends('header')


@section('title', 'Productos')

@section('content')
    <div class="container">

        <div class="row section">
        {{ Breadcrumbs::render('productos') }}
        <h1>Productos</h1>
            <div class="col s12">
                <a class="btn" href="{{ route('productos.computadoras') }}"> Computadoras </a>
            </div>

            <div class="col s12">
                <a class="btn" href="{{ route('productos.telefonos') }}"> SmarthPhones </a>
            </div>

            <div class="col s12">
                <a class="btn" href="{{ route('productos.tablets') }}"> Tablets </a>
            </div>
        </div>
    </div>
@endsection

