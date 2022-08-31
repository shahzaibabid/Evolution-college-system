<?php
    include("connection/connection.php");
    $pid = $_POST["id"];
    $ex = $_SESSION["ex"];
    $exsl = "SELECT * FROM `exam` WHERE `id` = $ex";
    $exres = mysqli_query($db, $exsl);
    $exr = mysqli_fetch_array($exres);
    $id = $exr[1];
    $selp = "SELECT s.name,s.email,p.program_name FROM `std_account` s INNER JOIN `program_course` p ON p.program_name = s.program WHERE p.id = $pid && s.class_id = $id";
    $res_p = mysqli_query($db,$selp);
    $i = 0;
    while($row = mysqli_fetch_array($res_p)) { 
        $i++;
    ?>
        <tr>
            <td><input style="background: transparent; border: none;" class="text-light" type="text" name="name" value="<?php echo $row["name"]; ?>" readonly ></td>
            <td><input style="background: transparent; border: none;" class="text-light" type="email" name="email" value="<?php echo $row["email"]; ?>" readonly ></td>
            <td><input style="background: transparent; border: none;" class="text-light" type="number" name="total<?php echo $i; ?>" value="20" readonly ></td>
            <td><input style="background: transparent; border: none;" class="text-light" type="number" name="obt<?php echo $i; ?>" value="0"></td>
        </tr>
    <?php 
    }
exit();