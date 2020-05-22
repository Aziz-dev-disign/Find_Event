
<?php include('include/entete.php'); ?>
<?php include('include/header.php'); ?>

<section class="ban">

<h3>Nous mettons à votre disposition<br> un carnet évènementiel,<br>pour vous permettres de connaitre en temps réel<br> tous les évènement qui se déroule au tour de vous.</h3>
<a class="waves-effect waves-light btn-large" href="#">Plus</a>
</section>

<section class="text">
 <h2>MEET</h2>

 <h5>Lorem ipsum is simply dummy text of the printing</h5>

 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
 tempor incididunt ut labore et dolore magna aliqua. <br>
 Ut enim ad minim veniam,
 quis nostrud exercitation ullamco laboris nisi ut aliquip Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br>
 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
 consequat.</p>

 <?php
    foreach ( $evenement as $key) {
?>
 <section class="image">
 <div class="card">
 <div class="card-image waves-effect waves-block waves-light">
   <img class="activator" src="<?php echo $evenement['photo'];?>">
 </div>
 <div class="card-content">
   <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
   <p><button class="commentaire">commentaire</button></p>
 </div>
 <div class="card-reveal">
   <span class="card-title grey-text text-darken-4"><?php echo $evenement['nom'];?><i class="material-icons right">close</i></span>
   <p>Here is some more information about this product that is only revealed once clicked on.</p>
   <span><?php echo $evenement['date_debut'];?></span>
   <span><?php echo $evenement['date_fin'];?></span>
 </div>
 </div>
 </section>
 <div class="row" id="reponse">
 <?php
    foreach ( $commentaire as $key) {
?>

<p><?php echo $key['pseudo'];?> à dit:</p>
<p><?php echo $key['commentaire'];?></p>
 <?php }?> 

 </div>
 <div class="comment">
     <div class="row">   
        <div class="input-field col s6">
          <input id="pseudo" type="text" class="validate" name="pseudo">
          <label for="pseudo">Pseudo</label>
        </div> 
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea" name="commentaire"></textarea>
          <label for="textarea1">Descriptions</label>
        </div>
        </div>
      <div class="row">
          <input class="btn" type="submit" value="Enregistrer">          
          <input class="btn" type="reset" value="Retour">
      </div>
 </div>
 <?php }?> 
</section>
<script>
  $(document).ready(function(){
    $('.comment').hide();
    $('.commentaire').click(function(){
      $('.comment').show();
    });
  });
</script>
<?php include('include/js.php'); ?>
<?php include('include/footer.php'); ?>