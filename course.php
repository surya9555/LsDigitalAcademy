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
  $coursecode               = mysqli_real_escape_string ($connection,$_POST['coursecode']);
  $coursename               = mysqli_real_escape_string ($connection,$_POST['coursename']);
  $coursedetail             = mysqli_real_escape_string ($connection,$_POST['coursedetail']);
  $courseduration           = mysqli_real_escape_string ($connection,$_POST['courseduration']);
  $professor                = mysqli_real_escape_string ($connection,$_POST['professor']);
  $courseprice              = mysqli_real_escape_string ($connection,$_POST['courseprice']);
  

  $query ="INSERT INTO  course (id, photo, coursecode, coursename, coursedetail, courseduration, professor, courseprice) VALUES ('{$id}','{$file_name}','{$coursecode}','{$coursename}','{$coursedetail}','{$courseduration}','{$professor}','{$courseprice}')";

  $data=mysqli_query($connection,$query);
  header('location:http://localhost/admin/allcourse.php');
  mysqli_close($connection);
  if ($data) {
    // echo "ok";
  }
  else{
    echo "data not Save";
  }
  }
    



?>