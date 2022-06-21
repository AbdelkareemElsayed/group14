<?php 
   
   # CHECK USER SESSION 
    if ($_SESSION['user']['role_id'] != 3) {
         header("location: ".url('index.php'));
         exit(); 
    }
?>