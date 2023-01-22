@extends('layout')
@section('content')

<div class="container mt-5">
    <h2 class="text-center my-5 text-primary">Bonjour <strong>{{ $user['nom'] }}</strong></h2>
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Mes Notes</h5>
                    <button class="btn btn-primary" id="notes">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                        </svg>
                    </button>
                    <!-- <strong>{{ $user['langage_c'] }}</strong> -->
                    <div class="col-md-12">
                        <table class="table table-responsive h-0 mt-5 ">
                            <thead>
                                <th>Langage C</th>
                                <th>TP informatique</th>
                                <th>Algorithmique</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="p-1">{{ $user['langage_c']}}</td>
                                    <td class="p-1"> {{$user['tp_informatique'] }}</td>
                                    <td class="p-1"> {{$user['algorithmique'] }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Voir Mon classement dans la classe</h5>
                    <a href="{{ route('classement') }}" target="_blank" class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"          fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                        </svg>
                    </a>

                </div>
            </div>
        </div>

        <div class="col-sm-6 mt-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><strong>Demande:</strong> Note eliminatoire</h5>
                    <button class="btn btn-warning btn-demande">Faire une demande</button>
                    <div class="input-group mt-3 demande">
                        <input type="text" class="form-control" placeholder="Entrer votre message" aria-label="Entrer votre message" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-warning" type="button">Envoyer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 mt-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Quitter la classe</h5>
                    <form action="{{ route('destroy', $user->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                      <button class="btn btn-danger mt-2" type="submit" onclick="return confirm('Voulez-vous vraiment quitter la classe ?')" >
                        Quitter La classe
                      </button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Classement pour chaque matière -->

        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Voir Mon classement pour chaque matière</h5>
                    <a href="{{ route('ClassementParLangageC') }}" target="_blank" class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"          fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                        </svg>
                    </a>
                    <div class="container text-center">
                        <div class="row align-items-start">
                            <div class="col">
                                <a href="{{ route('ClassementParLangageC') }}" class="nav-link" target="_blank">Langage C</a>
                            </div>
                            <div class="col">
                                <a href="" class="nav-link">TP informatique</a>
                            </div>
                            <div class="col">
                                <a href="" class="nav-link">Algorithmique</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection
