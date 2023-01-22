@extends('layout')
@section('content')

<div class="container mt-5">
         <!-- table ordred by classement -->
         <h2 class="text-center text-secondary">Classement des Etudiants dans la classe</h2>
         <div class="col-md-12 table">
                        <table class="table table-hover  mt-5 ">
                            <thead>
                                <th>N°</th>
                                <th>Nom</th>
                                <th>Langage C</th>
                                <th>TP informatique</th>
                                <th>Algorithmique</th>
                                <th>Moyenne</th>
                            </thead>
                            <tbody>
                                @foreach($users as $usr)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $usr['nom']}}</td>
                                    <td>{{ $usr['langage_c']}}</td>
                                    <td> {{$usr['tp_informatique'] }}</td>
                                    <td> {{$usr['algorithmique'] }}</td>
                                    <td> {{$usr['moyenne'] }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
</div>


@endsection