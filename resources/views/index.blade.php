@extends('master.layout')

@section('container')




    <!-- presentation contain -->
    <div class="container-fluid"  style="margin-top:3rem; padding:3rem">

        <br><br>
        <div class="row" align="center">
            <div class="col l4 s12">
                <div class="row " align="center" style="border-width: 1px;width:80%;padding:2rem;box-shadow:4px 4px 4px rgba(202, 200, 200, 0.664)">
                    <div class="col s12 ">
                        <i class="large material-icons text-green-dark">access_time</i>
                    </div>
                    <div class="col s12 ">
                        <h5>Gain de temps</h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas dignissimos rem aspernatur officia quis nisi architecto.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col l4 s12">
                <div class="row " align="center" style="border-width: 1px;width:80%;padding:2rem;box-shadow:4px 4px 4px rgba(202, 200, 200, 0.664)">
                    <div class="col s12 ">
                        <i class="large material-icons text-green-dark">euro_symbol</i>
                    </div>
                    <div class="col s12 ">
                        <h5>Gain d'argents</h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas dignissimos rem aspernatur officia quis nisi architecto.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col l4 s12">
                <div class="row " align="center" style="border-width: 1px;width:80%;padding:2rem;box-shadow:4px 4px 4px rgba(202, 200, 200, 0.664)">
                    <div class="col s12 ">
                        <i class="large material-icons text-green-dark">done_all</i>
                    </div>
                    <div class="col s12 ">
                        <h5>Gain de compétences</h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas dignissimos rem aspernatur officia quis nisi architecto.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//end of p contain -->

    <div class="container-fluid">
        <div class="container"  style="padding: rem;">
            <h3  style="text-align: center">Nos Dernières Cours</h3>
        </div>
        <br><br>
        <div class="row">
              <!-- presentation of course -->
              <div class="col l4 s12" style="padding: 2rem;">
                <div class="card" style="width: 90%">
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="https://image.freepik.com/vecteurs-libre/feuillage-menthe-vent-feuille-verte_88865-194.jpg">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-2">Card Title<i class="material-icons right">more_vert</i></span>
                      <p><a href="#" class="text-green-light">Voir cet cours</a></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title green-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                      <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                  </div>
            </div>
            <div class="col l4 s12" style="padding: 2rem;">
                <div class="card" style="width: 90%">
                    <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="https://image.freepik.com/vecteurs-libre/feuillage-menthe-vent-feuille-verte_88865-194.jpg">
                    </div>
                    <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
                    <p><a href="#" class="text-green-light">Voir cet cours</a></p>
                    </div>
                    <div class="card-reveal">
                    <span class="card-title green-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>
            <div class="col l4 s12" style="padding: 2rem;">
                <div class="card" style="width: 90%">
                    <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="https://image.freepik.com/vecteurs-libre/feuillage-menthe-vent-feuille-verte_88865-194.jpg">
                    </div>
                    <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
                    <p><a href="#" class="text-green-light">Voir cet cours</a></p>
                    </div>
                    <div class="card-reveal">
                    <span class="card-title green-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>
            <!--//end p course -->
        </div>
    </div>
    <!--// end course contain -->

@endsection
