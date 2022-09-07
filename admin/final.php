<?php
    include("connection/connection.php");
    if(isset($_POST["finalsubmit"])) {        
        $program_course = $_POST["finalprogram_course"];
        $classes = $_POST["finalclass"];
        $name = $_POST["finalsubject"];
        $name = mysqli_real_escape_string($db,$name);
        $mydate = $_POST["finaldate"];
        $mydate = mysqli_real_escape_string($db,$mydate);
        $mytime = $_POST["finaltime"];
        $mytime = mysqli_real_escape_string($db,$mytime);
        $mytime2 = $_POST["finaltime2"];
        $mytime2 = mysqli_real_escape_string($db,$mytime2);
        $exam = $_POST["finalexam"];
        $exam = mysqli_real_escape_string($db,$exam);
        $examination = "INSERT INTO `final_exam`(`class_id`, `subject`, `date`, `start_time`, `end_time`, `file`, `program_id`) VALUES ('$classes','$name','$mydate','$mytime','$mytime2','$exam','$program_course')";
        $examination_result = mysqli_query($db, $examination);        
        ?>
            <Script>
                window.location.assign("./exam.php");
            </Script>
        <?php
    }
?>