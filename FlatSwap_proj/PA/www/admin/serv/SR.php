<center>
  <h3>Popularitatea Serviciilor de Vinzare/Dare in arenda in intervalul [<?=$dataIN?>,<?=$dataSF?> </h3>
  <table class="out">
  <tr>
    <th>id_Serviciu</th>
    <th>Nume_serv</th>
    <th>Pret</th>
    <th>Nr.Solicitari</th>
  </tr>
  <?php
    connectDB();
    $sql = "SELECT contractv.id_serv,servicii.nume_serviciu,servicii.pret_serv, COUNT(contractv.id_serv) as solicitari from contractv,servicii
     WHERE contractv.id_serv=servicii.id_serv AND contractv.data_sf BETWEEN '$dataIN' AND '$dataSF' GROUP by contractv.id_serv";
     $result = mysqli_query($mysqli,$sql);
      while($row=mysqli_fetch_array($result))
      {
          $id_Serviciu=$row[0];
          $Nume_serv=$row[1];
          $Pret=$row[2];
          $Nr_Sol=$row[3];

    ?>
  <tr>
    <th><?php echo $id_Serviciu;?></th>
    <th><?php echo $Nume_serv;?> </th>
    <th><?php echo $Pret;?></th>
    <th><?php echo $Nr_Sol;?></th>
  </tr>
  <?php }
  closeDB($mysqli);
  ?>
  </table>
  <h3>Popularitatea Serviciilor de Cumparare/Chirie in intervalul [<?=$dataIN?>,<?=$dataSF?> </h3>
  <table class="out">
  <tr>
    <th>id_Serviciu</th>
    <th>Nume_serv</th>
    <th>Pret</th>
    <th>Nr.Solicitari</th>
  </tr>
  <?php
    connectDB();
    $sql = "SELECT contractc.id_serv,servicii.nume_serviciu,servicii.pret_serv, COUNT(contractc.id_serv) as solicitari from contractc,servicii
    WHERE contractc.id_serv=servicii.id_serv AND contractc.data_sf BETWEEN '$dataIN' AND '$dataSF' GROUP by contractc.id_serv";
     $result = mysqli_query($mysqli,$sql);
      while($row=mysqli_fetch_array($result))
      {
          $id_Serviciu=$row[0];
          $Nume_serv=$row[1];
          $Pret=$row[2];
          $Nr_Sol=$row[3];

    ?>
  <tr>
    <th><?php echo $id_Serviciu;?></th>
    <th><?php echo $Nume_serv;?> </th>
    <th><?php echo $Pret;?></th>
    <th><?php echo $Nr_Sol;?></th>
  </tr>
  <?php }
  closeDB($mysqli);
  ?>
  </table>
</center>
