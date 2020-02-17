@extends('partials.head')

@section('titolo')
    HOME
@endsection

@section('main')

    <div class="clearfix container">
        <h1 class="pull-left">LISTA FRUTTA</h1>
        <a class="btn btn-success pull-right " href="{{route('fruits.create')}}">AGGIUNGI FRUTTO</a>
    </div>
    <div class="container">
        <div class="border">
        <div class="col-sm-4">
            <h2>NOME</h2>
        </div>
        <div class="col-sm-4">
            <h2>PESO</h2>
        </div>
        <div class="col-sm-4">
            <h2>VARIETA'</h2>
        </div>
        </div>
        @forelse ($fruits as $fruit)
            <div class="col-sm-4">
                {{ $fruit->nome }}
            </div>
            <div class="col-sm-4">
                {{ $fruit->peso }}
            </div>
            <div class="col-sm-4">
                {{ $fruit->varieta }}
            </div>
        @empty

        @endforelse
    </div>


@endsection
