<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('img/logo.png') }}">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>@yield('title')</title>
    
</head>

<body>
    <div class="navbar-fixed">
        <nav style="background-color: #143D59;" >
            <div class="nav-wrapper">
                <a href="{{ route('home')}}"  class="brand-logo center white-text">Actividad 2</a>
                <a href="#" data-target="menu-responsive" class="sidenav-trigger">
                    <i class="material-icons">menu</i>
                </a>
    
                <ul class="right hide-on-med-and-down" style="padding-right:20px">
                    <li><a  href="{{ route('home')}}" style="<?php if(request()->Is('inicio')) echo 'background-color: #F4B41A; color:#000;';?>" class=""><b>Inicio</b></a></li> 
                    <li>
                        <a class="" href="{{ route('productos.show') }}" style="<?php if(request()->Is('productos')) echo 'background-color: #F4B41A; color:#000;'; ?>">
                            <b>Productos</b>
                            <i class="material-icons left">
                            computer
                            </i>
                        </a>
                    </li>
                    <li>
                        <a class="" href="{{ route('user.logout') }}">
                            Cerrar sesion
                            <i class="material-icons left">
                                person_add
                            </i>
                        </a>
                    </li>
                </ul>
    
            </div>
            
        </nav>
    </div>

    
    @yield('content')
    

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            M.AutoInit();
        });
    </script>
</body>
</html>