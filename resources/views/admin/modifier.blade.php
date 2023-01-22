@extends('layout')
@section('content')

<div class="container">
        <div class="d-flex gap-5">
            <div class="col-md-4 form-group">
                <a href="{{ url('/dashboard') }}" class="btn btn-dark mt-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                </svg>
                    Retour</a>
            </div>
            <div class="cold-md-8">
                <h2 class="text-center mt-5" >Etudiant {{ $user->nom }}</h2>
            </div>
            
        </div>
        <form class="form mt-5" method="post"  enctype="multipart/form-data">        
            @csrf
            @method("PATCH")
            @if(session()->has('message'))
                <div class="alert alert-info  form-group my-3 mx-auto col-md-6">
                    {{ session()->get('message') }}
                </div>
            @endif

            <!-- CIN -->


            <div class="form-group my-3 mx-auto col-md-6">
                <div>
                    <label for="nom">CIN</label>
                    <input type="text" name="cin" class="form-control" value="{{$user->cin}}"   placeholder="cin de l'etudiant">
                </div>
                
                @error('cin')
                <span class="text-danger my-2">{{$message}}</span>
                @enderror
            </div>

            <!-- Nom -->


            <div class="form-group my-3 mx-auto col-md-6">
                <div>
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" class="form-control" value="{{$user->nom}}"   placeholder="Nom de l'etudiant">
                </div>
                
                @error('nom')
                <span class="text-danger my-2">{{$message}}</span>
                @enderror
            </div>


           <!-- Prenom -->


           <div class="form-group my-3 mx-auto col-md-6">
                <div>
                   <label for="prenom">Prenom</label>
                    <input type="text" name="prenom" class="form-control" value="{{$user->prenom}}"   placeholder="Prenom de l'etudiant">
                </div>
                
                @error('prenom')
                <span class="text-danger my-2">{{$message}}</span>
                @enderror
            </div>

            <!-- langage C -->


           <div class="form-group my-3 mx-auto col-md-6">
                <div>
                   <label for="prenom">Note Langage C</label>
                    <input type="number" name="langage_c" class="form-control"
                     value="{{$user->langage_c}}">
                </div>
                
                @error('langage_c')
                <span class="text-danger my-2">{{$message}}</span>
                @enderror
            </div>

            <!-- Tp informatique -->


           <div class="form-group my-3 mx-auto col-md-6">
                <div>
                   <label for="prenom">Note Tp informatique</label>
                    <input type="number" name="tp_informatique" class="form-control" value="{{$user->tp_informatique}}">
                </div>
                
                @error('tp_informatique')
                <span class="text-danger my-2">{{$message}}</span>
                @enderror
            </div>

            <!-- Algorithmique -->


           <div class="form-group my-3 mx-auto col-md-6">
                <div>
                   <label for="note">Note Algorithmique</label>
                    <input type="number" name="Algorithmique" class="form-control" value="{{$user->algorithmique}}">
                </div>
                
                @error('Algorithmique')
                <span class="text-danger my-2">{{$message}}</span>
                @enderror
            </div>

            <!-- Moyenne -->


           <div class="form-group my-3 mx-auto col-md-6">
                <div>
                   <label for="note">Moyenne</label>
                    <input type="number" name="moyenne" class="form-control"
                     value="{{$user->moyenne}}">
                </div>
                
                @error('moyenne')
                <span class="text-danger my-2">{{$message}}</span>
                @enderror
            </div>

            <!-- Date de naissance -->


           <div class="form-group my-3 mx-auto col-md-6">
                <div>
                   <label for="prenom">Date de naissance</label>
                    <input type="text" name="dateNaissance" class="form-control"
                     value="{{$user->dateNaissance}}" placeholder="01-01-1999">
                </div>
                
                @error('dateNaissance')
                    <span class="text-danger my-2">{{$message}}</span>
                @enderror
            </div>

                <div class="form-group col-md-6 my-3 w-50 mx-auto">
                    <button class="btn btn-info w-100 nine" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                        <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                        </svg>
                    Modifier</button>
                </div>

            
        </form>

        
    </div>

@endsection