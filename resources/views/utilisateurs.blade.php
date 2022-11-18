@extends('app')

@section('content')

<section class="section">
    @foreach ($utilisateurs as $utilisateur)
     
    <a class="title is-3" href=""> {{$utilisateur->nom}}</a>

    <div class="media">
        <div class="media-left">
            <figure class="image is-48x48">
                <img src="/storage/{{$utilisateur->avatar}}" class="image" alt="avatar">
            </figure>
        </div>
        <div class="media-content">
    
        
    @endforeach
</section>
    
@endsection