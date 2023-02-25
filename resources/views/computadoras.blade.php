@extends('header')

@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script type="text/javascript" src="{{ asset('js/computadora.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
@endsection

@section('title', 'Computadoras')

@section('content')
    <div class="row ">
        <form action="{{ route('busqueda.avanzada') }}" method="get" class="col l6 m6 s12">
            <div class="row">
                <div class="input-field col l4 m5 s5 ">
                    <select name="marca"> 
                        <option value="DELL">DELL</option>
                        <option value="HP">HP</option>
                        <option value="LENOVO">LENOVO</option>
                        <option value="ASUS">ASUS</option>
                        <option value="MOTOROLA">MOTOROLA</option>
                        <option value="SAMSUMG">SAMSUMG</option>
                        <option value="HUAWEI" selected>HUAWEI</option>
                    </select>
                    <label>Marca</label>
                </div>
                <div class="input-field col l4 m5 s6 ">
                    <select name="categoria"> 
                        <option value="computadoras">LAPTOPS</option>
                        <option value="tablets">TABLETS</option>
                        <option value="smarthphones" selected>TELEFONO</option>
                    </select>
                    <label>Categoria</label>
                </div>
                <div class="col s1">
                    <button style="background-color: #fff; border:#fff; cursor:pointer;" type="submit" value=""><i class="material-icons medium">search</i></button>
                </div>
            </div>
        </form>

        <div class="col m0 l1 s0 "></div>
        
        <form action="{{ route('busqueda.simple') }}" method="get" class="col l5 m6 s12">
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
        {{ Breadcrumbs::render('computadoras') }}
    </div>

    <div class="row">
        <center><h3>Computadoras</h3></center>
        <div id="productos"  class="col s12">

        </div>
    </div>

    <script>
        listarComputadoras();
    </script>

    
@endsection




