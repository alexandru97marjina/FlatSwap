<center>
  <h3>Contracte vinzari/arenda realizate in intervalul [<?=$dataIN?>,<?=$dataSF?>] </h3>
  <table class="out">
  <tr>
    <th>Nr_contractV</th>
    <th>Venit <i class="fa fa-eur"></i></th>
  </tr>
  <?php
connectDB();
$sql = "SELECT COUNT(*) as NrContractv ,SUM(pret)
AS Venit FROM contractv
WHERE contractv.realizat='1' AND contractv.data_sf BETWEEN '$dataIN' AND '$dataSF'";
     $result = mysqli_query($mysqli,$sql);
      while($row=mysqli_fetch_array($result))
      {
          $Nr_ContractV=$row[0];
          $Venit=$row[1];

    ?>
  <tr>
    <th><?php echo $Nr_ContractV;?></th>
    <th><?php echo $Venit;?></th>
  </tr>
<?php }
closeDB($mysqli);
?>
</table>
<h3>Contracte cumpare/chirie realizate in intervalul [<?=$dataIN?>,<?=$dataSF?>] </h3>
<table class="out">
<tr>
  <th>Nr_contractC</th>
  <th>Venit <i class="fa fa-eur"></i></th>
</tr>
<?php
connectDB();
$sql = "SELECT COUNT(*) as NrContractc ,SUM(pret) AS Venit FROM contractc
WHERE contractc.realizat='1' AND contractc.data_sf BETWEEN '$dataIN' AND '$dataSF'";
   $result = mysqli_query($mysqli,$sql);
    while($row=mysqli_fetch_array($result))
    {
        $Nr_ContractC=$row[0];
        $Venit=$row[1];

  ?>
<tr>
  <th><?php echo $Nr_ContractC;?></th>
  <th><?php echo $Venit;?></th>
</tr>
<?php }
closeDB($mysqli);
?>
</table>
</center>
