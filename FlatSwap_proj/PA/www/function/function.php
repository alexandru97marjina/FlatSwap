<?php
$mysqli=false;

function connectDB(){
  global $mysqli;
  $host = 'localhost'; // locatia-gazda serverului
  $database = 'flatswap1'; // numele BD
  $user = 'root'; // numele utilizatorului
  $password = ''; // parola
  $mysqli=new mysqli($host,$user,$password,$database);
  if (!$mysqli) die ("Nu se poate conecta la MySQL");
  return $mysqli;
}


function closeDB($mysqli){
  global $mysqli;
  $mysqli->close();
}

//Functii pentru administratorul

function isAdmin($login=false,$password=false){
  if(!$login) $login=isset($_SESSION["login"])? $_SESSION["login"]:false;
  if(!$password) $password=isset($_SESSION["password"])? $_SESSION["password"]:false;
  return mb_strtolower($login)===mb_strtolower(ADM_LOGIN) && $password===ADM_PASSWORD;
}
function isSef($login=false,$password=false){
  if(!$login) $login=isset($_SESSION["login"])? $_SESSION["login"]:false;
  if(!$password) $password=isset($_SESSION["password"])? $_SESSION["password"]:false;
  return mb_strtolower($login)===mb_strtolower(SEF_LOGIN) && $password===SEF_PASSWORD;
}

function login($login,$password){
  $password=hashSecret($password);
  if(isAdmin($login,$password)){
    $_SESSION["login"]=$login;
    $_SESSION["password"]=$password;
    return true;
  }
  if(isSef($login,$password)){
    $_SESSION["login"]=$login;
    $_SESSION["password"]=$password;
    return true;
  }
  return false;
}

function hashSecret($str){
  return md5($str.SECRET);
}

function read($data){
  if(is_array($data)){
    $escaped=array();
    foreach ($data as $key => $value) {
      $escaped[$key]=read($value);
    }
    return $escaped;
  }
  return trim(htmlspecialchars($data));
}
?>
