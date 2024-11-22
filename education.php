<?php
include("connection.php");

if (isset($_POST['submit'])){

  
  $education            = mysqli_real_escape_string ($connection,$_POST['education']);

  $query ="INSERT INTO  education (education) VALUES ('{$education}')";

  $data=mysqli_query($connection,$query);
  if ($data) {
    // echo "ok";
  }
  else{
    echo "data not Save";
  }
  }
    



?>