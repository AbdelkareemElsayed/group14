<?php 
require '../helpersClasses/userClass.php';

 $id = $_GET['id'];


  $user = new User();
  $op = $user->delete($id);

 if($op){
    

    $message =  "Record Deleted";
 }else{
    $message =  'Error Try Again';
 }

   # Set Message Session 
    $_SESSION['message'] = $message;

    header("Location: index.php");
