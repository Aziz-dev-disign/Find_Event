<?php include('include/entete.php'); ?>
<?php include('include/header2.php'); ?>
<div class="row">
  <div class="col s3">
    <ul id="slide-out" class="sidenav">
      <li>
        <div class="user-view">
          <div class="background">
            <img src="images/icone2.png">
          </div>
          <a href="#user"><img class="circle" src="images/icone1.png"></a>
          <a href="#name"><span class="white-text name">John Doe</span></a>
          <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
        </div>
      </li>
      <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
      <li><a href="#!">Second Link</a></li>
      <li><div class="divider"></div></li>
      <li><a class="subheader">Subheader</a></li>
      <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
    </ul>
    <a href="#" data-target="slide-out draggable" class="sidenav-trigger btn" ><i class="material-icons">Profil</i></a>
</div> 

<div class="col s8 test">
    <div class="row">
    <form class="col s12 ">
      <div class="text">
        <h2>S'inscrir</h2>
      </div>
      <div class="row warning">
        <div class="col s6 center">
          <?php 
            if (isset($msg)) 
            {
                echo '<font color="red">' .$msg.'</font>';
            }
          ?>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="nom" type="text" class="validate" name="nom" <?php $add_update->valu($nom);?>>
          <label for="nom">Nom</label>
        </div>
      </div>
      <div class="input-field col s6">
          <input id="nom" type="text" class="validate" name="prenom" <?php $add_update->valu($prenom);?>>
          <label for="nom">prenom</label>
        </div>
      </div>
      <div class="row">     
        <div class="input-field col s6">
          <input id="debut" type="text" class="validate" name="mail" <?php $add_update->valu($mail);?>>
          <label for="debut">Email</label>
        </div>     
        <div class="input-field col s6">
          <input id="fin" type="text" class="validate" name="mail2">
          <label for="fin">Confirmez votre email</label>
        </div>
      </div>
      <div class="row">       
        <div class="input-field col s6">
          <input id="org" type="password" class="validate" name="mdp" <?php $add_update->valu($mdp);?>>
          <label for="org">Mot de passe</label>
        </div>
        <div class="input-field col s6">
          <input id="org" type="password" class="validate" name="mdp2">
          <label for="org">Confirmez votre mot de passe</label>
        </div>
      <div class="row">
          <input class="btn" type="submit" value="Enregistrer" name="formulaire">          
          <input class="btn" type="reset" value="Retour">
      </div>
    </form>
  </div>
</div>

</div>
</div>
      <?php include('include/js.php'); ?>

<script>

  // Or with jQuery

  // $(document).ready(function(){
  //   $('.sidenav').sidenav();
  //   console.log(sidenav());
  // });
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, draggable);
    var instance = M.Sidenav.getInstance(elem);
    instance.open();
    console.log(M.Sidenav.init(elems, options));
  });
  
</script>
