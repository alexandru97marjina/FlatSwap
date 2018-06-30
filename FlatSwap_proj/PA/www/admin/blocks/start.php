
<?php
   //echo md5("54321abcdef");
   //exit;

   mb_internal_encoding("UTF-8");

   session_start();

   define("SECRET","abcdef");
   define("ADM_LOGIN","alex1997a25@gmail.com");
   define("ADM_PASSWORD","4880c0340c65d142838ea33ace9b850a");

   define("SEF_LOGIN","flatswap@gmail.com");
   define("SEF_PASSWORD","89bc3ab113874dfbe1749d483b8695dd");

   $message=false;
  require_once "../function/function.php";
  require_once "../function/request.php"
 ?>
