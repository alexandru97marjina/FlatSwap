
<?php
connectDB();
$sql = "SELECT contractv.id_contractv ,apartament.nr_camere,apartament.etajul,apartament.starea,apartament.suprafata,apartament.nr_etaje,apartament.mobilat,apartament.incalzire, apartament.sector, apartament.title,apartament.text,apartament.pret, angajat.nr_telefon,contractv.id_apartament
FROM contractv, apartament,angajat, servicii WHERE contractv.id_apartament=apartament.id_apartament
AND contractv.id_serv=servicii.id_serv AND contractv.id_angajat=angajat.id_angajat AND contractv.realizat='0'
AND servicii.id_serv IN(4,6) AND apartament.nr_camere='$nr_camere' AND apartament.mobilat='$mob' AND apartament.sector='$sector'";
 $result = mysqli_query($mysqli,$sql);
 $row_cnt = $result->num_rows;
 if($row_cnt==0){
   echo "<script>alert('Nu a fost gasit o corespundere')</script>";
 }
  while($row=mysqli_fetch_array($result))
  {
      $id_Contract=$row[0];
      $nr_camere=$row[1];
      $etajul=$row[2];
      $starea=$row[3];
      $suprafata=$row[4];
      $t_etaj=$row[5];
      $mobilat=$row[6];
      $incalzire=$row[7];
      $sector=$row[8];
      $title=$row[9];
      $descriere=$row[10];
      $pret=$row[11];
      $nr_angajat=$row[12];
      $id_app=$row[13];
?>
<center><h2>Anunturi Vinzare</h2></center>
<div class="container-anun">
  <span><b>ID:<?=$id_Contract?></b></span>
  <span id="cont"><b>Nr_contact:+373<?=$nr_angajat?></b></span>
  <h3><?=$title?></h3>
 <div id="caract">
<h4>Caracteristici</h4>
<ul>
  <li>Nr_camere-<?=$nr_camere?></li>
  <li>Etajul-<?=$etajul?></li>
  <li>Starea-<?=$starea?></li>
  <li>Suprafata-<?=$suprafata?></li>
  <li>Nr_etaje in bloc-<?=$t_etaj?></li>
  <li>Mobilat-<?=$mobilat?></li>
  <li>Incalzire-<?=$incalzire?></li>
  <li>Sector-<?=$sector?></li>
</ul>
</div>
<div id="descriere">
<h4>Descriere</h4>
<p><?=$descriere?></p>
</div>
<div id="photo">
  <img src="articole/<?=$id_app?>.jpg" alt="">
</div>
<div id="pret">
<span>Pret:<?=$pret?><i class="fa fa-eur"></i></span>
</div>
</div>
<?php }
  closeDB($mysqli);
 ?>
