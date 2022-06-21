<?php 
  require '../helpers/dbConnection.php';
  require '../helpers/functions.php';

 $id = $_GET['id']; 


 # Fetch Raw Data . . .
$sql = "select image,date,addedBy from articles where id = $id ";
$op  = DoQuery($sql);
$data = mysqli_fetch_assoc($op);
 

# Check Owner . . . 
if(!checkOwner($data['addedBy'])){
     
  $_SESSION['Message'] = ['Error' => 'You are not allowed to Access this article'];

   header("Location: ".url('Articles/index.php'));
   exit; 
 }



if($data['date'] > time()){

  if(RemoveFile($data['image'])){


 $sql = "delete from articles where id = $id";
    
 $op  = DoQuery($sql);

    if($op){
    $message = ['success' => 'Article Deleted Successfully'];
    }else{
    $message = ['error' => 'Error Deleting Article'];
    }
  }else{
    $message = ['error' => 'Error Deleting File Try Again '];
  }

}else{
  $message = ['error' => "Can't delete this Article "];
}


    $_SESSION['Message'] = $message;

    header("Location: index.php");
