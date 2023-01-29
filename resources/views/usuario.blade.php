@extends('header_user')

@section('title', 'Bienvenido')

@section('content')

<center><h3>Bienvenido @auth {{Auth::user()->name}} @endauth</h3></center>

<div class="row">
    <div class="col s12 m3 l4"></div>
        <div class="col s12 m6 l4">
            <img class="responsive-img" alt="Imagen de un telefono Feliz" src="{{ asset('img/feliz.jpg') }}">
        </div>
    <div class="col s12 m3 l4"></div>
</div>
@endsection

