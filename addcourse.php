<?php 
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="addcourse.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="addcourse.css"/>
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
      <h3>Add Course</h3>
      <a href="allcourse.php">All Course</a>
      <a href="addcourse.php">Add Course</a>
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
    <form action="course.php" method="POST" enctype="multipart/form-data">
   <div id="container2">
      <div class="main">
        <div class="header"></div>
                <div class="in" style="width: 40%;"><label for="course code">Course code</label>
          <input type="text" id="bb" name="coursecode" required value=""></div>

        <div class="in" style="width: 40%;"><label for="course name">Course name</label>
        <input type="text" id="bb" name="coursename" equired value=""></div>
        
       <div class="in" style="width: 85%; border: 1px solid black;">
            <div class="form-floating">
              <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
              <label for="floatingTextarea2" name="coursedetail">Course detail..</label></div></div>
        
        <div class="in"><label for="Course Duration">Course Duration</label>
          <input type="text" id="bb" name="courseduration" required value=""></div>
        
        
        <div class="in" style="width: 40%;"><label for="teachername">Teacher Name</label>
          <input type="text" id="bb" name="professor:" required value=""></div>

                  <div class="in" style="width: 40%;"><label for="Course Price">Course Price</label>
          <input type="text" id="bb" name="courseprice" required value=""></div>

              <div class="in" style="width: 40%; height: 40px; border: 1px solid black;">
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