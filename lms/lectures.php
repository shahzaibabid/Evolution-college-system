<?php
    include("../admin/connection/connection.php");
    $id = $_GET["id"];
?>
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

</style>
<body>
<?php
include("header.php");
?>

    <br><br><br>
    
<div class="container content">
        <div class="heading">
            <?php
                $sel = "SELECT s.name,t.name as tname FROM `subjects` s INNER JOIN `teachers` t ON t.email = s.teacher_email WHERE s.id = $id";
                $result = mysqli_query($db, $sel);
                $row = mysqli_fetch_array($result);
            ?>
            <h1 style="font-size: 5vw;">&nbsp;&nbsp; <?php echo $row["name"]; ?></h1>
        </div>
        <br>
        <div class="container">
            <h1>Course Designed by "<?php echo $row["tname"]; ?>"</h1>
        
        <br>
        
        </div>

        <!-- table start -->
        <div class="tablediv mb-4">
            <table class="table">
                <thead>
                    <tr>
                    
                    <th scope="col">Lecture Number</th>
                    <th scope="col">Lecture Link</th>
                    
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td> <button class="btn btn-success">Click to watch Lecture 01 </button> </td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td> <button class="btn btn-success">Click to watch Lecture 02 </button> </td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td> <button class="btn btn-success">Click to watch Lecture 03 </button> </td>
                    </tr>
                    <tr>
                    <th scope="row">4</th>
                    <td> <button class="btn btn-success">Click to watch Lecture 04 </button> </td>
                    </tr>
                    <tr>
                    <th scope="row">5</th>
                    <td> <button class="btn btn-success">Click to watch Lecture 05 </button> </td>
                    </tr>
                </tbody>
            </table>
        </div>



</div>

<br><br>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
