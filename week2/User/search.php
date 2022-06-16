<?php

require 'dbConnection.php';

# Clean Function to sanitize the data
function Clean($input)
{
    return stripslashes(strip_tags(trim($input)));
}



# Server Side Code . . . 
if ($_SERVER['REQUEST_METHOD'] == "POST") {


    $key = Clean($_POST['key']);


    # Validate ...... 
    $errors = [];



    # validate email 
    if (empty($key)) {
        $errors['SearchKey'] = "Field Required";
    } 



    # Check ...... 
    if (count($errors) > 0) {
        // print errors .... 
        foreach ($errors as $key => $value) {
            # code...
            echo '* ' . $key . ' : ' . $value . '<br>';
        }
    } else {

        // Search Code . . . 
        $sql = "select * from users where name like '%$key%' or email like '%$key%'";
        $op = mysqli_query($con, $sql);

   
        if(mysqli_num_rows($op) > 0){

            while($raw = mysqli_fetch_assoc($op)){
              
                echo '* '.$raw['id'].' : name : '.$raw['name'].' email : '.$raw['email'].'<br>';
            }

        }else{
            echo "No Result Found";
        }


    }
}

require 'closeConnection.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Search</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Search</h2>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label for="exampleInputEmail">Search Key </label>
                <input type="text" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" name="key" placeholder="Enter Search Key">
            </div>

            <button type="submit" class="btn btn-primary">Go!</button>
        </form>
    </div>


</body>

</html>



