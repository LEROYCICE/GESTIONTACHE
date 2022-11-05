@extends('layout')

@section('content')

    <div class="container">
        <article class="message is-success">
            <div class="message-header">
            <p>{{$tache->titre}}</p>
            </div>
            <div class="message-body">
            {{$tache->contenu}}
            </div>
        </article>     
    </div>
    
@endsection