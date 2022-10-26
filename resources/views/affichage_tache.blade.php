@extends('layout')

@section('content')

<div class="card">
    @foreach ($taches as $tache)
        
    @endforeach
    <header class="card-header">
      <p class="card-header-title">
        {{$tache->titer}} &nbsp; &nbsp;
        {{$tache->id}}
      </p>
    </header>
    <div class="card-content">
      <div class="content">
        {{$tache->contenu}}
      </div>
    </div>
    <footer class="card-footer">
      <a href="{{route('show')}}" class="card-footer-item"> Voir</a>
      <a href="{{route('edit')}}" class="card-footer-item">Modifier</a>
      <a href="{{route('delete')}}" class="card-footer-item">Supprimer</a>
    </footer>
  </div>
    
@endsection