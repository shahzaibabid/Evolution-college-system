<?php
    include("connection/connection.php");
    if ($_SESSION["name"] == null) {
        ?>
            <Script>
                window.location.assign("signin.php");
            </script>
        <?php
    }
    if ($_SESSION["mytype"] == 1) {
        ?>
            <Script>
                window.location.assign("../index.php");
            </Script>
        <?php
    }
    else if ($_SESSION["mytype"] == 4) {
        ?>
            <Script>
                window.location.assign("../lms/dashboard.php");
            </Script>
        <?php
    }
    
    $examid = $_GET["ex"];
    $_SESSION["ex"] = $examid;

    if(isset($_POST["submit"])) {
        
        $exsl = "SELECT * FROM `exam` WHERE `id` = $examid";
        $exres = mysqli_query($db, $exsl);
        $exr = mysqli_fetch_array($exres);
        $subject = $exr[2];
        $sel = "SELECT * FROM `subjects` WHERE `id` = $subject";
        $result = mysqli_query($db,$sel);
        $subrow = mysqli_fetch_array($result);
        $subres = $subrow["1"];
        $id = $exr[1];
        $pid = $_POST["class"];
        $selp = "SELECT s.id,s.name,s.email,p.program_name FROM `std_account` s INNER JOIN `program_course` p ON p.program_name = s.program WHERE p.id = $pid && s.class_id = $id";
        $res_p = mysqli_query($db,$selp);

        if($subres == "Urdu") {            
            $i = 0;
            while($row = mysqli_fetch_array($res_p)) { 
                $i++;
                $student_id = $row["id"];
                $total = $_POST["total" . $i];
                $obt = $_POST["obt" . $i];
                if($obt >= 8) {
                    $status = "Pass";
                }
                else {
                    $status = "Fail";
                }
                $inp = "INSERT INTO `urdu`(`exam_id`, `student_id`, `total_mks`, `obt_mks`, `status`, `class_id`, `program_id`) VALUES ('$examid','$student_id','$total','$obt','$status','$id','$pid')";
                $myresult = mysqli_query($db,$inp);
                
                $program_name = $row["program_name"];
                if($program_name == "Commerce") {
                ?>
                    <Script>
                        window.location.assign("Commerce.php");
                    </script>
                <?php
                }
                else if($program_name == "Arts") {
                ?>
                    <Script>
                        window.location.assign("Arts.php");
                    </script>
                <?php
                }
                else if($program_name == "Computer Science") {
                ?>
                    <Script>
                        window.location.assign("Computer.php");
                    </script>
                <?php
                }
                else if($program_name == "Pre-Medical") {
                ?>
                    <Script>
                        window.location.assign("Medical.php");
                    </script>
                <?php
                }
                else if($program_name == "Pre-Engineering") {
                ?>
                    <Script>
                        window.location.assign("Engineering.php");
                    </script>
                <?php
                }
            }
        }
        elseif($subres == "English") {
            $i = 0;
            while($row = mysqli_fetch_array($res_p)) { 
                $i++;
                $student_id = $row["id"];
                $total = $_POST["total" . $i];
                $obt = $_POST["obt" . $i];
                if($obt >= 8) {
                    $status = "Pass";
                }
                else {
                    $status = "Fail";
                }
                $inp = "INSERT INTO `english`(`exam_id`, `student_id`, `total_mks`, `obt_mks`, `status`, `class_id`, `program_id`) VALUES ('$examid','$student_id','$total','$obt','$status','$id','$pid')";
                $myresult = mysqli_query($db,$inp);
                
                $program_name = $row["program_name"];
                if($program_name == "Commerce") {
                ?>
                    <Script>
                        window.location.assign("Commerce.php");
                    </script>
                <?php
                }
                else if($program_name == "Arts") {
                ?>
                    <Script>
                        window.location.assign("Arts.php");
                    </script>
                <?php
                }
                else if($program_name == "Computer Science") {
                ?>
                    <Script>
                        window.location.assign("Computer.php");
                    </script>
                <?php
                }
                else if($program_name == "Pre-Medical") {
                ?>
                    <Script>
                        window.location.assign("Medical.php");
                    </script>
                <?php
                }
                else if($program_name == "Pre-Engineering") {
                ?>
                    <Script>
                        window.location.assign("Engineering.php");
                    </script>
                <?php
                }            
            }
        }
        elseif($subres == "Islamiat") {
            $i = 0;
            while($row = mysqli_fetch_array($res_p)) { 
                $i++;
                $student_id = $row["id"];
                $total = $_POST["total" . $i];
                $obt = $_POST["obt" . $i];
                if($obt >= 8) {
                    $status = "Pass";
                }
                else {
                    $status = "Fail";
                }
                $inp = "INSERT INTO `islamiat`(`exam_id`, `student_id`, `total_mks`, `obt_mks`, `status`, `class_id`, `program_id`) VALUES ('$examid','$student_id','$total','$obt','$status','$id','$pid')";
                $myresult = mysqli_query($db,$inp);

                $program_name = $row["program_name"];
                if($program_name == "Commerce") {
                ?>
                    <Script>
                        window.location.assign("Commerce.php");
                    </script>
                <?php
                }
                else if($program_name == "Arts") {
                ?>
                    <Script>
                        window.location.assign("Arts.php");
                    </script>
                <?php
                }
                else if($program_name == "Computer Science") {
                ?>
                    <Script>
                        window.location.assign("Computer.php");
                    </script>
                <?php
                }
                else if($program_name == "Pre-Medical") {
                ?>
                    <Script>
                        window.location.assign("Medical.php");
                    </script>
                <?php
                }
                else if($program_name == "Pre-Engineering") {
                ?>
                    <Script>
                        window.location.assign("Engineering.php");
                    </script>
                <?php
                }
            }
        }
        elseif($subres == "Chemistry") {
            $i = 0;
            while($row = mysqli_fetch_array($res_p)) { 
                $i++;
                $student_id = $row["id"];
                $total = $_POST["total" . $i];
                $obt = $_POST["obt" . $i];
                if($obt >= 8) {
                    $status = "Pass";
                }
                else {
                    $status = "Fail";
                }
                $inp = "INSERT INTO `chemistry`(`exam_id`, `student_id`, `total_mks`, `obt_mks`, `status`, `class_id`, `program_id`) VALUES ('$examid','$student_id','$total','$obt','$status','$id','$pid')";
                $myresult = mysqli_query($db,$inp);

                $program_name = $row["program_name"];
                if($program_name == "Commerce") {
                ?>
                    <Script>
                        window.location.assign("Commerce.php");
                    </script>
                <?php
                }
                else if($program_name == "Arts") {
                ?>
                    <Script>
                        window.location.assign("Arts.php");
                    </script>
                <?php
                }
                else if($program_name == "Computer Science") {
                ?>
                    <Script>
                        window.location.assign("Computer.php");
                    </script>
                <?php
                }
                else if($program_name == "Pre-Medical") {
                ?>
                    <Script>
                        window.location.assign("Medical.php");
                    </script>
                <?php
                }
                else if($program_name == "Pre-Engineering") {
                ?>
                    <Script>
                        window.location.assign("Engineering.php");
                    </script>
                <?php
                }
            }
        }
        elseif($subres == "Physics") {
            $i = 0;
            while($row = mysqli_fetch_array($res_p)) { 
                $i++;
                $student_id = $row["id"];
                $total = $_POST["total" . $i];
                $obt = $_POST["obt" . $i];
                if($obt >= 8) {
                    $status = "Pass";
                }
                else {
                    $status = "Fail";
                }
                $inp = "INSERT INTO `physic`(`exam_id`, `student_id`, `total_mks`, `obt_mks`, `status`, `class_id`, `program_id`) VALUES ('$examid','$student_id','$total','$obt','$status','$id','$pid')";
                $myresult = mysqli_query($db,$inp);

                $program_name = $row["program_name"];
                if($program_name == "Commerce") {
                ?>
                    <Script>
                        window.location.assign("Commerce.php");
                    </script>
                <?php
                }
                else if($program_name == "Arts") {
                ?>
                    <Script>
                        window.location.assign("Arts.php");
                    </script>
                <?php
                }
                else if($program_name == "Computer Science") {
                ?>
                    <Script>
                        window.location.assign("Computer.php");
                    </script>
                <?php
                }
                else if($program_name == "Pre-Medical") {
                ?>
                    <Script>
                        window.location.assign("Medical.php");
                    </script>
                <?php
                }
                else if($program_name == "Pre-Engineering") {
                ?>
                    <Script>
                        window.location.assign("Engineering.php");
                    </script>
                <?php
                }
            }
        }
        elseif($subres == "Math") {
            $i = 0;
            while($row = mysqli_fetch_array($res_p)) { 
                $i++;
                $student_id = $row["id"];
                $total = $_POST["total" . $i];
                $obt = $_POST["obt" . $i];
                if($obt >= 8) {
                    $status = "Pass";
                }
                else {
                    $status = "Fail";
                }
                $inp = "INSERT INTO `math`(`exam_id`, `student_id`, `total_mks`, `obt_mks`, `status`, `class_id`, `program_id`) VALUES ('$examid','$student_id','$total','$obt','$status','$id','$pid')";
                $myresult = mysqli_query($db,$inp);

                $program_name = $row["program_name"];
                if($program_name == "Commerce") {
                ?>
                    <Script>
                        window.location.assign("Commerce.php");
                    </script>
                <?php
                }
                else if($program_name == "Arts") {
                ?>
                    <Script>
                        window.location.assign("Arts.php");
                    </script>
                <?php
                }
                else if($program_name == "Computer Science") {
                ?>
                    <Script>
                        window.location.assign("Computer.php");
                    </script>
                <?php
                }
                else if($program_name == "Pre-Medical") {
                ?>
                    <Script>
                        window.location.assign("Medical.php");
                    </script>
                <?php
                }
                else if($program_name == "Pre-Engineering") {
                ?>
                    <Script>
                        window.location.assign("Engineering.php");
                    </script>
                <?php
                }
            }
        }
        elseif($subres == "Business Math") {
            $i = 0;
            while($row = mysqli_fetch_array($res_p)) { 
                $i++;
                $student_id = $row["id"];
                $total = $_POST["total" . $i];
                $obt = $_POST["obt" . $i];
                if($obt >= 8) {
                    $status = "Pass";
                }
                else {
                    $status = "Fail";
                }
                $inp = "INSERT INTO `math`(`exam_id`, `student_id`, `total_mks`, `obt_mks`, `status`, `class_id`, `program_id`) VALUES ('$examid','$student_id','$total','$obt','$status','$id','$pid')";
                $myresult = mysqli_query($db,$inp);

                $program_name = $row["program_name"];
                if($program_name == "Commerce") {
                ?>
                    <Script>
                        window.location.assign("Commerce.php");
                    </script>
                <?php
                }
                else if($program_name == "Arts") {
                ?>
                    <Script>
                        window.location.assign("Arts.php");
                    </script>
                <?php
                }
                else if($program_name == "Computer Science") {
                ?>
                    <Script>
                        window.location.assign("Computer.php");
                    </script>
                <?php
                }
                else if($program_name == "Pre-Medical") {
                ?>
                    <Script>
                        window.location.assign("Medical.php");
                    </script>
                <?php
                }
                else if($program_name == "Pre-Engineering") {
                ?>
                    <Script>
                        window.location.assign("Engineering.php");
                    </script>
                <?php
                }
            }
        }
        elseif($subres == "Zoology") {
            $i = 0;
            while($row = mysqli_fetch_array($res_p)) { 
                $i++;
                $student_id = $row["id"];
                $total = $_POST["total" . $i];
                $obt = $_POST["obt" . $i];
                if($obt >= 8) {
                    $status = "Pass";
                }
                else {
                    $status = "Fail";
                }
                $inp = "INSERT INTO `zoology`(`exam_id`, `student_id`, `total_mks`, `obt_mks`, `status`, `class_id`, `program_id`) VALUES ('$examid','$student_id','$total','$obt','$status','$id','$pid')";
                $myresult = mysqli_query($db,$inp);

                $program_name = $row["program_name"];
                if($program_name == "Commerce") {
                ?>
                    <Script>
                        window.location.assign("Commerce.php");
                    </script>
                <?php
                }
                else if($program_name == "Arts") {
                ?>
                    <Script>
                        window.location.assign("Arts.php");
                    </script>
                <?php
                }
                else if($program_name == "Computer Science") {
                ?>
                    <Script>
                        window.location.assign("Computer.php");
                    </script>
                <?php
                }
                else if($program_name == "Pre-Medical") {
                ?>
                    <Script>
                        window.location.assign("Medical.php");
                    </script>
                <?php
                }
                else if($program_name == "Pre-Engineering") {
                ?>
                    <Script>
                        window.location.assign("Engineering.php");
                    </script>
                <?php
                }
            }
        }
        elseif($subres == "Botany") {
            $i = 0;
            while($row = mysqli_fetch_array($res_p)) { 
                $i++;
                $student_id = $row["id"];
                $total = $_POST["total" . $i];
                $obt = $_POST["obt" . $i];
                if($obt >= 8) {
                    $status = "Pass";
                }
                else {
                    $status = "Fail";
                }
                $inp = "INSERT INTO `botany`(`exam_id`, `student_id`, `total_mks`, `obt_mks`, `status`, `class_id`, `program_id`) VALUES ('$examid','$student_id','$total','$obt','$status','$id','$pid')";
                $myresult = mysqli_query($db,$inp);

                $program_name = $row["program_name"];
                if($program_name == "Commerce") {
                ?>
                    <Script>
                        window.location.assign("Commerce.php");
                    </script>
                <?php
                }
                else if($program_name == "Arts") {
                ?>
                    <Script>
                        window.location.assign("Arts.php");
                    </script>
                <?php
                }
                else if($program_name == "Computer Science") {
                ?>
                    <Script>
                        window.location.assign("Computer.php");
                    </script>
                <?php
                }
                else if($program_name == "Pre-Medical") {
                ?>
                    <Script>
                        window.location.assign("Medical.php");
                    </script>
                <?php
                }
                else if($program_name == "Pre-Engineering") {
                ?>
                    <Script>
                        window.location.assign("Engineering.php");
                    </script>
                <?php
                }
            }
        }
        elseif($subres == "Computer Science") {
            $i = 0;
            while($row = mysqli_fetch_array($res_p)) { 
                $i++;
                $student_id = $row["id"];
                $total = $_POST["total" . $i];
                $obt = $_POST["obt" . $i];
                if($obt >= 8) {
                    $status = "Pass";
                }
                else {
                    $status = "Fail";
                }
                $inp = "INSERT INTO `computer_science`(`exam_id`, `student_id`, `total_mks`, `obt_mks`, `status`, `class_id`, `program_id`) VALUES ('$examid','$student_id','$total','$obt','$status','$id','$pid')";
                $myresult = mysqli_query($db,$inp);

                $program_name = $row["program_name"];
                if($program_name == "Commerce") {
                ?>
                    <Script>
                        window.location.assign("Commerce.php");
                    </script>
                <?php
                }
                else if($program_name == "Arts") {
                ?>
                    <Script>
                        window.location.assign("Arts.php");
                    </script>
                <?php
                }
                else if($program_name == "Computer Science") {
                ?>
                    <Script>
                        window.location.assign("Computer.php");
                    </script>
                <?php
                }
                else if($program_name == "Pre-Medical") {
                ?>
                    <Script>
                        window.location.assign("Medical.php");
                    </script>
                <?php
                }
                else if($program_name == "Pre-Engineering") {
                ?>
                    <Script>
                        window.location.assign("Engineering.php");
                    </script>
                <?php
                }
            }
        }
        elseif($subres == "Civics") {
            $i = 0;
            while($row = mysqli_fetch_array($res_p)) { 
                $i++;
                $student_id = $row["id"];
                $total = $_POST["total" . $i];
                $obt = $_POST["obt" . $i];
                if($obt >= 8) {
                    $status = "Pass";
                }
                else {
                    $status = "Fail";
                }
                $inp = "INSERT INTO `civics`(`exam_id`, `student_id`, `total_mks`, `obt_mks`, `status`, `class_id`, `program_id`) VALUES ('$examid','$student_id','$total','$obt','$status','$id','$pid')";
                $myresult = mysqli_query($db,$inp);

                $program_name = $row["program_name"];
                if($program_name == "Commerce") {
                ?>
                    <Script>
                        window.location.assign("Commerce.php");
                    </script>
                <?php
                }
                else if($program_name == "Arts") {
                ?>
                    <Script>
                        window.location.assign("Arts.php");
                    </script>
                <?php
                }
                else if($program_name == "Computer Science") {
                ?>
                    <Script>
                        window.location.assign("Computer.php");
                    </script>
                <?php
                }
                else if($program_name == "Pre-Medical") {
                ?>
                    <Script>
                        window.location.assign("Medical.php");
                    </script>
                <?php
                }
                else if($program_name == "Pre-Engineering") {
                ?>
                    <Script>
                        window.location.assign("Engineering.php");
                    </script>
                <?php
                }
            }
        }
        elseif($subres == "Psychology") {
            $i = 0;
            while($row = mysqli_fetch_array($res_p)) { 
                $i++;
                $student_id = $row["id"];
                $total = $_POST["total" . $i];
                $obt = $_POST["obt" . $i];
                if($obt >= 8) {
                    $status = "Pass";
                }
                else {
                    $status = "Fail";
                }
                $inp = "INSERT INTO `psychology`(`exam_id`, `student_id`, `total_mks`, `obt_mks`, `status`, `class_id`, `program_id`) VALUES ('$examid','$student_id','$total','$obt','$status','$id','$pid')";
                $myresult = mysqli_query($db,$inp);

                $program_name = $row["program_name"];
                if($program_name == "Commerce") {
                ?>
                    <Script>
                        window.location.assign("Commerce.php");
                    </script>
                <?php
                }
                else if($program_name == "Arts") {
                ?>
                    <Script>
                        window.location.assign("Arts.php");
                    </script>
                <?php
                }
                else if($program_name == "Computer Science") {
                ?>
                    <Script>
                        window.location.assign("Computer.php");
                    </script>
                <?php
                }
                else if($program_name == "Pre-Medical") {
                ?>
                    <Script>
                        window.location.assign("Medical.php");
                    </script>
                <?php
                }
                else if($program_name == "Pre-Engineering") {
                ?>
                    <Script>
                        window.location.assign("Engineering.php");
                    </script>
                <?php
                }
            }
        }
        elseif($subres == "Education") {
            $i = 0;
            while($row = mysqli_fetch_array($res_p)) { 
                $i++;
                $student_id = $row["id"];
                $total = $_POST["total" . $i];
                $obt = $_POST["obt" . $i];
                if($obt >= 8) {
                    $status = "Pass";
                }
                else {
                    $status = "Fail";
                }
                $inp = "INSERT INTO `education`(`exam_id`, `student_id`, `total_mks`, `obt_mks`, `status`, `class_id`, `program_id`) VALUES ('$examid','$student_id','$total','$obt','$status','$id','$pid')";
                $myresult = mysqli_query($db,$inp);

                $program_name = $row["program_name"];
                if($program_name == "Commerce") {
                ?>
                    <Script>
                        window.location.assign("Commerce.php");
                    </script>
                <?php
                }
                else if($program_name == "Arts") {
                ?>
                    <Script>
                        window.location.assign("Arts.php");
                    </script>
                <?php
                }
                else if($program_name == "Computer Science") {
                ?>
                    <Script>
                        window.location.assign("Computer.php");
                    </script>
                <?php
                }
                else if($program_name == "Pre-Medical") {
                ?>
                    <Script>
                        window.location.assign("Medical.php");
                    </script>
                <?php
                }
                else if($program_name == "Pre-Engineering") {
                ?>
                    <Script>
                        window.location.assign("Engineering.php");
                    </script>
                <?php
                }
            }
        }
        elseif($subres == "Accounting") {
            $i = 0;
            while($row = mysqli_fetch_array($res_p)) { 
                $i++;
                $student_id = $row["id"];
                $total = $_POST["total" . $i];
                $obt = $_POST["obt" . $i];
                if($obt >= 8) {
                    $status = "Pass";
                }
                else {
                    $status = "Fail";
                }
                $inp = "INSERT INTO `accounting`(`exam_id`, `student_id`, `total_mks`, `obt_mks`, `status`, `class_id`, `program_id`) VALUES ('$examid','$student_id','$total','$obt','$status','$id','$pid')";
                $myresult = mysqli_query($db,$inp);

                $program_name = $row["program_name"];
                if($program_name == "Commerce") {
                ?>
                    <Script>
                        window.location.assign("Commerce.php");
                    </script>
                <?php
                }
                else if($program_name == "Arts") {
                ?>
                    <Script>
                        window.location.assign("Arts.php");
                    </script>
                <?php
                }
                else if($program_name == "Computer Science") {
                ?>
                    <Script>
                        window.location.assign("Computer.php");
                    </script>
                <?php
                }
                else if($program_name == "Pre-Medical") {
                ?>
                    <Script>
                        window.location.assign("Medical.php");
                    </script>
                <?php
                }
                else if($program_name == "Pre-Engineering") {
                ?>
                    <Script>
                        window.location.assign("Engineering.php");
                    </script>
                <?php
                }
            }
        }
        elseif($subres == "Economics") {
            $i = 0;
            while($row = mysqli_fetch_array($res_p)) { 
                $i++;
                $student_id = $row["id"];
                $total = $_POST["total" . $i];
                $obt = $_POST["obt" . $i];
                if($obt >= 8) {
                    $status = "Pass";
                }
                else {
                    $status = "Fail";
                }
                $inp = "INSERT INTO `economics`(`exam_id`, `student_id`, `total_mks`, `obt_mks`, `status`, `class_id`, `program_id`) VALUES ('$examid','$student_id','$total','$obt','$status','$id','$pid')";
                $myresult = mysqli_query($db,$inp);

                $program_name = $row["program_name"];
                if($program_name == "Commerce") {
                ?>
                    <Script>
                        window.location.assign("Commerce.php");
                    </script>
                <?php
                }
                else if($program_name == "Arts") {
                ?>
                    <Script>
                        window.location.assign("Arts.php");
                    </script>
                <?php
                }
                else if($program_name == "Computer Science") {
                ?>
                    <Script>
                        window.location.assign("Computer.php");
                    </script>
                <?php
                }
                else if($program_name == "Pre-Medical") {
                ?>
                    <Script>
                        window.location.assign("Medical.php");
                    </script>
                <?php
                }
                else if($program_name == "Pre-Engineering") {
                ?>
                    <Script>
                        window.location.assign("Engineering.php");
                    </script>
                <?php
                }
            }
        }
        elseif($subres == "POC") {
            $i = 0;
            while($row = mysqli_fetch_array($res_p)) { 
                $i++;
                $student_id = $row["id"];
                $total = $_POST["total" . $i];
                $obt = $_POST["obt" . $i];
                if($obt >= 8) {
                    $status = "Pass";
                }
                else {
                    $status = "Fail";
                }
                $inp = "INSERT INTO `poc`(`exam_id`, `student_id`, `total_mks`, `obt_mks`, `status`, `class_id`, `program_id`) VALUES ('$examid','$student_id','$total','$obt','$status','$id','$pid')";
                $myresult = mysqli_query($db,$inp);

                $program_name = $row["program_name"];
                if($program_name == "Commerce") {
                ?>
                    <Script>
                        window.location.assign("Commerce.php");
                    </script>
                <?php
                }
                else if($program_name == "Arts") {
                ?>
                    <Script>
                        window.location.assign("Arts.php");
                    </script>
                <?php
                }
                else if($program_name == "Computer Science") {
                ?>
                    <Script>
                        window.location.assign("Computer.php");
                    </script>
                <?php
                }
                else if($program_name == "Pre-Medical") {
                ?>
                    <Script>
                        window.location.assign("Medical.php");
                    </script>
                <?php
                }
                else if($program_name == "Pre-Engineering") {
                ?>
                    <Script>
                        window.location.assign("Engineering.php");
                    </script>
                <?php
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin Panel</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <!-- <link href="img/favicon.ico" rel="icon"> -->
    <link rel="icon" href="img/signage-removebg-preview.png" type="image/x-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
            <div class="sidebar pe-4 pb-3">
                <nav class="navbar bg-secondary navbar-dark">
                    <a href="index.php" class="w-100 text-center navbar-brand mx-4 mb-3">
                        <h1 class="logo" style="font-family: Forte;">ECS</h1>
                    </a>
                    <div class="d-flex align-items-center ms-4 mb-4">
                        <div class="position-relative">
                            <img class="rounded-circle" src="profile/<?php echo $_SESSION["profile"]; ?>" alt="" style="width: 40px; height: 40px;">
                            <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                        </div>
                        <div class="ms-3">
                            <h6 class="mb-0"><?php echo $_SESSION["name"]; ?></h6>
                            <span><?php echo $_SESSION["account"]; ?></span>
                        </div>
                    </div>
                    <div class="navbar-nav w-100">
                        <a href="index.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>                    
                        <?php if($_SESSION["mytype"] == 0) { ?> <a href="add_administrator.php" class="nav-item nav-link"><i class="fas fa-file-invoice"></i>Add Administrator</a> <?php } ?>
                        <a href="Accounts.php" class="nav-item nav-link"><i class="fas fa-file-invoice"></i>All Accounts</a>
                        <?php if($_SESSION["mytype"] != 3) { ?> <a href="admission.php" class="nav-item nav-link"><i class="fas fa-file-invoice"></i>Admission Forms</a> <?php } ?>
                        <a href="exam.php" class="nav-item nav-link active"><i class="fas fa-file-invoice"></i>Exams</a>
                        <div class="dropdown nav-item nav-link" id="pages">
                            <a class="dropdown-toggle text-light" href="#" role="button" id="dropdownMenuLink2" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-file-invoice"></i>Pages
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                                <li><a href="Engineering.php" class="dropdown-item">Pre-Engineering</a></li>
                                <li><a href="Medical.php" class="dropdown-item">Pre-Medical</a></li>
                                <li><a href="Computer.php" class="dropdown-item">Computer Science</a></li>
                                <li><a href="Arts.php" class="dropdown-item">Arts</a></li>
                                <li><a href="Commerce.php" class="dropdown-item">Commerce</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="navbar-nav align-items-center ms-auto">                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="profile/<?php echo $_SESSION["profile"]; ?>" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?php echo $_SESSION["name"]; ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Profile Start -->
            <div class="container-fluid pt-4 px-4">
                <h1 class="text-center">Results</h1>
                <div class="row g-4">                    
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <?php                                
                                    // $examid is metioned on line 25
                                    $sel_class = "SELECT e.id,e.subject,e.program_id,s.name FROM `exam` e  INNER JOIN `subjects` s ON s.id = e.subject WHERE e.id = $examid AND `result` = 'no'";
                                    $result = mysqli_query($db,$sel_class);
                                    $class_row = mysqli_fetch_array($result);
                                    $check = $class_row["program_id"];
                                ?>
                                <h6><?php echo $class_row["name"] . " Results" ?></h6>
                            </div>
                                                            
                            <form action="#" method="post" enctype="multipart/form-data">                                        
                                <div class="col-md-6 form-floating mb-3">
                                    <select id="class" class="form-control bg-dark" name="class">
                                        <option value="0">Select Program</option>
                                        <?php
                                            if($check == 0) {
                                                $sel_program = "SELECT * FROM `program_course`";
                                                $res_program = mysqli_query($db, $sel_program);                                                
                                                $i = 0;
                                                while($row = mysqli_fetch_array($res_program)) {
                                                    ?><option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option><?php
                                                }
                                            }
                                            else {
                                                $sel_program = "SELECT * FROM `program_course` WHERE `id` = $check";
                                                $res_program = mysqli_query($db, $sel_program);                                                
                                                $i = 0;
                                                while($row = mysqli_fetch_array($res_program)) {
                                                    ?><option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option><?php
                                                }
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-floating mb-3">               
                                    <div class="responsive-table">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Total</th>
                                                    <th scope="col">Obtained</th>
                                                </tr>
                                            </thead>
                                            <tbody id="mystudents">
                                                <!-- dymanic data -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Profile End -->

          
            <!-- Footer Start -->
            <?php
                include("footer.php");
            ?>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>    
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>        
        $('#class').on('change', function() {
            const id =$(this).find(":selected").val();
            $.ajax({
                url: "get_students.php",
                cache: false,
                type: "POST",
                data: {id : id},
                success: function(html){
                    $('#mystudents').html(html);
                }
            });
        
        });;
    </script>
</body>

</html>