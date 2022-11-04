@extends('../layout')

@section('content')

<section class="session">
    <div class="container">
        <div class="columns">
            <div class="column">
                <div class="notification">
                    <form action="{{route('connexion')}}" method="post">
                        @csrf
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
                          
                          <div class="field is-grouped">
                            <div class="control ml-4">
                              <button class="button is-info" type="submit">Se connecter</button>
                            </div>
                            <div class="control">
                              <p> Vous n'etes pas encore inscrit ? <a href="/inscription">Inscrivez-vous</a></p>
                            </div>
                          </div>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
    
@endsection