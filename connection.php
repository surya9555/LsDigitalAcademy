<?php
// $hostname = "http://localhost/admin";
error_reporting(0);
	$severname	=	"localhost";
	$username	=	"root";
	$password	=	"";
	$dbname		=	"addstudents";
	$connection =	mysqli_connect($severname,$username,$password,$dbname);
	if ($connection)
	 {
		// echo "ok";
	}
	else
	{
	echo "No. ok".mysqli_connect_error();
	}
?>
