<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Ice</title>
    <!-- jquery //-->
    <script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
    <script src="md5.js"></script>
    <link rel="stylesheet" type="text/css" href="mystyle.css">
</head>

<body>
<a href="mypage.php">Check your Acess</a>

<script>
  sessionStorage.setItem("lastname", "Smith");
</script>

<form action="token_gen.php" method="post">
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
</form>

</body>

</html>
