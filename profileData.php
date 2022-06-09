<?php 
// session_start(); 

// echo 'Name : '.$_SESSION['name'].'<br>';
// echo 'ID : '.$_SESSION['id'].'<br>'; 



// if(isset($_SESSION['message'])){
//     echo '<h3>'.$_SESSION['message'].'</h3>';

// }else{
//     echo 'No Message Session Found <br>';
// }



// if(isset($_SESSION['studentData'])){
// foreach ($_SESSION['studentData'] as $key => $value) {
//     # code...
//     ECHO $key . ' : ' . $value . '<br>';
// }
// }else{
//     echo 'No Student Data Session Found <br>';
// }



/** 
 *    form Contains
 * title : required
 * content " required | length > 30    
 * note (Take Action in the same Page)
 * 
 * create blogDetails Page to display data that user inserted in form
 * 
 */



  //  echo  $_COOKIE['userData']; 


  $file = fopen('info.txt', 'r') or die('Unable to open file!');

   while (!feof($file)) {

      $data = explode('||',fgets($file));
     
      foreach ($data as $key => $value) {
        # code...
        echo  $value . ' ';
      }
       
      echo '<br>'; 


   }

   fclose($file);
