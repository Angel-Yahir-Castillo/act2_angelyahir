@extends('header')

@section('title', 'Login')

@section('content')
    <div class="section container">

        <div class="row">

            <div class="col m2 l3 s0"></div>
            <form action="{{ route('inicia.sesion') }}" method="POST" class="col l6 m8 s12">
            @csrf 
                <div class="row card-panel">

                    <center><b>Iniciar sesion</b></center>
                    <div class="input-field col s12">
                        <input id="correo" name="correo" type="email" class="validate" required>
                        <label for="correo">Correo electronico:</label>
                    </div>

                    <div class="input-field col s11">
                        <input id="contrasena" name="contrasena" type="password" class="validate" required>
                        <label for="contrasena">Contraseña:</label>
                    </div>
                    <div class="col s1">
                        <button style="background-color: #fff; border:#fff; cursor:pointer;" type="button" onclick="mostrarContrasena()"><i class="material-icons ">remove_red_eye</i></button>
                    </div>

                    <center><input class="btn" type="submit" value="Iniciar sesion"></input></center>

                    <br>

                    <center> ¿No tienes una cuenta?  <a class="" href="{{ route('user.registro') }}">Registrarse aqui</a></center>

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
    </script>
@endsection
