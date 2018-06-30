<?php
  $title="FlatSwap-Delete";
  require_once 'blocks/top.php';
 ?>
 <div id="wrapper">
   <center>
     <h3>Pagina pentru stergerea datelor</h3>
     <h4>Contractele disponibile</h4>
     <?php
     require_once 'Contracte/contractV.php';
     require_once 'Contracte/contractC.php';
      ?>
      <h3>Doriti sa modificati contractul realizat</h3>
      <div class="container-delete">
        <form  action="delete.php" method="post">
          <div class="spat">
          <label for="t_contract">Ce tip de contract stergeti?</label>
          <select class="form-control" name="t_contract">
            <option value="NULL">0</option>
            <option value="contractv">contractv</option>
            <option value="contractc">contractc</option>
          </select>
          </div>
          <div class="spat">
          <label for="id_contr">Id contract stergere</label>
          <input type="text" class="form-control" name="id_contr" placeholder="introdu id contract">
          </div>
          <div class="spat">
          <input type="submit" class="btn-danger" name="delete" id="delete" value="Confirma">
          </div>
        </form>
        <?php
            if(isset($_POST['delete'])){
              if(($_POST['t_contract'])=="" || ($_POST['id_contr'])=="" ){
                echo "<script>alert('Nu au fost introdse toate datele')</script>";
              }
              else{
                $t_contract=$_POST['t_contract'];
                $id_contr=$_POST['id_contr'];
                $temp="id_".$t_contract;

                connectDB();
                $sql = "DELETE FROM `$t_contract` WHERE `$t_contract`.`$temp` = '$id_contr'";
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
