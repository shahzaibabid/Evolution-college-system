<?php
    include("connection/connection.php");
    if(isset($_POST["finalsubmit"])) {        
        $program_course = $_POST["finalprogram_course"];
        $classes = $_POST["finalclass"];
        $startdate = $_POST["finalstartdate"];
        $startdate = mysqli_real_escape_string($db,$mydate);
        $enddate = $_POST["finalenddate"];
        $enddate = mysqli_real_escape_string($db,$mytime);
        
        $filename = $_FILES["finalexam"]["name"];        
        $imgname = rand() . $filename;
        $tmpname = $_FILES["finalexam"]["tmp_name"];
        $path = "./profile/" . $imgname;
        move_uploaded_file($tmpname, $path);
        $exam = $imgname;
        $examination = "INSERT INTO `final_exam`(`class_id`, `start_date`, `end_date`, `file`, `program_id`) VALUES ('$classes','$startdate','$enddate','$exam','$exam','$program_course')";
        $examination_result = mysqli_query($db, $examination);        
        ?>
            <Script>
                window.location.assign("./exam.php");
            </Script>
        <?php
    }
?>