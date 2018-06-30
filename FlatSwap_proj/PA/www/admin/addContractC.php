<?php
    require_once 'blocks/top.php';
 ?>
<center><h4>Introduceti Datele pentru ContractC</h4></center>
</center>
<div class="container-ContractV">
    <center><h3>Introduceti datele pentru Contract C</h3></center>
    <form class="AddContractV" action="addContractC.php" method="post">
        <div class="Vinzator">
          <center><h4>Introduceti datele despre cumparator</h4></center>
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
        <center><h4>Introduceti datele despre Apartament dorit</h4></center>
      <div class="spat">
          <label for="Nr_camere">Nr_camere</label>
          <input type="text" class="form-control" id="Nr_camere" name="Nr_camere" placeholder="Nr_camere">
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
    </div>
    <div id="Contract">
        <center><h4>Introduceti datele Contractc</h4></center>
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
          <label for="servV">Serviciu_Cumparare</label>
            <select class="form-control" name="servV">
              <option value="5">ARENDA IMOBILULUI</option>
              <option value="7">CUMPARAREA IMOBILULUI</option>
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
    <input type="submit" id="AddC" name="AddC" value="Adauga" class="btn btn-primary ">
    </form>
</div>
<?php
if(isset($_POST['AddC'])){
   if(($_POST['nume'])=="" || ($_POST['prenume'])=="" || ($_POST['nr'])=="" || ($_POST['email'])=="" || ($_POST['Nr_camere'])==""
   ||($_POST['mob'])=="" || ($_POST['incal'])=="" || ($_POST['sector'])=="" ||($_POST['angaj'])==""
   || ($_POST['servV'])=="" || ($_POST['dataIn'])=="" || ($_POST['dataSF'])=="" || ($_POST['pretSV'])=="" || ($_POST['realizat'])=="")
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
     $sql = "INSERT INTO cumparator (cumparator.nume_cumparator,cumparator.prenume_cumparator,cumparator.telefon,cumparator.email)\n"
    . "VALUES ('$nume','$prenume','$nr','$email')";
     $result = mysqli_query($mysqli,$sql);
     if(!$result){
       echo "<script>alert('Nu a fost introdus vinzator')</script>";
     }
     //adaugarea in tabelul apartament
     $Nr_camere=$_POST['Nr_camere'];
     $mob=$_POST['mob'];
     $incal=$_POST['incal'];
     $sector=$_POST['sector'];


     $sql = "INSERT INTO apartament (apartament.nr_camere,apartament.mobilat,apartament.incalzire,apartament.sector)\n"
    . "VALUES ('$Nr_camere','$mob','$incal','$sector')";
     $result = mysqli_query($mysqli,$sql);
     if(!$result){
       echo "<script>alert('Nu a fost introdus apartament')</script>";
     }

     //introduce in tabelul contracte
     //intoarce ultimul id_vinzator introdus
     $sql = "SELECT cumparator.id_cumparator FROM cumparator ORDER BY cumparator.id_cumparator DESC LIMIT 1";
     $result=mysqli_query($mysqli,$sql);
     $value=mysqli_fetch_object($result);
     $id_cumparator=$value->id_cumparator;


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
     $sql = "INSERT INTO contractc (contractc.id_cumparator,contractc.id_apartament,contractc.id_angajat,contractc.id_serv,contractc.data_in,contractc.data_sf,contractc.pret,contractc.realizat)\n"
    . "VALUES ('$id_cumparator','$id_apartament','$angaj','$servV','$dataIn','$dataSF','$pretSV','$realizat')";

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
