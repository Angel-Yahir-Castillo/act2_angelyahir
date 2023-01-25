@extends('header_user')

@section('title', 'Bienvenido')

@section('content')

<h1>Bienvenido @auth {{Auth::user()->name}} @endauth</h1>
@endsection

