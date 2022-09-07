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

</style>
</style>
<body>
<?php
include("header.php");
?>


    <br><br><br>
    
    <div class="container content mt-5">    
        <div class="heading">
            <h1 style="font-size: 4vw;">&nbsp;&nbsp;Exams Schedule</h1>
        </div>
        <br>

        <!-- mid-term table start -->
        <div class="tablediv mb-4">
            <h3>Mid-Term</h3>
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
                        $mid = $_SESSION["myuserid"];
                        $mst = "SELECT student.program,student.class_id FROM `std_account` student WHERE `id` = $mid";
                        $mst_res = mysqli_query($db, $mst);
                        $mst_row = mysqli_fetch_array($mst_res);
                        $mst_class = $mst_row["class_id"];
                        $mst_program = $mst_row["program"];
                        $msel = "SELECT e.file,s.name,e.date,e.start_time,e.end_time FROM `mid_exam` e INNER JOIN `subjects` s ON s.id = e.subject INNER JOIN `program_course` p ON p.id = e.program_id WHERE p.program_name = '$mst_program' && e.class_id = $mst_class";
                        $mresult = mysqli_query($db, $msel);
                        if(mysqli_num_rows($mresult)) {
                            while($row = mysqli_fetch_array($mresult)) {
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
                        $mtestsel = "SELECT e.file,s.name,e.date,e.start_time,e.end_time FROM `mid_exam` e INNER JOIN `subjects` s ON s.id = e.subject WHERE e.program_id = 0 && e.class_id = $mst_class";
                        $mtestresult = mysqli_query($db, $mtestsel);
                        if(mysqli_num_rows($mtestresult)) {
                            while($testrow = mysqli_fetch_array($mtestresult)) {
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
        <!-- mid-term table end -->

        <!-- final-term table start -->
        <div class="tablediv mb-4">
            <h3>Final-Term</h3>
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
                        $fid = $_SESSION["myuserid"];
                        $fst = "SELECT student.program,student.class_id FROM `std_account` student WHERE `id` = $fid";
                        $fst_res = mysqli_query($db, $fst);
                        $fst_row = mysqli_fetch_array($fst_res);
                        $fst_class = $fst_row["class_id"];
                        $fst_program = $fst_row["program"];
                        $fsel = "SELECT e.file,s.name,e.date,e.start_time,e.end_time FROM `final_exam` e INNER JOIN `subjects` s ON s.id = e.subject INNER JOIN `program_course` p ON p.id = e.program_id WHERE p.program_name = '$fst_program' && e.class_id = $fst_class";
                        $fresult = mysqli_query($db, $fsel);
                        if(mysqli_num_rows($fresult)) {
                            while($row = mysqli_fetch_array($fresult)) {
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
                        $ftestsel = "SELECT e.file,s.name,e.date,e.start_time,e.end_time FROM `final_exam` e INNER JOIN `subjects` s ON s.id = e.subject WHERE e.program_id = 0 && e.class_id = $fst_class";
                        $ftestresult = mysqli_query($db, $ftestsel);
                        if(mysqli_num_rows($ftestresult)) {
                            while($testrow = mysqli_fetch_array($ftestresult)) {
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
        <!-- final-term table end -->
    </div>

    <br><br>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
