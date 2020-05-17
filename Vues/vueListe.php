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

<div class="col s8">
  <div class="text">
    <h2>Ajouter un évènement</h2>
  </div>
  <table class="highlight">
    <thead>
      <tr>
          <th>Catégorie</th>
          <th>Nom</th>
          <th>Date début</th>
          <th>Date fin</th>
          <th>Organisateurs</th>
          <th>Descriptions</th>
          <th>Options</th>
      </tr>
    </thead>
        <tbody>
          <?php
            foreach ($event as $key) {
          ?>
          <tr>
            <td><?php echo $key['categorie'];?></td>

            <td><a class="btn btn-success" href="?page=ajoutmodifier&update=<?php echo $key['id'];?>"><?php echo $key['nom'];?></a></td>
            
            <td><?php echo $key['date_debut'];?></td>

            <td><?php echo $key['date_fin'];?></td>

            <td><?php echo $key['organisateur'];?></td>
            
            <td><?php echo $key['description'];?></td>

            <td><a class="btn btn-danger" href="?page=listeAdmin&suppr=<?php echo $key['id'];?>">[X]</a></td>
          </tr>
          <?php }?> 
        </tbody>
    </table>
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