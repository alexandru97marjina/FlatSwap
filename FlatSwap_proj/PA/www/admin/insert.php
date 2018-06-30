<?php
  $title="FlatSwap-Insert";
  require_once 'blocks/top.php';
 ?>
 <div id="wrapper">
   <center>
     <h3>Pagina pentru adaugarea datelor</h3>
     <h4>Contractele disponibile</h4>
     <?php
     require_once 'Contracte/contractV.php';
     require_once 'Contracte/contractC.php';
      ?>
      <h3>Doriti sa adaugati un anunt?</h3>
        <ul>
          <li><a  class="btn-primary" href="addContractV.php">Adauga Contract Vinzare</a></li>
          <li><a class="btn-success" href="addContractC.php">Adauga Contract Cumparare</a></li>
        </ul>





   </div>
 <?php
   require_once 'blocks/footer.php';
  ?>
