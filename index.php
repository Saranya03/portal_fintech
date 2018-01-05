<?php


if(empty($_SESSION)) // if the session not yet started
   session_start();


if(isset($_SESSION['username'])) { // if already login
  $content = file_get_contents('home.php');
  echo $content;
}

else {
  $content = file_get_contents('login.php');
  echo $content;
}


?>
