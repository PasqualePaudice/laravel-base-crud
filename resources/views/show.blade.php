@extends('partials.head')

@section('titolo')
    SHOW
@endsection

@section('main')
    <div class="container">
        <h2>Prodotto id= {{$fruit->id}}</h2>
    </div>
    <div class="container">
        <ul>
            <li>Nome: {{ $fruit->nome }}</li>
            <li>Varietà: {{ $fruit->varieta }}</li>
            <li>Peso(g): {{ $fruit->peso }}</li>
            <li>Data Creazione: {{ $fruit->created_at }}</li>
            <li>Data Modifica: {{ $fruit->updated_at }}</li>
        </ul>
    </div>

    <div class="container">
        <a class="btn btn-success" href="{{ route('fruits.index')}}">Torna alla Homepage</a>
    </div>

@endsection
