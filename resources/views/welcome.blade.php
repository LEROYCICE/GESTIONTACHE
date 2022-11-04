<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestion de tache</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    {{-- <script src="/node_modules/bulma-extensions/bulma-calendar/dist/bulma-calendar.min.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.1.js">
    </script>
</head>
<body>
    
    <nav class="navbar is-light" role="navigation" aria-label="main navigation" style="position: fixed; width:100%">
        <div class="navbar-brand">
          <a class="navbar-item" href="#">
            <h1 class="title is-2">YOREL</h1>
            {{-- <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28"> --}}
          </a>
      
          <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>
      
        <div id="navbarBasicExample" class="navbar-menu">
          <div class="navbar-start">
            <a class="navbar-item ml-6" href="/">
              Accueil
            </a>
            <a class="navbar-item ml-6" href="{{route('mon-compte')}}">
                Mon compte
            </a>
      
            <a class="navbar-item ml-6" href="{{route('taches')}}">
              Mes taches
            </a>
            <a class="navbar-item ml-6" href="{{route('a-propos')}}">
                A propos
            </a>
              <a class="navbar-item ml-6" href="{{route('contact')}}">
                Contact
            </a>
      

          </div>
      
          <div class="navbar-end">
            <div class="navbar-item">
              <div class="buttons">
                <a class="button is-primary">
                  <strong>Inscription</strong>
                </a>
                <a class="button is-light">
                  Connexion
                </a>
              </div>
            </div>
          </div>
        </div>
      </nav>
  <br> <br> <br>
      <div class="container">
        <div class="columns">
          <div class="column">
            <br> <br> <br>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
             Obcaecati dolores aspernatur dolore non rerum officiis minima laborum exercitationem ducimus dignissimos.
             Minus amet ratione earum blanditiis aspernatur nulla maxime quo maiores.
             Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi, iure maxime qui, quas ex saepe ad sapiente expedita iusto tempora at ipsa nihil distinctio delectus cupiditate,
              rerum consequuntur dolor aperiam?
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam dolorum quos architecto? Amet quas in odit aliquam eaque aut consequuntur, 
              fugit possimus excepturi nostrum rem iusto quidem ipsam, minus provident!

          </div>
          <div class="column">
            <figure class="image is-1000x1000">
                <img class="" src="img/worker.jpg">
            </figure>
          </div>
        </div>
      </div>

      <script>
            $(document).ready(function() {

            // Check for click events on the navbar burger icon
            $(".navbar-burger").click(function() {

                // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                $(".navbar-burger").toggleClass("is-active");
                $(".navbar-menu").toggleClass("is-active");

            });
            });
      </script>
    
</body>
</html>