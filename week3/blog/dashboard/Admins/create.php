<?php
require '../helpers/dbConnection.php';
require '../helpers/functions.php';
################################################################################################################
// select roles . . . 
$sql = "select * from roles";
$rolesObj  = DoQuery($sql);
################################################################################################################
// Logic . . .

if ($_SERVER['REQUEST_METHOD'] == "POST") {

  $name       = Clean($_POST['name']);
  $email      = Clean($_POST['email']);
  $password   = Clean($_POST['password']);
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

  if (!Validate($password, 'required')) {
    $errors['Password'] = "Field Required";
  } elseif (!Validate($password, 'min', 6)) {
    $errors['Password'] = "Length Must be >= 6 chars";
  }

  if (!Validate($role_id, 'required')) {
    $errors['Role'] = "Field Required";
  } elseif (!Validate($role_id, 'int')) {
    $errors['Role'] = "Invalid Role";
  }


  if (!Validate($_FILES['image']['name'], 'required')) {
    $errors['Image'] = "Field Required";
  } elseif (!Validate($_FILES['image']['type'], 'image')) {
    $errors['Image'] = "Invalid Extension";
  }



  # Check if there are any errors . . .
  if (count($errors) > 0) {
    $_SESSION['Message'] = $errors;
  } else {
    // code . . . 

    $password = md5($password);


    # Upload File . . . 
    $imageName = Upload($_FILES);

    if ($imageName == false) {

      $message = ["Error" => "Error Uploading File"];
    } else {

      $sql = "INSERT INTO users (name,email,password,image,role_id) VALUES ('$name','$email','$password','$imageName',$role_id)";
      $op  = DoQuery($sql);

      if ($op) {
        $message = ['success' => 'Account Added Successfully'];
      } else {
        $message = ['error' => 'Error Adding Account'];
      }
    }


    $_SESSION['Message'] = $message;
  }
}



################################################################################################################


require '../layouts/header.php';
require '../layouts/nav.php';
require '../layouts/sidNav.php';
?>

<main>
  <div class="container-fluid">
    <h1 class="mt-4">Dashboard / Admins</h1>
    <ol class="breadcrumb mb-4">

      <?php
      Message('Admins/Create');
      ?>

    </ol>



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
        <label for="exampleInputPassword">Password</label>
        <input type="password" class="form-control" required id="exampleInputPassword1" name="password" placeholder="Password">
      </div>



      <div class="form-group">
        <label for="exampleInputPassword">Roles</label>
        <select class="form-control" required name="role_id">

          <?php
          while ($data = mysqli_fetch_assoc($rolesObj)) {
          ?>

            <option value="<?php echo $data['id']; ?>"><?php echo $data['title']; ?></option>

          <?php }  ?>

        </select>
      </div>



      <div class="form-group">
        <label for="exampleInputPassword">Image</label>
        <input type="file" name="image">
      </div>



      <button type="submit" class="btn btn-primary">Submit</button>
    </form>


</main>


<?php
require '../layouts/footer.php';
?>