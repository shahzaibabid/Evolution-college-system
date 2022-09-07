<?php
    include("connection/connection.php");
    if(isset($_POST["midsubmit"])) {        
        $program_course = $_POST["midprogram_course"];
        $classes = $_POST["midclass"];
        $name = $_POST["midsubject2"];
        $name = mysqli_real_escape_string($db,$name);
        $mydate = $_POST["middate"];
        $mydate = mysqli_real_escape_string($db,$mydate);
        $mytime = $_POST["midtime"];
        $mytime = mysqli_real_escape_string($db,$mytime);
        $mytime2 = $_POST["midtime2"];
        $mytime2 = mysqli_real_escape_string($db,$mytime2);
        $exam = $_POST["midexam"];
        $exam = mysqli_real_escape_string($db,$exam);
        echo $examination = "INSERT INTO `mid_exam`(`class_id`, `subject`, `date`, `start_time`, `end_time`, `file`, `program_id`) VALUES ('$classes','$name','$mydate','$mytime','$mytime2','$exam','$program_course')";
        $examination_result = mysqli_query($db, $examination);        
        ?>
            <!-- <Script>
                window.location.assign("./exam.php");
            </Script> -->
        <?php
    }
?>