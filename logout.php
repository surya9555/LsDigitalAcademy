<?php
include "connection.php";
session_start();
session_unset();
session_destroy();

header('location:http://localhost/admin/loginform.php');

 
?>
