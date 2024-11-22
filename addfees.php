<?php 
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="addfees.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="addfees.css"/>
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
      <h3>Add Fees</h3>
      <a href="feescollaction.php">Fees collection</a>
      <a href="addfees.php">Add Fees</a>
      <a href="feesrecipt.php">fees Recispt</a>
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
   <form action="fee.php" method="POST">
   <div id="container2">
        <div class="main">
        <div class="header"></div>
        <div class="in"><label for="roll">Roll Number</label>
        <input type="text" id="bb" name="roll" equired placeholder="Roll Number"></div>
        
        <div class="in"><label for="studentname">Student Name</label>
          <input type="text" id="bb" name="studentname" required placeholder="Student Name"></div>

          <div class="in"><label for="studentname">Student Mobile No.</label>
            <input type="text" id="bb" name="mobile" required placeholder="Student Mobile No."></div>
        
        <div class="in"><label for="email">Amount</label>
          <input type="text" id="bb" name="amount" required placeholder="Amount"></div> 

            <div class="in"><label for="course">Payment Type</label>
          <select class="form-select" name="paymenttype" style=" border: 1px solid black;" aria-label="Default select example">
              <option value="note selected">Select Payment Type</option>
              <?php
          include("connection.php");
          $query ="SELECT * FROM paymenttype";
      $result = mysqli_query($connection, $query) or die("query failed");
      if(mysqli_num_rows($result)> 0){ 
        while($row = mysqli_fetch_assoc($result)){

          echo "<option>{$row['paymenttype']}</option>";
        }
      }
     
      ?>
        </select> 
        </div>
        
       <div class="in"><label for="coldate">Collection Date</label>
          <input type="date" id="bb" name="coldate" required placeholder="collection date"></div>
        
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
        <div class="in"><label for="course">Fees Type</label>
          <select class="form-select" name="feetype" style=" border: 1px solid black;" aria-label="Default select example">
              <option value="note selected">Select Fee Type</option>
              <?php
          include("connection.php");
          $query ="SELECT * FROM feetype";
      $result = mysqli_query($connection, $query) or die("query failed");
      if(mysqli_num_rows($result)> 0){ 
        while($row = mysqli_fetch_assoc($result)){

          echo "<option>{$row['feetype']}</option>";
        }
      }
     
      ?>
        </select> 
        </div>
        
 
        
        <div class="in"><label for="refnumber">Payment Reference Number</label>
          <input type="text" id="bb" name="refnumber" required placeholder="ref. no"></div>

          <div class="in"><label for="course">Status</label>
          <select class="form-select" name="status" style=" border: 1px solid black;" aria-label="Default select example">
              <option value="note selected">Select Status</option>
              <?php
          include("connection.php");
          $query ="SELECT * FROM status";
      $result = mysqli_query($connection, $query) or die("query failed");
      if(mysqli_num_rows($result)> 0){ 
        while($row = mysqli_fetch_assoc($result)){

          echo "<option>{$row['status']}</option>";
        }
      }
     
      ?>
        </select> 
        </div>
        
      <!--   <div class="in"><label for="blod">Status</label>
          <select class="form-select" name="status" style=" border: 1px solid black;" aria-label="Default select example">
          <option selected>Status</option>
          <option value="Paid">Paid</option>
          <option value="Unpaid">Unpaid</option>
          <option value="Panding">Panding</option></select></div> -->
        
        <div class="in" style="width: 98%; border: 1px solid black; border-radius: 10px;">
          <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2" name="paymentdetail">Payment detail...</label></div></div>
        
        <div class="in" style="width: 100%; height: 40px;">
            <div class="btn-group" style="width:20%;" role="group" aria-label="Basic radio toggle button group">
 <!--            <input type="cancel" class="btn-check" name="cancel" id="cancel" autocomplete="off">
            <label class="btn btn-outline-primary" for="cancel">Cancel</label>
        
            <input type="submit" class="btn-check" name="submit" id="submit" autocomplete="off" checked> -->
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