<?php
    include("connection/connection.php");
    $pid = $_POST["id"];
    $ex = $_SESSION["ex"];
    $exsl = "SELECT * FROM `final_exam` WHERE `id` = $ex";
    $exres = mysqli_query($db, $exsl);
    $exr = mysqli_fetch_array($exres);
    $id = $exr[1];
    $selp = "SELECT s.id,s.name,s.email,p.program_name FROM `std_account` s INNER JOIN `program_course` p ON p.program_name = s.program WHERE p.id = $pid && s.class_id = $id";
    $res_p = mysqli_query($db,$selp);
    $i = 0;
    ?>               
    <div class="responsive-table" style="overflow-x:auto; overflow-y:auto;">
    <table class="table" style="width:100%">
    <thead>
        <tr>
            <th scope="col">Email</th>
            <th scope="col">English</th>
            <th scope="col">Urdu</th>
            <th scope="col">Islamiat</th>
            <?php
            $sel_subjects = "SELECT * FROM `subjects` WHERE `program_id` = $pid";
            $result_subjects = mysqli_query($db,$sel_subjects);
            $k = 0;
            while($row_s = mysqli_fetch_array($result_subjects)) {
                ?>
                <th scope="col"><?php echo $row_s[1] ?></th>
                <?php
            }
            ?>
        </tr>
    </thead>
    <tbody>
    <?php
    while($row = mysqli_fetch_array($res_p)) { 
        $i++;
    ?>
        <tr>
            <td><input style="background: transparent; border: none;" class="text-light" type="email" name="email<?php echo $i; ?>" value="<?php echo $row["email"]; ?>" readonly ></td>
            <td><input style="background: transparent; border: none;" class="text-light" type="number" name="eng<?php echo $i; ?>" value="0"></td>
            <td><input style="background: transparent; border: none;" class="text-light" type="number" name="urdu<?php echo $i; ?>" value="0"></td>
            <td><input style="background: transparent; border: none;" class="text-light" type="number" name="isl<?php echo $i; ?>" value="0"></td>
            <?php
            $sel_subjects = "SELECT * FROM `subjects` WHERE `program_id` = $pid";
            $result_subjects = mysqli_query($db,$sel_subjects);
            $k = 10;
            while($row_s = mysqli_fetch_array($result_subjects)) {
                $k++;
                ?>
                <td><input style="background: transparent; border: none;" class="text-light" type="number" name="sb<?php echo $k . $i; ?>" value="0"></td><?php
            }
            ?>
            <td><input type="hidden" name="id<?php echo $i; ?>" value="<?php echo $row["id"]; ?> ?>"></td>
        </tr>
    <?php 
    }
    ?>        
    </tbody>
    </table>
    </div>
    <?php
exit();