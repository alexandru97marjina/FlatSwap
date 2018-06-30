<?php
    require_once 'blocks/top.php';
 ?>
<center><h4>Introduceti Datele pentru ContractV</h4></center>
</center>
<div class="container-ContractV">
    <center><h3>Introduceti datele pentru Contract V</h3></center>
    <form class="AddContractV" action="addContractV.php" method="post">
        <div class="Vinzator">
          <center><h4>Introduceti datele despre vinzator</h4></center>
        <div class="spat">
            <label for="nume">Numele</label></br>
            <input type="text" class="form-control" id="nume" name="nume" placeholder="Nume">
        </div>
        <div class="spat">
            <label for="prenume">Prenumele</label></br>
            <input type="text" class="form-control" id="prenume" name="prenume" placeholder="Prenume">
        </div>
        <div class="spat">
            <label for="nr">Telefon</label></br>
            <input type="text" class="form-control"  id="nr" name="nr" placeholder="Numar de Telefon">
        </div>
        <div class="spat">
            <label for="email">Introdu Emailul</label></br>
            <input type="email" class="form-control"  id="email" name="email" placeholder="Email">
        </div>
      </div>
      <div class="ApartamentV">
        <center><h4>Introduceti datele despre Apartament</h4></center>
      <div class="spat">
          <label for="Nr_camere">Nr_camere</label>
          <input type="text" class="form-control" id="Nr_camere" name="Nr_camere" placeholder="Nr_camere">
      </div>
      <div class="spat">
        <label for="etajul">Etajul</label>
          <input type="text" class="form-control" id="etajul" name="etajul" placeholder="etajul">
      </div>
      <div class="spat">
        <label for="starea">Starea</label>
          <input type="text" class="form-control" id="starea" name="starea" placeholder="starea">
      </div>
      <div class="spat">
        <label for="suprafata">Suprafata</label>
          <input type="text" class="form-control" id="suprafata" name="suprafata" placeholder="suprafata">
      </div>
      <div class="spat">
        <label for="t_etaj">Total Etaje in bloc</label>
          <input type="text" class="form-control" id="t_etaj" name="t_etaj" placeholder="t_etaj">
      </div>
      <div class="spat">
        <label for="mob">Mobilat</label>
          <select class="form-control" name="mob">
            <option value="NULL">0</option>
            <option value="Da">Da</option>
            <option value="Nu">Nu</option>
          </select>
      </div>
      <div class="spat">
        <label for="incal">Incalzire</label>
          <select class="form-control" name="incal">
            <option value="NULL">0</option>
            <option value="centralizata">centralizata</option>
            <option value="autonoma">autonoma</option>
          </select>
      </div>
      <div class="spat">
        <label for="sector">Sector</label>
          <select class="form-control" name="sector">
            <option value="NULL">0</option>
            <option value="Buiucani">Buiucani</option>
            <option value="Botanica">Botanica</option>
            <option value="Ciocana">Ciocana</option>
            <option value="Centru">Centru</option>
            <option value="Riscani">Riscani</option>
            <option value="Telecentru">Telecentru</option>
            <option value="Posta Veche">Posta Veche</option>
            <option value="Sculeanca">Sculeanca</option>
          </select>
      </div>
      <div class="spat">
          <label for="pret">Pret Euro</label></br>
          <input type="text" class="form-control"  id="pret" name="pret" placeholder="pret">
      </div>
      <div class="spat">
          <label for="title">Titlu</label></br>
          <input type="text" class="form-control"  id="title" name="title" placeholder="Titlu">
      </div>
      <div class="spat">
          <label for="descriere">Descriere Apartament</label></br>
          <textarea name="descriere"  rows="6" cols="100"></textarea>
      </div>
    </div>
    <div id="Contract">
        <center><h4>Introduceti datele ContractV</h4></center>
        <div class="spat">
          <label for="angaj">Angajatul</label>
            <select class="form-control" name="angaj">
              <option value="1">Marculescu</option>
              <option value="2">Andreiescu</option>
              <option value="3">Constantinescu</option>
              <option value="4">Petrescu</option>
            </select>
        </div>
        <div class="spat">
          <label for="servV">Serviciu_Vinzare</label>
            <select class="form-control" name="servV">
              <option value="1">EVALUAREA IMOBILULUI</option>
              <option value="2">ASISTENTA VANZARII APARTAMENTULUi</option>
              <option value="3">ASISTENTA JURIDICA</option>
              <option value="4">VANZAREA APARTAMENTELOR</option>
              <option value="6">DAREA IN ARENDA A IMOBILULUI</option>
            </select>
        </div>
        <div class="spat">
            <label for="dataIn">Data intocmirii contractului</label></br>
            <input type="date" class="form-control"  id="dataIn" name="dataIn" placeholder="pretServiciu">
        </div>
        <div class="spat">
            <label for="dataSF">Data sfirsit contract</label></br>
            <input type="date" class="form-control"  id="dataSF" name="dataSF" placeholder="dataSF">
        </div>
        <div class="spat">
            <label for="pretSV">Pret Serviciu euro</label></br>
            <input type="text" class="form-control"  id="pretSV" name="pretSV" placeholder="pretServiciu">
        </div>
        <div class="spat">
          <label for="realizat">Realizat</label>
            <select class="form-control" name="realizat">
              <option value="NULL">0</option>
              <option value="0">Nu</option>
              <option value="1">Da</option>
            </select>
        </div>
    </div>
    <input type="submit" id="AddV" name="AddV" value="Adauga" class="btn btn-primary ">
    </form>
