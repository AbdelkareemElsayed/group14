<?php 
require 'class1.php';
require 'class2.php';


$obj = new class1\messages();
$obj->sendMessage(); 

echo '<br>';

$obj2 = new class2\messages();
$obj2->receiveMessage();  



?>