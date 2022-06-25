<?php

class DB
{

    public $host = "localhost";
    public $username = "root";
    public $password = "";
    public $database = "group14";
    public $con;




    public function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if (!$this->con) {
            die("Connection Failed: " . mysqli_connect_error());
        }
    }


    function doQuery($query)
    {
        $result =  mysqli_query($this->con, $query);
        return $result;
    }


    public function __destruct()
    {
        mysqli_close($this->con);
    }
}


// $dbObj = new DB();

// $sql = "insert into departments (title,code) values ('test1','123')"; 
    
// $sql = "update departments set title = 'testDepartment' where id = 5";

// $sql = "delete from departments where id = 5";

// $sql = "select * from departments";

// $result = $dbObj->doQuery($sql);


//  while ($row = mysqli_fetch_assoc($result)) {
//     echo $row['id'] . $row['title'] . $row['code'] . '<br>';
// }



// if($result){
//     echo 'op done ';
// }else{
//     echo 'error try again';
// }