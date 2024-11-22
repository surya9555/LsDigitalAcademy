<?php 
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="editcourse.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="edit course.css"/>
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
      <h3>Edit Course</h3>
        <a href="allcourse.php">All Course</a>
        <a href="add course.php">Add Course</a>
        <a href="edit course.php">Edit Course</a>
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
   <div id="container2">
    <div class="main">
        <div class="header"></div>
        <div class="in"><label for="first name">First name</label>
        <input type="text" id="bb" name="First_name" placeholder="First Name*" required></div>
        
        <div class="in"><label for="lastname">Last name</label>
          <input type="text" id="bb" name="Last_name" placeholder="Last Name" required></div>
        
        <div class="in"><label for="email">Email</label>
          <input type="email" id="bb" name="Email" placeholder="info@gmail.com" required></div>
        
        <div class="in"><label for="regdate">Registration Date</label>
          <input type="date" id="bb" name="Registration_Date" placeholder="Registration Date" required></div>
        
        <div class="in"><label for="rollnumber">Roll number</label>
          <input type="text" id="bb" name="Roll_number" placeholder="Roll Number" required></div>
        
        <div class="in"><label for="course">Course</label>
          <select class="form-select" style=" border: 1px solid black;" aria-label="Default select example">
          <option selected>Select course</option>
          <option value="1">Web-development</option>
          <option value="2">Digital marketing</option>
          <option value="3">English speaking</option></select></div>
        
        <div class="in"><label for="gander">Gander</label>
          <select class="form-select" style=" border: 1px solid black;" aria-label="Default select example">
          <option selected>Gander</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="others">Others</option></select></div>
        
        <div class="in"><label for="phonenumber">Phone number</label>
          <input type="number" id="bb" name="Phone_number" placeholder="Phone Number" required></div>
        
        <div class="in"><label for="parentsname">Parents Name</label>
          <input type="text" id="bb" name="Parentst_name" placeholder="Parents Name" required></div>
        
        <div class="in"><label for="parentsnumber">Parents Mobile Number</label>
          <input type="number" id="bb" name="Parents_number" placeholder="Parents Mobile Number" required ></div>
        
        <div class="in"><label for="dateofbirth">Date of Birth</label>
          <input type="date" id="bb" name="Date_of_Birth" required></div>
        
        <div class="in"><label for="blod">Blod</label>
          <select class="form-select" style=" border: 1px solid black;" aria-label="Default select example">
          <option selected>Blod</option>
          <option value="1">A+</option>
          <option value="1">A-</option>
          <option value="2">B</option>
          <option value="3">B-</option>
          <option value="1">O</option>
          <option value="1">Other</option></select></div>
        
        <div class="in" style="width: 90%; border: 1px solid black;">
          <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" name="Address" id="floatingTextarea2" style="height: 100px;"></textarea>
            <label for="floatingTextarea2">Adress here...</label></div></div>
         
        
        
        <div class="in" style="width: 90%; height: 40px;">
        
            <div class="btn-group" style="width:30%;" role="group" aria-label="Basic radio toggle button group">
            <input type="cancel" class="btn-check" name="cancel" id="cancel" autocomplete="off">
            <label class="btn btn-outline-primary" for="cancel">Cancel</label>
        
            <input type="submit" class="btn-check" name="submit" id="submit" autocomplete="on" checked>
            <label class="btn btn-primary" for="submit">Submit</label></div>
</div>
  </div>
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