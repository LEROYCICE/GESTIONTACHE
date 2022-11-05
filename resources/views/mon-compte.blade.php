@extends('layout')

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

            <div>
                <h1 class="title"> Nom : {{$utilisateur->nom}}</h1>
            </div>

        </div>
    </section>
@endsection