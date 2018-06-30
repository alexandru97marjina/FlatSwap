<!DOCTYPE html>
<html>
<head>
  <?php
  $title="FlatSwap-Servicii";
   require_once "blocks/head.php";
   ?>
</head>

<body>
<?php
  require_once "blocks/header.php";
 ?>
<div class="container-fluid" id="servicii">
  <div class="Serv">
  <center>
    <h3 >Compania noastra va ofera un sir extins de servicii.</h3>
    <h5>Alaturi de noi aveti parte de cele mai calitative si sigure servicii</h5>
    <img src="img/serv.png" alt="imgServ">
      <h3>Lista Servicii si preturile corespunzatoare </h3>
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
      . "WHERE servicii.id_grserv=grserv.id_grserv";
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

</div>
</div>
<?php
 require_once "blocks/footer.php" ;
 ?>
