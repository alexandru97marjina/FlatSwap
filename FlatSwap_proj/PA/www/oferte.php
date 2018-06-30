<!DOCTYPE html>
<html>
<head>
  <?php
  $title="FlatSwap-Oferte";
   require_once "blocks/head.php";
   ?>
</head>

<body>
<?php
  require_once "blocks/header.php";
 ?>
<div class="container" id="oferta">
<div class="catalog" >
  <center>
    <h3>Gaseste-ti apratamentul viselor tale</h3>
  </center>
    <div class="container-anunturi" >
      <div id="ale">
        <form class="" action="oferte.php" method="post">
          <input type="submit" class="btn btn-success" name="vind" value="Vinzare">
          <input type="submit" class="btn btn-primary"name="chirie" value="Chirie">
          <button><a class="btn btn-warning" href="cauta.php#caut">Cauta un apartament <i class="fa fa-search" aria-hidden="true"></i></a></button>
      </center>
      </div>
      <?php
          if(isset($_POST['vind'])){
                require_once 'anuntV.php';
      }
        else if(isset($_POST['chirie']))
        {
          require_once 'anuntC.php';
        }
        else{ ?>
          <center>
            <h2>Cu noi iti gaseti locuinta visurilor tale</h2>
            <img class="img-thumbnail" src="img/ofert.jpg" alt="">
          </center>

      <?php } ?>
    </div>
</div>
</div>
<?php
 require_once "blocks/footer.php" ;
 ?>
