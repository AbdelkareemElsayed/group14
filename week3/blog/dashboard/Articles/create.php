<?php
require '../helpers/dbConnection.php';
require '../helpers/functions.php';
################################################################################################################
// select Categories . . . 
$sql = "select * from categories";
$catsObj  = DoQuery($sql);
################################################################################################################
// Logic . . .

if ($_SERVER['REQUEST_METHOD'] == "POST") {

  $title      = Clean($_POST['title']);
  $content    = Clean($_POST['content']);
  $date       = Clean($_POST['date']);
  $cat_id     = Clean($_POST['cat_id']);


  # Validate Input . . . 
  $errors = [];

  if (!Validate($title, 'required')) {
    $errors['Title'] = "Field Required";
  } elseif (!Validate($title, 'min', 3)) {
    $errors['Title'] = "Length Must be >= 3 chars";
  }



  if (!Validate($content, 'required')) {
    $errors['Content'] = "Field Required";
  } elseif (!Validate($content, 'min', 30)) {
    $errors['Content'] = "Length Must be >= 30 chars";
  }



  if (!Validate($cat_id, 'required')) {
    $errors['Cat'] = "Field Required";
  } elseif (!Validate($cat_id, 'int')) {
    $errors['Cat'] = "Invalid Category";
  }

  if(!Validate($date, 'required')) {
    $errors['Date'] = "Field Required";
  } elseif (!Validate($date, 'date')) {
    $errors['Date'] = "Invalid Date";
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

     
     # convert date to timestamp . . .
      $date = strtotime($date);

    # Upload File . . . 
    $imageName = Upload($_FILES);

    if ($imageName == false) {

      $message = ["Error" => "Error Uploading File"];
    } else {

      $sql = "INSERT INTO articles (title,content,date,image,cat_id,addedBy) VALUES ('$title','$content',$date,'$imageName',$cat_id,5)";
      $op  = DoQuery($sql);

      if ($op) {
        $message = ['success' => 'Article Added Successfully'];
      } else {
        $message = ['error' => 'Error Adding Article'];
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
    <h1 class="mt-4">Dashboard / Articles</h1>
    <ol class="breadcrumb mb-4">

      <?php
      Message('Articles/Create');
      ?>

    </ol>



    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">

      <div class="form-group">
        <label for="exampleInputName">Title</label>
        <input type="text" class="form-control" required id="exampleInputName" aria-describedby="" name="title" placeholder="Enter Title">
      </div>


      <div class="form-group">
        <label for="exampleInputEmail">Content</label>
        <textarea class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" name="content" placeholder="Enter content"></textarea>
      </div>

      <div class="form-group">
        <label for="exampleInputPassword">Date</label>
        <input type="date" class="form-control" required id="exampleInputPassword1" name="date">
      </div>



      <div class="form-group">
        <label for="exampleInputPassword">Category</label>
        <select class="form-control" required name="cat_id">

          <?php
          while ($data = mysqli_fetch_assoc($catsObj)) {
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