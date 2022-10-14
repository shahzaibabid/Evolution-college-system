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

.tablediv {
  border-style: solid;
  border-color: black;
  overflow-x:auto;
  overflow-y:auto;
}
.table{
  font:bold;
}

/* .bullet{
    font-family: georgia;
    font-size:x-large;
  
}

.unordered{
    font-family: georgia;
    font-size:large;
} */
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
    <h1 style="font-size: 4vw;">&nbsp;&nbsp;Fee Structare For Programs</h1>
</div>
<br>


<!-- table start -->
<div class="tablediv">
  <table class="table">
    <thead>
      <tr>
        
        <th scope="col">Program</th>
        <th scope="col">Admission Fee</th>
        <th scope="col">Montly Fee</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">pre-engineering</th>
        <td>5000</td>
        <td>2500</td>
      
      </tr>
    
      <tr>
        <th scope="row">pre-Medical</th>
        <td>5000</td>
        <td>2500</td>
      
      </tr>
    
      <tr>
        <th scope="row">  Computer Science</th>
        <td>5000</td>
        <td>2500</td>
      
      </tr>

      <tr>
        <th scope="row">  Arts </th>
        <td>5000</td>
        <td>2500</td>
      
      </tr>

      <tr>
        <th scope="row">  Commerce</th>
        <td>5000</td>
        <td>2500</td>
      
      </tr>

    </tbody>
  </table>
</div>

<h3 style="color:red">Note: The College reserves the right to make any change in the admission Fees.</h3>
<br>

<br>

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