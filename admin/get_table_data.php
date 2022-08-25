<?php
include("connection/connection.php");
$cid = $_POST['id'];
$x = $cid;
switch ($x) {
    case '1 1':
        $seltable = "SELECT * FROM `timetable6`";
        break;
    
    case '1 2':
        $seltable = "SELECT * FROM `timetable7`";
        break;

    case '1 3':
        $seltable = "SELECT * FROM `timetable8`";
        break;

    case '1 4':
        $seltable = "SELECT * FROM `timetable9`";
        break;

    case '1 5':
        $seltable = "SELECT * FROM `timetable10`";
        break;
    case '2 1':
        $seltable = "SELECT * FROM `timetable11`";
        break;
    
    case '2 2':
        $seltable = "SELECT * FROM `timetable12`";
        break;

    case '2 3':
        $seltable = "SELECT * FROM `timetable13`";
        break;

    case '2 4':
        $seltable = "SELECT * FROM `timetable14`";
        break;

    case '2 5':
        $seltable = "SELECT * FROM `timetable15`";
        break;        
}

$res_r = mysqli_query($db, $seltable);
$i = 0;
while($row_r = mysqli_fetch_array($res_r)) {
  $i++;

?>
<!-- <input type="hidden" name="tb<?php echo $i; ?>"> -->
<tr>
    <td ><input type="text" style="background-color: transparent; color: white; border:none;" value="<?php echo $row_r[1]; ?>" readonly></td>
    <td><input type="text" name="mon<?php echo $i; ?>" style="background-color: transparent; color: white; border:none;" value="<?php echo $row_r[2]; ?>"></td>
    <td><input type="text" name="tues<?php echo $i; ?>" style="background-color: transparent; color: white; border:none;" value="<?php echo $row_r[3]; ?>"></td>
    <td><input type="text" name="wed<?php echo $i; ?>" style="background-color: transparent; color: white; border:none;" value="<?php echo $row_r[4]; ?>"></td>
    <td><input type="text" name="thurs<?php echo $i; ?>" style="background-color: transparent; color: white; border:none;" value="<?php echo $row_r[5]; ?>"></td>
    <td><input type="text" name="fri<?php echo $i; ?>" style="background-color: transparent; color: white; border:none;" value="<?php echo $row_r[6]; ?>"></td>
    <td><input type="text" name="sat<?php echo $i; ?>" style="background-color: transparent; color: white; border:none;" value="<?php echo $row_r[7]; ?>"></td>
</tr>
<?php
}
?>