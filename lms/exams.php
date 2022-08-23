<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evolution College System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    <style>
    body{
        background-color:white;
        
    }
    h1{
        font-family:georgia;
        font-size:bold;
    }
.heading{
    background: blue;
    color: white;
    width:100%;
    height:50px;
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

.table{
    border-style: solid;
  border-color: black;
  font:bold;
}

</style>
</style>
<body>
<?php
include("header.php");
?>


    <br><br><br>
    
<div class="container content">
        <div class="heading">
            <h1>&nbsp;&nbsp;Exams Schedule</h1>
        </div>
        <br>
        <div class="container">
        
        
        <br>
        
        </div>

        <!-- table start -->
        <table class="table">
        <thead>
            <tr>
            
            <th scope="col">Subject Name</th>
            <th scope="col">Date</th>
            <th scope="col">Exam Time</th>
            <th scope="col"></th>
            
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">English</th>
            <th scope="row">25-august</th>
            <th scope="row">12:00-12:30 </th>
            <td> <button class="btn btn-success">Click to commence exam</button> </td>
            </tr>
           
           
           
          
        </tbody>
        </table>



</div>

<br><br>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
