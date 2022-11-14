@extends('app')
@section('inscription' , 'Deconnexion')
@section('connexion', '')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-half">
                    <h1 class="title is-1">
                        Mon Compte
                    </h1>
                </div>
            </div>

            <div class="media">
                <div class="media-left">
                    <figure class="image is-48x48">
                        <img src="/storage/{{auth()->user()->avatar}}" class="image" alt="avatar">
                    </figure>
                </div>
                <div class="media-content">
                    <h2 class="title is-3"> {{$utilisateur->nom}}</h2>

                </div>
            </div>

        </div>
    </section>

    <form action="{{route('avatar')}}" class="section" method="post" enctype="multipart/form-data">
        @csrf

        <div class="field">
            <label for="" class="label">Ajouter un avatar</label>
            <div class="control">
                <input type="file" name="avatar" class="input">
            </div>
        </div>
        @if ($errors->has('avatar'))
            <p class="help is-danger"> {{$errors->first('avatar')}} </p> <br>
            
        @endif

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-info"> Ajouter un avatar</button>
            </div>
        </div>
    
    
    
    </form>

@endsection