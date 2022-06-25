<?php
require '../helpersClasses/userClass.php';

$user = new User();

$id = $_GET['id'];

$data = $user->edit($id);



# Server Side Code . . . 
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // Update code  

    $id = $_GET['id'];

    $result = $user->update($_POST, $id);



    if ($result['status']) {

        echo $result['message'];
    } else {

        foreach ($result['message'] as $key => $value) {

            echo $key . ' : ' . $value . '<br>';
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Update</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Update Info : </h2>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) . '?id=' . $data['id']; ?>" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input type="text" class="form-control" required id="exampleInputName" aria-describedby="" name="name" placeholder="Enter Name" value="<?php echo $data['name']; ?>">
            </div>


            <div class="form-group">
                <label for="exampleInputEmail">Email address</label>
                <input type="email" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter email" value="<?php echo $data['email']; ?>">
            </div>


            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>


</body>

</html>