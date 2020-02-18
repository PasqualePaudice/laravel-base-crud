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
        <div class="col-sm-2">
            <h2>NOME</h2>
        </div>
        <div class="col-sm-3">
            <h2>PESO</h2>
        </div>
        <div class="col-sm-3">
            <h2>VARIETA'</h2>
        </div>
        <div class="col-sm-4">
            <h2>AZIONI</h2>
        </div>
        </div>
        @forelse ($fruits as $fruit)
            <div class="col-sm-2">
                {{ $fruit->nome }}
            </div>
            <div class="col-sm-3">
                {{ $fruit->peso }}
            </div>
            <div class="col-sm-3">
                {{ $fruit->varieta }}
            </div>
            <div class="col-sm-4">
                <a class="btn btn-primary" href="{{route('fruits.edit',$fruit->id)}}">Modifica</a>
                <a class="btn btn-warning " href="{{ route('fruits.show',$fruit->id)}}">Visualizza</a>
                <form class="" action="{{ route('fruits.destroy',$fruit->id) }}" method="post" style="display:inline-block">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Cancella">

                </form>

            </div>

        @empty

            <p>il db è vuoto</p>

        @endforelse


    </div>


@endsection
