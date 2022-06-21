<?php
require '../helpers/dbConnection.php';
require '../helpers/functions.php';
require '../helpers/checkLogin.php';
require '../helpers/checkAdmin.php';
################################################################################################################
// select roles . . . 
$sql = "select * from roles";
$rolesObj  = DoQuery($sql);
################################################################################################################

################################################################################################################
# Fetch Raw Data . . . 
$id = $_GET['id'];
$sql = "select * from users where id = $id ";
$op  = DoQuery($sql);
$AccountData = mysqli_fetch_assoc($op);
################################################################################################################


// Logic . . .

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $name       = Clean($_POST['name']);
    $email      = Clean($_POST['email']);
    // $password   = Clean($_POST['password']);
    $role_id    = Clean($_POST['role_id']);

    # Validate Input . . . 
    $errors = [];

    if (!Validate($name, 'required')) {
        $errors['Name'] = "Field Required";
    } elseif (!Validate($name, 'min', 3)) {
        $errors['Name'] = "Length Must be >= 3 chars";
    }


    if (!Validate($email, 'required')) {
        $errors['Email'] = "Field Required";
    } elseif (!Validate($email, 'email')) {
        $errors['Email'] = "Invalid Email";
    }

    // if (!Validate($password, 'required')) {
    //   $errors['Password'] = "Field Required";
    // } elseif (!Validate($password, 'min', 6)) {
    //   $errors['Password'] = "Length Must be >= 6 chars";
    // }

    if (!Validate($role_id, 'required')) {
        $errors['Role'] = "Field Required";
    } elseif (!Validate($role_id, 'int')) {
        $errors['Role'] = "Invalid Role";
    }


    if (Validate($_FILES['image']['name'], 'required')) {

        if (!Validate($_FILES['image']['type'], 'image')) {
            $errors['Image'] = "Invalid Extension";
        }
    }



    # Check if there are any errors . . .
    if (count($errors) > 0) {
        $_SESSION['Message'] = $errors;
    } else {
        // code . . . 


        if (Validate($_FILES['image']['name'], 'required')) {
            # Upload File . . . 
            $imageName = Upload($_FILES);
        } else {
            $imageName = $AccountData['image'];
        }



        $sql = "UPDATE users  SET name = '$name' , email ='$email' , role_id = $role_id , image = '$imageName' WHERE id = $id";
        $op  = DoQuery($sql);

        if ($op) {
            $message = ['success' => 'Account Updated Successfully'];
            $_SESSION['Message'] = $message;
            header("Location: index.php");
            exit(); // stop the script

        } else {
            $message = ['error' => 'Error Updating Account  , Try Again '];
            $_SESSION['Message'] = $message;
        }
    }
}



################################################################################################################


require '../layouts/header.php';
require '../layouts/nav.php';
require '../layouts/sidNav.php';
?>

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Dashboard / Roles</h1>
        <ol class="breadcrumb mb-4">

            <?php
            Message('Accounts/Edit');
            ?>

        </ol>



        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) . '?id=' . $AccountData['id']; ?>" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input type="text" class="form-control" required id="exampleInputName" aria-describedby="" name="name" placeholder="Enter Name" value="<?php echo $AccountData['name']; ?>">
            </div>


            <div class="form-group">
                <label for="exampleInputEmail">Email address</label>
                <input type="email" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter email" value="<?php echo $AccountData['email']; ?>">
            </div>

            <!-- <div class="form-group">
        <label for="exampleInputPassword">Password</label>
        <input type="password" class="form-control" required id="exampleInputPassword1" name="password" placeholder="Password">
      </div> -->



            <div class="form-group">
                <label for="exampleInputPassword">Roles</label>
                <select class="form-control" required name="role_id">

                    <?php
                    while ($data = mysqli_fetch_assoc($rolesObj)) {
                    ?>

                        <option value="<?php echo $data['id']; ?>" <?php if ($data['id'] == $AccountData['role_id']) {
                                                                        echo 'selected';
                                                                    }  ?>><?php echo $data['title']; ?></option>

                    <?php }  ?>

                </select>
            </div>



            <div class="form-group">
                <label for="exampleInputPassword">Image</label>
                <input type="file" name="image">
            </div>
            <p>
                <img src="uploads/<?php echo $AccountData['image']; ?>" alt="" height="250px" width="250px">
            </p>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>


</main>


<?php
require '../layouts/footer.php';
?>