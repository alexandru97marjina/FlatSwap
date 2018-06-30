<center>
  <h3>Lista Servicii Vinzare/Dare in arenda </h3>
  <table class="out">
  <tr>
    <th>id_Serviciu</th>
    <th>Nume_grServ</th>
    <th>Nume_serv</th>
    <th>Pret</th>
    <th>Descriere</th>
  </tr>
  <?php
    connectDB();
    $sql = "SELECT servicii.id_serv, grserv.nume_grupa, servicii.nume_serviciu, servicii.pret_serv,servicii.Descriere
    FROM servicii,grserv \n"
    . "WHERE servicii.id_grserv=grserv.id_grserv AND  grserv.id_grserv IN(1,3)";
     $result = mysqli_query($mysqli,$sql);
      while($row=mysqli_fetch_array($result))
      {
          $id_Serviciu=$row[0];
          $Nume_grServ=$row[1];
          $Nume_serv=$row[2];
          $Pret=$row[3];
          $Descriere=$row[4];

    ?>
  <tr>
    <th><?php echo $id_Serviciu;?></th>
    <th><?php echo $Nume_grServ;?></th>
    <th><?php echo $Nume_serv;?> </th>
    <th><?php echo $Pret;?></th>
    <th><?php echo $Descriere;?></th>
  </tr>
  <?php }
  closeDB($mysqli);
  ?>
  </table>
</center>
