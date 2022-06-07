<?php 

// if($_SERVER['REQUEST_METHOD'] == 'GET'){
//     // CODE .... 

//     $name     = $_REQUEST['name'];
//     $email    = $_GET['email'];
//     $password = $_REQUEST['password'];
   
//     echo $name.' || '.$email.' || '.$password; 

// }



  if($_SERVER['REQUEST_METHOD'] == 'POST'){
      // CODE .... 

      $name     = $_POST['name'];
      $email    = $_POST['email'];
      $password = $_POST['password'];
     
      // Array To Store Errors Messages . . . 
      $errors = []; 

      # validate name . . .
      if(empty($name)){    // == if(empty($name) == true)
            $errors['name'] = 'Field is Required';
      } 

      # validate email . . .
        if(empty($email)){
            $errors['email'] = 'Field is Required';
        }

     # Validate password . . . 
        if(empty($password)){
            $errors['password'] = 'Field is Required';
        }
        
        # Check errors 

         if(count($errors) > 0){

             foreach ($errors as $key => $value) {
                 # code...
                 echo $key.' : '.$value.'<br>';
             }
         }else{
                echo 'Success';
         }

  }

?>