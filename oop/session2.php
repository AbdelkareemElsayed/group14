<?php

// student [name , email , password ] , {login() , register()}
// admin [name , email , password,phone ] , {login() , register(),send_mail()}

// class x{
//     function message(){
//         echo 'X CLASS Message'; 
//     }
// }


//  trait x{
//     function message(){
//         echo 'X CLASS Message'; 
//     }
//  }




/*
   // Access modifiers . . . 
    // public , private , protected

                      CLASS                 OBJECT               EXTENDS 
    public             TRUE                  TRUE                 TRUE
    private            TRUE                  FALSE                FALSE
    protected          TRUE                  False                TRUE 

*/



//  class user {

//     private $name = "root";
//     PROTECTED $email = "ROOT@GMAIL.COM";
//     public $password;

//     public   function login()
//     {
//         echo "login";
//     }
//     public function register()
//     {
//         echo "register";
//     }

//       function getName(){
//         return $this->name;
//       }

// }


// $userObj = new user;
// // echo $userObj->getName(); 
// echo $userObj->email; 





// class student  extends user 
// {

// //   use x;

// function getDetails(){
//     // echo $this->getName();

//     echo $this->email; 
// }


// }



//    class admin   extends  user
//    {

//        public $phone;


//        public function send_mail()
//        {
//            echo "send_mail";
//        }


//        public  function login()
//        {
//            echo "login Admin";
//        }

//    }



//  $studentObj = new student(); 
//   var_dump($studentObj); 

//    echo  $studentObj->email; 

//     $studentObj->getDetails(); 

//    echo '<br>';

//   $adminObj = new admin();

//   $adminObj->login();




// class x {

//     private  function __construct(){
//         return true;
//     }
// }

// $obj = new x; 

// interface notification{

//     function send_mail(); 
//     function send_sms();

// }



// interface x{
//     function sendMessage($text); 
// }


// class student  implements notification,x {

//     public $name; 
//     public $email;

//     public function send_mail()
//     {
//         echo "send_mail";
//     }

//     public function send_sms()
//     {
//         echo "send_sms";
//     }


//     function sendMessage($text){
//         echo $text;
//     }


// }





// abstract class user
// {

//     private $name;
//     public $email;

   
     
//      function __construct()
//      {
//         echo 'test constructor message';
//      }



//     function setName($name)
//     {
//         $this->name = $name;
//     }

//     function getName()
//     {
//         return $this->name;
//     }

//     abstract  function login();

//     abstract  function register();
// }


//     class student extends user
//     {

//         public function login()
//         {
//             echo "login student";
//         }

//         public function register()
//         {
//             echo "register student";
//         }
//     }


// $studentObj = new student();

// $studentObj->login();




// static ... 


class user
{
    private static $name = "root";
    private static $email = "root@yahoo.com";

   public static function getName(){
    return self :: $name;
   }


    public static function message(){
        echo 'welcome to oop';
    }

}
  

// $obj = new user;
// echo $obj->name; 


//   echo  user :: $name; 

  echo user :: getName();

?>