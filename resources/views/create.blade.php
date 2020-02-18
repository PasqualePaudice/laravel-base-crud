@extends('partials.head')

@section('titolo')
    Creazione
@endsection

<h1>AGGIUNGI FRUTTO</h1>


    <div class="container">

        <div class="row">

            <form class="" action="{{route('fruits.store')}}" method="post">

                @csrf
                    <div class="form-group">
                        <label for="nome" class=" mt-2 col-sm-4 col-sm-offset-4">Inserisci nome</label>
                        <input type="text" name="nome" placeholder="Nome" class="col-sm-4 col-sm-offset-4" required>
                    </div>



                    <div class="form-group">
                        <label for="nome" class="mt-2 col-sm-4 col-sm-offset-4">Inserisci peso</label>
                        <input type="text" name="peso" placeholder="Peso" class="col-sm-4 col-sm-offset-4" required>
                    </div>


                    <div class="form-group">
                        <label for="nome" class="mt-2 col-sm-4 col-sm-offset-4">Inserisci varieta</label>
                        <input type="text" name="varieta" placeholder="Varieta" class="col-sm-4 col-sm-offset-4">
                    </div>

                    <div class="col-sm-12">
                        <button class="col-sm-offset-4" type="submit" name="button">AGGIUNGI</button>
                    </div>





            </form>

        </div>




    </div>
