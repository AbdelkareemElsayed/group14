<?php 
require 'function.php';

$dbObj = new DB();

   $sql = "select * from departments";

$result = $dbObj->doQuery($sql);


 while ($row = mysqli_fetch_assoc($result)) {
    echo $row['id'] . $row['title'] . $row['code'] . '<br>';
}


?>