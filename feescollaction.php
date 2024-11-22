<?php 
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="feescollaction.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="feescollaction.css"/>
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
<!-- =============================================================top end====================== -->
     
   <div id="container1">
    <div class="topnav">
      <h3>Fees Collection</h3>
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

   <div id="container2">
    <div class="main">
      <div class="main2">
  <h4>Fees Collection</h4>
  </div>
  <div class="searchbarr">
  <tr>
    <th>Show</th>
    <th>
        <select class="form-select form-select-sm" style="width: 90px; margin: 0px 20px;" aria-label="Small select example">
          <option selected value="10">10</option>
          <option value="30">30</option>
          <option value="50">50</option>
          </select>
      </th>
  </tr>
  <tr>entries</tr>
  <tr><div class="search-container" style="background-color: transparent; width: 370px; margin: 0px 80px;">
    <form action="/action_page.php">
      <input style="background-color: white; border: 1px solid black;color: black; " type="text" placeholder="Search.." name="search">
      <button style="background-color:#fff; border: 1px solid black;" type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
  </tr> 
  </div>
  <?php
      include("connection.php");
      $query ="SELECT * FROM fee";
      $result = mysqli_query($connection, $query) or die("query failed");
      if(mysqli_num_rows($result)> 0){ 
     
      ?>
  <table>
    <thead>
      <tr>
        <th>Roll Number</th>
        <th>Student Name</th>
        <th>Course</th>
        <th>Invoice number</th>
        <th>Fees Type</th>
        <th>Payment Type</th>
        <th>Status</th>
        <th>Date</th>
        <th>Amount</th>
      </tr>
    </thead>
    <tbody>
      <?php
     while($row = mysqli_fetch_assoc($result)){
      ?>
      <tr>
        <td><?php echo $row['roll']; ?></td>
        <td><?php echo $row['studentname']; ?></td>
        <td><?php echo $row['course']; ?></td>
        <td><?php echo $row['refnumber']; ?></td>
        <td><?php echo $row['feetype']; ?></td>
        <td><?php echo $row['paymentmode']; ?></td>
        <td><?php echo $row['status']; ?></td>
        <td><?php echo $row['coldate']; ?></td>
        <td><b><?php echo $row['amount']; ?></b></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  <?php

    }

?>
</div>
   </div>
   <div class="copyy">Copyright © Ls Digital Academy</div>




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
  
  </script>
</body>
</html>