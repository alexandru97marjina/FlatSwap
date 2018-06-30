<?php
  $title="FlatSwap-Angajati";
  require_once 'blocks/top.php';
 ?>
 <div id="choose">
 <h3>Ce doriti sa vedeti?</h3>
 <form class="" action="angajatiSef.php" method="post">
   <ul>
     <li><input class="btn-success" type="submit" name="T" value="Lista angajatii"></li>
     <li><input class="btn-danger" type="submit" name="R" value="Reusita angajatilor intr-un termen dat">
     <input type="date" name="dataIN"  placeholder="Data inceput">
     <input type="date" name="dataSF"  placeholder="Data sfirsit"></li>
   </ul>
 </form>
 </div>
 <?php
      if(isset($_POST['T'])){
        require_once 'angajati/ListAngaj.php';
      }
      else if(isset($_POST['R'])){
        if(($_POST['dataIN'])!="" && ($_POST['dataSF'])!=""){
        $dataIN=$_POST['dataIN'];
        $dataSF=$_POST['dataSF'];
        require_once 'angajati/angajReusit.php';
      }
      else{
        echo "<script>alert('Nu ati introdus datele de reper')</script>";
      }
      }
      else {

      }
  ?>
 <?php
   require_once 'blocks/footer.php';
  ?>
