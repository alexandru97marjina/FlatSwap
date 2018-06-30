<center>
  <h3>Nr de Contracte vinzare realizate in intervalul [<?=$dataIN?>,<?=$dataSF?>] </h3>
  <table class="out">
  <tr>
    <th>id_Angajat</th>
    <th>Nume</th>
    <th>Prenume</th>
    <th>Nr_Sarcini_realizate</th>
  </tr>
  <?php
    connectDB();
  $sql = "SELECT contractv.id_angajat,angajat.nume,angajat.prenume,
  COUNT(contractv.realizat) as realizate from contractv,angajat WHERE contractv.realizat='1' AND contractv.id_angajat=angajat.id_angajat
  AND contractv.data_sf BETWEEN '$dataIN' AND '$dataSF' GROUP by contractv.id_angajat";

     $result = mysqli_query($mysqli,$sql);
      while($row=mysqli_fetch_array($result))
      {
          $id_Angajat=$row[0];
          $Nume=$row[1];
          $Prenume=$row[2];
          $Sarcini_realizate=$row[3];

    ?>
  <tr>
    <th><?php echo $id_Angajat;?></th>
    <th><?php echo $Nume;?></th>
    <th><?php echo $Prenume;?> </th>
    <th><?php echo $Sarcini_realizate;?></th>
  </tr>
  <?php }
  closeDB($mysqli);
  ?>
  </table>
  <h3>Nr de Contracte Cumparare realizate in intervalul [<?=$dataIN?>,<?=$dataSF?>] </h3>
  <table class="out">
  <tr>
    <th>id_Angajat</th>
    <th>Nume</th>
    <th>Prenume</th>
    <th>Nr_Sarcini_realizate</th>
  </tr>
  <?php
    connectDB();
  $sql = "SELECT contractc.id_angajat,angajat.nume,angajat.prenume, COUNT(contractc.realizat) as realizate from contractc,angajat WHERE contractc.realizat='1' AND contractc.id_angajat=angajat.id_angajat
  AND contractc.data_sf BETWEEN '$dataIN' AND '$dataSF' GROUP by contractc.id_angajat";

     $result = mysqli_query($mysqli,$sql);
      while($row=mysqli_fetch_array($result))
      {
          $id_Angajat=$row[0];
          $Nume=$row[1];
          $Prenume=$row[2];
          $Sarcini_realizate=$row[3];

    ?>
  <tr>
    <th><?php echo $id_Angajat;?></th>
    <th><?php echo $Nume;?></th>
    <th><?php echo $Prenume;?> </th>
    <th><?php echo $Sarcini_realizate;?></th>
  </tr>
  <?php }
  closeDB($mysqli);
  ?>
  </table>
  <h3>Nr de contracte de Vinzare active in intervalul [<?=$dataIN?>,<?=$dataSF?>] </h3>
  <table class="out">
  <tr>
    <th>id_Angajat</th>
    <th>Nume</th>
    <th>Prenume</th>
    <th>Nr_Sarcini_active</th>
  </tr>
  <?php
    connectDB();
    $sql = "SELECT contractv.id_angajat,angajat.nume,angajat.prenume,
    COUNT(contractv.realizat) as realizate from contractv,angajat WHERE contractv.realizat='0' AND contractv.id_angajat=angajat.id_angajat
    AND contractv.data_sf BETWEEN '$dataIN' AND '$dataSF' GROUP by contractv.id_angajat";

     $result = mysqli_query($mysqli,$sql);
      while($row=mysqli_fetch_array($result))
      {
          $id_Angajat=$row[0];
          $Nume=$row[1];
          $Prenume=$row[2];
          $Sarcini_active=$row[3];

    ?>
  <tr>
    <th><?php echo $id_Angajat;?></th>
    <th><?php echo $Nume;?></th>
    <th><?php echo $Prenume;?> </th>
    <th><?php echo $Sarcini_active;?></th>
  </tr>
  <?php }
  closeDB($mysqli);
  ?>
  </table>
  <h3>Nr de contracte de Cumparare active in intervalul [<?=$dataIN?>,<?=$dataSF?>] </h3>
  <table class="out">
  <tr>
    <th>id_Angajat</th>
    <th>Nume</th>
    <th>Prenume</th>
    <th>Nr_Sarcini_active</th>
  </tr>
  <?php
    connectDB();
    $sql = "SELECT contractc.id_angajat,angajat.nume,angajat.prenume, COUNT(contractc.realizat) as realizate from contractc,angajat WHERE contractc.realizat='0' AND contractc.id_angajat=angajat.id_angajat
    AND contractc.data_sf BETWEEN '$dataIN' AND '$dataSF' GROUP by contractc.id_angajat";

     $result = mysqli_query($mysqli,$sql);
      while($row=mysqli_fetch_array($result))
      {
          $id_Angajat=$row[0];
          $Nume=$row[1];
          $Prenume=$row[2];
          $Sarcini_active=$row[3];

    ?>
  <tr>
    <th><?php echo $id_Angajat;?></th>
    <th><?php echo $Nume;?></th>
    <th><?php echo $Prenume;?> </th>
    <th><?php echo $Sarcini_active;?></th>
  </tr>
  <?php }
  closeDB($mysqli);
  ?>
  </table>
</center>
