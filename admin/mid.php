<?php
    include("connection/connection.php");
    if(isset($_POST["midsubmit"])) {        
        $program_course = $_POST["midprogram_course"];
        $classes = $_POST["midclass"];
        $startdate = $_POST["midstartdate"];
        $startdate = mysqli_real_escape_string($db,$mydate);
        $enddate = $_POST["midenddate"];
        $enddate = mysqli_real_escape_string($db,$mydate);
        
        $filename = $_FILES["midexam"]["name"];        
        $imgname = rand() . $filename;
        $tmpname = $_FILES["midexam"]["tmp_name"];
        $path = "./profile/" . $imgname;
        move_uploaded_file($tmpname, $path);
        $exam = $imgname;
        
        $examination = "INSERT INTO `mid_exam`(`class_id`, `start_date`, `end_date`, `file`, `program_id`) VALUES ('$classes','$startdate','$enddate','$exam','$exam','$program_course')";
        $examination_result = mysqli_query($db, $examination);        
        ?>
            <!-- <Script>
                window.location.assign("./exam.php");
            </Script> -->
        <?php
    }
?>