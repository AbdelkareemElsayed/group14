<?php


// if (isset($_COOKIE['userData'])) {
//     echo $_COOKIE['userData'];
// } else {
//     setcookie('userData', 'root Account', time() + 86400, '/');
// }


// setcookie('userData', 'root Account', time() - 86400, '/');


//   setcookie('userId',111,time() + 86400,'/');


// 86400 


//  echo $_COOKIE['userData'];
//  echo $_COOKIE['userId'];


############################################################################## 

// TEXT FILE . . . 

// $file =   fopen('info.txt','a') or die('Unable to open file!');

//    $text = "c# course \n";

//     fwrite($file,$text); 

//     $text = "c++ course \n";

//     fwrite($file,$text); 

//     fclose($file);



// Read From File . . . 

// $file = fopen('info.txt', 'r') or die('Unable to open file!');


// while (!feof($file)) {

//   echo  strtoupper(fgets($file))    . '<br>';
//   // echo  strtoupper(fgetc($file))    . '<br>';
// }

// fclose($file);



######################################################################################################################## 

// json  

// $stdObj = '{
//      "name" : "root", 
//      "email" : "Root@yahoo.com", 
//      "id" : "111"
//    }'; 

       
//   $data =  json_decode($stdObj,true);
    
  // var_dump($data);

    //  echo $data->id.' || '.$data->name;

    // echo $data['id'].' || '.$data['name'];


  //  $data = ["name" => "root", "email" => "root@gmail.com" , 'id' => 2013];

  //    echo   json_encode($data);

$link = "https://tools.learningcontainer.com/sample-json-file.json";

   $jsonObj = file_get_contents($link);

    $data =    json_decode($jsonObj,true);

  // print_r($data);

       echo $data['Name'].' || '. $data['Mobile'].' || '.$data['Address']['current Address'].' || '.$data['Pets'][0] ;



?> 