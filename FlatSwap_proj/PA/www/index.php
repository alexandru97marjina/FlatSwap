<?php
    session_start();
    unset($_SESSION["to"]);
    unset($_SESSION["from"]);
    unset($_SESSION["subject"]);
    unset($_SESSION["message"]);
    $_SESSION["from"]="";
    $_SESSION["subject"]="";
    $_SESSION["message"]="";
    if(isset($_POST["send"])){
        $from=htmlspecialchars($_POST["from"]);
        $to="alex1997a25@gmail.com";
        $subject=htmlspecialchars($_POST["subject"]);
        $message=htmlspecialchars($_POST["message"]);
        $_SESSION["to"]=$to;
        $_SESSION["from"]=$from;
        $_SESSION["subject"]=$subject;
        $_SESSION["message"]=$message;
        $error=false;
        if($from==""){
          echo "<script>alert('Nu ati introdus adresa de email')</script>";
          $error=true;
        }
        if(strlen($subject)==0){
            echo "<script>alert('Nu ati introdus tema mesajului')</script>";
          $error=true;
        }
        if(strlen($message)==0){
            echo "<script>alert('Introduceti mesajul')</script>";
          $error=true;
        }
        if(!$error){
          $subject="?utf-8?B?".base64_encode($subject)."?=";
          $headers="From: $from\r\nReply-to: $from\r\nContent-type:text/plain;
          charset=utf-8\r\n";
          $test=mail($to,$subject,$message,$headers);
          if($test){
          echo "<script>alert('Ati trimis mesajul cu succes')</script>";
            header("Location: index.php");
          exit;
          }
        else {
          echo "<script>alert('A aparut o eroare la trimiterea mesajului')</script>";
          header("Location: index.php");
          exit;
        }
        }
    }
 ?>
<!DOCTYPE html>
<html>
<head>
  <?php
  $title="FlatSwap";
   require_once "blocks/head.php";
   ?>
</head>

<body>
  <?php
    require_once "blocks/header.php";
   ?>
  <div class="container of" id="offer">
    <div class="row centered">
      <h3>Ce putem sa va oferim</h3>
      <div class="col-lg-4">
        <h5>Un serviciu accesibil din orice colt al lumii<i class="fa fa-diamond" aria-hidden="true"></i></h5>
        <p> Poti folosi site-ul nostru de oriunde, din transport, din tren in drum spre casa. Acest WebSite iti permite sa iti alegi o noua locuinta simplu si accesibil. </p>
      </div>
      <div class="col-lg-4 ">
        <h5>Cu noi ai un sir mare de oferte<i class="fa fa-star" aria-hidden="true"></i></h5>
        <p>Datorita colaborarii noastre cu companiile de frunte din Republica Moldova si din strainatate iti putem propune un
        sir mare de oferte dintre care la sigur iti vei gasi locuinta dorita.</p>
      </div>
      <div class="col-lg-4">
        <h5>Aici iti poti plasa oferta ta!<i class="fa fa-cogs" aria-hidden="true"></i></h5>
        <p>Deasemenea aici iti oferim posibilitatea de a plasa oferta proprie, astfel vinzare sau schimbare locuinte devine mai usoara.
        Avind o baza mare de clienti vinzarea sau schimbarea apartamentului nu va reprezenta un efort</p>
      </div>
    </div>
  </div>
  <div class="container pr">
    <div class="row centered">
      <h3>Cu ce companii imobiliare colaboram </h3>
      <h4 class="text-success">Noi suntem o companii de incredere, avind colaborari cu companiile imobiliare de succes din Republica Moldova</h4>
      <div class="col-lg-2">
        <div class="tilt">
          <img src="img\perfect.jpg" alt="perfectimobil">
        </div>
      </div>
      <div class="col-lg-2">
        <div class="tilt">
          <img src="img\proimobil.jpg" alt="proimobil">
        </div>
      </div>
      <div class="col-lg-2">
        <div class="tilt">
          <img src="img\accesimobil.jpg" alt="accesimobil">
        </div>
      </div>
      <div class="col-lg-2">
        <div class="tilt">
          <img src="img\axaimobil.jpg" alt="axaimobil">
        </div>
      </div>
      <div class="col-lg-2">
        <div class="tilt">
          <img src="img\ipremier.jpg" alt="ipremier">
        </div>
      </div>
      <div class="col-lg-2">
        <div class="tilt">
          <img src="img\dansicons.png" alt="dansicons">
        </div>
      </div>
    </div>
  </div>
  <div class="container r" id="about">
    <div class="row centered">
      <h3>Cine suntem ?</h3>
      <p class="text-primary">
        Suntem o companie imobiliara care iti indeplinim visele. Alaturi de noi iti poti gasi apartamentul visurilor tale .
        Noi iti oferim o multime de oferte, in care fiecare i-si va gasi apartamentul pe care mereu si l-a dorit.
        Datorita colaborarii cu noi, cautarea unei locuinte dorite se rezuma la contactarea noastra, restul lucrului il facem noi,
        de la cautarea apartamentului cu caracteristicile dorite pina la colectarea tuturor documentelor necesare.
      </p>
      <img class="img-responsive img-rounded" src="img\comunity.jpg" alt="Our Team">
    </div>
  </div>
  <div class="container con" id="contact">
    <div class="row">
      <h2 class="text-success centered">Contacteaza-ne pentru a afla mai multe detalii despre ofertele noastre.
      Cu noi visele devin realitate la doar un singur click.</h2>
      <h4 class="centered">Daca te-a interesat un obiect din catalogul nostru, sau ai dori sa plasezi un anunt pe platforma noastra, contactaza-ne.</h4>
      <div class="col-lg-6">
        <img class="img-responsive" src="img\deal.jpg" alt="">
      </div>
      <div class="col-lg-6">
        <h3>Contacteaza-ne la numerele de telefoane:</h3>
        <ul>
          <li>+37369731243</li>
          <li>+37379731243</li>
          <li>+37322444777</li>
        </ul>
        <h3>Sau scrie-ne un mesaj:</h3>
        <form role="form" class="form-vertical fc" method="post">

          <div class="form-group">
            <label for="InputEmailFirst">Introduceti Emailul dumnevoastra</label>
            <div class="input-group">
              <input type="email" class="form-control" id="from" name="from" placeholder="Email"
              value="<?=$_SESSION['from']?>">
            </div>
          </div>
          <div class="form-group">
            <label for="InputSubject">Introduceti tema mesajului</label>
            <div class="input-group">
              <input type="text" class="form-control" id="subject" name="subject" placeholder="Tema mesajului"
               value="<?=$_SESSION['subject']?>">
            </div>
          </div>
          <div class="form-group">
            <label for="message">Introduceti mesajul</label>
            <div class="input-group">
              <textarea name="message" id="message" class="form-control" rows="5" cols="60">
                <?=$_SESSION['message']?></textarea>
            </div>
          </div>
          <input type="submit" name="send" id="send" value="Trimite" class="btn btn-success ">
        </form>
      </div>
    </div>
  </div>
<?php
 require_once "blocks/footer.php" ;
 ?>
