<?php
  $request=read($_REQUEST);
   if (isset($request["auth"])){
     if(login($request["login"],$request["password"])) {
       header("Location: index.php");
     }
     else $message ="Nu corespunde numele si/sau parola";
   }
   
 ?>
