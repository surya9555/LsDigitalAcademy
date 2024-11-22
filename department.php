<?php
include("connection.php");

if (isset($_POST['submit'])){

   $id            = mysqli_real_escape_string ($connection,$_POST['id']);
  $department            = mysqli_real_escape_string ($connection,$_POST['department']);

  $query ="INSERT INTO  department (department) VALUES ('{$department}'),('{$id}')";

  $data=mysqli_query($connection,$query);
  if ($data) {
    // echo "ok";
  }
  else{
    echo "data not Save";
  }
  }
    



?>