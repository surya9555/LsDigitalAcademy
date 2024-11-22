<?php
include("connection.php");

if (isset($_POST['submit'])){

  
  $paymenttype            = mysqli_real_escape_string ($connection,$_POST['paymenttype']);

  $query ="INSERT INTO  paymenttype (paymenttype) VALUES ('{$paymenttype}')";

  $data=mysqli_query($connection,$query);
  if ($data) {
    // echo "ok";
  }
  else{
    echo "data not Save";
  }
  }
    



?>