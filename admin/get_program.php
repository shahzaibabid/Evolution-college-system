<?php
    include("connection/connection.php");
    $id = $_POST["id"];
    $_SESSION["pid"] = $id;
    $cid = $_SESSION["myclassis"];
    $selp = "SELECT s.id,s.name FROM `subjects` s WHERE`class_id` = $cid && `program_id` = $id";
    $res_p = mysqli_query($db,$selp);

    ?> <option value="0">Please Select</option><?php
    while($row = mysqli_fetch_array($res_p)) { 
    ?>
        <option value="<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?></option>
    <?php 
    }
    $mysel = "SELECT s.id,s.name FROM `subjects` s WHERE`class_id` = $cid && `program_id` = 0";
    $myres = mysqli_query($db,$mysel);
    while($myrow = mysqli_fetch_array($myres)) { 
    ?>
        <option value="<?php echo $myrow["id"]; ?>"><?php echo $myrow["name"]; ?></option>
    <?php 
    }
exit();