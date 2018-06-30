<!DOCTYPE html>
<html>
<head>
<?php require_once "start.php" ?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pagina Admin</title>
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/font-awesome.min.css">
<link rel="stylesheet" href="style.css" type="text/css">
<link href="../img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
<script src="../js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript">
</script>
</head>
<style >
  a.current {
    color: #ff7878;
    text-decoration: underline;
  }
</style>
<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a id="logo" href="../index.php" class="navbar-brand" title="Pagina Principala">Flat<i class="fa fa-building-o" aria-hidden="true"></i>Swap<i class="fa fa-exchange" aria-hidden="true"></i></a>
          </div>
    <div class="navbar-collapse collapse">
      <ul id="ch" class="nav navbar-nav navbar-right">
        <li><a href=" ../oferte.php" title="Pagina oferte">Catolog Oferte</a></li>
        <li><a href="../cerere.php" title="Pagina cerere">Catolog Cereri</a></li>
        <li><a href="../servicii.php" title="Pagina Servicii">Servicii</a></li>
        <li><a href="logout.php">Iesire</a></li>
      </ul>
    </div>
  </div>
</div>
<?php
if(isAdmin()) { ?>
<div class="clear"><br /></div>
  <center>
  <h3 class="text-info">Ati intrat ca administrator ai bazei de date</h3>
  <div id="menu">Compartimente <hr /></div>
  <div id="menuHrefs">
    <a href="index.php">Principala Admin</a>
    <a href="insert.php">Adaugare Contracte</a>
    <a href="update.php">Actualizare Contracte</a>
    <a href="delete.php">Stergerea Contracte</a>
  </div>
  <script>
  for (var i = 0; i < document.links.length; i++) {
      if (document.links[i].href == document.URL) {
          document.links[i].className = 'current';
      }
  }
  </script>
  </center>
<?php } ?>

<?php if(isSef()) { ?>
  <div class="clear"><br /></div>
    <center>
    <h3 class="text-info">Ati intrat ca conducator de interprindere </h3>
    <div id="menu">Compartimente <hr /></div>
    <div id="menuHrefs">
      <a href="index.php">Principala Conducere</a>
      <a href="ContracteSef.php">Contracte</a>
      <a href="angajatiSef.php">Angajati</a>
      <a href="Servicii.php">Servicii</a>
    </div>
    </center>
    <script>
    for (var i = 0; i < document.links.length; i++) {
        if (document.links[i].href == document.URL) {
            document.links[i].className = 'current';
        }
    }
    </script>
<?php
}
 ?>
