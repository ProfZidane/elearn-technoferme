<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-learning</title>
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="{{  asset('css/style.css') }}">
     <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

   <!-- header -->
    <div class="container-fluid" id="head-img">
        <!-- nav contain -->
        <div class="container">
            <nav class="nav-color nav-dsp">
                <div class="nav-wrapper">
                  <a href="/" class="brand-logo text-color" style="color:white">Logo</a>
                  <a href="#" data-target="mobile-demo" class="sidenav-trigger text-color"><i class="material-icons">menu</i></a>
                  <ul class="right hide-on-med-and-down">
                    <li><a href="/" class="text-color">Accueil</a></li>
                    <li><a href="/menu" class="text-color">Formations</a></li>
                    <li><a href="/about" class="text-color">A propos</a></li>
                    <li><a href="/contact" class="text-color">Contact</a></li>
                  </ul>
                </div>
              </nav>

              <ul class="sidenav" id="mobile-demo">
                <li><a href="/">Accueil</a></li>
                <li><a href="/menu">Formations</a></li>
                <li><a href="/about">A propos</a></li>
                <li><a href="/contact">Contact</a></li>
              </ul>
        </div>
        <!--//end of nav contain-->

        <!-- word head -->
        <div class="word-head" align="center">
            <h1>E-SCHOOL ELEVAGE</h1>
            <small>Plateforme de formation en élévage</small>
            <br>
            <p>
                <a class="waves-effect waves-light btn round green" href="/menu">Commencer</a>
            </p>
        </div>
        <!--//end of word head -->

    </div>
    <!--// header -->


    @yield('container')


    <!-- footer -->
    <footer class="page-footer green-gradient">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
              <h5 class="white-text">NAME GROUP</h5>
              <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
            </div>
            <div class="col l4 offset-l2 s12">
              <h5 class="white-text">Réseaux socials</h5>
              <ul>
                <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="container">
          © 2020 Copyright Text
          <a class="grey-text text-lighten-4 right" href="#!">Retour au tableau de bord</a>
          </div>
        </div>
      </footer>
    <!--// end footer -->
</body>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>

</html>
