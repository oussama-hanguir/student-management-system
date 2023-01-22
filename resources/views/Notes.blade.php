@extends('layout')
@section('content')

<div class="container mt-5">
    <h2 class="text-primary my-3 text-center">Les notes de </h2>
    <table class="table table-hover w-50 mx-auto">
        <thead>
            <tr>
                <th scope="col">Langage C</th>
                <th scope="col">TP Informatique</th>
                <th scope="col">Algorithmique</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>10</td>
                <td>11</td>
                <td>15</td>
            </tr>
        </tbody>
    </table>
</div>


@endsection