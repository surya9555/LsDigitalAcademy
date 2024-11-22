<?php 
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="allcourse.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="allcourse.css"/>
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
      <h3>All Courses</h3>
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
 
   
   <div id="container2">

    

         <?php
      include("connection.php");
      $query ="SELECT * FROM course";
      $result = mysqli_query($connection, $query) or die("query failed");
      if(mysqli_num_rows($result)> 0){ 
     
      ?>
    <div class="main">

 <?php


     while($row = mysqli_fetch_assoc($result)){

           
      ?>
   

        <div class="card m-3">

            <!-- <?php echo $row['id']; ?> -->
            <img src="<?php echo 'images/'.$row['photo']; ?>" height='300px' width='300px'>
            <div class="card-content">
                <h3><?php echo $row['coursename']; ?></h3>
             <div class="infoo">Course-Code: <b><?php echo $row['coursecode']; ?></b></div>
             <div class="infoo">Duration: <b><?php echo $row['courseduration']; ?></b></div>
             <div class="infoo">Professor: <b><?php echo $row['professor']; ?></b></div>
             <div class="infoo">Price: <b><?php echo $row['courseprice']; ?></b></div> 
             <div class="infoo">
                <button type="button" id="infoo2" class="btn btn-primary"
                    style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Read More.</button>
             </div>

            </div>

        
         
        </div>
      <?php
             }
         

        ?>
   
  </div>
  <?php
      }

    ?>
   
  </div>
  
    <div class="copyy">Copyright © Ls Digital Academy</div>


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
  
</script>
</body>
</html>