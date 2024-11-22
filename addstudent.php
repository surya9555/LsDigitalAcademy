<?php 
include("connection.php");
?>
 <!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="addstudent.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="editstudent.css"/>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title><?php echo $page; ?></title>
    
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
      <h3>Add Student</h3>
      <a href="allstudent.php">All Students</a>
      <a href="addstudent.php">Add Student</a>
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
   <form action="addst.php" method="POST" enctype="multipart/form-data">
   <div id="container2">
        <div class="main">
        <div class="header"></div>
        <div class="in"><label for="rollnumber">Roll Number</label>
          <input type="text" id="bb" name="rollnumber" placeholder="Roll Number" required></div>

        <div class="in"><label for="first name">Student Name</label>
        <input type="text" id="bb" name="firstname" placeholder="Full Document Name*" required></div>
        
<!--         <div class="in"><label for="lastname">Last Name</label>
          <input type="text" id="bb" name="lastname" placeholder="Last Name" required></div> -->
        
        <div class="in"><label for="email">Email</label>
          <input type="email" id="bb" name="email" placeholder="info@gmail.com" required></div>
        
        <div class="in"><label for="regdate">Registration Date</label>
          <input type="date" id="bb" name="registrationdate" placeholder="Registration Date" required></div>
        

              
        <div class="in"><label for="course">Course</label>
          <select class="form-select" name="course" style=" border: 1px solid black;" aria-label="Default select example">
              <option value="note selected">Select course</option>
              <?php
          include("connection.php");
          $query ="SELECT * FROM course";
      $result = mysqli_query($connection, $query) or die("query failed");
      if(mysqli_num_rows($result)> 0){ 
        while($row = mysqli_fetch_assoc($result)){

          echo "<option>{$row['coursename']}</option>";
        }
      }
     
      ?>
        </select> 
        </div>
                
          <div class="in"><label for="course">Education</label>
          <select class="form-select" name="education" style=" border: 1px solid black;" aria-label="Default select example">
          <option value="note selected">Education</option>
                <?php
          include("connection.php");
          $query1 ="SELECT * FROM education";
      $result1 = mysqli_query($connection, $query1) or die("query failed");
      if(mysqli_num_rows($result1)> 0){ 
        while($row1 = mysqli_fetch_assoc($result1)){

          echo "<option>{$row1['education']}</option>";
        }
      }
     
      ?>
        </select></div>
        
        <div class="in"><label for="gander">Gender</label>
          <select class="form-select" name="gander" style=" border: 1px solid black;" aria-label="Default select example">
          <option value="note selected">Gender</option>
          <?php
          include("connection.php");
          $query2 ="SELECT * FROM gender";
      $result2 = mysqli_query($connection, $query2) or die("query failed");
      if(mysqli_num_rows($result2)> 0){ 
        while($row2 = mysqli_fetch_assoc($result2)){

          echo "<option>{$row2['gender']}</option>";
        }
      }
     
      ?></select></div>
        
        <div class="in"><label for="phonenumber">Phone Number</label>
          <input type="number" id="bb" name="phonenumber" placeholder="Phone Number" required></div>
        
        <div class="in"><label for="parentsname">Parents Name</label>
          <input type="text" id="bb" name="parentsname" placeholder="Parents Name" required></div>
        
        <div class="in"><label for="parentsnumber">Parents Mobile Number</label>
          <input type="number" id="bb" name="parentsmobilenumber" placeholder="Parents Mobile Number" required ></div>
        
        <div class="in"><label for="dateofbirth">Date of Birth</label>
          <input type="date" id="bb" name="dateofbirth" required></div>
        
        <div class="in"><label for="blod">Classes Type</label>
          <select class="form-select" name="blod" style=" border: 1px solid black;" aria-label="Default select example">
          <option value="note selected">Classess Type</option>
              <?php
          include("connection.php");
          $query3 ="SELECT * FROM type";
      $result3 = mysqli_query($connection, $query3) or die("query failed");
      if(mysqli_num_rows($result)> 0){ 
        while($row3 = mysqli_fetch_assoc($result3)){

          echo "<option>{$row3['type']}</option>";
        }
      }
     
      ?></select></div>
        
        <div class="in" style="width: 90%; border: 1px solid black;">
          <div class="form-floating">
            <textarea class="form-control" name="address" placeholder="Leave a comment here"  id="floatingTextarea2" style="height: 100px;"></textarea>
            <label for="floatingTextarea2">Adress here...</label></div></div>
         
        
        <div class="in" style="width: 90%; height: 40px; border: 1px solid black;">
          <div class="input-group mb-3">
            <input type="file" name="photo" class="form-control" id="inputGroupFile02">
            <label class="input-group-text" for="inputGroupFile02">Upload Photo</label></div>
          </div>
        <div class="in" style="width: 90%; height: 40px;">
        
            <div class="btn-group" style="width:10%;" role="group" aria-label="Basic radio toggle button group">
           <input type="submit" class="btn btn-primary" name="submit">
          </div>

          
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
