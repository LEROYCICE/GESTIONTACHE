@extends('layout')

@section('content')

<section class="session">
    <div class="container">
        <div class="columns is-centered">
            <div class="column is-half">
                <div class="notification">
                    <form action="{{route('sauver_tache')}}" method="post">
                        @csrf
                        <div class="field">
                            <label class="label">Titre</label>
                            <div class="control">
                              <input class="input" name="titre" type="text" placeholder="Saisissez un titre descriptif pour votre tache">
                            </div>
                          </div>
                          
                          <div class="field">
                            <label class="label">Contenu</label>
                            <div class="control">
                              <textarea class="textarea" name="contenu" placeholder="Saisissez un contenu descriptif pour votre tache"></textarea>
                            </div>
                          </div>
                          <div class="field">
                            <label class="label">Délai</label>
                            <div class="control">
                              <input class="input" type="datetime-local" name="delai" placeholder="Donner un delai pour votre tache">
                            </div>
                          </div>
                          
                          <div class="field is-grouped">
                            <div class="control ml-4">
                              <button class="button is-link" type="submit">Ajouter une tache</button>
                            </div>
                            <div class="control">
                              <button class="button is-link is-danger"> <a href="#" style="text-decoration: none;"> Quitter </a> </button>
                            </div>
                          </div>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
    
@endsection