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
height:1400px;
border-style: solid;
  border-color: black;
}

.table{
    border-style: solid;
  border-color: black;
  font:bold;
}

.bullet{
    font-family: georgia;
    font-size:x-large;
  
}

.unordered{
    font-family: georgia;
    font-size:large;
}
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
    <h1>&nbsp;&nbsp;Admission Schedule & Procedure</h1>
</div>
<br>
<div class="container">
    <h1>Admisson Schedule</h1>
    <p>Evolution College System offers admission once in an academic year  in the month of July/August and fall in the mid of September each year.</p>
   <br>
    <center><h1>Admission Schedule- Fall 2022 Session</h1></center>
</div>

<!-- table start -->
<table class="table">
  <thead>
    <tr>
      
      <th scope="col">Description</th>
      <th scope="col">Date</th>
      <th scope="col">Day</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Admission Open – Fall 2022</th>
      <td>18 July</td>
      <td>Monday</td>
    
    </tr>
  
    <tr>
      <th scope="row"> Last Date to apply for Admissions</th>
      <td>31 August</td>
      <td>Tuesday</td>
    
    </tr>
   
    <tr>
      <th scope="row">  Commencement of Class – Fall 2022</th>
      <td>19 September</td>
      <td>Monday</td>
    
    </tr>

  </tbody>
</table>

<h3 style="color:red">Note: The College reserves the right to make any change in the admission schedule.</h3>
<br>
<center><h1>Academic Programs - Fall 2022 Session</h1></center>
<div class="bullet">
<ol>
    <li>  Pre-engineering</li>
    <li>  Pre-Medical</li>
    <li>  Computer Science</li>
    <li>  Arts</li>
    <li>  Commerce</li>
</ol>
</div>


<!-- table start -->
<table class="table">
  <thead>
    <tr>
      
      <th scope="col">Program</th>
      <th scope="col">Program Duration</th>
      <th scope="col">Program Elibility</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Pre-engineering</th>
      <td>2-years</td>
      <td>Minimum 60% in Matric</td>
    
    </tr>
  
    <tr>
      <th scope="row"> Pre-Medical</th>
      <td>2-years</td>
      <td>Minimum 65% in Matric</td>
    
    </tr>
   
    <tr>
      <th scope="row"> Computer Science</th>
      <td>2-years</td>
      <td>Minimum 70% in Matric</td>
    
    </tr>

    <tr>
      <th scope="row"> Arts</th>
      <td>2-years</td>
      <td>Minimum 40% in Matric</td>
    
    </tr>

    <tr>
      <th scope="row"> Commerce</th>
      <td>2-years</td>
      <td>Minimum 50% in matric</td>
    
    </tr>

  </tbody>
</table>

<br>
<center><h1>General Instructions For Applying Candidates</h1></center>
<div class="container-fluid">
<div class="unordered">
<ul>
    <li>The applicants who are meeting with the prescribed admission eligibility criteria of the Program may apply for admission.</li>
    <li>Admissions will be opened as per the admission schedule.</li>
    <li>CNIC/B Form number is mandatory for the registration. CNIC/B Form mismatching will result in rejection of admission form.</li>
    <li>Attachment/uploading of documents in the admission portal/system should be clear complete and readable. (i.e., scanned and uploaded as per given instructions).</li>
</ul>
</div>
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
