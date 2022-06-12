<?php
$title = "test Title";

echo '
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
     
     <h3>' . $title . '</h3>
     <p>Test Message</p>
 </body>
 </html>';


?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>
        <?php echo 'Message'; ?>
    </h2>


    <p>
        <?php

        for ($i = 0; $i < 5; $i++) {
            # code...
            echo 'Test php Message <br>';
        }
        ?>
    </p>
</body>

</html>