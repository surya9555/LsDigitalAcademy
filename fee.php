<?php
include("connection.php");

if (isset($_POST['submit'])){

  $roll                       = mysqli_real_escape_string ($connection,$_POST['roll']);
  $studentname                = mysqli_real_escape_string ($connection,$_POST['studentname']);
  $mobile                     = mysqli_real_escape_string ($connection,$_POST['mobile']);
  $amount                     = mysqli_real_escape_string ($connection,$_POST['amount']);
  $paymentmode                = mysqli_real_escape_string ($connection,$_POST['paymentmode']);
  $coldate                    = mysqli_real_escape_string ($connection,$_POST['coldate']);
  $course                     = mysqli_real_escape_string ($connection,$_POST['course']);
  $feetype                    = mysqli_real_escape_string ($connection,$_POST['feetype']);
  $refnumber                  = mysqli_real_escape_string ($connection,$_POST['refnumber']);
  $status                     = mysqli_real_escape_string ($connection,$_POST['status']);
  $paymentdetail              = mysqli_real_escape_string ($connection,$_POST['paymentdetail']);
  

  $query ="INSERT INTO  fee (roll, studentname, mobile, amount, paymentmode, coldate, course, feetype, refnumber, status, paymentdetail) VALUES ('{$roll}','{$studentname}','{$mobile}','{$amount}','{$paymentmode}','{$coldate}','{$course}','{$feetype}','{$refnumber}','{$status}','{$paymentdetail}')";

  $data=mysqli_query($connection,$query);
  if ($data) {
    // echo "ok";
  }
  else{
    echo "data not Save";
  }
  }
    



?>