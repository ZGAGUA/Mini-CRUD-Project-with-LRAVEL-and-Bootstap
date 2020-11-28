@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row col-md-12">
        <h1>La list de Salles</h1>

        <table class="table">

            <head>
                <tr>
                    <th>Nom de salle</th>
                    <th>Type de salle</th>
                    <th>Capacité de la salle</th>
                    <th>
                        <div class="pull-right">
                            <a href="{{url('salle/create')}}" class="btn btn-success">Nouveau Salle</a>
                        </div>
                    </th>
                </tr>
            </head>

            <body>
                @foreach($salles as $salle)
                <tr>
                    <td>{{$salle->nomSalle}}</td>
                    <td>{{$salle->typeSalle}}</td>
                    <td>{{$salle->capaciteSalle }}</td>
                    <td>
                        <form action="{{url ('salle/'.$salle->id)}}" method="POST">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}

                            <a href="{{url('salle/'.$salle->id.'/edit')}}" class="btn btn-primary">Editer</a>

                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </body>
        </table>
    </div>
</div>



@endsection