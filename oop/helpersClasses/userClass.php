<?php
session_start(); 

require 'DB.php';
require 'validator.php';


class User
{

   private $name;
   private $password;
   private $email;



   public function Register($data)
   {

      # Create Validator OBJ . . . 
      $validator = new Validator();


      # SET THE PROPERTIES OF THE OBJECT . . .
      $this->name     = $validator->Clean($data['name']);
      $this->email    = $validator->Clean($data['email']);
      $this->password = $validator->Clean($data['password']);


      # Validate Inputs . . . 
      $errors = [];

      $result = [];

      # validate name ....
      if (!$validator->Validate($this->name, 'required')) {
         $errors['name'] = "Field Required";
      }

      # validate email
      if (!$validator->Validate($this->email, 'required')) {
         $errors['email'] = "Field Required";
      } elseif (!$validator->Validate($this->email, 'email')) {
         $errors['email'] = "Invalid Email";
      }

      # validate password
      if (!$validator->Validate($this->password, 'required')) {
         $errors['password'] = "Field Required";
      } elseif (!$validator->Validate($this->password, 'min')) {
         $errors['password'] = "Password must be at least 6 characters";
      }


      # Check if there are any errors . . .
      if (count($errors) > 0) {
         $result = ['status' => false, 'message' => $errors];
      } else {

         # Hash Password 
         $this->password = md5($this->password);

         # Insert User into Database . . .

         $DB = new DB();

         $sql = "insert into students (name, email, password) values ('$this->name', '$this->email', '$this->password')";

         $op =  $DB->doQuery($sql);

         if ($op) {
            $result = ['status' => true, 'message' => 'User Created Successfully'];
         } else {
            $result = ['status' => true, 'message' => 'User Creation Failed'];
         }
      }


      return $result;
   }


   public function list(){
      $DB = new DB();
      $sql = "select * from students";
      $op = $DB->doQuery($sql);
      return $op;
   }



   public function delete($id){
      $DB = new DB();
      $sql = "delete from students where id = $id";
      $op = $DB->doQuery($sql);
      return $op;
   }


   public function edit($id){
      $DB = new DB();
      $sql = "select * from students where id = $id";
      $op = $DB->doQuery($sql);
      $data = mysqli_fetch_assoc($op);
      return $data;
   }





   
   public function update($data,$id)
   {

      # Create Validator OBJ . . . 
      $validator = new Validator();


      # SET THE PROPERTIES OF THE OBJECT . . .
      $this->name     = $validator->Clean($data['name']);
      $this->email    = $validator->Clean($data['email']);


      # Validate Inputs . . . 
      $errors = [];

      $result = [];

      # validate name ....
      if (!$validator->Validate($this->name, 'required')) {
         $errors['name'] = "Field Required";
      }

      # validate email
      if (!$validator->Validate($this->email, 'required')) {
         $errors['email'] = "Field Required";
      } elseif (!$validator->Validate($this->email, 'email')) {
         $errors['email'] = "Invalid Email";
      }


      # Check if there are any errors . . .
      if (count($errors) > 0) {
         $result = ['status' => false, 'message' => $errors];
      } else {


         $DB = new DB();

         $sql = "update students set name = '$this->name', email = '$this->email' where id = $id";
         
         $op =  $DB->doQuery($sql);

         if ($op) {
            $result = ['status' => true, 'message' => 'User updated Successfully'];
         } else {
            $result = ['status' => true, 'message' => 'User updating Failed'];
         }
      }


      return $result;
   }






}
