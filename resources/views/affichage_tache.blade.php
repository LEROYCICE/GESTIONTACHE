@extends('layout')

@section('content')
@foreach ($taches as $tache)

<section class="section">
    <div class="container">
        <div class="colunms is-centered">
            <div class="column is-half">
                <div class="card is-centered">
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
                <form action="{{route('delete' , $tache->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <footer class="card-footer">
                        <a href="{{route('show' , $tache->id)}}" class="card-footer-item button is-link"> Voir</a>
                        <a href="{{route('edit' , $tache->id)}}" class="card-footer-item button is-warning">Modifier</a>
                        <button  class="card-footer-item button is-danger">Supprimer</button>
                         
                    </footer>
                </form>
                </div>
            </div>
        </div> 
    </div>
</section>
<hr>
@endforeach
    
@endsection