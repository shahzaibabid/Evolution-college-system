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

    if(isset($_POST["submit"])) {        
        $program_course = $_POST["program_course"];
        $classes = $_POST["class"];
        $name = $_POST["subject"];
        $name = mysqli_real_escape_string($db,$name);
        $mydate = $_POST["mydate"];
        $mydate = mysqli_real_escape_string($db,$mydate);
        $mytime = $_POST["mytime"];
        $mytime = mysqli_real_escape_string($db,$mytime);
        $mytime2 = $_POST["mytime2"];
        $mytime2 = mysqli_real_escape_string($db,$mytime2);
        $exam = $_POST["exam"];
        $exam = mysqli_real_escape_string($db,$exam);
        $examination = "INSERT INTO `exam`(`class_id`, `subject`, `date`, `start_time`, `end_time`, `file`, `program_id`) VALUES ('$classes','$name','$mydate','$mytime','$mytime2','$exam','$program_course')";
        $examination_result = mysqli_query($db, $examination);        
        ?>
            <Script>
                window.location.assign("./exam.php");
            </Script>
        <?php
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
                        <a href="timetable.php" class="nav-item nav-link"><i class="fas fa-file-invoice"></i>Timetable</a>
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
                                <h6>All Results</h6>                                
                            </div>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Class</th>
                                            <th scope="col">Program</th>
                                            <th scope="col">Subject Name</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Exam Time</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $id = $_SESSION["myuserid"];
                                            $st = "SELECT student.program,student.class_id FROM `std_account` student WHERE `id` = $id";
                                            $st_res = mysqli_query($db, $st);
                                            $st_row = mysqli_fetch_array($st_res);
                                            $st_class = $st_row["class_id"];
                                            $st_program = $st_row["program"];
                                            $sel = "SELECT e.id,e.program_id,e.class_id,e.file,s.name,e.date,e.start_time,e.end_time FROM `exam` e INNER JOIN `subjects` s ON s.id = e.subject && e.result = 'no'";
                                            $result = mysqli_query($db, $sel);
                                            if(mysqli_num_rows($result)) {
                                                while($row = mysqli_fetch_array($result)) {
                                                    $pid = $row["program_id"];
                                                    if($pid == 0){
                                                        $final_pid = "All";
                                                    }
                                                    else {
                                                        $selp = "SELECT pc.program_name FROM `program_course` pc WHERE `id` = $pid";
                                                        $res_p = mysqli_query($db,$selp);
                                                        $myrow = mysqli_fetch_array($res_p);
                                                        $final_pid = $myrow["program_name"];
                                                    }
                                        ?>
                                                    <tr>
                                                        <th scope="row" class="align-middle"><?php $myclass=$row["class_id"]; if($myclass == 1) { echo "I"; }else{ echo "II"; } ?></th>
                                                        <th scope="row" class="align-middle"><?php echo $final_pid; ?></th>
                                                        <th scope="row" class="align-middle"><?php echo $row["name"]; ?></th>
                                                        <th scope="row" class="align-middle"><?php echo $row["date"]; ?></th>
                                                        <th scope="row" class="align-middle"><?php echo $row["start_time"] . " - " . $row["end_time"]; ?></th>
                                                        <?php
                                                            date_default_timezone_set("Asia/Karachi");
                                                            $date = date("Y-m-d H:i");
                                                            $mytime = $row["date"] . " " . $row["start_time"];
                                                            $endtime = $row["date"] . " " . $row["end_time"];
                                                            if($date == $mytime) {
                                                        ?>
                                                            <td><button class="btn btn-success">Exam Started</button></a></td>
                                                        <?php
                                                            }
                                                            else if($date == $endtime) {
                                                        ?>
                                                            <td><button class="btn btn-danger">Exam ended</button></a></td>
                                                        <?php
                                                            }
                                                            else if($date > $endtime) {
                                                        ?>
                                                            <td><button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">Give Results</button></a></td>
                                                        <?php
                                                            }
                                                            else {
                                                        ?>
                                                            <td><button class="btn btn-warning">Exams</button></a></td>
                                                        <?php
                                                            }
                                                        ?>
                                                                      
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-xl">
                                                                <div class="modal-content bg-secondary">
                                                                    <form action="getresult.php" method="post" enctype="multipart/form-data">
                                                                        <div class="modal-header">
                                                                            <h4 class="modal-title" id="staticBackdropLabel">Add Results</h4>
                                                                            <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="bg-secondary  row rounded h-100 p-4">        
                                                                                
                                                                                <input type="hidden" name="examid" value="<?php echo $row["id"]; ?>">

                                                                                <div class="col-md-6 form-floating mb-3">
                                                                                    <select id="class" class="form-control bg-dark" name="class">
                                                                                        <option value="0">Select Class</option>
                                                                                        <?php
                                                                                            $sel_class = "SELECT * FROM `class`";
                                                                                            $result = mysqli_query($db,$sel_class);
                                                                                            $i = 0;
                                                                                            while($row = mysqli_fetch_array($result)) {
                                                                                                ?><option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option><?php
                                                                                            }
                                                                                        ?>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-6 form-floating mb-3">
                                                                                    <select id="myprograms" class="form-control bg-dark" name="program_course">
                                                                                        <option value="0">Select Program</option>
                                                                                        <!-- dynamic result -->
                                                                                    </select>
                                                                                </div>
                                                                                
                                                                                <div class="form-floating mb-3">
                                                                                    <select id="mysubs" class="form-control bg-dark" name="mysubs">
                                                                                        <option value="0">Select Subject</option>
                                                                                        <!-- dynamic result -->
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-floating mb-3">                                                        
                                                                                    <div class="table-responsive">
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
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Cancel</button>
                                                                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </tr>                                                          
                                        <?php
                                                }
                                            }
                                        ?>
                                    </tbody>
                                </table>                                
                            </div>
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
                url: "get_class_data.php",
                cache: false,
                type: "POST",
                data: {id : id},
                success: function(html){
                    $('#myprograms').html(html);
                }
            });
        
        });;

                
        $('#myprograms').on('change', function() {
            const id =$(this).find(":selected").val();
            $.ajax({
                url: "get_program.php",
                cache: false,
                type: "POST",
                data: {id : id},
                success: function(html){
                    $('#mysubs').html(html);
                }
            });

        });;

        
        $('#mysubs').on('change', function() {
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