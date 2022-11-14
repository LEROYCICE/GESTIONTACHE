@extends('../app')

@section('inscription', '')

@section('connexion', 'Connexion')

@section('content')

<section class="session">
    <div class="container">
        <div class="columns is-centered">
            <div class="column is-half">
                <div class="notification">
                    <form action="{{route('inscription')}}" method="post">
                        @csrf
                        <div class="field">
                            <label class="label">Nom</label>
                            <div class="control">
                              <input class="input is-medium" name="nom" type="text" placeholder="Entrer votre nom" value="{{old('nom')}}">
                            </div>
                          </div>
                                @if ($errors->has('nom'))
                                <p class="help is-danger">{{$errors->first('nom')}}</p>
                                @endif
                          
                          <div class="field">
                            <label class="label">Email</label>
                            <div class="control">
                              <input class="input is-medium" type="email" name="email" placeholder="ex: leroykokou@gmail.com" value="{{old('email')}}">
                            </div>
                            <div>
                                @if ($errors->has('email'))
                                    <p class="help is-danger">{{$errors->first('email')}}</p>
                                @endif
                            </div>
                          </div>
                          <div class="field">
                            <label class="label">Mot de passe</label>
                            <div class="control">
                              <input class="input is-medium" type="password" name="password" placeholder="Entrer un mot de passe">
                            </div>
                            <div>
                                  @if ($errors->has('password'))
                                    <p class="help is-danger">{{$errors->first('password')}}</p>
                                  @endif

                            </div>
                          </div>

                          <div class="field">
                            <label class="label">Confirmer le mot de passe</label>
                            <div class="control">
                              <input class="input is-medium" type="password" name="password_confirmation" placeholder="Confirmer votre mot de passe">
                            </div>
                            <div>
                                @if ($errors->has('password_confirmation'))
                                    <p class="help is-danger">{{$errors->first('password_confirmation')}}</p>
                                @endif
                            </div>
                          </div>
                          
                          <div class="field">
                            <div class="control ml-4">
                              <button class="button is-info" type="submit">S'inscrire</button>
                            </div>
                         </div>
                         <div class="field">
                            <div class="control">
                                <p> Avez vous deja un compte ? <a href="/connexion">Connectez-vous</a></p>
                            </div>
                         </div>
                        
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
    
@endsection