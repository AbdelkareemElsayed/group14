<?php 
session_start(); 

// echo 'Name : '.$_SESSION['name'].'<br>';
// echo 'ID : '.$_SESSION['id'].'<br>'; 

foreach ($_SESSION['studentData'] as $key => $value) {
    # code...
    ECHO $key . ' : ' . $value . '<br>';
}


?>