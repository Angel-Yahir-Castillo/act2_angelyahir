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

    @if(Auth::check())
    
        <div class="navbar-fixed">
            <nav style="background-color: #143D59;" >
                <div class="nav-wrapper">
                    <a href="{{ route('user.sesion')}}"  class="brand-logo center white-text">Actividad 2</a>
                    <a href="#" data-target="menu-responsive" class="sidenav-trigger">
                        <i class="material-icons">menu</i>
                    </a>
        
                    <ul class="right hide-on-med-and-down" style="padding-right:20px">
                        
                        <li><a  href="{{ route('user.sesion')}}" style="<?php if(request()->Is('inicio')) echo 'background-color: #F4B41A; color:#000;';?>" class=""><b>Inicio</b></a></li> 
                        <li>
                            <a class="" href="{{ route('productos.show') }}" style="<?php if(request()->Is('productos') or request()->Is('productos/*')) echo 'background-color: #F4B41A; color:#000;'; ?>">
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
                                    keyboard_tab
                                </i>
                            </a>
                        </li>
                    </ul>
        
                </div>
                
            </nav>
        </div>

    @else

        <div class="navbar-fixed">
            <nav style="background-color: #143D59;" >
                <div class="nav-wrapper">
                    <a href="{{ route('home')}}"  class="brand-logo center white-text">Actividad 2</a>
                    <a href="#" data-target="menu-responsive" class="sidenav-trigger">
                        <i class="material-icons">menu</i>
                    </a>
        
                    <ul class="right hide-on-med-and-down" style="padding-right:20px">
                        <li><a  href="{{ route('home')}}" style="<?php if(request()->Is('/')) echo 'background-color: #F4B41A; color:#000;';?>" class=""><b>Inicio</b></a></li> 
                        <li>
                            <a class="" href="{{ route('productos.show') }}" style="<?php if(request()->Is('productos/*') or request()->Is('productos')) echo 'background-color: #F4B41A; color:#000;'; ?>">
                                <b>Productos</b>
                                <i class="material-icons left">
                                computer
                                </i>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-trigger" href="#" data-target="id_sesiones" style="<?php if (request()->Is('login') or request()->Is('registro')) echo 'background-color: #F4B41A; color:#000;'; ;?>">
                                <b>Cuenta</b>
                                <i class="material-icons left">
                                    account_circle
                                </i>
                            </a>
                        </li>
                        <li>
                        <a class="" href="{{ route('respaldo.db') }}">
                            <b>Respaldo de informacion</b>
                            <i class="material-icons left">
                            computer
                            </i>
                        </a>
                        </li>
                    </ul>
        
                </div>
                
            </nav>
        </div>

        <ul id="id_sesiones" class="dropdown-content">
            <li>
                <a class="black-text" href="{{ route('user.login') }}">
                    Login
                    <i class="material-icons left">
                        person
                    </i>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a class="black-text" href="{{ route('user.registro') }}">
                    Registrarse
                    <i class="material-icons left">
                        person_add
                    </i>
                </a>
            </li>
        </ul>

        <ul id="id_sesionResp" class="dropdown-content">
            <li>
                <a class="black-text" href="{{ route('user.login') }}">
                    Iniciar sesion
                    <i class="material-icons left">
                        person
                    </i>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a class="black-text" href="{{ route('user.registro') }}">
                    Registrarse
                    <i class="material-icons left">
                        person_add
                    </i>
                </a>
            </li>
        </ul>



    @endif

    
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