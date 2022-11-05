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
    <script src="https://kit.fontawesome.com/5c1066fa01.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="notification">

    </div>
    <hr>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
          <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>
      
        <div id="navbarBasicExample" class="navbar-menu">
          <div class="navbar-start">
            <a class="navbar-item ml-6" href="/creation-tache">
                <i class="fa-sharp fa-solid fa-keyboard"></i> &nbsp;
              Tableaux
            </a>
            <a class="navbar-item ml-6" href={{route('taches')}}>
                <i class="fa-solid fa-laptop-file"></i> &nbsp;
                Mes Taches
            </a>
      
            <a class="navbar-item ml-6">
                <i class="fa-solid fa-people-line"></i> &nbsp;
              Membres
            </a>
            <a class="navbar-item ml-6">
                <i class="fa-solid fa-bell"></i> &nbsp;
                Notifications
            </a>
      

          </div>
      
          <div class="navbar-end">
            <div class="navbar-item">
              <div class="buttons">
                <a class="button is-light" href="/deconnexion">
                  Se deconnecter
                </a>
              </div>
            </div>
          </div>
        </div>
      </nav>
      <hr>
  <br> <br> <br>
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

      @include('flash::message')
      
      @yield('content')

</body>
</html>