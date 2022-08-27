<?php
    include("connection/connection.php");
    $id = $_POST["id"];
    $_SESSION["myclassis"] = $id;
    $selp = "SELECT pc.id,pc.program_name FROM `program_course` pc";
    $res_p = mysqli_query($db,$selp);

    ?> <option value="0">Please Select</option><?php
    while($row = mysqli_fetch_array($res_p)) { 
    ?>
        <option value="<?php echo $row["id"]; ?>"><?php echo $row["program_name"]; ?></option>
    <?php 
    }
exit();