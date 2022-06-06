<?php
declare(strict_types = 1);

//    echo "test Message"; 

//    echo "php course"; 

//    echo "js Course"; 



// $status = false; 

//  if($status == true){

//     echo 'status is true';
//  }else{
//      echo 'status = false';
//  }



// $age = 25; 

// if($age <= 10){
//     echo 'age <= 10';
// }elseif($age>10  && $age<=20){
//     echo 'age between 10 : 20';

// }elseif($age>20  && $age<=30){
//     echo 'age between 20 : 30';

// }else{
//     'echo age > 30';
// }




//   $color = "xx"; 

// switch ($color) {
//     case 'red':
//         # code...
//         echo 'Color Is Red';
//         break;

//     case 'green':
//         # code...
//         echo 'Color Is Green';
//         break;

//     case "blue":
//         # code...
//         echo 'Color Is Blue';
//         break;

//     default:
//         # code...
//         echo 'No Color';

// }


// $age = 25;

// switch ($age) {
//     case ($age <= 10):
//         # code...
//         echo 'age <= 10';
//         break;

//     case ($age > 10 && $age <= 20):
//         # code...
//         echo 'age between 10 : 20';
//         break;

//     case ($age > 20 && $age <= 30):
//         # code...
//         echo 'age between 20 : 30';
//         break;

//     default:
//         # code...
//         echo 'age > 30';
//         break;
// }


// echo 'test Message';

// for ($i=0; $i < 5; $i++) { 
//     # code...
//     echo 'test Message <br>';
// }


// $i = 0;
// while ($i < 5) {
//     # code...
//     echo 'test Message <br>';
//     $i++;
// }


// $i = 10; 
// do {
//     # code...
//     echo 'test Message <br>';
// } while ($i < 5);


  // break vs continue 


//    for ($i=0; $i < 5 ; $i++) { 
//        # code...
//          if($i == 3){
//               continue;
//          }
//        echo $i .' : test Message <br>';
//    }




//  function message(){
//      // function body ... 
//      return 'Test Message . . <br>';
//  } 


//     MESSAGE(); 



// function addNumbers(){
//     $num1 = 10;
//     $num2 = 20;
//     $sum = $num1 + $num2;
//     return $sum;
// }

// echo addNumbers();



// function addNumbers($num1,$num2){
       
//         $sum = $num1 + $num2;
//         return $sum;
//     }

//     echo addNumbers(10,20).'<br>';
//     echo addNumbers(20,20).'<br>';
//     echo addNumbers(30,20).'<br>';


// function StudentDetails($name,$id=null){

//     echo 'Name : '.$name.' || ID = '.$id.'<br>';  
// }

// StudentDetails('Root',2013);
// StudentDetails('X');




// function addNumbers(int $num1,int $num2):int{
       
//         $sum = $num1 + $num2;
//         return $sum;
//     }

//     echo addNumbers(10,1).'<br>';



// variables scopes . . 

//  $age = 20; 


//   function message(){

//       $name = "root Account"; 
//       echo 'name = '.$name; 
//   }

//    echo $name; 



//    function printAge(){
//        global $age; 
     
//     echo $age; 
//    }

//     printAge(); // 20 

//  $x = 0; 

// function Result(){
//    global $x; 
//     echo $x.'<br>';
//     $x++; 
// }

// Result();  // 0  
// Result();  // 1
// Result();  // 2






// function ResultCase2(){
//     $x = 0; 
//     echo $x.'<br>';
//     $x++; 
// }

// ResultCase2();  // 0  
// ResultCase2();  // 0
// ResultCase2();  // 0




// function ResultCase3(){
//    static $x = 0; 
//     echo $x.'<br>';
//     $x++; 
// }

// ResultCase3();  // 0  
// ResultCase3();  // 1
// ResultCase3();  // 2


// function ResultCase4(){
//     static $x = 0; 
//      echo $x.'<br>';
//      $x +=  10; 
// }

// ResultCase4(); 
// ResultCase4();
// ResultCase4();


// $text = "PHP course"; 
 
// echo strlen(trim($text)); 
// echo str_word_count($text);
// echo strrev($text);
// echo  strpos($text,'course');
// echo str_replace('php','js',$text);
//   $newText =  trim($text);
//   echo strlen($newText);   // ltrim()  ,  rtrim()

// echo strtoupper($text);
//  echo strtolower($text);

//  $newText = explode(' ',$text); 
//  var_dump($newText);

//  $students = ['x','y','z'];

// //  var_dump($students); 
//  $newText =  implode(' ',$students);

//  var_dump($newText);


// $age = 20;

//   var_dump(is_int($age));


// $price = 3.50; 

// var_dump(is_float($price));
    
// var_dump(is_numeric($price));

// echo pi();

// 2,5,-7,100

// echo max(2,5,-7,100);
// echo min(2,5,-7,100);

// echo sqrt(64);
// echo round(0.7);
// echo rand(1,20);


// Arrays . . . 

 //$students = array('x','y','z'); 

 
 $students = ['x','y','z']; 

 // array(3) { [0]=> string(1) "x" [1]=> string(1) "y" [2]=> string(1) "z" }
// var_dump ($students); 

// print_r($students);
// Array ( [0] => x [1] => y [2] => z )

// echo $students[0];

 foreach ($students as  $key =>  $value) {
     # code...
     echo $key.' : '.$value.'<br>';
 }



?>