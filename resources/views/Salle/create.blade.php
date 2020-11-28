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

    <h1>Insertion de Salles</h1>

    <div class="row col-md-12">

        <form action="{{url('salle')}}" method="post">

            {{csrf_field()}}

            <div class="form-group">
                <label for="">Nom De La Salle</label>
                <input type="text" name="nom" class="form-control" value="{{old('nom')}}">
            </div>
            <div class="form-group">
                <label for="">Type De La Salle</label>
                <input type="text" name="type" class="form-control" value="{{old('type')}}">

            </div>
            <div class="form-group">
                <label for="">Capacité De La Salle</label>
                <input type="text" name="capacite" class="form-control" value="{{old('capacite')}}">
            </div>
            <div class="form-group">

                <input type="submit" class="form-control btn btn-primary" value="Enregistrer">
            </div>
        </form>
    </div>
</div>
@endsection