<?php

session_start();

function clean($input){
    
    $input = trim($input); 
    $input = stripslashes($input); 
    $input = strip_tags($input); 
    return $input;
    
    // return strip_tags(stripslashes(trim($input))); 

}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // CODE .... 

    $name     = clean($_POST['name']);
    $email    = clean($_POST['email']);
    $password = clean($_POST['password']);

    // Array To Store Errors Messages . . . 
    $errors = [];


    # validate name . . .
    if (empty($name)) {    // == if(empty($name) == true)
        $errors['name'] = 'Field is Required';
    }elseif (!ctype_alpha(str_replace(' ', '', $name))) {
        $errors['name'] = 'Name must be only letters';
    }



    # validate email . . .
    if (empty($email)) {
        $errors['email'] = 'Field is Required';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Invalid Email';
    }


    # Validate password . . . 
    if (empty($password)) {
        $errors['password'] = 'Field is Required';
    } elseif (strlen($password) < 6) {
        $errors['password'] = 'Password must be at least 6 characters';
    }

    # Check errors 

    if (count($errors) > 0) {

        foreach ($errors as $key => $value) {
            # code...
            echo $key . ' : ' . $value . '<br>';
        }
    } else {
            
         $_SESSION['studentData'] = [
            'name' => $name,
            'email' => $email,
            'password' => $password];

    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Register</h2>
        <!-- action.php -->
        <form method="post" action="<?php echo  htmlspecialchars($_SERVER['PHP_SELF']); ?>">

            <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input type="text" class="form-control" name="name" id="exampleInputName" aria-describedby="" placeholder="Enter Name">
            </div>


            <div class="form-group">
                <label for="exampleInputEmail">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword">New Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>