<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Students</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<body>


    <h3>List Students</h3>

    <?php

    $file = fopen('info.txt', "r") or die('unable to open file');

    echo '<table class="table">
    <tr>
    <td>ID</td>
    <td>NAME</td>
    <td>EMAIL</td>
    <td>PASSWORD</td>
    <td>IMAGE</td>
    <td>ACTION</td>
    </tr>
  ';

    while (!feof($file)) {

        $line = fgets($file);

        $data = explode('|', $line);

        if (count($data) > 0 && !empty($data[0])) {


            echo '<tr>';
            foreach ($data as $key => $value) {
                # code...

                if ($key == 4) {
                    echo  '<td><img src="./uploads/' . $value . '" alt=""  height="60px" width="60px" ></td>';
                } else {
                    echo   '<td>' . $value . '</td>';
                }
            }

            echo '<td><a href="remove.php?id=' . $data[0] . '">Remove</a>   </td>
            </tr>';
        }
    }

    fclose($file);
    echo '</table>';

    ?>

</body>

</html>






