<?php

require 'dbConnection.php';

# Clean Function to sanitize the data
function Clean($input)
{
    return stripslashes(strip_tags(trim($input)));
}



# Server Side Code . . . 
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $name     = Clean($_POST['name']);
    $password = Clean($_POST['password']);
    $email    = Clean($_POST['email']);


    # Validate ...... 
    $errors = [];

    # validate name .... 
    if (empty($name)) {
        $errors['name'] = "Field Required";
    }


    # validate email 
    if (empty($email)) {
        $errors['email'] = "Field Required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['Email'] = "Invalid Email";
    }


    # validate password 
    if (empty($password)) {
        $errors['password'] = "Field Required";
    } elseif (strlen($password) < 6) {
        $errors['Password'] = "Length Must be >= 6 chars";
    }


    # Validate Image . . . 
    // if (empty($_FILES['image']['name'])) {
    //     $errors['image'] = "Field Required";
    // } else {

    //     # Validate Extension . . . 
    //     $imageType = $_FILES['image']['type'];
    //     $extensionArray = explode('/', $imageType);
    //     $extension =  strtolower(end($extensionArray));

    //     $allowedExtensions = ['png', 'jpg', 'jpeg', 'webp'];    // PNG 

    //     if (!in_array($extension, $allowedExtensions)) {

    //         $errors['image'] = "File Type Not Allowed";
    //     }
    // }



    # Check ...... 
    if (count($errors) > 0) {
        // print errors .... 

        foreach ($errors as $key => $value) {
            # code...

            echo '* ' . $key . ' : ' . $value . '<br>';
        }
    } else {

        // DB cODE . . . 

        $password = md5($password);
        //   sha1()


        $sql = "insert into users (name,email,password) values ('$name','$email','$password')";

        $op =  mysqli_query($con, $sql);

        if ($op) {
            echo "Success , Your Account Created";
        } else {
            echo "Failed , " . mysqli_error($con);
        }
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

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input type="text" class="form-control" required id="exampleInputName" aria-describedby="" name="name" placeholder="Enter Name">
            </div>


            <div class="form-group">
                <label for="exampleInputEmail">Email address</label>
                <input type="email" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter email">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword">New Password</label>
                <input type="password" class="form-control" required id="exampleInputPassword1" name="password" placeholder="Password">
            </div>


            <!-- <div class="form-group">
                <label for="exampleInputPassword">Image</label>
                <input type="file" name="image">
            </div> -->

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


</body>

</html>