</div>
<?php
if(isset($_POST['AddV'])){
   if(($_POST['nume'])=="" || ($_POST['prenume'])=="" || ($_POST['nr'])=="" || ($_POST['email'])=="" || ($_POST['Nr_camere'])==""
   || ($_POST['etajul'])=="" || ($_POST['starea'])==""|| ($_POST['suprafata'])=="" || ($_POST['t_etaj'])=="" || ($_POST['mob'])=="" ||
   ($_POST['incal'])=="" || ($_POST['sector'])=="" || ($_POST['pret'])==""|| ($_POST['title'])=="" || ($_POST['descriere'])=="" ||
   ($_POST['angaj'])=="" || ($_POST['servV'])=="" || ($_POST['dataIn'])=="" || ($_POST['dataSF'])=="" || ($_POST['pretSV'])=="" || ($_POST['realizat'])=="")
   {
     echo "<script>alert('Nu au fost introduse toate datele')</script>";
   }
   else {
     //adaugarea in tabelul vinzator
     $nume=$_POST['nume'];
     $prenume=$_POST['prenume'];
     $nr=$_POST['nr'];
     $email=$_POST['email'];
     connectDB();
     $sql = "INSERT into vinzator (vinzator.nume_vinzator,vinzator.prenume_vinzator,vinzator.telefon,vinzator.email)\n"
    . "VALUES ('$nume','$prenume','$nr','$email')";
     $result = mysqli_query($mysqli,$sql);
     if(!$result){
       echo "<script>alert('Nu a fost introdus vinzator')</script>";
     }
     //adaugarea in tabelul apartament
     $Nr_camere=$_POST['Nr_camere'];
     $etajul=$_POST['etajul'];
     $starea=$_POST['starea'];
     $suprafata=$_POST['suprafata'];
     $t_etaj=$_POST['t_etaj'];
     $mob=$_POST['mob'];
     $incal=$_POST['incal'];
     $sector=$_POST['sector'];
     $pret=$_POST['pret'];
     $title=$_POST['title'];
     $descriere=$_POST['descriere'];

     $sql = "INSERT INTO apartament (apartament.nr_camere,apartament.etajul,apartament.starea,apartament.suprafata,apartament.nr_etaje,apartament.mobilat,apartament.incalzire,apartament.sector, apartament.title,apartament.text,apartament.pret)\n"
    . "VALUES ('$Nr_camere','$etajul','$starea','$suprafata','$t_etaj','$mob','$incal','$sector','$title','$descriere','$pret')";
     $result = mysqli_query($mysqli,$sql);
     if(!$result){
       echo "<script>alert('Nu a fost introdus apartament')</script>";
     }

     //introduce in tabelul contracte
     //intoarce ultimul id_vinzator introdus
     $sql = "SELECT vinzator.id_vinzator FROM vinzator ORDER BY vinzator.id_vinzator DESC LIMIT 1";
     $result=mysqli_query($mysqli,$sql);
     $value=mysqli_fetch_object($result);
     $id_vinzator=$value->id_vinzator;


     $sql = "SELECT apartament.id_apartament FROM apartament ORDER BY apartament.id_apartament DESC LIMIT 1";
     $result=mysqli_query($mysqli,$sql);
     $value=mysqli_fetch_object($result);
     $id_apartament=$value->id_apartament;

     $angaj=$_POST['angaj'];
     $servV=$_POST['servV'];
     $dataIn=$_POST['dataIn'];
     $dataSF=$_POST['dataSF'];
     $pretSV=$_POST['pretSV'];
     $realizat=$_POST['realizat'];
     $sql = "INSERT INTO contractv (contractv.id_vinzator,contractv.id_apartament,contractv.id_angajat,contractv.id_serv,contractv.data_in,contractv.data_sf,contractv.pret,contractv.realizat)\n"
    . "VALUES ('$id_vinzator','$id_apartament','$angaj','$servV','$dataIn','$dataSF','$pretSV','$realizat')";

     $result=mysqli_query($mysqli,$sql);
     echo "<script>alert('Success')</script>";
     closeDB($mysqli);
     exit;
   }
 }
?>
<?php
  require_once 'blocks/footer.php';
 ?>
