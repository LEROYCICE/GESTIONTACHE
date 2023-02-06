@extends('app')

@section('content')

    @section('inscription', '')

    <a href="{{route('deconnexion')}}">
        @section('connexion', 'deconnexion')
    </a>




    <section class="section">
        <div class="container">
            <div class="columns is-centered">
                <h1 class="title is-4">{{ $user->nom}}</h1>
            </div> <br>
            <div class="columns is-centered">
                <form method="post" action="/les-utilisateurs/{{ $user->nom}}/invites">
                    @csrf
                    <button class="button" type="submit">Inviter</button>
                </form>
            </div>
            

        </div>
    </section>
    
    
@endsection