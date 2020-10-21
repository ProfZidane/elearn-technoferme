@extends('master.layout')

@section('container')


    <div class="container" style="padding:6rem;">

        <div class="row " style="padding:6rem;">
            <form class="col s12" style="padding:3rem;box-shadow:8px 8px 12px #aaa;">
                <h3 class="text-center text-green">Contactez-nous !</h3>
                <br><br>
              <div class="row">
                <div class="input-field col s6">
                  <input placeholder="Entrez votre nom" id="first_name" type="text" class="validate">
                  <label for="first_name">Nom</label>
                </div>
                <div class="input-field col s6">
                  <input id="last_name" placeholder="Entrez votre prénom" type="text" class="validate">
                  <label for="last_name">Prénom</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="email" type="email" class="validate">
                  <label for="email">Email</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="text" type="text" class="validate">
                  <label for="last_name">Sujet</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                    <textarea id="textarea1" placeholder="Ecrire le message" class="materialize-textarea"></textarea>
                    <label for="textarea1">Message</label>
                </div>
              </div>
              <div class="row" align="center">
                <button type="submit" class="waves waves-effect btn green" style="width: 100%;">Envoyer</button>
                <br><br>

              </div>
            </form>
          </div>

    </div>

    @endsection

