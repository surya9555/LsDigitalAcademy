<!DOCTYPE html>
<!-- ---------------------------------code by jitender---------------------- -->
<html lang="en" dir="ltr">

 
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
<div id="display">
    <div id="child" class="img1"><h2><b>TOTAL STUDENT</b></h2>
     <?php
      include("connection.php");
      $query ="SELECT * FROM addstudents";
      $result = mysqli_query($connection, $query) or die("query failed");
      if($total =mysqli_num_rows($result)){

        echo '<p1><b>'.$total.'</b></p1>';
      }
      else
      {
       echo '<p1><b>no data</b></p1>'; 
      }
      ?>

      
                                  <div id="progres1">
                                 <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                   <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 5%"></div>
                                 </div ></div>
                                <p4><b>25% progress in 25 days</b></p4>
                               </div>
                              
    <div id="child"  class="img2"><h2><b>NEW STUDENT</b></h2>
        <?php
      include("connection.php");
      $query ="SELECT * FROM addstudents";
      $result = mysqli_query($connection, $query) or die("query failed");
      if($total =mysqli_num_rows($result)){

        echo '<p1><b>'.$total.'</b></p1>';
      }
      else
      {
       echo '<p1><b>no data</b></p1>'; 
      }
      ?>
                                <div id="progres2">
                                 <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                   <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 75%"></div>
                                 </div ></div>
                                <p4><b>65% progress in 25 days</b></p4>
                               </div>

    <div id="child"  class="img3"><h2><b>TOTAL COURSE</b></h2>
        <?php
      include("connection.php");
      $query ="SELECT * FROM course";
      $result = mysqli_query($connection, $query) or die("query failed");
      if($total =mysqli_num_rows($result)){

        echo '<p1><b>'.$total.'</b></p1>';
      }
      else
      {
       echo '<p1><b>no data</b></p1>'; 
      }
      ?>
                                   <div id="progres3"><div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                     <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 55%"></div>
                                   </div></div>
                                   <p4><b>35% progress in 25 days</b></p4>
                                 </div>

    <div id="child"  class="img4"><h2><b>FEES COLLACTION</b></h2>
        <?php
      include("connection.php");
      $query ="SELECT * FROM fee";
      $result = mysqli_query($connection, $query) or die("query failed");
      if($total =mysqli_num_rows($result)){

        echo '<p1><b>'.$total.'</b></p1>';
      }
      else
      {
       echo '<p1><b>no data</b></p1>'; 
      }
      ?>
                                  <div id="progres4"><div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                   <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 25%"></div>
                                 </div></div>
                                  <p4><b>75% progress in 25 days</b></p4>
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
<div class="container2">
   <?php
      include("connection.php");
      $query ="SELECT * FROM course";
      $result = mysqli_query($connection, $query) or die("query failed");
      if(mysqli_num_rows($result)> 0){ 
      while($row = mysqli_fetch_assoc($result)){
      ?>

 
        
    <div class="card m-3">
        <!-- <?php echo $row['id']; ?> -->
            <img src="<?php echo 'images/'.$row['photo']; ?>" height='300px' width='300px'>
            <div class="card-content">
                <h3><?php echo $row['coursename']; ?></h3>
             <div class="infoo">Course-Code: <b><?php echo $row['coursecode']; ?></b></div>
             <!-- <div class="infoo">Duration: <b><?php echo $row['courseduration']; ?></b></div> -->
             <div class="infoo">Professor: <b><?php echo $row['professor']; ?></b></div>
             <div class="infoo">Students: <b><?php echo $row['courseprice']; ?></b></div> 
             <div class="infoo">
                <button type="button" id="infoo2" class="btn btn-primary"
                    style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Read More.</button>
             </div>
            </div>
      </div>

      <?php

}}

      ?>

</div>

 </div>   




    
      <!-- ============================================cardbar finix==============================

      <!===========================================exam toper / editbar========================= -->
  <div class="container3">

      <div id="examtoper">
<table class="data-table">
  <thead>
    <tr>
     <h3>Institute Toppers 2022-2023</h3>
    </tr>
      <tr>
          <th>ROLL NO</th>
          <th>Name</th>
          <th>Course</th>
          <th>Mark's</th>
          <th>Edit</th>
      </tr>
  </thead>
  <tbody>
    <tr>
      <td>01</td>
      <td>GauTam</td>
      <td>Web-development</td>
      <td>590/600</td>
      <td><div class="btn-group" role="group" aria-label="Basic mixed styles example">
        <button type="button" class="btn btn-danger">Edit</button>
      </div>
      </td>
  </tr>
  <tr>
    <td>02</td>
    <td>Jitender</td>
    <td>Web-development</td>
    <td>580/600</td>
    <td><div class="btn-group" role="group" aria-label="Basic mixed styles example">
      <button type="button" class="btn btn-danger">Edit</button>
    </div>
    </td>
</tr>

<tr>
  <td>03</td>
  <td>Rahul Raj</td>
  <td>Web-development</td>
  <td>580/600</td>
  <td><div class="btn-group" role="group" aria-label="Basic mixed styles example">
    <button type="button" class="btn btn-danger">Edit</button>
  </div>
  </td>
</tr>

<tr>
<td>04</td>
<td>Akash Gautam</td>
<td>Web-development</td>
<td>570/600</td>
<td><div class="btn-group" role="group" aria-label="Basic mixed styles example">
  <button type="button" class="btn btn-danger">Edit</button>
</div>
</td>
</tr>

