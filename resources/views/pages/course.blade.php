<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
         <!-- Compiled and minified CSS -->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
         <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<style>
    .bord{
        border: solid 1px;
    }

    nav{
        background-color: #4caf50;
    }

    .esp{
        padding:2rem;
    }
</style>
<body>

      <!-- Navbar goes here -->
      <nav>
        <div class="nav-wrapper">
          <a href="/menu" class="brand-logo">Logo</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="badges.html">Username</a></li>
            <li><a href="collapsible.html">Retour au menu</a></li>
          </ul>
        </div>
      </nav>

        <!-- Page Layout here -->
        <div class="row">


            <div class="col s9 bord">
                <!-- Teal page content  -->
                <!--contain course -->
                <div align="center">
                    <h3>Title of course</h3>
                </div>

                <div class="container bord">
                    <video class="responsive-video" controls width="100%">
                        <source src="movie.mp4" type="video/mp4">
                      </video>
                      <h5 style="font-weight: 300">Bienvenue sur le cours de ./.S</h5>
                </div>

                <br><br>

                <div class="container bord">
                    <div class="card-panel cyan lighten-5">
                        <i class=" medium material-icons">info</i>
                        Je suis <strong>MOHAMED ZIDANE</strong> formateur en développement full stack et architecture réseau depuis 1 an déjà et je suis ravi de vous accompagner lors de cet apprentissage de ****
                    </div>
                </div>

                <br><br>

                <div class="container bord">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, sed harum. Totam error labore debitis qui. In error, fugit autem aliquam vel, voluptatibus quibusdam ducimus eveniet nostrum accusantium eius odio?
                    </p>

                    <br>

                    <div>
                        <h4>Title of part</h4>
                        <hr>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vero adipisci reiciendis est nemo consequatur recusandae officiis cum cupiditate illo dolores, earum illum, blanditiis voluptatum, saepe aliquam eaque veritatis reprehenderit?
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam nisi facere expedita temporibus! Quod, ipsam quisquam! Optio, nemo odit. Eveniet repellat repudiandae vel possimus. Debitis rem aperiam minus rerum unde.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Et soluta maiores aliquam. Expedita aliquid dolorem ut omnis provident dolorum distinctio velit commodi modi vel eos fugit nihil animi, cupiditate voluptatem!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere aspernatur alias fugit impedit aliquam iste maiores vero optio laboriosam at voluptatem mollitia error commodi perferendis voluptatibus unde odio, velit natus!
                        </p>
                        <br>
                        <img src="{{ asset('img/header/header-1.jpg') }}" width="100%" alt="">
                    </div>
                </div>

                <!--//end of contain course -->


            </div>


            <div class="col s3 bord" align='center'>
              <!-- Grey navigation panel -->
                <div class="bord" style="width: 70%;margin-top:5rem;margin-bottom:5rem;">
                    <div class="bord" style="background-color: #5cb35f">
                        <h4 style="color: white">Titre cours</h4>
                    </div>
                    <div>
                        <ul>

                        </ul>
                    </div>
                    <a class="btn-floating btn-small pulse"><i class="material-icons">facebook</i></a> &nbsp;
                    <a class="btn-floating btn-small pulse"><i class="material-icons">twitter</i></a> &nbsp;
                    <a class="btn-floating btn-small pulse"><i class="material-icons">cloud</i></a>

                </div>
            </div>


          </div>

          <!-- present skils -->
          <div class="container-fluid" style="background-color: rgb(243, 240, 234)">
            <div class="container ">
                <div class="row valign-wrapper">
                    <div class="col s2">
                        <br>
                    <img src="https://cdn.pixabay.com/photo/2016/03/12/23/18/man-1253004_960_720.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
                    </div>
                    <div class="col s10">
                        <h6 >LE professeur</h6>
                    <span class="black-text" style="font-weight: 200">
                        This is a square image. Add the "circle" class to it to make it appear circular.
                    </span>
                    </div>

                </div>
                <br>
            </div>
        </div>


</body>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</html>
