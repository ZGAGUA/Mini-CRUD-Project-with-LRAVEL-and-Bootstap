@extends('layouts.app')

@section('content')

@if(count($errors))
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach($errors->all() as $message)
        <li>{{$message}}</li>

        @endforeach
    </ul>
</div>
@endif

<div class="container">

    <h1>Modification de Salles</h1>

    <div class="row col-md-12">

        <form action="{{url('salle/'.$salle->id)}}" method="post">
            <input type="hidden" name="_method" value="PUT">

            {{csrf_field()}}

            <div class="form-group">
                <label for="">Nom De La Salle</label>
                <input type="text" name="nom" class="form-control" value="{{$salle->nomSalle}}">
            </div>
            <div class="form-group">
                <label for="">Type De La Salle</label>
                <input type="text" name="type" class="form-control" value="{{$salle->typeSalle}}">

            </div>
            <div class="form-group">
                <label for="">Capacité De La Salle</label>
                <input type="text" name="capacite" class="form-control" value="{{$salle->capaciteSalle}}">
            </div>
            <div class="form-group">

                <input type="submit" class="form-control btn btn-danger" value="Modifier">
            </div>
        </form>
    </div>
</div>
@endsection