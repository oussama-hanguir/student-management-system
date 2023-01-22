@extends('layout')
@section('content')


<div class="container mt-5"> 
    <h2 class="text-center my-5">Connexion</h2>
    <form action="" method="POST">
        @csrf
        <!-- cin input -->

        <div class="form-group col-md-6 mx-auto">
                        @if(session('error'))
                        <div class="alert alert-danger alert-dimissible" >
                            <button class="btn btn-close" id="btn-close" data-bs-dimiss="alert"></button>
                            Incorrect CIN
                        </div>
                        @endif
            <label for="cin">CIN</label>
            <input type="text" value="{{ old('cin') }}" class="form-control" name="cin" id="" placeholder="entrer votre cin">
            <span class="text-danger">
                @error('cin')
                    {{ $message }}
                @enderror
            </span>
        </div>

        <!-- Boutton Connexion -->

        <div class="form-group col-md-6 mx-auto">
            <button href="{{ url('/acceuil') }}" class="btn btn-primary w-100 mt-2">
                Connexion   
            </button>
        </div>
    </form>
</div>

@endsection
