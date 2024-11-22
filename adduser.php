<?php 
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
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
     
 <div id="container1">
    <div class="topnav">
      <h3>Add User</h3>
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
     <form action="useradmin.php" method="POST">
   <div id="container2">
     <div class="main">
        <div class="header"></div>
        
        <div class="in"><label for="lastname">First Name</label>
          <input type="text" id="bb" name="fname" placeholder="First Name" required></div>
        
        <div class="in"><label for="email">Last Name</label>
          <input type="text" id="bb" name="lname" placeholder="Last Name" required></div>

        <div class="in"><label for="email">User Name</label>
          <input type="text" id="bb" name="username" placeholder="User Name" required></div>        
        
        <div class="in"><label for="password">Password</label>
          <input type="password" id="bb" name="password" placeholder="Password" required></div>

          <div class="in"><label for="conpassword">Confirm Password</label>
            <input type="text" id="bb" name="conpassword" placeholder="Confirm Password" required></div>
        
        <div class="in"><label for="course">Role</label>
          <select class="form-select" name="role" style=" border: 1px solid black;" aria-label="Default select example">
         <?php
          if($row['role'] == 1){
            echo "<option value='0'>Teacher</option>
          <option value='1' selected>Admin</option>";
            }else{
              echo "<option value='0' selected>Teacher</option>
          <option value='1'>Admin</option>";
            }
            ?>
          </select></div>
          <input type="submit" class="btn btn-primary" name="save" value="Save"></div>
</div>
  </div>
</form>
  <div class="copyy">Copyright © Designed & Developed by DexignLab 2021</div>
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