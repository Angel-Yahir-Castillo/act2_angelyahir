@extends('header')

@section('title', 'Inicio')

@section('content')

        <div class="row">
            <div class="col s12">
                <div class="slider">
                    <ul class="slides">
                        <li>
                            <a href="{{route('productos.computadoras')}}"><img src="{{ asset('slider/computadora.png') }}"> </a>
                        </li>
                        <li>
                        <a href="{{route('productos.tablets')}}"><img class="image" src="{{ asset('slider/tabletas.jpg') }}"> </a>
                        </li>
                        <li>
                        <a href="{{route('productos.telefonos')}}"><img src="{{ asset('slider/telefonos.jpg') }}"> </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--
        <center><h5>INGENIERIA EN DESARROLLO Y GESTION DE SOFTWARE</h5></center>
        <center><img src="{{ asset('img/logo_uthh.png') }}" style="height: 200px; width: 200px;"></center>
        <center><h6>ASIGNATURA: DESARROLLO WEB PROFESIONAL</h6></center>
        <center><h6>ACTIVIDAD 2 - BREADCRUMBS, PAGINAS DE ERROR, BUSQUEDAS, VALIDACION DE DATOS </h6></center> 
        <center><h6>DOCENTE: CARLOS ANDRES RODRIGUEZ ARGUELLES</h6></center><br>
        <center><h6>ALUMNO:</h6></center>
        <center><h5>ANGEL YAHIR HERNÁNDEZ CASTILLO 20200706</h5></center>
        <center><h6>GRADO: 8° GRUPO “B”</h6></center><br>
        <center><h6>25 DE ENERO DEL 2023</h6></center>
        </div> -->

    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.slider');
            var instances = M.Slider.init(elems,{
                duration: 600,
                interval: 3000,
                height: 500
            });
        });
    </script>




@endsection
