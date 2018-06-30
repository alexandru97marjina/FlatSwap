<center>
  <h3>Lista Contracte vinzari/arenda care se termina la data <?=$data?> si nu sunt realizate </h3>
  <table class="out">
  <tr>
    <th>id_ContractV</th>
    <th>Data Inc</th>
    <th>Data Sf</th>
    <th>id_serv</th>
    <th>Nume_serv</th>
    <th>Angajat</th>
    <th>Pret serv<i class="fa fa-eur"></i></th>
    <th>Realizat</th>
  </tr>
  <?php
connectDB();
$sql = "SELECT contractv.id_contractv, contractv.data_in , contractv.data_sf, contractv.id_serv,servicii.nume_serviciu, angajat.nume, contractv.pret,contractv.realizat
FROM contractv,servicii,angajat WHERE contractv.id_serv=servicii.id_serv
AND contractv.id_angajat=angajat.id_angajat AND contractv.realizat='0' AND contractv.data_sf <= '$data'";

     $result = mysqli_query($mysqli,$sql);
      while($row=mysqli_fetch_array($result))
      {
          $id_ContractV=$row[0];
          $data_inc=$row[1];
          $data_sf=$row[2];
          $id_serv=$row[3];
          $Nume_serv=$row[4];
          $angajet=$row[5];
          $pret=$row[6];
          $realizat=$row[7];

    ?>
  <tr>
    <th><?php echo $id_ContractV;?></th>
    <th><?php echo $data_inc;?></th>
    <th><?php echo $data_sf;?> </th>
    <th><?php echo $id_serv;?></th>
    <th><?php echo $Nume_serv;?></th>
    <th><?php echo $angajet;?></th>
    <th><?php echo $pret;?></th>
    <th><?php echo $realizat;?></th>
  </tr>
<?php }
closeDB($mysqli);
?>
  </table>
  <h3>Lista Contracte Cumparare/chirie care se termina la data <?=$data?> si sunt nerealizate </h3>
  <table class="out">
  <tr>
    <th>id_ContractC</th>
    <th>Data Inc</th>
    <th>Data Sf</th>
    <th>id_serv</th>
    <th>Nume_serv</th>
    <th>Angajat</th>
    <th>Pret serv<i class="fa fa-eur"></i></th>
    <th>Realizat</th>
  </tr>
  <?php
connectDB();
$sql = "SELECT contractc.id_contractc, contractc.data_in , contractc.data_sf, contractc.id_serv,servicii.nume_serviciu, angajat.nume, contractc.pret,contractc.realizat
FROM contractc,servicii,angajat WHERE contractc.id_serv=servicii.id_serv
AND contractc.id_angajat=angajat.id_angajat AND contractc.realizat='0' AND contractc.data_sf <= '$data'";

     $result = mysqli_query($mysqli,$sql);
      while($row=mysqli_fetch_array($result))
      {
          $id_ContractC=$row[0];
          $data_inc=$row[1];
          $data_sf=$row[2];
          $id_serv=$row[3];
          $Nume_serv=$row[4];
          $angajet=$row[5];
          $pret=$row[6];
          $realizat=$row[7];

    ?>
  <tr>
    <th><?php echo $id_ContractC;?></th>
    <th><?php echo $data_inc;?></th>
    <th><?php echo $data_sf;?> </th>
    <th><?php echo $id_serv;?></th>
    <th><?php echo $Nume_serv;?></th>
    <th><?php echo $angajet;?></th>
    <th><?php echo $pret;?></th>
    <th><?php echo $realizat;?></th>
  </tr>
<?php }
closeDB($mysqli);
?>
  </table>
</center>
