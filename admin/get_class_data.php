<?php
include("connection/connection.php");
$id = $_POST['id'];
$sel = "SELECT * FROM `program_course`";
$result = mysqli_query($db, $sel);

?> <option value="0">Please Select</option><?php
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $id . $row[0]; ?>"><?php echo $row[1]; ?></option>
<?php 
}
exit();