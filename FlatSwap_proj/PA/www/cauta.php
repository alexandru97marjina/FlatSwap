<!DOCTYPE html>
<html>
<head>
  <?php
  $title="FlatSwap-Cauta";
   require_once "blocks/head.php";
   ?>
</head>

<body>
<?php
  require_once "blocks/header.php";
 ?>
<div class="container">
<div class="catalog" id="caut">
  <center>
    <h3>Gaseste-ti apartamentul viselor tale</h3>
  </center>
    <div class="container-anunturi" >
      <div id="sch">
        <form class="" action="cauta.php" method="post">
          <div class="spat">
            <label for="nr_camere">Nr_camere</label>
            <select class="form-control" name="nr_camere">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
            </select>
          </div>
          <div class="spat">
            <label for="sector">Sector</label>
              <select class="form-control" name="sector">
                <option value="Buiucani">Buiucani</option>
                <option value="Botanica">Botanica</option>
                <option value="Ciocana">Ciocana</option>
                <option value="Centru">Centru</option>
                <option value="Riscani">Riscani</option>
                <option value="Telecentru">Telecentru</option>
                <option value="Posta Veche">Posta Veche</option>
                <option value="Sculeanca">Sculeanca</option>
              </select>
          </div>
              <div class="spat">
                <label for="mob">Mobilat</label>
                  <select class="form-control" name="mob">
                    <option value="Da">Da</option>
                    <option value="Nu">Nu</option>
                  </select>
              </div>
          <input type="submit" class="btn btn-success" name="caut" value="Cauta">
        </form>
      </div>
      <?php
          if(isset($_POST['caut'])){
            if(($_POST['nr_camere'])==""||($_POST['sector'])==""||($_POST['mob'])==""){
              echo "<script>alert('Nu ati introdus toate datele')</script>";
            }
            else{
              $nr_camere=$_POST['nr_camere'];
              $sector=$_POST['sector'];
              $mob=$_POST['mob'];
              require_once 'cautV.php';
            }

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
