<?php
include("connection.php");

if (isset($_POST['submit'])){

  
  $designation            = mysqli_real_escape_string ($connection,$_POST['designation']);

  $query ="INSERT INTO  designation (designation) VALUES ('{$designation}')";

  $data=mysqli_query($connection,$query);
  if ($data) {
    // echo "ok";
  }
  else{
    echo "data not Save";
  }
  }
    



?>