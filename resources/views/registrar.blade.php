@extends('header')

@section('title', 'Registrarse')

@section('content')
    <div class=" container">

        <div class="row section">
        {{ Breadcrumbs::render('registro') }}
            <form action="{{ route('validar.registro') }}" method="POST" class="col s12">

                @csrf 
                <div class="row card-panel">

                    <center><b>Registrarse</b></center>
                    <div class="input-field col s12">
                        <input id="nombre" type="text" name="nombre" class="validate" required>
                        <label for="nombre">Nombre:</label>
                    </div>

                    <div class="input-field col s12">
                        <input id="correo" name="correo" type="email" class="validate" required>
                        <label for="correo">Correo electronico:</label>
                    </div>

                    <div class="input-field col m5 s11">
                        <input id="contrasena" name="contrasena" type="password" class="validate" required>
                        <label for="contrasena">Contraseña:</label>
                    </div>
                    <div class="col s1">
                        <button style="background-color: #fff; border:#fff; cursor:pointer;" type="button" onclick="mostrarContrasena()"><i class="material-icons ">remove_red_eye</i></button>
                    </div>

                    <div class="input-field col m5 s11">
                        <input id="contra" name="contra" type="password" class="validate" required>
                        <label for="contra">Repetir contraseña:</label>
                    </div>
                    <div class="col s1">
                        <button style="background-color: #fff; border:#fff; cursor:pointer;" type="button" onclick="mostrarContrasena2()"><i class="material-icons ">remove_red_eye</i></button>
                    </div>

                    <center><button class="btn waves-effect waves-light" type="submit" value="">Registrarse
                        <i class="material-icons left">
                            person_add
                        </i>
                    </button></center>

                    <br>

                    <center>¿Ya tienes una cuenta? <a class="" href="{{ route('user.login') }}">Inicia sesion aqui</a></center>

                </div>

                

            </form>
        </div>

    </div>


    <script>
        function mostrarContrasena(){
            var tipo = document.getElementById("contrasena");
            if(tipo.type == "password"){
                tipo.type = "text";
            }else{
                tipo.type = "password";
            }
        }
        function mostrarContrasena2(){
            var tipo = document.getElementById("contra");
            if(tipo.type == "password"){
                tipo.type = "text";
            }else{
                tipo.type = "password";
            }
        }
    </script>
@endsection
