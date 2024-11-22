<?php
include("connection.php");
$id = $_GET['id'];

$query = "DELETE FROM addstudents WHERE id ='$id' ";
$dta = mysqli_query($connection, $query);
  header("Location: http://localhost/admin/admin/allstudent.php");
  mysqli_close($connection); 
if(data)
{

	// echo "Record Delete";
}
else
{
echo "Record Not Delete";

}

?>
