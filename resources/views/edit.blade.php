@extends('partials.head')

@section('titolo')
    Creazione
@endsection

<h1>Modifica FRUTTO</h1>


    <div class="container">

        <div class="row">

            <form class="" action="{{route('fruits.update',['fruit'=>$fruit->id])}}" method="post">

                @csrf
                @method('PUT')
                    <div class="form-group">
                        <label for="nome" class=" mt-2 col-sm-4 col-sm-offset-4">nome</label>
                        <input type="text" name="nome" placeholder="{{$fruit->nome}}" class="col-sm-4 col-sm-offset-4">
                    </div>



                    <div class="form-group">
                        <label for="nome" class="mt-2 col-sm-4 col-sm-offset-4">peso</label>
                        <input type="text" name="peso" placeholder="{{$fruit->peso}}" class="col-sm-4 col-sm-offset-4">
                    </div>


                    <div class="form-group">
                        <label for="nome" class="mt-2 col-sm-4 col-sm-offset-4">varieta</label>
                        <input type="text" name="varieta" placeholder="{{$fruit->varieta}}" class="col-sm-4 col-sm-offset-4">
                    </div>

                    <div class="col-sm-12">
                        <button class="col-sm-offset-4" type="submit" name="button">MODIFICA</button>
                    </div>





            </form>

        </div>




    </div>
