<?php 
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="allteacher.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="allteacher.css"/>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
</head>
<body>
    <style>

    .update
{
  background-color: green;
  color: white;
  border: 0;
  outline: none;
  border-radius: 5px;
  height: 23px;
  width: 80px;
  font-weight: bold;
  cursor: pointer;

}
    .delete
{
  background-color: red;
  color: white;
  border: 0;
  outline: none;
  border-radius: 5px;
  height: 23px;
  width: 80px;
  font-weight: bold;
  cursor: pointer;

}
  </style>
  
     
<!-- ======================================side bar start=============================== -->
<?php
include "sidebar.php";
?>
<!-- ===========================side bar end======================================= -->
<!-- ============================top nav============================================== -->
         <?php
  include "topnavbar.php";
  ?>
<!-- =============================================================top end====================== -->
      <div id="container1">
    <div class="topnav">
      <h3>ALL TEACHER</h3>
      <a href="allteacher.php">ALL TEACHER</a>
      <a href="addteacher.php">ADD TEACHER</a>
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
      <div class="main2">
  <h4>All Teacher List</h4>
  <a href='addteacher.php'><button type="button" class="btn btn-primary">Add new+</button></a>
  </div>
  <div class="searchbarr">
  <tr>
    <th>Show</th>
    <th>
        <select class="form-select form-select-sm" style="width: 90px; margin: 0px 20px;" aria-label="Small select example">
          <option selected>10</option>
          <option value="30">30</option>
          <option value="50">50</option>
        </select>
      </th>
  </tr>
  <tr>entries</tr>
  <tr><div class="search-container" style="background-color: transparent; width: 370px; margin: 0px 200px;">
    <form action="/action_page.php">
      <input style="background-color: white; border: 1px solid black;" type="text" placeholder="Search.." name="search">
      <button style="background-color:#fff; border: 1px solid black;" type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
  </tr>
  </div>
  <?php
      include("connection.php");
      $query ="SELECT * FROM teacher";
      $result = mysqli_query($connection, $query) or die("query failed");
      if(mysqli_num_rows($result)> 0){ 
     
      ?>
  <table border="1" width="100%">
    <thead>
      <tr>
        <th width="2%">ID</th>
        <th width="5%">Emp.ID</th>
        <th width="30%">Teacher Name</th>
        <th>Designation</th>
        <th width="5%">Gander</th>
        <th>Education</th>
        <th width="5%">Mobile</th>
        <th width="15%">Email</th>
        <th width="20%">Joining</th>
        <th width="20%">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
     while($row = mysqli_fetch_assoc($result)){
      ?>
      <tr>
       <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['emplid']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['designation']; ?></td>
        <td><?php echo $row['gander']; ?></td>
        <td><?php echo $row['education']; ?></td>
        <td><?php echo $row['mobile']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['joiningdate']; ?></td>
        <td>
            <td> <a href='editteacher.php?id=<?php echo $row['id']; ?>' class='update'>Update</a>
            <a href='tdelete.php?id=<?php echo $row['id']; ?>' class='delete'>Delete</a>
          </div>
          </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  <?php

    }

?>
    </div>
    <div class="copyy">Copyright © Designed & Developed by DexignLab 2021</div>
   </div>





</section>
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
  
  //   <link rel="script" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></link>
    </script>
</body>
</html>