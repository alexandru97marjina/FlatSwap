<center>
  <h3>Lista Apartamente cautate pentru cumparare </h3>
  <table class="out">
  <tr>
    <th>id_Contract</th>
    <th>Nr.Camere</th>
    <th>Mobila</th>
    <th>Incalzire</th>
    <th>Sector</th>
    <th>Contacte</th>
  </tr>
  <?php
    connectDB();
$sql = "SELECT contractc.id_contractc ,apartament.nr_camere,apartament.mobilat,apartament.incalzire, apartament.sector, angajat.nr_telefon FROM contractc, apartament,angajat, servicii WHERE contractc.id_apartament=apartament.id_apartament AND contractc.id_serv=servicii.id_serv
AND contractc.id_angajat=angajat.id_angajat AND contractc.realizat='0' AND servicii.id_serv ='7'";
     $result = mysqli_query($mysqli,$sql);
      while($row=mysqli_fetch_array($result))
      {
          $id_Contract=$row[0];
          $Nr_Camere=$row[1];
          $Mobilat=$row[2];
          $Incalzire=$row[3];
          $Sector=$row[4];
          $Contacte=$row[5];

    ?>
  <tr>
    <th><?php echo $id_Contract;?></th>
    <th><?php echo $Nr_Camere;?></th>
    <th><?php echo $Mobilat;?> </th>
    <th><?php echo $Incalzire;?></th>
    <th><?php echo $Sector;?></th>
    <th><?php echo "+373".$Contacte;?></th>
  </tr>
  <?php }
  closeDB($mysqli);
  ?>
  </table>
</center>
