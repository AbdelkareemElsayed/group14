<?php
// tasks . . .


// function nextChar($char){

//      $nextChar =  ++$char;

//      if(strlen($nextChar) > 1){
//          $nextChar = $nextChar[0];
//      }
//      return $nextChar;
// }

// echo nextChar('c');


//   echo ord('a');
//   echo chr(98);




// function getId($link)
// {
//     //   $output =   explode('/',$link);
//     //   echo end($output);

//     $index =   strrpos($link, '/') + 1;

//     return  substr($link, $index);
// }



// $link = "http://localhost/group14/20130299";
// echo  getId($link)





// function getIdValue($tag)
// {
//     $index =   strrpos($tag, "id='") + 4;

//     $output =  explode("'", substr($tag, $index));

//     return  $output[0];
// }

// $tag = "<input id='container'  class='x'>";

// echo  getIdValue($tag);

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//  $student = [ 'name' => 'root','id' => 2013,'email' => 'root@localhost','gpa' => 3.4]; 


// //  echo $student['email'];

// foreach ($student as $key => $value) {
//     # code...

//     echo $key.' : '.$value.'<br>';
// }



//   $students = [

//   'student1' =>   [ 'name' => 'root','id' => 2013,'email' => 'root@localhost','gpa' => 3.4], 
//   'student2' =>   [ 'name' => 'x','id' => 2012,'email' => 'x@localhost','gpa' => 3.3],
//   'student3' =>   [ 'name' => 'y','id' => 2015,'email' => 'y@localhost','gpa' => 2.4]

//   ]; 


//   echo $students[1]['email'];
// print_r($students);

//  echo $students['student2']['email'].' || '.$students['student2']['id'];

//  foreach ($students as $key => $student) {
//      # code...

//     //  echo $key.' || '.$value; 

//     foreach ($student as $subkey => $value) {
//         # code...

//         echo $subkey.' : '.$value.'  ';
//     }

//     echo '<br>';
//  }

// echo count($students);


/// $chars = ['b','a','z','c'];

// sort($chars);  // Array ( [0] => a [1] => b [2] => c [3] => z )

//  rsort($chars);  // Array ( [0] => z [1] => c [2] => b [3] => a )

//  print_r($chars);  

// $studentsGpa = ['x' =>2.4  , 'z' => 3.2  , 'y' => 1.5];


// asort($studentsGpa);  // Value asc   // Array ( [y] => 1.5 [x] => 2.4 [Z] => 3.2 )

// arsort($studentsGpa);  // Value desc   // Array ( [z] => 3.2 [x] => 2.4 [y] => 1.5 )


//  ksort($studentsGpa);  // Key asc   // Array ( [x] => 2.4 [y] => 1.5 [z] => 3.2 )

// krsort($studentsGpa);  // Key desc   // Array ( [z] => 3.2 [y] => 1.5 [x] => 2.4 )
// print_r($studentsGpa);  


#############################################################################################################
// SUPERGLOBALS Variables . . .

// 1 - $GLOBALS[] 


// $name = "root";
// $age = 20;
// $Gpa = 3.4;
// $CLASS = 'A';



  //  print_r($GLOBALS);

// ECHO $GLOBALS['name']; 

// function message()
// {
//     $x = 'xx'; 

//     $GLOBALS['x'] = $x; 

//     echo $GLOBALS['name'] . ' || ' . $GLOBALS['age'] . ' || ' . $GLOBALS['Gpa'];;
// }
//  message(); // root 

//  //print_r($GLOBALS);


// echo $GLOBALS['x']; 

// 2- $_SERVER[] 

// ECHO $_SERVER['PHP_SELF'];  //  /group14/session3.php

 //   ECHO $_SERVER['HTTP_HOST'];  //  localhost

//  ECHO $_SERVER['SCRIPT_NAME'];  //  /group14/session3.php

  //  ECHO $_SERVER['SERVER_SOFTWARE'];  //  Apache/2.4.23 (Win32) OpenSSL/1.0.2o PHP/5.6.30
   //   ECHO $_SERVER['REQUEST_TIME'];  //  1501078981

   //     ECHO $_SERVER['REMOTE_ADDR'];  //  ::1    // 127.0.0.1   // USER IP 

  //   ECHO $_SERVER['SERVER_ADDR'];  // SERVER IP  // 127.0.0.1 

    //   ECHO $_SERVER['SERVER_PORT'];  //  80

//    ECHO  $_SERVER['REQUEST_METHOD'];  //  GET
?>



