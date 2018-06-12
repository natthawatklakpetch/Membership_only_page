<?php
session_start();
function redirect($url, $statusCode = 303){
   header('Location: ' . $url, true, $statusCode);
   die();
}
function generate_token($a,$b){
  $c = $a.' '.$b;
  return hash("md5",$c);
}
$_SESSION["token"]=generate_token($_POST["uname"],$_POST["psw"]);
redirect('mypage.php');
?>
