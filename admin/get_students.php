<?php
    include("connection/connection.php");
    $cid = $_POST["id"];
    $sel = "SELECT * FROM `subjects` WHERE `id` = $cid";
    $result = mysqli_query($db,$sel);
    $subrow = mysqli_fetch_array($result);
    $subres = $subrow["1"];
    $pid = $_SESSION["pid"];
    $id = $_SESSION["myclassis"];
    $selp = "SELECT s.name,s.email,p.program_name FROM `std_account` s INNER JOIN `program_course` p ON p.program_name = s.program WHERE p.id = $pid && s.class_id = $id";
    $res_p = mysqli_query($db,$selp);
    $i = 0;
    while($row = mysqli_fetch_array($res_p)) { 
        $i++;
    ?>
        <tr>
            <td><input style="background: transparent; border: none;" class="text-light" type="tel" name="name" value="<?php echo $row["name"]; ?>" readonly ></td>
            <td><input style="background: transparent; border: none;" class="text-light" type="tel" name="email" value="<?php echo $row["email"]; ?>" readonly ></td>
            <td><input style="background: transparent; border: none;" class="text-light" type="tel" name="total<?php echo $i; ?>" value="100" readonly ></td>
            <td><input style="background: transparent; border: none;" class="text-light" type="tel" name="obt<?php echo $i; ?>" value="0"></td>
        </tr>
    <?php 
    }
exit();