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
        <h2>Ajouter un évènement</h2>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input type="hidden" name="id" id="" hidden <?php $add_update->nomEmpty($id);?>>
          <input  id="categorie" type="text" class="validate" name="categorie" <?php $add_update->valu($categorie);?>>
          <label for="categorie">Catégorie</label>
        </div>
        <div class="input-field col s6">
          <input id="nom" type="text" class="validate" name="nom" <?php $add_update->valu($nom);?>>
          <label for="nom">Nom</label>
        </div>
      </div>
      <div class="row">     
        <div class="input-field col s6">
          <input id="debut" type="text" class="validate" name="debut" <?php $add_update->valu($debut);?>>
          <label for="debut">Date debut</label>
        </div>     
        <div class="input-field col s6">
          <input id="fin" type="text" class="validate" name="fin" <?php $add_update->valu($fin);?>>
          <label for="fin">Date fin</label>
        </div>
      </div>
      <div class="row">       
        <div class="input-field col s6">
          <input id="org" type="text" class="validate" name="organisateur" <?php $add_update->valu($organisateur);?>>
          <label for="org">Organisateur</label>
        </div>
        <div class="file-field input-field col s6" <?php $add_update->vnomEmpty($descriptions);?>>
          <div class="btn">
            <span>Photo</span>
            <input type="file" name="photo" <?php $add_update->disable($photo);?>>
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" name="photo" type="text" hidden <?php $add_update->disable($photo);?>>
          </div>
        </div>  
      </div>
      <div class="row">  
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea" name="descriptions"></textarea>
          <label for="textarea1">Descriptions</label>
          </div>
        </div>
      </div>
      <div class="row">
          <input class="btn" type="submit" value="Enregistrer" name="enregistrer">          
          <input class="btn" type="reset" value="Retour">
      </div>
    </form>
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

<?php include('include/footer.php'); ?>