<tr>
<td>05</td>
<td>Suraj mehta</td>
<td>Web-development</td>
<td>560/600</td>
<td><div class="btn-group" role="group" aria-label="Basic mixed styles example">
<button type="button" class="btn btn-danger">Edit</button>
</div>
</td>
</tr>

</tbody>
</table>
</div>

<!-- =================================exam toper list=========== -->

  
    <div id="editbar">
      <div class="container">
        <div class="toolbar">
            <button onclick="execCmd('bold')" title="Bold"><b>B</b></button>
            <button onclick="toggleItalic()" title="Italic"><i>I</i></button>
            <button onclick="execCmd('underline')" title="Underline"><u>U</u></button>
            <button onclick="toggleOrderedList()" title="Ordered List">1.</button>
            <button onclick="changeFontSize(3)" title="Heading 3">H3</button>
            <button onclick="toggleColorMenu()" title="Font Color">A</button>
            <button onclick="execCmd('justifyLeft')" title="Align Left">L</button>
            <button onclick="execCmd('justifyCenter')" title="Center">C</button>
            <button onclick="execCmd('justifyRight')" title="Align Right">R</button>
            <button onclick="execCmd('fontName', 'Arial')" title="Font Family">Arial</button>
            <button onclick="createLink()" title="Insert Link">Link</button>
            <button onclick="clearField()" title="Clear Field">Clear</button>
            <input type="file" id="fileInput" accept=".png, .jpg, .jpeg, .mp4, .mp3, .pdf" style="display: none;">
            <button onclick="document.getElementById('fileInput').click()" title="Attach File">Attach File</button>
        </div>
        <div class="editor" contenteditable="true" id="editor" oninput="updateCount()">
            <p>Start typing here...</p>
        </div>
        <div id="charCount"></div>
        <div id="wordCount"></div>
    </div>
    </div>
  </div>
<!-- ===================================================exam toper and editbar end==================          -->
<?php
      include("connection.php");
      $query ="SELECT * FROM addstudents limit 10 ";
      $result = mysqli_query($connection, $query) or die("query failed");
      if(mysqli_num_rows($result)> 0){ 
     
      ?>
<div id="studentlist">
<div id="listbar">
<table class="data-table">
<thead>
<tr>
<b>New Student List</b>
</tr>
<tr>
    <th>ROLL NO</th>
    <th>NAME</th>
    <th>ASSIGNED PROFESSOR</th>
    <th>DATE OF ADMIT</th>
    <th>STATUS</th>
    <th>COURSE</th>
    <th>FEES</th>
    <th>Action</th>
</tr>
</thead>
<tbody>
     <?php
     while($row = mysqli_fetch_assoc($result)){
      ?>
<tr>
    <!-- <td><?php echo $row['id']; ?></td> -->
    <td><?php echo $row['rollnumber']; ?></td>
    <td><?php echo $row['firstname']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['registrationdate']; ?></td>
    <td><?php echo $row['status']; ?></td>
    <td><?php echo $row['course']; ?></td>
    <td><?php echo $row['amount']; ?></td>
    <td> <a href='editstudent.php?id=<?php echo $row['id']; ?>' class='update'>Update</a>
            <a href='delete.php?id=<?php echo $row['id']; ?>' class='delete'>Delete</a>
    </div>
    </td>
</tr>
<?php
} 
?>
</tbody>
</table>
</div>
<h2>Copyright © Ls Digital Academy</h2>
</div>
<?php
}
?>

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

  // ==============================edit bat function=========================
  function execCmd(command, value = null) {
            document.execCommand(command, false, value);
        }

        function toggleItalic() {
            execCmd('italic');
        }

        function toggleOrderedList() {
            execCmd('insertOrderedList');
        }

        function changeFontSize(size) {
            execCmd('fontSize', size);
        }

        function toggleColorMenu() {
            var colorMenu = document.getElementById('colorMenu');
            colorMenu.style.display = (colorMenu.style.display === 'block') ? 'none' : 'block';
        }

        function createLink() {
            var url = prompt("Enter the URL:");
            if (url) {
                execCmd('createLink', url);
            }
        }

        function clearField() {
            document.getElementById('editor').innerHTML = '';
        }

        document.getElementById('fileInput').addEventListener('change', function () {
            var file = this.files[0];
            var allowedTypes = ['image/png', 'image/jpeg', 'video/mp4', 'audio/mpeg', 'application/pdf'];

            if (allowedTypes.includes(file.type)) {
                var reader = new FileReader();
                reader.onload = function (event) {
                    var fileType = file.type.split('/')[0];
                    if (fileType === 'image') {
                        execCmd('insertImage', event.target.result);
                    } else if (fileType === 'video') {
                        execCmd('insertVideo', event.target.result);
                    } else if (fileType === 'audio') {
                        execCmd('insertAudio', event.target.result);
                    } else if (fileType === 'application') {
                        execCmd('insertHtml', '<a href="' + event.target.result + '">Attached File</a>');
                    }
                }
                reader.readAsDataURL(file);
            } else {
                alert('Invalid file type. Please select a valid file.');
            }
        });

        function updateCount() {
            var editor = document.getElementById('editor');
            var content = editor.textContent || editor.innerText;
            var characterCount = content.length;
            var wordCount = content.split(/\s+/).filter(Boolean).length;
            document.getElementById('charCount').textContent = "Characters: " + characterCount;
            document.getElementById('wordCount').textContent = "Words: " + wordCount;
        }
 // ==============================edit bat function=========================


</body>
</html>