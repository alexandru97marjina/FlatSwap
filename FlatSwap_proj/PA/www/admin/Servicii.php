<?php
  require_once 'blocks/top.php';
 ?>
 <div id="choose">
 <h3>Ce doriti sa vedeti?</h3>
 <form class="" action="Servicii.php" method="post">
   <ul>
     <li><input class="btn-success" type="submit" name="SV" value="Vezi servicii Vinzare/Dare in Arenda"></li>
     <li><input class="btn-primary" type="submit" name="SC" value="Vezi servicii Cumparare/Chirie"></li>
     <li><input class="btn-danger" type="submit" name="R" value=" Numarul de Solicitari">
     <input type="date" name="dataIN"  placeholder="Data inceput">
     <input type="date" name="dataSF"  placeholder="Data sfirsit"></li>
   </ul>
 </form>
 </div>
 <?php
      if(isset($_POST['SV'])){
        require_once 'serv/SV.php';
      }
      if(isset($_POST['SC'])){
        require_once 'serv/SC.php';
      }
      else if(isset($_POST['R'])){
        if(($_POST['dataIN'])!="" && ($_POST['dataSF'])!=""){
        $dataIN=$_POST['dataIN'];
        $dataSF=$_POST['dataSF'];
        require_once 'serv/SR.php';
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
