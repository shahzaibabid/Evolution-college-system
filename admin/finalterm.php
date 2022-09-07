<?php
    include("connection/connection.php");
    $id = $_POST["id"];
    $sel_subjects = "SELECT * FROM `subjects` WHERE `program_id` = $id";
    $result_subjects = mysqli_query($db,$sel_subjects);
    $k = 0;
    ?><option value="0">Please Select</option><?php
    while($row_s = mysqli_fetch_array($result_subjects)) {
        ?><option value="<?php echo $row_s[0]; ?>"><?php echo $row_s[1]; ?></option><?php
    }
    $sel_subjects2 = "SELECT * FROM `subjects` WHERE `program_id` = 0";
    $result_subjects2 = mysqli_query($db,$sel_subjects2);
    $k2 = 0;
    while($row_s2 = mysqli_fetch_array($result_subjects2)) {
        ?><option value="<?php echo $row_s2[0]; ?>"><?php echo $row_s2[1]; ?></option><?php
    }
exit();