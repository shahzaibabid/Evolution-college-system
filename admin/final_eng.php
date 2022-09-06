<?php
    include("connection/connection.php");
    $id = $_POST["id"];
    $select = "SELECT s.id,s.name,s.email FROM `std_account` s WHERE s.class_id = $id AND s.program = 'Pre-Engineering'";
    $res_p = mysqli_query($db, $select);
    $i = 0;
    while($row = mysqli_fetch_array($res_p)) {
        $i++;
    ?>
        <tr>
            <?php
                $cls = "SELECT * FROM `class` WHERE `id` = $id";
                $res = mysqli_query($db, $cls);
                $c_row = mysqli_fetch_array($res);
            ?>
            <td><input style="background: transparent; border: none;" class="text-light" type="text" name="name" value="<?php echo $c_row["name"]; ?>" readonly ></td>
            <td><input style="background: transparent; border: none;" class="text-light" type="text" name="total<?php echo $i; ?>" value="<?php echo $row["email"]; ?>" readonly ></td>
            <?php
                $stid = $row["id"];
                $mid = "SELECT `id`, `obt`, `ttl`, `per`, `grade`, `status` FROM `final` WHERE `UserId` = $stid ORDER BY `id` DESC";
                $mid_res = mysqli_query($db, $mid);
                $mid_row = mysqli_fetch_array($mid_res);
            ?>
            <td><input style="background: transparent; border: none;" class="text-light text-center" type="text" name="obt<?php echo $i; ?>" value="<?php echo $mid_row["obt"] . "/" . $mid_row["ttl"]; ?>" readonly></td>
            <td><input style="background: transparent; border: none;" class="text-light text-center" type="text" name="math<?php echo $i; ?>" value="<?php echo $mid_row["per"]; ?>" readonly></td>
            <td><input style="background: transparent; border: none;" class="text-light text-center" type="text" name="phy<?php echo $i; ?>" value="<?php echo $mid_row["grade"]; ?>" readonly></td>
            <td><input style="background: transparent; border: none;" class="text-light text-center" type="text" name="chem<?php echo $i; ?>" value="<?php echo $mid_row["status"]; ?>" readonly></td>
            <td><a href="examstudent.php?id=<?php echo $row["id"] ?>"><input type="button" value="Details" class="btn btn-sm btn-outline-info"></a></td>
        </tr>
    <?php 
    }
exit();