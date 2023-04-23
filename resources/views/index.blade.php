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
