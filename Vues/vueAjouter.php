<?php include('include/entete.php'); ?>
<?php include('include/header.php'); ?>
<div>
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
    <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
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
    var instances = M.Sidenav.init(elems, edge());
    var instance = M.Sidenav.getInstance(elem);
    instance.open();
    console.log(M.Sidenav.init(elems, options));
  });
  
</script>

<?php include('include/footer.php'); ?>