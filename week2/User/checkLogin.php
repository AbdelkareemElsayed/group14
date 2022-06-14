<?php 
   
   # CHECK USER SESSION 
    if (!isset($_SESSION['userData'])) {
         header("location: login.php");
         exit(); 
    }
?>