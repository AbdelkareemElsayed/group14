<?php
require '../helpers/dbConnection.php';
require '../helpers/functions.php';
################################################################################################################
// select category . . . 
$sql = "select * from categories";
$catsObj  = DoQuery($sql);
################################################################################################################

################################################################################################################
# Fetch Raw Data . . . 
$id = $_GET['id'];
$sql = "select articles.* , categories.title as cat_title ,  users.name as UserName , users.image as userImage from articles inner join categories on articles.cat_id = categories.id  inner join users on articles.addedBy = users.id where articles.id = $id";
$op  = DoQuery($sql);
$BlogData = mysqli_fetch_assoc($op);
################################################################################################################
# Check Owner . . . 
if(!checkOwner($BlogData['addedBy'])){
     
    $_SESSION['Message'] = ['Error' => 'You are not allowed to Access this article'];

     header("Location: ".url('Articles/index.php'));
     exit; 
   }
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



        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) . '?id=' . $BlogData['id']; ?>" method="post" enctype="multipart/form-data">


            <div class="form-group">
                <label for="exampleInputName">Title</label>
                <input type="text" class="form-control" required id="exampleInputName" aria-describedby="" name="title" placeholder="Enter Title" value="<?php echo $BlogData['title']?>">
            </div>


            <div class="form-group">
                <label for="exampleInputEmail">Content</label>
                <textarea class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" name="content" placeholder="Enter content"> <?php echo $BlogData['content']?></textarea>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword">Date</label>
                <input type="date" class="form-control" required id="exampleInputPassword1" name="date"   value="<?php echo date('Y-m-d',$BlogData['date'])?>"> 
            </div>



            <div class="form-group">
                <label for="exampleInputPassword">Category</label>
                <select class="form-control" required name="role_id">

                    <?php
                    while ($data = mysqli_fetch_assoc($catsObj)) {
                    ?>

                        <option value="<?php echo $data['id']; ?>" 
                        <?php if ($data['id'] == $BlogData['cat_id']) { echo 'selected';}  ?>>
                        <?php echo $data['title']; ?>
                       </option>

                    <?php }  ?>

                </select>
            </div>



            <div class="form-group">
                <label for="exampleInputPassword">Image</label>
                <input type="file" name="image">
            </div>
            <p>
                <img src="uploads/<?php echo $BlogData['image']; ?>" alt="" height="250px" width="250px">
            </p>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>


</main>


<?php
require '../layouts/footer.php';
?>