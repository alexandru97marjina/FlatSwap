<center>
  <h3>Lista Angajati </h3>
  <table class="out">
  <tr>
    <th>id_Angajat</th>
    <th>Nume</th>
    <th>Prenume</th>
    <th>email</th>
    <th>nr_telefon</th>
    <th>Sarcini_totale</th>
    <th>Sarcini_realizate</th>
  </tr>
  <?php
    connectDB();
     $sql = "SELECT * FROM angajat";

     $result = mysqli_query($mysqli,$sql);
      while($row=mysqli_fetch_array($result))
      {
          $id_Angajat=$row[0];
          $Nume=$row[1];
          $Prenume=$row[2];
          $email=$row[3];
          $nr_telefon=$row[4];
          $Sarcini_totale=$row[5];
          $Sarcini_realizate=$row[6];

    ?>
  <tr>
    <th><?php echo $id_Angajat;?></th>
    <th><?php echo $Nume;?></th>
    <th><?php echo $Prenume;?> </th>
    <th><?php echo $email;?></th>
    <th><?php echo $nr_telefon;?></th>
    <th><?php echo $Sarcini_totale;?></th>
    <th><?php echo $Sarcini_realizate;?></th>
  </tr>
  <?php }
  closeDB($mysqli);
  ?>
  </table>
</center>
