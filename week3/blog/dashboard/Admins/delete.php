<?php 
  require '../helpers/dbConnection.php';
  require '../helpers/functions.php';

 $id = $_GET['id']; 

 # Fetch Raw Data . . .
$sql = "select image from users where id = $id ";
$op  = DoQuery($sql);
$data = mysqli_fetch_assoc($op);
 
  if(RemoveFile($data['image'])){


 $sql = "delete from users where id = $id";
    
 $op  = DoQuery($sql);

    if($op){
    $message = ['success' => 'Role Deleted Successfully'];
    }else{
    $message = ['error' => 'Error Deleting Role'];
    }
  }else{
    $message = ['error' => 'Error Deleting File Try Again '];
  }

    $_SESSION['Message'] = $message;

    header("Location: index.php");
