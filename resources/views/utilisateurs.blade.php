@extends('app')

@section('content')

    @section('inscription', '')
        <a href="{{route('deconnexion')}}">
            @section('connexion', 'deconnexion')        
        </a>
<section class="section">
    @foreach ($utilisateurs as $utilisateur)
     
    <div class="media">
        <div class="media-left">
            <figure class="image is-48x48">
                <img src="/storage/{{$utilisateur->avatar}}" class="image" alt="avatar">
            </figure>
        </div>
        <div class="media-content">
            <a href="/les-utilisateurs/{{$utilisateur->nom}}" class="title is-4"> {{$utilisateur->nom}}</a> <br>

        </div>
    </div>

    @endforeach
</section>
    
@endsection