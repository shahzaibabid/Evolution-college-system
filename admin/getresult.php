<?php
    if(isset($_POST["submit"])) {
        $subject = $_POST["mysubs"];
        $sel = "SELECT * FROM `subjects` WHERE `id` = $subject";
        $result = mysqli_query($db,$sel);
        $subrow = mysqli_fetch_array($result);
        $subres = $subrow["1"];
        
        if($subres == "Urdu") {
            $pid = $_POST["program_course"];
            $id = $_POST["class"];
            $selp = "SELECT s.id,s.name,s.email,p.program_name FROM `std_account` s INNER JOIN `program_course` p ON p.program_name = s.program WHERE p.id = $pid && s.class_id = $id";
            $res_p = mysqli_query($db,$selp);
            $i = 0;
            while($row = mysqli_fetch_array($res_p)) { 
                $i++;
                $examid = $_POST["examid"];
                $student_id = $row["id"];
                $total = $_POST["total" . $i];
                $obt = $_POST["obt" . $i];
                $inp = "INSERT INTO `urdu`(`exam_id`, `student_id`, `total_mks`, `obt_mks`, `per`, `grade`, `status`, `class_id`, `program_id`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]')";
            }
        }
        elseif($subres == "English") {

        }
        elseif($subres == "Islamiat") {

        }
        elseif($subres == "Chemistry") {

        }
        elseif($subres == "Physics") {

        }
        elseif($subres == "Math") {

        }
        elseif($subres == "Zoology") {

        }
        elseif($subres == "Botany") {

        }
        elseif($subres == "Computer Science") {

        }
        elseif($subres == "Civics") {

        }
        elseif($subres == "Psychology") {

        }
        elseif($subres == "Education") {

        }
        elseif($subres == "Accounting") {

        }
        elseif($subres == "Economics") {

        }
        elseif($subres == "POC") {

        }
    }
?>