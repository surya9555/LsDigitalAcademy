<?php 
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
*{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}
.selectbar{
  height: 100px;
  width: 100%;
  background-color: yellow;
}

.in{
background-color: red;
}
        </style>
</head>
<body>
        <div class="selectbar">
          <div class="in"><label for="course">Course</label>
            <select class="form-select" style=" border: 1px solid black; width: 100%;" aria-label="Default select example">
            <option selected>Select course</option>
            <option value="1">Basic Computer</option>
            <option value="2">Diploma in Computer Application</option>
            <option value="3">Graphic Designing</option>
            <option value="4">Web-Development</option>
            <option value="5">Digital marketing</option>
            <option value="6">AutoCAD Civil 2D & 3D</option>
            <option value="7">AutoCAD Mechanical 2D & 3D</option>
            <option value="8">3Ds MAX</option>
            <option value="9">CCC</option>
            <option value="10">O LEVEL</option>
            <option value="11">Video Editing</option>
            <option value="12">Hardware & Networking</option>
            <option value="13">Advance Excel</option>
            <option value="14">English speaking</option></select></div>
        </div>
</body>
</html>