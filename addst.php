<?php
include("connection.php");
if (isset($_POST['submit'])){
 
  if (isset($_FILES['photo'])){

  $file_name = $_FILES['photo']['name'];
  $file_size = $_FILES['photo']['size'];
  $file_temp = $_FILES['photo']['tmp_name'];
  $file_type = $_FILES['photo']['type'];
  $file_ext  = strtolower(end(explode('.', $file_name)));
  $extensions = array("jpeg","jpg","png");
  if(in_array($file_ext, $extensions) === false)
  {
    $errors[] = "This extensions file note allowed please choose a JPG or PNG file";
  }
  if($file_size > 2097152)
  {
     $errors[] = "file size maximum 2MB";
  }
  if(empty($errors) == true){

    move_uploaded_file($file_temp, "images/".$file_name);
  }
  else{
    print_r($errors);
  
}

}


  $id                      = mysqli_real_escape_string ($connection,$_POST['id']);
  $rollnumber              = mysqli_real_escape_string ($connection,$_POST['rollnumber']);
  $firstname               = mysqli_real_escape_string ($connection,$_POST['firstname']);
  $email                    = mysqli_real_escape_string ($connection,$_POST['email']);
  $registrationdate        = mysqli_real_escape_string ($connection,$_POST['registrationdate']);
  $course                   = mysqli_real_escape_string ($connection,$_POST['course']);
  $gander                   = mysqli_real_escape_string ($connection,$_POST['gander']);
  $phonenumber             = mysqli_real_escape_string ($connection,$_POST['phonenumber']);
  $parentsname             = mysqli_real_escape_string ($connection,$_POST['parentsname']);
  $parentsmobilenumber    = mysqli_real_escape_string ($connection,$_POST['parentsmobilenumber']);
  $dateofdirth            = mysqli_real_escape_string ($connection,$_POST['dateofbirth']);
  $address                = mysqli_real_escape_string ($connection,$_POST['address']);

  $query ="INSERT INTO  addstudents (id, rollnumber, photo, firstname, email, registrationdate, course, gander, phonenumber, parentsname, parentsmobilenumber, dateofbirth, address) VALUES ('{$id}','{$rollnumber}','{$file_name}','{$firstname}','{$email}','{$registrationdate}','{$course}','{$gander}','{$phonenumber}','{$parentsname}','{$parentsmobilenumber}','{$dateofbirth}','{$address}')";

  $data=mysqli_query($connection,$query);
   header('location:http://localhost/admin/allstudent.php');
  mysqli_close($connection); 
  if ($data) {
    // echo "ok";
  }
  else{
    echo "data not Save";
  }


  }
    

?>