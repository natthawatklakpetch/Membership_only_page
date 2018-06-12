<?php
// Start the session
session_start();
function redirect($url, $statusCode = 303){
   header('Location: ' . $url, true, $statusCode);
   die();
}
//database simmulation//
$token_server_side = "522cd0eacc76c680c6d2a88695cf6841";
////////////////////////
if($_SESSION["token"] != $token_server_side ){
  redirect('unauthorized.html');
}
?>

<!DOCTYPE html>
<html lang="en">
<body>
    minasan
    <a href="mypage.php">mypage</a>
</body>
</html>
