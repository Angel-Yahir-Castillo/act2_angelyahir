@extends('header')

@section('title', 'Inicio')

@section('content')
    <div class="container">

        <div class="section row">
        {{ Breadcrumbs::render('home') }}

        <center><h5>INGENIERIA EN DESARROLLO Y GESTION DE SOFTWARE</h5></center>
        <center><img src="{{ asset('img/logo_uthh.png') }}" style="height: 200px; width: 200px;"></center>
        <center><h6>ASIGNATURA: DESARROLLO WEB PROFESIONAL</h6></center>
        <center><h6>ACTIVIDAD 2 - BREADCRUMBS, PAGINAS DE ERROR, BUSQUEDAS, VALIDACION DE DATOS </h6></center> 
        <center><h6>DOCENTE: CARLOS ANDRES RODRIGUEZ ARGUELLES</h6></center><br>
        <center><h6>ALUMNO:</h6></center>
        <center><h5>ANGEL YAHIR HERNÁNDEZ CASTILLO 20200706</h5></center>
        <center><h6>GRADO: 8° GRUPO “B”</h6></center><br>
        <center><h6>25 DE ENERO DEL 2023</h6></center>
        </div>
    </div>

@endsection
