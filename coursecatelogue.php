<?php
include("conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evolution College System</title>
  <link rel="stylesheet" href="assets/css/style-freedom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style-freedom.css">
</head>
<style>
    body{
        background-color:white;
        
    }
    h1{
        font-family:georgia;
        font-size:bold;
    }
.heading{
    background-image: url("https://t4.ftcdn.net/jpg/03/03/45/25/360_F_303452599_eZMGXe7awggqAHTQXpjzBFehJBEyw4QR.jpg");
    color: white;
    width:100%;
    height:auto;
    border-radius:2px;
    margin-top:5px;
    padding-top:1px;
}
.content{
width: 80%;
background-color: white;
height:auto;
border-style: solid;
  border-color: black;
}

.bullet{
    font-family: georgia;
    font-size:x-large;
  
}

/* .unordered{
    font-family: georgia;
    font-size:large;
}  */
</style>
<body>

  <!-- Topbar start -->

  <?php
include("topbar.php");
?>
<!-- Topbar end -->

      <!-- headers start -->

   <?php
include("header.php");
?>
<!-- header end -->
<br><br>

<br><br>
<div class="container content">
<div class="heading">
    <h1 style="font-size: 4vw;">&nbsp;&nbsp;COURSES CATALOGUE</h1>
</div>
<br>

    <center><h1> <u>Pre-Engineering Program Courses</u> </h1></center>

<div class="bullet">
<ol>
    <li>Chemistry</li>
    <li>Urdu</li>
    <li>English</li>
    <li>Physics</li>
    <li>Math</li>
    <li>Islamiat</li>
</ol>
</div>


<center><h1> <u>Pre-Medical Program Courses</u></h1></center>

<div class="bullet">
<ol>
    <li>Zoology</li>
    <li>Botany</li>
    <li>Urdu</li>
    <li>Chemistry</li>
    <li>Physic</li>
    <li>English</li>
    <li>Islamiat</li>
</ol>
</div>

<center><h1> <u>Computer Science Program Courses</u> </h1></center>

<div class="bullet">
<ol>
    <li>Computer science</li>
    <li>English</li>
    <li>Urdu</li>
    <li>Math</li>
    <li>Physic</li>
    <li> Islamiat</li>
</ol>
</div>

<center><h1> <u>Arts Program Courses</u> </h1></center>

<div class="bullet">
<ol>
    <li>English</li>
    <li>Civics</li>
    <li>Psychology</li>
    <li>Education</li>
    <li>Urdu</li>
    <li>Islamiat</li>
</ol>
</div>

<center><h1> <u>Commerce Program Courses</u> </h1></center>

<div class="bullet">
<ol>
    <li>Accounting</li>
    <li>Business Math</li>
    <li>Economics</li>
    <li>Principle of Commere</li>
    <li>English</li>
    <li>Urdu</li>
    <li>Islamiat</li>
</ol>
</div>

</div>

<br><br>
  <!-- footer start -->

  <?php
include("footer.php");
?>
<!-- footer end -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
