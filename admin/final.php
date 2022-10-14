<?php
    include("connection/connection.php");
    if(isset($_POST["finalsubmit"])) {        
        $program_course = $_POST["finalprogram_course"];
        $classes = $_POST["finalclass"];
        // $name = $_POST["finalsubject"];
        // $name = mysqli_real_escape_string($db,$name);
        // $mydate = $_POST["finaldate"];
        // $mydate = mysqli_real_escape_string($db,$mydate);
        // $mytime = $_POST["finaltime"];
        // $mytime = mysqli_real_escape_string($db,$mytime);
        // $mytime2 = $_POST["finaltime2"];
        // $mytime2 = mysqli_real_escape_string($db,$mytime2);

        $filename = $_FILES["finalexam"]["name"];
        $imgname = rand() . $filename;
        $tmpname = $_FILES["finalexam"]["tmp_name"];
        $path = "./finals/" . $imgname;
        move_uploaded_file($tmpname, $path);
        $exam = $imgname;

        // $exam = $_POST["finalexam"];
        // $exam = mysqli_real_escape_string($db,$exam);
        $examination = "INSERT INTO `final_exam`(`class_id`, `file`, `program_id`) VALUES ('$classes','$exam','$program_course')";
        $examination_result = mysqli_query($db, $examination);        
        ?>
            <Script>
                window.location.assign("./exam.php");
            </Script>
        <?php
    }
?>