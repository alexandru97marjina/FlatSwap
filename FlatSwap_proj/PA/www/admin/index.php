<?php
  require_once "blocks/top.php";
 ?>
 <div id="wrap">
   <center>
    <?php if(isAdmin() || isSef()){?>
      <div class="Hello">
        <h3>Bun venit <?php echo $_SESSION['login']?></h3>
        <?php if(isAdmin()){ ?>
        <img  src="admin.png" class="img-circle"  alt="Imagina admin" >
        <?php }
         else{ ?>
         <img src="boss.png"  class="img-circle" alt="Imagina sef">
      <?php } ?>
      </div>
    <?php }
    else { ?>
   <h3>Acesta este o pagina ascunsa pentru administratie</h3>
   <img src="wrap.jpg" alt="Imagine setari">
 </center>
 </div>
<?php }
   if(isAdmin()) {
   }
   else if(isSef()){
   }
   else require_once "auth.php";
    require_once "blocks/footer.php"
  ?>
