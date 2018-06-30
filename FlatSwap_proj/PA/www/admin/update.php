<?php
  $title="FlatSwap-Update";
  require_once 'blocks/top.php';
 ?>
 <div id="wrapper">
   <center>
     <h3>Pagina pentru actualizarea datelor</h3>
     <h4>Contractele disponibile</h4>
     <?php
     require_once 'Contracte/contractV.php';
     require_once 'Contracte/contractC.php';
      ?>
      <h3>Doriti sa modificati contractul realizat</h3>
      <div class="container-update">
        <form  action="update.php" method="post">
          <div class="spat">
          <label for="t_contract">Ce tip de contract modificati?</label>
          <select class="form-control" name="t_contract">
            <option value="NULL">0</option>
            <option value="contractv">contractv</option>
            <option value="contractc">contractc</option>
          </select>
          </div>
          <div class="spat">
          <label for="id_contr">Id contract care doriti sa modificati</label>
          <input type="text" class="form-control" name="id_contr" placeholder="introdu id contract">
          </div>
          <div class="spat">
          <label for="dataSF">Cind a fost realizat contractul</label>
          <input type="date" class="form-control" name="dataSF" placeholder="Data realizare">
          </div>
          <div class="spat">
          <input type="submit" class="btn-success" name="update" id="update" value="Confirma">
          </div>
        </form>
        <?php
            if(isset($_POST['update'])){
              if(($_POST['t_contract'])=="" || ($_POST['id_contr'])=="" || ($_POST['dataSF'])=="" ){
                echo "<script>alert('Nu au fost introdse toate datele')</script>";
              }
              else{
                $t_contract=$_POST['t_contract'];
                $id_contr=$_POST['id_contr'];
                $dataSF=$_POST['dataSF'];
                $temp="id_".$t_contract;

                connectDB();
                $sql = "UPDATE `$t_contract` SET `data_sf` = '$dataSF', `realizat` = '1' WHERE `$t_contract`.`$temp` ='$id_contr' ";
                $result=mysqli_query($mysqli,$sql);
                echo "<script>alert('Success')</script>";
                closeDB($mysqli);
              }
            }
         ?>
        </div>






    </center>
   </div>
 <?php
   require_once 'blocks/footer.php';
  ?>
