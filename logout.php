<?php

  session_start();

  unset($_SESSION['login']);
  

   echo '<a href="index.php"> click here to go to homepage" </a> ';

   header('Location: index.php');
   
?>

