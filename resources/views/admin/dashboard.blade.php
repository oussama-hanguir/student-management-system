@extends('layout')
@section('content')

    <div class="container">
        <div class="table">
            <div class="col-md-12 d-flex justify-content-end my-5 gap-2">
                <a href="{{ route('ajouter') }}" class="btn btn-primary">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-plus-fill" viewBox="0 0 16 16">
                        <path d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm.5 4v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 1 0z"/>
                        </svg>
                    </span>
                    Ajouter un étudiant</a>
                <div class="col-md-3 ">
                    <a href="{{ url('/') }}" class="btn btn-dark text-success">
                        Page D'acceuil
                    </a>
                    <a href="{{ url('/messages') }}" class="btn text-white bg-dark text-success">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
                        <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                        </svg>
                        Messages
                    </a>
                </div>
                
            </div>
            <h4 class="text-center my-4">Liste des etudiants</h4>
            <div class="col-md-8 mx-auto">
                <input type="text" name="" class="form-control mx-auto my-2"
                id="" placeholder="Rechercher un etudiant">
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">CIN</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prenom</th>
                        <th scope="col">langage_c</th>
                        <th scope="col">tp_informatique</th>
                        <th scope="col">algorithmique</th>
                        <th scope="col">moyenne</th>
                        <th scope="col">dateNaissance</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <th>{{ $user->id }}</th>
                        <th scope="row">{{ $user->cin }}</th>
                        <td>{{ $user->nom }}</td>
                        <td>{{ $user->prenom }}</td>
                        <td>{{ $user->langage_c }}</td>
                        <th>{{ $user->tp_informatique }}</th>
                        <td>{{ $user->algorithmique }}</td>
                        <td>{{ $user->moyenne }}</td>
                        <td>{{ $user->dateNaissance }}</td>
                        <td style="width: 100px;">
                            <!-- Voir -->
                            <a href="{{ url('/voir/' . $user->id) }}" class="btn btn-info w-100">
                                Voir
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                </svg>
                            </a>
                            <!-- Editer -->
                            <a href="{{ url('/edit/' . $user->id) }}" class="btn btn-warning d-flex gap-1 mt-1">
                                Modifier
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil mt-1" viewBox="0 0 16 16">
                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                </svg>
                            </a>
                            <!-- Supprimer -->
                            <form action="{{ route('destroy', $user->id) }}" class="" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger mt-1 d-flex gap-1">
                                    Supprimer
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class=" mt-1 bi bi-trash3-fill" viewBox="0 0 16 16">
                                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                    </svg>
                                </button>
                            </form>
                            
                            
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>    
        </div>
    </div>


@endsection