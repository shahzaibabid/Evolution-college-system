<?php
    include("connection/connection.php");
    $id = $_POST["id"];
    $select = "SELECT s.id,s.name,s.email FROM `std_account` s WHERE s.class_id = $id AND s.program = 'Pre-Medical'";
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
                $phy = "SELECT e.obt_mks,e.total_mks,e.status FROM `physic` e WHERE e.student_id = $stid ORDER BY e.id DESC";
                $phy_res = mysqli_query($db, $phy);
                $phy_row = mysqli_fetch_array($phy_res);
            ?>
            <td><input style="background: transparent; border: none;" class="text-light text-center" type="text" name="obt<?php echo $i; ?>" value="<?php echo $phy_row["obt_mks"] . "/" . $phy_row["total_mks"]; ?>" readonly></td>
            <td><input style="background: transparent; border: none;" class="text-light" type="text" name="obt<?php echo $i; ?>" value="<?php echo $phy_row["status"]; ?>" readonly></td>
            <td><a href="student.php?id=<?php echo $row["id"] ?>"><input type="button" value="Details" class="btn btn-sm btn-outline-info"></a></td>
        </tr>
    <?php 
    }
exit();