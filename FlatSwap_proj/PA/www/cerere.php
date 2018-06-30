<!DOCTYPE html>
<html>
<head>
  <?php
  $title="FlatSwap-Cereri";
   require_once "blocks/head.php";
   ?>
</head>

<body>
<?php
  require_once "blocks/header.php";
 ?>
<div class="container" id="cerere">
<div class="catalog">
  <center>
    <h3>Gaseste un cumparator pentru apartamentul tau</h3>
  </center>
    <div class="container-anunturi" >
      <div id="ale">
        <form class="" action="cerere.php" method="post">
          <input type="submit" class="btn btn-success" name="vind" value="Vind apartament">
          <input type="submit" class="btn btn-primary"name="chirie" value="Dau in chirie apartament">
        </form>
      </div>
      <?php
          if(isset($_POST['vind'])){
                require_once 'cerereV.php';
      }
        else if(isset($_POST['chirie']))
        {
          require_once 'cerereC.php';
        }
        else{ ?>
          <center>
            <h2>Cu noi vinderea apartamentului nu e o problema</h2>
            <img class="img-thumbnail" src="img/ofert.jpg" alt="">
          </center>

      <?php } ?>
    </div>
</div>
</div>
<?php
 require_once "blocks/footer.php" ;
 ?>
