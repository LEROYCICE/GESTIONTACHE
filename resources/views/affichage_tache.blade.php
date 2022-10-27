@extends('layout')

@section('content')
@foreach ($taches as $tache)
    <div class="container card">
        
            <header class="card-header">
            <p class="card-header-title">
                {{$tache->titre}} &nbsp; &nbsp; id : &nbsp;
                {{$tache->id}}
            </p>
            </header>
            <div class="card-content">
            <div class="content">
                {{$tache->contenu}}
            </div>
            </div>
            <footer class="card-footer">
            <a href="#" class="card-footer-item"> Voir</a>
            <a href="#" class="card-footer-item">Modifier</a>
            <a href="#" class="card-footer-item">Supprimer</a>
            </footer>
    </div> 
<hr>
@endforeach
    
@endsection