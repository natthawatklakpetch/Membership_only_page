<?php
session_start();
function redirect($url, $statusCode = 303){
   header('Location: ' . $url, true, $statusCode);
   die();
}

//database simmulation//
$token_server_side = "522cd0eacc76c680c6d2a88695cf6841";
///////////////////////

if($_SESSION["token"] != $token_server_side ){
  redirect('unauthorized.html');
}
echo $_SESSION["lastname"];
?>

<!DOCTYPE html>
<html lang="en">
<body>
    You can only read this if you are authorized
    <a href="page2.php">page2</a>
</body>
</html>
