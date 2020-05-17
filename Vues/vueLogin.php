<?php include('include/entete.php'); ?>
<div class="bg-login">
    <div class="row connexion">
    <form class="col s12 ">
      <div class="text">
        <h2>Connexion</h2>
      </div>
      <div class="warning"></div>
      <div class="row">
        <div class="input-field col s12">
          <input type="hidden" name="id" id="" >
          <input  id="email" type="email" class="validate" name="mail">
          <label for="email">Email</label>
        </div>
        <div class="input-field col s12">
          <input id="mdp" type="text" class="validate" name="mdp">
          <label for="mdp">Mot de passe</label> 
        </div>         
        <div class="row">
        </div class=" col s6">
        <div>
            <a href="">Mot de passe oublié?</a>
        </div>
        <div class=" col s6">
            <a href="#">S'inscrir ?</a>
        </div>
      
      </div>
      <div class="row">
          <input class="btn" type="submit" value="Enregistrer" name="enregistrer">          
          <input class="btn" type="reset" value="Retour">
      </div>
    </form>
  </div>
  </div>
