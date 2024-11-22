<?php 
include("connection.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Register form</title>
  <style>

@import url('https://fonts.googleapis.com/css?family=Raleway:400,700');

 {
	box-sizing: border-box;
	margin: 0px;
	padding: 0px;	
    list-style-type: none;
	font-family: Raleway, sans-serif;
    text-decoration: none;
}

	body { background: linear-gradient(99.6deg, rgb(112, 128, 152) 10.6%, rgb(242, 227, 234) 32.9%, rgb(234, 202, 213) 52.7%, rgb(220, 227, 239) 72.8%, rgb(185, 205, 227) 81.1%, rgb(154, 180, 212) 102.4%);
}

.container {
 height: 570px;
 margin: 20px auto;
 display: flex;
 align-items: center;
 justify-content: center;
/* background-color: red; */
}

.screen {		
	background-image: linear-gradient(90deg,#accbee 0%, #e7f0fd 100%);	
	position: relative;	
	height: 550px;
	width: 360px;	
	box-shadow: 0px 0px 14px #5C5696;
}

.screen__content {
	z-index: 1;
	position: relative;	
  display: flex;
  flex-wrap: wrap;
  flex-direction: column;
  align-items: center;
  justify-content: space-evenly;
}

.screen__background {		
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	z-index: 0;
	-webkit-clip-path: inset(0 0 0 0);
	clip-path: inset(0 0 0 0);	
}

.screen__background__shape {
	transform: rotate(45deg);
	position: absolute;
}

.screen__background__shape1 {
	height: 570px;
	width: 520px;
	background: #FFF;	
	top: -50px;
	right: 120px;	
	border-radius: 0 72px 0 0;
}

.screen__background__shape2 {
	height: 220px;
	width: 220px;
	background: #6C63AC;	
	top: -172px;
	right: 0;	
	border-radius: 32px;
}

.screen__background__shape3 {
	height: 540px;
	width: 190px;
	background: linear-gradient(270deg, #5D54A4, #6A678E);
	top: -24px;
	right: 0;	
	border-radius: 32px;
} 

.screen__background__shape4 {
	height: 400px;
	width: 200px;
	background: #7E7BB9;	
	top: 420px;
	right: 50px;
	border-radius: 60px;
}

.logo{
  height: 60px;
  width: 90%;
  /* background-color: red; */
  background-image: url(/logo-removebg-preview.png);
  background-repeat: no-repeat;
  background-position: center;
  background-size: contain;
  margin: 5px 0px;
}
.add{
  height: 60px;
  width: 90%;
  text-align: center;
  padding: 10px 0px 0px 0px;
  font-size: 12px;
}
.add h4{
  font-size: 18px;
}

.headd{
  height: 50px;
  width: 90%;
  background-color: darkblue;
  color: #FFF;
  border-radius: 18px;
  font-size: 14px;
  text-align: center;
  padding: 10px 10px 0px 0px;
}

.input{
  height:80px;
  width: 90%;
  background-color: transparent;
  border: none;
  border-bottom:2px solid #d1d1d4;
  padding: 2px 10px;
}

form{
  height: 330px;
  /* background-color: yellow; */
  width: 90%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: space-around;
}

form input{
  padding: 5px 0px 0px 0px;
}

.container form button{
    height: 45px;
    width: 300px;
    background-color: darkblue;
    border-radius: 16px;
    color: white;
    font-size: 20px;
  
}
.container form button: last-child
{
  margin-bottom: 0;
}

span{
  color: black;
  font-size: 14px;
}

.already-account{
    /* background-color: yellow; */
    height: 40px;
    width: 90%;
    padding: 20px 0px 0px 0px;
    text-align: center;

}
.already-account a{
    cursor: pointer;
    text-decoration: none;


}

.social-media{
    height: 90px;
    width: 90%;
    /* background-color: red; */
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-evenly;
}
.social-media h4{
    width: 100%;
    height: 25px;
    text-align: center;
    font-weight: bold;
    font-size: 14px;
    padding: 10px 0px 0px 0px;

}
#icon{
    width: 40px;
    height: 40px;
    border-radius: 50%;
    cursor: pointer;
}

</style>
<body>

  <div class="container">
    <div class="screen">
      <div class="screen__content">
  
  <div class="logo"><center><img src="logo.png" height="55px" width="55px"></center><center><b>Ls Digital Academy</b></center></div>
  <div class="add">
    <P1>THE PROFESSIONALS</P1>
    <h4>AN ISO : 2015 COMPANY</h4>
  </div>
  <form action="useradmin.php" method="POST">
    <input type="text" class="input"  name="fname" placeholder="First Name*" required><br>
    <input type="text" class="input" name="lname" placeholder="Last Name*" required><br>
    <input type="text" class="input" name="username" placeholder="User Name*" required><br>
    <input type="email" class="input" name="email" placeholder="Email*" required><br>
    <input type="password" class="input" name="password" placeholder="Password" required><br>
    
    <input type="submit" name="create" value="Create">
  
  <div class="already-account">
    <p1><b>Already have account? </b><a href="loginform.php"><b>Login</b></a></p1>
  </div>
  
      </div>
      <div class="screen__background">
        <span class="screen__background__shape screen__background__shape3"></span>		
        <span class="screen__background__shape screen__background__shape2"></span>
        <span class="screen__background__shape screen__background__shape1"></span>
      </div>		
    </div>
    </form>
  </div>
</body>
</head>
</html>
