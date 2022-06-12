<?php 

session_start(); 

// unset($_SESSION['message']);

session_destroy();

echo 'Session deleted successfully';

?>