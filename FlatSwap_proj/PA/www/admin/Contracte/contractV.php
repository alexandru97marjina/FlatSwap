<center>
  <h3>Lista Contracte vinzari/arenda </h3>
  <table class="out">
  <tr>
    <th>id_ContractV</th>
    <th>Data Inc</th>
    <th>Data Sf</th>
    <th>id_serv</th>
    <th>nume_serv</th>
    <th>Angajat</th>
    <th>Pret serv<i class="fa fa-eur"></i></th>
    <th>Realizat</th>
  </tr>
  <?php
    connectDB();
  $sql = "SELECT contractv.id_contractv, contractv.data_in , contractv.data_sf, contractv.id_serv,servicii.nume_serviciu, angajat.nume, contractv.pret,contractv.realizat FROM contractv,servicii,angajat
   WHERE contractv.id_serv=servicii.id_serv AND contractv.id_angajat=angajat.id_angajat ORDER BY contractv.id_contractv";

   $result = mysqli_query($mysqli,$sql);
    while($row=mysqli_fetch_array($result))
    {
        $id_ContractC=$row[0];
        $data_inc=$row[1];
        $data_sf=$row[2];
        $id_serv=$row[3];
        $nume_serv=$row[4];
        $angajat=$row[5];
        $pret=$row[6];
        $realizat=$row[7];

  ?>
<tr>
  <th><?php echo $id_ContractC;?></th>
  <th><?php echo $data_inc;?></th>
  <th><?php echo $data_sf;?> </th>
  <th><?php echo $id_serv;?></th>
  <th><?php echo $nume_serv;?></th>
  <th><?php echo $angajat;?></th>
  <th><?php echo $pret;?></th>
  <th><?php echo $realizat;?></th>
</tr>
<?php }
closeDB($mysqli);
?>
  </table>
</center>
