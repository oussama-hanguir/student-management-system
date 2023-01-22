@extends('layout')
@section('content')  


<div class="container">
  <div class="col-md-4">
    <a href="{{ url('/dashboard') }}" class="btn btn-dark mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                    </svg>
    Retour</a>
  </div>
  <div class="card mx-auto p-3" style="width: 25rem;">
    <div class="card-body">
      <h5 class="card-title text-center">Etudiant {{ $user->nom }}</h5>
    </div>
    <ul class="list-group list-group-flush">
    <li class="list-group-item"><strong>CIN</strong> : {{ $user->cin }}</li>
      <li class="list-group-item"><strong>Nom</strong> : {{ $user->nom }}</li>
      <li class="list-group-item"><strong>Prenom</strong> : {{ $user->prenom }}</li>
      <li class="list-group-item"><strong>Langage c</strong> : {{ $user->langage_c }}</li>
      <li class="list-group-item"><strong>Tp informatique</strong> : {{ $user->tp_informatique }}</li>
      <li class="list-group-item"><strong>Algorithmique</strong> : {{ $user->algorithmique }}</li>
      <li class="list-group-item"><strong>Moyenne</strong> : {{ $user->moyenne }}</li>
      <li class="list-group-item"><strong>Date de naissance</strong> : {{ $user->dateNaissance }}</li>
    </ul>
  </div>

 
</div>

@endsection