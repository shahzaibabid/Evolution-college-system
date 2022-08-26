<?php
    include("../admin/connection/connection.php");
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
</style>
<body>
<?php
include("header.php");
?>


    <br><br><br>
    
<div class="container content">
        <div class="heading">
            <h1 style="font-size: 5vw;">&nbsp;&nbsp;Exams Schedule</h1>
        </div>
        <br>
        <div class="container">
        
        
        <br>
        
        </div>

        <!-- table start -->
        <div class="tablediv mb-4">
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
                    <?php
                        $id = $_SESSION["myuserid"];
                        $st = "SELECT student.program,student.class_id FROM `std_account` student WHERE `id` = $id";
                        $st_res = mysqli_query($db, $st);
                        $st_row = mysqli_fetch_array($st_res);
                        $st_class = $st_row["class_id"];
                        $st_program = $st_row["program"];
                        $sel = "SELECT e.file,s.name,e.date,e.start_time,e.end_time FROM `exam` e INNER JOIN `subjects` s ON s.id = e.subject INNER JOIN `program_course` p ON p.id = e.program_id WHERE p.program_name = '$st_program' && e.class_id = $st_class";
                        $result = mysqli_query($db, $sel);
                        if(mysqli_num_rows($result)) {
                            while($row = mysqli_fetch_array($result)) {
                    ?>
                                <tr>
                                    <th scope="row" class="align-middle"><?php echo $row["name"]; ?></th>
                                    <th scope="row" class="align-middle"><?php echo $row["date"]; ?></th>
                                    <th scope="row" class="align-middle"><?php echo $row["start_time"] . " - " . $row["end_time"]; ?></th>
                                    <?php
                                        date_default_timezone_set("Asia/Karachi");
                                        $date = date("Y-m-d H:i");
                                        $mytime = $row["date"] . " " . $row["start_time"];
                                        $endtime = $row["date"] . " " . $row["end_time"];
                                        if($date == $mytime) {
                                    ?>
                                        <td><a href="<?php echo $row["file"]; ?>"><button class="btn btn-success">Click to commence exam</button></a></td>
                                    <?php
                                        }
                                        else if($date >= $endtime) {
                                    ?>
                                        <td><button class="btn btn-success disabled">Exam ended</button></a></td>
                                    <?php
                                        }
                                        else {
                                    ?>
                                        <td><button class="btn btn-success disabled">Coming soon</button></a></td>
                                    <?php
                                        }
                                    ?>
                                </tr>
                    <?php
                            }
                        }
                        $testsel = "SELECT e.file,s.name,e.date,e.start_time,e.end_time FROM `exam` e INNER JOIN `subjects` s ON s.id = e.subject WHERE e.program_id = 0 && e.class_id = $st_class";
                        $testresult = mysqli_query($db, $testsel);
                        if(mysqli_num_rows($testresult)) {
                            while($testrow = mysqli_fetch_array($testresult)) {
                    ?>
                                <tr>
                                    <th scope="row" class="align-middle"><?php echo $testrow["name"]; ?></th>
                                    <th scope="row" class="align-middle"><?php echo $testrow["date"]; ?></th>
                                    <th scope="row" class="align-middle"><?php echo $testrow["start_time"] . " - " . $testrow["end_time"]; ?></th>
                                    <?php
                                        date_default_timezone_set("Asia/Karachi");
                                        $testdate = date("Y-m-d H:i");
                                        $testmytime = $testrow["date"] . " " . $testrow["start_time"];
                                        $testendtime = $testrow["date"] . " " . $testrow["end_time"];
                                        if($testdate == $testmytime) {
                                    ?>
                                        <td><a href="<?php echo $testrow["file"]; ?>"><button class="btn btn-success">Click to commence exam</button></a></td>
                                    <?php
                                        }
                                        else if($testdate >= $testendtime) {
                                    ?>
                                        <td><button class="btn btn-success disabled">Exam ended</button></a></td>
                                    <?php
                                        }
                                        else {
                                    ?>
                                        <td><button class="btn btn-success disabled">Coming soon</button></a></td>
                                    <?php
                                        }
                                    ?>
                                </tr>
                    <?php
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>


</div>

<br><br>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
