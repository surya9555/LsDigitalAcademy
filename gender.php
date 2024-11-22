<?php
include("connection.php");

if (isset($_POST['submit'])){

  
  $gender            = mysqli_real_escape_string ($connection,$_POST['gender']);

  $query ="INSERT INTO  gender (gender) VALUES ('{$gender}')";

  $data=mysqli_query($connection,$query);
  if ($data) {
    // echo "ok";
  }
  else{
    echo "data not Save";
  }
  }
    



?>