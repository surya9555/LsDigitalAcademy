<?php 
include("connection.php");
 ?>
 <!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="editstudent.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="editstudent.css"/>
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

      <h3 align="Center">Update Student</h3>
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
    <?php
      include("connection.php");
      $id = $_GET['id'];
      $query ="SELECT * FROM addstudents WHERE id={$id}";
      $result = mysqli_query($connection, $query) or die("query failed");
      if(mysqli_num_rows($result)> 0){ 
      while($row = mysqli_fetch_assoc($result)){
      ?>
   <form action="studentupdate.php" method="POST" enctype="multipart/form-data">
   <div id="container2">
        <div class="main">
        <div class="header"></div>
        <input type="hidden" id="bb" name="id" value="<?php echo $row['id']; ?>">
        <div class="in"><label for="rollnumber">Roll Number</label>
          <input type="text" id="bb" name="rollnumber" value="<?php echo $row['rollnumber']; ?>" placeholder="Roll Number" required></div>

        <div class="in"><label for="first name">Student Name</label>
        <input type="text" id="bb" name="firstname" value="<?php echo $row['firstname']; ?>" placeholder="Full Document Name*" required></div>
        
        <div class="in"><label for="email">Email</label>
          <input type="email" id="bb" name="email" value="<?php echo $row['email']; ?>" placeholder="info@gmail.com" required></div>
        
        <div class="in"><label for="regdate">Registration Date</label>
          <input type="date" id="bb" name="registrationdate" value="<?php echo $row['registrationdate']; ?>" placeholder="Registration Date" required></div>
        
              
        <div class="in"><label for="course">Course</label>
         
          
              <?php
          include("connection.php");
          $query ="SELECT * FROM course";
      $result = mysqli_query($connection, $query) or die("query failed");
      if(mysqli_num_rows($result)> 0){ 
        echo '<select class="form-select" name="course" style="border: 1px solid black;">';
        while($row = mysqli_fetch_assoc($result)){
          if($row['course'] == $row['coursename']){

            $select ="selected";
          }else{
            $select ="";

          }

        echo "<option {$select} value='{$row['id']}'>{$row['coursename']}</option>";
        }
      } echo "</select>";
     
      ?>
        </div>
        <div class="in"><label for="course">Education</label>
          <select class="form-select" name="education" style=" border: 1px solid black;" aria-label="Default select example">
          <?php
          include("connection.php");
          $query ="SELECT * FROM education";
      $result = mysqli_query($connection, $query) or die("query failed");
      if(mysqli_num_rows($result)> 0){ 
        while($row = mysqli_fetch_assoc($result)){
          if($row['education'] == $row['id']){

            $select ="selected";
          }else{
            $select ="";

          }


          echo "<option {$select} value='{$row['id']}'>{$row['education']}</option>";
        }
      } echo "</select>"; 
     
      ?>
        </div>
        
        <div class="in"><label for="gander">Gender</label>
          <?php
          include("connection.php");
          $query ="SELECT * FROM gender";
      $result = mysqli_query($connection, $query) or die("query failed");
      if(mysqli_num_rows($result)> 0){ 
        echo '<select class="form-select" name="gander" style=" border: 1px solid black;" aria-label="Default select example">';
        while($row = mysqli_fetch_assoc($result)){
           if($row['gender'] == $row['id']){

            $select ="selected";
          }else{
            $select ="";

          }

          echo "<option {$select} value='{$row['id']}'>{$row['gender']}</option>";
        }
      } echo "</select>";
     
      ?></div>
        
        <div class="in"><label for="phonenumber">Phone Number</label>
          <input type="number" id="bb" name="phonenumber" value="<?php echo $row['phonenumber']; ?>" placeholder="Phone Number" required></div>
        
        <div class="in"><label for="parentsname">Parents Name</label>
          <input type="text" id="bb" name="parentsname" value="<?php echo $row['parentsname']; ?>" placeholder="Parents Name" required></div>
        
        <div class="in"><label for="parentsnumber">Parents Mobile Number</label>
          <input type="number" id="bb" name="parentsmobilenumber" value="<?php echo $row['parentsmobilenumber']; ?>" placeholder="Parents Mobile Number" required ></div>
        
        <div class="in"><label for="dateofbirth">Date of Birth</label>
          <input type="date" id="bb" name="dateofbirth" value="<?php echo $row['dateofbirth']; ?>" required></div>
        
        <div class="in"><label for="blod">Classes Type</label>
          <select class="form-select" name="ctype" style=" border: 1px solid black;" aria-label="Default select example">
          <option value="note selected">Classess Type</option>
              <?php
          include("connection.php");
          $query ="SELECT * FROM type";
      $result = mysqli_query($connection, $query) or die("query failed");
      if(mysqli_num_rows($result)> 0){ 
        while($row = mysqli_fetch_assoc($result)){
          if($row['type'] == $row['id']){

            $select ="selected";
          }else{
            $select ="";

          }

          echo "<option {$select} value ='{$row['type']}'>{$row['type']}</option>";
        }
      } echo "</select>";
     
      ?></div>
        
        <div class="in" style="width: 90%; border: 1px solid black;">
          <div class="form-floating">
            <textarea class="form-control" name="address" placeholder="Leave a comment here"  id="floatingTextarea2" style="height: 100px;" value="<?php echo $row['address']; ?>"></textarea>
            <label for="floatingTextarea2">Adress here...</label></div></div>
         
        
        <div class="in" style="width: 90%; height: 40px; border: 1px solid black;">
          <div class="input-group mb-3">
            <input type="file" name="photo" class="form-control" id="inputGroupFile02">
            <label class="input-group-text" for="inputGroupFile02">Upload Photo</label></div>
          </div>
        <div class="in" style="width: 90%; height: 40px;">
        
            <div class="btn-group" style="width:10%;" role="group" aria-label="Basic radio toggle button group">
           <!--  <input type="cancel" class="btn-check" name="cancel" id="cancel" autocomplete="off">
            <label class="btn btn-outline-primary" for="cancel">Cancel</label> -->

            <!-- <input type="submit" value="submit" style="background-color: red;" class="btn-check" name="submit" id="submit" autocomplete="on" checked> -->
            <!-- <label class="btn btn-primary" for="submit">Submit</label> -->
            <input type="submit" class="btn btn-primary" name="submit" value="Update">
          </div>

          
</div>
  </div>
</form>

<?php
}
}
?>
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
    sidebarBtn.addEventListener("click", ()=>{``
      sidebar.classList.toggle("close");
    });
  
</script>

  </body>
  </html>
<?php
  $file_name = $_FILES['image']['name'];
  $file_size = $_FILES['image']['size'];
  $file_temp = $_FILES['image']['tmp_name'];
  $file_type = $_FILES['image']['type'];
  $folder   = "images/".$file_name;
  move_uploaded_file($file_temp, "images/". $folder);
?>