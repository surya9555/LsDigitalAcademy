<?php 
include("connection.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="addteacher.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="addteacher.css"/>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   
</head>
<body>
     
     
<!-- ======================================side bar start=============================== -->
<?php
include "sidebar.php";
?>
<!-- ===========================side bar end======================================= -->
<!-- ============================top nav============================================== -->
         <?php
  include "topnavbar.php";
  ?>
       
   <div id="container1">
    <div class="topnav">
      <h3>Add Teacher</h3>
      <a href="allteacher.php">All Teacher</a>
      <a href="addteacher.php">Add Teacher</a>
       </div>
   </div>
<!-- ================================================fixed right icon========================= -->
<div id="box1">
    <i class="fa-solid fa-gear fa-spin"></i>
  </div>
  
  <div id="box2">
    <i class="fa-solid fa-cart-shopping"></i>
  </div>
  <div id="box3">
    <i class="fa-solid fa-headset"></i>
  </div>
<!-- ================================================fixed right icon end========================= -->
     <form action="teacher.php" method="POST" enctype="multipart/form-data">
   <div id="container2">
     <div class="main">
        <div class="header"></div>
        <div class="in"><label for="first name">Employee ID</label>
        <input type="text" id="bb" name="emplid" placeholder="Employee ID" equired></div>
        
        <div class="in"><label for="lastname">Employee Name</label>
          <input type="text" id="bb" name="name" placeholder="Employee Name" required></div>
        
        <div class="in"><label for="email">Email</label>
          <input type="email" id="bb" name="email" placeholder="info@gmail.com" required></div>
        
        <div class="in"><label for="joindate">Joining Date</label>
          <input type="date" id="bb" name="joiningdate" placeholder="Joining Date" required></div>
        
        <div class="in"><label for="password">Password</label>
          <input type="text" id="bb" name="password" placeholder="Password" required></div>

          <div class="in"><label for="conpassword">Confirm Password</label>
            <input type="text" id="bb" name="conpassword" placeholder="Confirm Password" required></div>
        
        <div class="in"><label for="course">Department</label>
          <select class="form-select" name="department" style=" border: 1px solid black;" aria-label="Default select example">
          <option value="note selected">Department</option>
              <?php
          include("connection.php");
          $query ="SELECT * FROM department";
      $result = mysqli_query($connection, $query) or die("query failed");
      if(mysqli_num_rows($result)> 0){ 
        while($row = mysqli_fetch_assoc($result)){

          echo "<option>{$row['department']}</option>";
        }
      }
     
      ?></select></div>
        
        <div class="in"><label for="gander">Gender</label>
          <select class="form-select" name="gander" style=" border: 1px solid black;" aria-label="Default select example">
          <option value="note selected">Gender</option>
          <?php
          include("connection.php");
          $query ="SELECT * FROM gender";
      $result = mysqli_query($connection, $query) or die("query failed");
      if(mysqli_num_rows($result)> 0){ 
        while($row = mysqli_fetch_assoc($result)){

          echo "<option>{$row['gender']}</option>";
        }
      }
     
      ?></select></div>
        
        <div class="in"><label for="phonenumber">Phone Number</label>
          <input type="number" id="bb" name="mobile" placeholder="Phone Number" required>
        </div>
        
        <div class="in"><label for="deg">Designation</label>
          <select class="form-select" name="designation" style=" border: 1px solid black;" aria-label="Default select example">
          <option value="note selected">Designation</option>
          <?php
          include("connection.php");
          $query ="SELECT * FROM designation";
      $result = mysqli_query($connection, $query) or die("query failed");
      if(mysqli_num_rows($result)> 0){ 
        while($row = mysqli_fetch_assoc($result)){

          echo "<option>{$row['designation']}</option>";
        }
      }
     
      ?></select></div>
        
        <div class="in"><label for="education">Education</label>
          <select class="form-select" name="education" style=" border: 1px solid black;" aria-label="Default select example">
          <option value="note selected">Education</option>
          <?php
          include("connection.php");
          $query ="SELECT * FROM teducation";
      $result = mysqli_query($connection, $query) or die("query failed");
      if(mysqli_num_rows($result)> 0){ 
        while($row = mysqli_fetch_assoc($result)){

          echo "<option>{$row['teducation']}</option>";
        }
      }
     
      ?></select></div>
        
        <div class="in"><label for="dateofbirth">Date of Birth</label>
          <input type="date" id="bb" name="dateofbirth" required value="date of birth"></div>
        
    <div class="in" style="width: 40%; height: 40px; border: 1px solid black;">
          <div class="input-group mb-3">
            <input type="file" name="photo" class="form-control" id="inputGroupFile02">
            <label class="input-group-text" for="inputGroupFile02">Upload Photo</label></div>
          </div>
        <div class="in" style="width: 90%; height: 40px;">
        
            <div class="btn-group" style="width:15%;" role="group" aria-label="Basic radio toggle button group">
            <input type="submit" class="btn btn-primary" name="submit"></div>
</div>
  </div>
</form>
  <div class="copyy">Copyright © Ls Digital Academy</div>
  </section>

  <!-- ============================================sript=============================== -->
<script>

      let arrow = document.querySelectorAll(".arrow");
    for (var i = 0; i < arrow.length; i++) {
      arrow[i].addEventListener("click", (e)=>{
     let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
     arrowParent.classList.toggle("showMenu");
      });
    }
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".bx-menu");
    console.log(sidebarBtn);
    sidebarBtn.addEventListener("click", ()=>{
      sidebar.classList.toggle("close");
    });
  
</script>

  </body>
  </html>