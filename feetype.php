<?php
include("connection.php");

if (isset($_POST['submit'])){

  
  $feetype            = mysqli_real_escape_string ($connection,$_POST['feetype']);

  $query ="INSERT INTO  feetype (feetype) VALUES ('{$feetype}')";

  $data=mysqli_query($connection,$query);
  if ($data) {
    // echo "ok";
  }
  else{
    echo "data not Save";
  }
  }
    



?>