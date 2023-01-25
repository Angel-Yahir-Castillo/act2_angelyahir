@extends('header')

@section('title', 'Inicio')

@section('content')
    <div class="container">

        <div class="section row">
        {{ Breadcrumbs::render('home') }}

        </div>
    </div>

@endsection
