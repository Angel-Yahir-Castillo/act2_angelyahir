@extends('header')


@section('title', 'Productos')


@section('content')
    
    <div class="row">
        <form id="busquedaA" action="" method="" class="col l5 m6 s12">
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
                        <option selected value="computadoras">LAPTOPS</option>
                        <option value="tablets">TABLETS</option>
                        <option value="smarthphones" >TELEFONO</option>
                    </select>
                    <label>Categoria</label>
                </div>
                <div class="col s1">
                    <button style="background-color: #fff; border:#fff; cursor:pointer;" onclick="busquedaAvanzada()" type="button" value=""><i class="material-icons medium">search</i></button>
                </div>
            </div>
        </form>

        <div class="col m0 l3 s0 "></div>

        <form action="{{ route('busqueda.simple') }}" method="get" class="col l4 m6 s12">
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
    {{ Breadcrumbs::render('productos') }}
    </div>
    <div class="row ">
        <div class="col s4">
           <center> <a class="btn" href="{{ route('productos.computadoras') }}"> Computadoras  </a></center>
        </div>
        <div class="col s4">
        <center><a class="btn" href="{{ route('productos.telefonos') }}"> SmarthPhones </a> </center>
        </div>
        <div class="col s4">
        <center><a class="btn" href="{{ route('productos.tablets') }}"> Tablets </a> <br></center>
        </div>
    </div>

    <div class="row">
        <center><h3>Productos</h3></center>
        <div id="productos"  class="col s12">

        </div>
    </div>
    
    <script>


        listarProductos();
    </script>
@endsection

