@extends('layout')
@section('content')

<div class="container mt-5">
         <!-- table ordred by classement -->
         <h2 class="text-center text-secondary">Classement des Etudiants dans le Langage C</h2>
         <div class="col-md-12 table">
                        <table class="table table-hover mt-5 w-50 mx-auto">
                            <thead>
                                <th>N°</th>
                                <th>Nom</th>
                                <th>Note</th>
                            </thead>
                            <tbody>
                                @foreach($users as $usr)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $usr['nom']}}</td>
                                    <td>{{ $usr['langage_c']}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
</div>


@endsection