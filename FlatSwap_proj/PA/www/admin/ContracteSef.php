<?php
  $title="FlatSwap-Contracte";
  require_once 'blocks/top.php';
 ?>
 <div id="wrapper">
   <div id="choose">
   <h3>Ce doriti sa vedeti?</h3>
   <form class="" action="ContracteSef.php" method="post">
     <ul>
       <li><input class="btn-success" type="submit" name="V" value="Contracte vinzari/dare in arenda"></li>
       <li><input class="btn-primary" type="submit" name="C" value="Contracte cumpare/chirie" ></li>
       <li><input class="btn-warning" type="submit" name="DS" value="Contracte care se termina la o data anumita">
         <input type="date" name="data"  placeholder="Data sfirsit contract"></li>
       <li><input class="btn-danger" type="submit" name="IN" value=" Venit Contracte realizat in interval">
       <input type="date" name="dataIN"  placeholder="Data inceput">
       <input type="date" name="dataSF"  placeholder="Data sfirsit"></li>
     </ul>
   </form>
   </div>
   <?php
   if(isset($_POST['V'])){require_once 'Contracte/contractV.php';}
   else if(isset($_POST['C'])){ require_once 'Contracte/contractC.php';}
   elseif (isset($_POST['DS'])) {
     if(($_POST['data'])!=""){
     $data=$_POST['data'];
     require_once 'Contracte/contractDS.php';
   }
   else {
     echo "<script>alert('Nu ati introdus data de reper')</script>";
   }
  }
  else if(isset($_POST['IN'])){
    if(($_POST['dataIN'])!="" && ($_POST['dataSF'])!=""){
      $dataIN=$_POST['dataIN'];
      $dataSF=$_POST['dataSF'];
      require_once 'Contracte/contractIN.php';
    }
    else{
      echo "<script>alert('Nu ati introdus datele de reper')</script>";
    }
  }?>
 </div>
 <?php
   require_once 'blocks/footer.php';
  ?>
