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
                <?php
                    $id = $_GET["id"];
                    $student = "SELECT * FROM `std_account` WHERE `id` = $id";
                    $student_result = mysqli_query($db, $student);
                    $student_row = mysqli_fetch_array($student_result);
                    $program = $student_row["program"];
                ?>
                <center><img src="profile/<?php echo $student_row["profile"]; ?>" style="height: 15vw; width: 15vw; outline:5px solid grey;" class="rounded-circle" alt=""></center>
                <h1 class="text-center"><?php echo $student_row["name"]; ?></h1>
                <p class="text-center text-white mb-5"><?php echo $program; ?> Group</p>
                <div class="row g-4">
                    <!-- English All Start -->
                    <div class="col-6 mb-4">
                        <div class="bg-secondary rounded h-100 p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <h6>English Results</h6>
                            </div>
                            <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Test</th>
                                            <th scope="col">Marks</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $eng = "SELECT * FROM `english` WHERE `student_id` = $id ORDER BY `id` DESC";
                                            $eng_result = mysqli_query($db, $eng);
                                            if(mysqli_num_rows($eng_result)) {
                                                $engcount = "SELECT COUNT(`id`) FROM `english` WHERE `student_id` = $id";
                                                $engcount_result = mysqli_query($db, $engcount);
                                                $engcount_row = mysqli_fetch_array($engcount_result);
                                                $eng_test = $engcount_row["COUNT(`id`)"] + 1;
                                                while($eng_row = mysqli_fetch_array($eng_result)) {
                                                    $eng_test--;
                                                    ?>
                                                    <tr>
                                                        <td><?php echo "Test#" . $eng_test; ?></td>
                                                        <td><?php echo $eng_row["obt_mks"] . "/" . $eng_row["total_mks"]; ?></td>
                                                        <td><?php echo $eng_row["status"]; ?></td>
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
                    <!-- English All End -->

                    <!-- Urdu All Start -->
                    <div class="col-6 mb-4">
                        <div class="bg-secondary rounded h-100 p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <h6>Urdu Results</h6>
                            </div>
                            <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Test</th>
                                            <th scope="col">Marks</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $urd = "SELECT * FROM `urdu` WHERE `student_id` = $id ORDER BY `id` DESC";
                                            $urd_result = mysqli_query($db, $urd);
                                            if(mysqli_num_rows($urd_result)) {
                                                $urdcount = "SELECT COUNT(`id`) FROM `urdu` WHERE `student_id` = $id";
                                                $urdcount_result = mysqli_query($db, $urdcount);
                                                $urdcount_row = mysqli_fetch_array($urdcount_result);
                                                $urd_test = $urdcount_row["COUNT(`id`)"] + 1;
                                                while($urd_row = mysqli_fetch_array($urd_result)) {
                                                    $urd_test--;
                                                    ?>
                                                    <tr>
                                                        <td><?php echo "Test#" . $urd_test; ?></td>
                                                        <td><?php echo $urd_row["obt_mks"] . "/" . $urd_row["total_mks"]; ?></td>
                                                        <td><?php echo $urd_row["status"]; ?></td>
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
                    <!-- Urdu All End -->

                    <!-- Islamiat/Religion All Start -->
                    <div class="col-6 mb-4">
                        <div class="bg-secondary rounded h-100 p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <h6>Islamiat/Religion Results</h6>
                            </div>
                            <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Test</th>
                                            <th scope="col">Marks</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $rel = "SELECT * FROM `islamiat` WHERE `student_id` = $id ORDER BY `id` DESC";
                                            $rel_result = mysqli_query($db, $rel);
                                            if(mysqli_num_rows($rel_result)) {
                                                $relcount = "SELECT COUNT(`id`) FROM `islamiat` WHERE `student_id` = $id";
                                                $relcount_result = mysqli_query($db, $relcount);
                                                $relcount_row = mysqli_fetch_array($relcount_result);
                                                $rel_test = $relcount_row["COUNT(`id`)"] + 1;
                                                while($rel_row = mysqli_fetch_array($rel_result)) {
                                                    $rel_test--;
                                                    ?>
                                                    <tr>
                                                        <td><?php echo "Test#" . $rel_test; ?></td>
                                                        <td><?php echo $rel_row["obt_mks"] . "/" . $rel_row["total_mks"]; ?></td>
                                                        <td><?php echo $rel_row["status"]; ?></td>
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
                    <!-- Islamiat/Religion All End -->

                    <?php
                        if($program == "Pre-Engineering") {
                    ?>
                            <!-- Chemistry Pre-Engineering Start -->
                            <div class="col-6 mb-4">
                                <div class="bg-secondary rounded h-100 p-4">
                                    <div class="d-flex justify-content-between mb-4">
                                        <h6>Chemistry Results</h6>
                                    </div>
                                    <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Test</th>
                                                    <th scope="col">Marks</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $chem = "SELECT * FROM `chemistry` WHERE `student_id` = $id ORDER BY `id` DESC";
                                                    $chem_result = mysqli_query($db, $chem);
                                                    if(mysqli_num_rows($chem_result)) {
                                                        $chemcount = "SELECT COUNT(`id`) FROM `chemistry` WHERE `student_id` = $id";
                                                        $chemcount_result = mysqli_query($db, $chemcount);
                                                        $chemcount_row = mysqli_fetch_array($chemcount_result);
                                                        $chem_test = $chemcount_row["COUNT(`id`)"] + 1;
                                                        while($chem_row = mysqli_fetch_array($chem_result)) {
                                                            $chem_test--;
                                                            ?>
                                                            <tr>
                                                                <td><?php echo "Test#" . $chem_test; ?></td>
                                                                <td><?php echo $chem_row["obt_mks"] . "/" . $chem_row["total_mks"]; ?></td>
                                                                <td><?php echo $chem_row["status"]; ?></td>
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
                            <!-- Chemistry Pre-Engineering End -->
                    <?php
                        }
                        else if($program == "Pre-Medical") {
                    ?>
                            <!-- Chemistry Pre-Medical Start -->
                            <div class="col-6 mb-4">
                                <div class="bg-secondary rounded h-100 p-4">
                                    <div class="d-flex justify-content-between mb-4">
                                        <h6>Chemistry Results</h6>
                                    </div>
                                    <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Test</th>
                                                    <th scope="col">Marks</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $chem = "SELECT * FROM `chemistry` WHERE `student_id` = $id ORDER BY `id` DESC";
                                                    $chem_result = mysqli_query($db, $chem);
                                                    if(mysqli_num_rows($chem_result)) {
                                                        $chemcount = "SELECT COUNT(`id`) FROM `chemistry` WHERE `student_id` = $id";
                                                        $chemcount_result = mysqli_query($db, $chemcount);
                                                        $chemcount_row = mysqli_fetch_array($chemcount_result);
                                                        $chem_test = $chemcount_row["COUNT(`id`)"] + 1;
                                                        while($chem_row = mysqli_fetch_array($chem_result)) {
                                                            $chem_test--;
                                                            ?>
                                                            <tr>
                                                                <td><?php echo "Test#" . $chem_test; ?></td>
                                                                <td><?php echo $chem_row["obt_mks"] . "/" . $chem_row["total_mks"]; ?></td>
                                                                <td><?php echo $chem_row["status"]; ?></td>
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
                            <!-- Chemistry Pre-Medical End -->
                    <?php
                        }
                    ?>

                    <?php
                        if($program == "Pre-Engineering") {
                    ?>
                            <!-- Physic Pre-Engineering Start -->
                            <div class="col-6 mb-4">
                                <div class="bg-secondary rounded h-100 p-4">
                                    <div class="d-flex justify-content-between mb-4">
                                        <h6>Physic Results</h6>
                                    </div>
                                    <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Test</th>
                                                    <th scope="col">Marks</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $phy = "SELECT * FROM `physic` WHERE `student_id` = $id ORDER BY `id` DESC";
                                                    $phy_result = mysqli_query($db, $phy);
                                                    if(mysqli_num_rows($phy_result)) {
                                                        $phycount = "SELECT COUNT(`id`) FROM `physic` WHERE `student_id` = $id";
                                                        $phycount_result = mysqli_query($db, $phycount);
                                                        $phycount_row = mysqli_fetch_array($phycount_result);
                                                        $phy_test = $phycount_row["COUNT(`id`)"] + 1;
                                                        while($phy_row = mysqli_fetch_array($phy_result)) {
                                                            $phy_test--;
                                                            ?>
                                                            <tr>
                                                                <td><?php echo "Test#" . $phy_test; ?></td>
                                                                <td><?php echo $phy_row["obt_mks"] . "/" . $phy_row["total_mks"]; ?></td>
                                                                <td><?php echo $phy_row["status"]; ?></td>
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
                            <!-- Physic Pre-Engineering End -->
                    <?php
                        }
                        else if($program == "Pre-Medical") {
                    ?>
                            <!-- Physic Pre-Medical Start -->
                            <div class="col-6 mb-4">
                                <div class="bg-secondary rounded h-100 p-4">
                                    <div class="d-flex justify-content-between mb-4">
                                        <h6>Physic Results</h6>
                                    </div>
                                    <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Test</th>
                                                    <th scope="col">Marks</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $phy = "SELECT * FROM `physic` WHERE `student_id` = $id ORDER BY `id` DESC";
                                                    $phy_result = mysqli_query($db, $phy);
                                                    if(mysqli_num_rows($phy_result)) {
                                                        $phycount = "SELECT COUNT(`id`) FROM `physic` WHERE `student_id` = $id";
                                                        $phycount_result = mysqli_query($db, $phycount);
                                                        $phycount_row = mysqli_fetch_array($phycount_result);
                                                        $phy_test = $phycount_row["COUNT(`id`)"] + 1;
                                                        while($phy_row = mysqli_fetch_array($phy_result)) {
                                                            $phy_test--;
                                                            ?>
                                                            <tr>
                                                                <td><?php echo "Test#" . $phy_test; ?></td>
                                                                <td><?php echo $phy_row["obt_mks"] . "/" . $phy_row["total_mks"]; ?></td>
                                                                <td><?php echo $phy_row["status"]; ?></td>
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
                            <!-- Physic Pre-Medical End -->
                    <?php
                        }
                        else if($program == "Computer Science") {
                    ?>
                            <!-- Physic Computer Science Start -->
                            <div class="col-6 mb-4">
                                <div class="bg-secondary rounded h-100 p-4">
                                    <div class="d-flex justify-content-between mb-4">
                                        <h6>Physic Results</h6>
                                    </div>
                                    <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Test</th>
                                                    <th scope="col">Marks</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $phy = "SELECT * FROM `physic` WHERE `student_id` = $id ORDER BY `id` DESC";
                                                    $phy_result = mysqli_query($db, $phy);
                                                    if(mysqli_num_rows($phy_result)) {
                                                        $phycount = "SELECT COUNT(`id`) FROM `physic` WHERE `student_id` = $id";
                                                        $phycount_result = mysqli_query($db, $phycount);
                                                        $phycount_row = mysqli_fetch_array($phycount_result);
                                                        $phy_test = $phycount_row["COUNT(`id`)"] + 1;
                                                        while($phy_row = mysqli_fetch_array($phy_result)) {
                                                            $phy_test--;
                                                            ?>
                                                            <tr>
                                                                <td><?php echo "Test#" . $phy_test; ?></td>
                                                                <td><?php echo $phy_row["obt_mks"] . "/" . $phy_row["total_mks"]; ?></td>
                                                                <td><?php echo $phy_row["status"]; ?></td>
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
                            <!-- Physic Computer Science End -->
                    <?php
                        }
                    ?>

                    <?php
                        if($program == "Pre-Engineering") {
                    ?>
                            <!-- Math Pre-Engineering Start -->
                            <div class="col-6 mb-4">
                                <div class="bg-secondary rounded h-100 p-4">
                                    <div class="d-flex justify-content-between mb-4">
                                        <h6>Math Results</h6>
                                    </div>
                                    <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Test</th>
                                                    <th scope="col">Marks</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $mth = "SELECT * FROM `math` WHERE `student_id` = $id ORDER BY `id` DESC";
                                                    $mth_result = mysqli_query($db, $mth);
                                                    if(mysqli_num_rows($mth_result)) {
                                                        $mthcount = "SELECT COUNT(`id`) FROM `math` WHERE `student_id` = $id";
                                                        $mthcount_result = mysqli_query($db, $mthcount);
                                                        $mthcount_row = mysqli_fetch_array($mthcount_result);
                                                        $mth_test = $mthcount_row["COUNT(`id`)"] + 1;
                                                        while($mth_row = mysqli_fetch_array($mth_result)) {
                                                            $mth_test--;
                                                            ?>
                                                            <tr>
                                                                <td><?php echo "Test#" . $mth_test; ?></td>
                                                                <td><?php echo $mth_row["obt_mks"] . "/" . $mth_row["total_mks"]; ?></td>
                                                                <td><?php echo $mth_row["status"]; ?></td>
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
                            <!-- Math Pre-Engineering End -->
                    <?php
                        }
                        else if($program == "Computer Science") {
                    ?>
                            <!-- Math Computer Science Start -->
                            <div class="col-6 mb-4">
                                <div class="bg-secondary rounded h-100 p-4">
                                    <div class="d-flex justify-content-between mb-4">
                                        <h6>Math Results</h6>
                                    </div>
                                    <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Test</th>
                                                    <th scope="col">Marks</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $mth = "SELECT * FROM `math` WHERE `student_id` = $id ORDER BY `id` DESC";
                                                    $mth_result = mysqli_query($db, $mth);
                                                    if(mysqli_num_rows($mth_result)) {
                                                        $mthcount = "SELECT COUNT(`id`) FROM `math` WHERE `student_id` = $id";
                                                        $mthcount_result = mysqli_query($db, $mthcount);
                                                        $mthcount_row = mysqli_fetch_array($mthcount_result);
                                                        $mth_test = $mthcount_row["COUNT(`id`)"] + 1;
                                                        while($mth_row = mysqli_fetch_array($mth_result)) {
                                                            $mth_test--;
                                                            ?>
                                                            <tr>
                                                                <td><?php echo "Test#" . $mth_test; ?></td>
                                                                <td><?php echo $mth_row["obt_mks"] . "/" . $mth_row["total_mks"]; ?></td>
                                                                <td><?php echo $mth_row["status"]; ?></td>
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
                            <!-- Math Computer Science End -->
                    <?php
                        }
                        else if($program == "Commerce") {
                    ?>
                            <!-- Math Commerce Start -->
                            <div class="col-6 mb-4">
                                <div class="bg-secondary rounded h-100 p-4">
                                    <div class="d-flex justify-content-between mb-4">
                                        <h6>Business Math Results</h6>
                                    </div>
                                    <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Test</th>
                                                    <th scope="col">Marks</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $mth = "SELECT * FROM `math` WHERE `student_id` = $id ORDER BY `id` DESC";
                                                    $mth_result = mysqli_query($db, $mth);
                                                    if(mysqli_num_rows($mth_result)) {
                                                        $mthcount = "SELECT COUNT(`id`) FROM `math` WHERE `student_id` = $id";
                                                        $mthcount_result = mysqli_query($db, $mthcount);
                                                        $mthcount_row = mysqli_fetch_array($mthcount_result);
                                                        $mth_test = $mthcount_row["COUNT(`id`)"] + 1;
                                                        while($mth_row = mysqli_fetch_array($mth_result)) {
                                                            $mth_test--;
                                                            ?>
                                                            <tr>
                                                                <td><?php echo "Test#" . $mth_test; ?></td>
                                                                <td><?php echo $mth_row["obt_mks"] . "/" . $mth_row["total_mks"]; ?></td>
                                                                <td><?php echo $mth_row["status"]; ?></td>
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
                            <!-- Math Commerce End -->
                    <?php
                        }
                    ?>

                    <?php
                        if($program == "Pre-Medical") {
                    ?>
                            <!-- Zoology Pre-Medical Start -->
                            <div class="col-6 mb-4">
                                <div class="bg-secondary rounded h-100 p-4">
                                    <div class="d-flex justify-content-between mb-4">
                                        <h6>Zoology Results</h6>
                                    </div>
                                    <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Test</th>
                                                    <th scope="col">Marks</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $zoo = "SELECT * FROM `zoology` WHERE `student_id` = $id ORDER BY `id` DESC";
                                                    $zoo_result = mysqli_query($db, $zoo);
                                                    if(mysqli_num_rows($zoo_result)) {
                                                        $zoocount = "SELECT COUNT(`id`) FROM `zoology` WHERE `student_id` = $id";
                                                        $zoocount_result = mysqli_query($db, $zoocount);
                                                        $zoocount_row = mysqli_fetch_array($zoocount_result);
                                                        $zoo_test = $zoocount_row["COUNT(`id`)"] + 1;
                                                        while($zoo_row = mysqli_fetch_array($zoo_result)) {
                                                            $zoo_test--;
                                                            ?>
                                                            <tr>
                                                                <td><?php echo "Test#" . $zoo_test; ?></td>
                                                                <td><?php echo $zoo_row["obt_mks"] . "/" . $zoo_row["total_mks"]; ?></td>
                                                                <td><?php echo $zoo_row["status"]; ?></td>
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
                            <!-- Zoology Pre-Medical End -->
                    <?php
                        }
                    ?>

                    <?php
                        if($program == "Pre-Medical") {
                    ?>
                            <!-- Botany Pre-Medical Start -->
                            <div class="col-6 mb-4">
                                <div class="bg-secondary rounded h-100 p-4">
                                    <div class="d-flex justify-content-between mb-4">
                                        <h6>Botany Results</h6>
                                    </div>
                                    <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Test</th>
                                                    <th scope="col">Marks</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $bot = "SELECT * FROM `botany` WHERE `student_id` = $id ORDER BY `id` DESC";
                                                    $bot_result = mysqli_query($db, $bot);
                                                    if(mysqli_num_rows($bot_result)) {
                                                        $botcount = "SELECT COUNT(`id`) FROM `botany` WHERE `student_id` = $id";
                                                        $botcount_result = mysqli_query($db, $botcount);
                                                        $botcount_row = mysqli_fetch_array($botcount_result);
                                                        $bot_test = $botcount_row["COUNT(`id`)"] + 1;
                                                        while($bot_row = mysqli_fetch_array($bot_result)) {
                                                            $bot_test--;
                                                            ?>
                                                            <tr>
                                                                <td><?php echo "Test#" . $bot_test; ?></td>
                                                                <td><?php echo $bot_row["obt_mks"] . "/" . $bot_row["total_mks"]; ?></td>
                                                                <td><?php echo $bot_row["status"]; ?></td>
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
                            <!-- Botany Pre-Medical End -->
                    <?php
                        }
                    ?>

                    <?php
                        if($program == "Computer Science") {
                    ?>
                    <!-- Computer Science Computer-Science Start -->
                    <div class="col-6 mb-4">
                        <div class="bg-secondary rounded h-100 p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <h6>Computer Science Results</h6>
                            </div>
                            <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Test</th>
                                            <th scope="col">Marks</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $comp = "SELECT * FROM `computer_science` WHERE `student_id` = $id ORDER BY `id` DESC";
                                            $comp_result = mysqli_query($db, $comp);
                                            if(mysqli_num_rows($comp_result)) {
                                                $compcount = "SELECT COUNT(`id`) FROM `computer_science` WHERE `student_id` = $id";
                                                $compcount_result = mysqli_query($db, $compcount);
                                                $compcount_row = mysqli_fetch_array($compcount_result);
                                                $comp_test = $compcount_row["COUNT(`id`)"] + 1;
                                                while($comp_row = mysqli_fetch_array($comp_result)) {
                                                    $comp_test--;
                                                    ?>
                                                    <tr>
                                                        <td><?php echo "Test#" . $comp_test; ?></td>
                                                        <td><?php echo $comp_row["obt_mks"] . "/" . $comp_row["total_mks"]; ?></td>
                                                        <td><?php echo $comp_row["status"]; ?></td>
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
                    <!-- Computer Science Computer-Science End -->

                    <div class="col-6 mb-4">
                        <div class="bg-secondary rounded h-100 p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <h6>English Results</h6>
                            </div>
                            <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Test</th>
                                            <th scope="col">Marks</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $eng = "SELECT * FROM `english` WHERE `student_id` = $id ORDER BY `id` DESC";
                                            $eng_result = mysqli_query($db, $eng);
                                            if(mysqli_num_rows($eng_result)) {
                                                $engcount = "SELECT COUNT(`id`) FROM `english` WHERE `student_id` = $id";
                                                $engcount_result = mysqli_query($db, $engcount);
                                                $engcount_row = mysqli_fetch_array($engcount_result);
                                                $eng_test = $engcount_row["COUNT(`id`)"] + 1;
                                                while($eng_row = mysqli_fetch_array($eng_result)) {
                                                    $eng_test--;
                                                    ?>
                                                    <tr>
                                                        <td><?php echo "Test#" . $eng_test; ?></td>
                                                        <td><?php echo $eng_row["obt_mks"] . "/" . $eng_row["total_mks"]; ?></td>
                                                        <td><?php echo $eng_row["status"]; ?></td>
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

                    <div class="col-6 mb-4">
                        <div class="bg-secondary rounded h-100 p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <h6>English Results</h6>
                            </div>
                            <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Test</th>
                                            <th scope="col">Marks</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $eng = "SELECT * FROM `english` WHERE `student_id` = $id ORDER BY `id` DESC";
                                            $eng_result = mysqli_query($db, $eng);
                                            if(mysqli_num_rows($eng_result)) {
                                                $engcount = "SELECT COUNT(`id`) FROM `english` WHERE `student_id` = $id";
                                                $engcount_result = mysqli_query($db, $engcount);
                                                $engcount_row = mysqli_fetch_array($engcount_result);
                                                $eng_test = $engcount_row["COUNT(`id`)"] + 1;
                                                while($eng_row = mysqli_fetch_array($eng_result)) {
                                                    $eng_test--;
                                                    ?>
                                                    <tr>
                                                        <td><?php echo "Test#" . $eng_test; ?></td>
                                                        <td><?php echo $eng_row["obt_mks"] . "/" . $eng_row["total_mks"]; ?></td>
                                                        <td><?php echo $eng_row["status"]; ?></td>
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

                    <div class="col-6 mb-4">
                        <div class="bg-secondary rounded h-100 p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <h6>English Results</h6>
                            </div>
                            <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Test</th>
                                            <th scope="col">Marks</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $eng = "SELECT * FROM `english` WHERE `student_id` = $id ORDER BY `id` DESC";
                                            $eng_result = mysqli_query($db, $eng);
                                            if(mysqli_num_rows($eng_result)) {
                                                $engcount = "SELECT COUNT(`id`) FROM `english` WHERE `student_id` = $id";
                                                $engcount_result = mysqli_query($db, $engcount);
                                                $engcount_row = mysqli_fetch_array($engcount_result);
                                                $eng_test = $engcount_row["COUNT(`id`)"] + 1;
                                                while($eng_row = mysqli_fetch_array($eng_result)) {
                                                    $eng_test--;
                                                    ?>
                                                    <tr>
                                                        <td><?php echo "Test#" . $eng_test; ?></td>
                                                        <td><?php echo $eng_row["obt_mks"] . "/" . $eng_row["total_mks"]; ?></td>
                                                        <td><?php echo $eng_row["status"]; ?></td>
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

                    <div class="col-6 mb-4">
                        <div class="bg-secondary rounded h-100 p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <h6>English Results</h6>
                            </div>
                            <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Test</th>
                                            <th scope="col">Marks</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $eng = "SELECT * FROM `english` WHERE `student_id` = $id ORDER BY `id` DESC";
                                            $eng_result = mysqli_query($db, $eng);
                                            if(mysqli_num_rows($eng_result)) {
                                                $engcount = "SELECT COUNT(`id`) FROM `english` WHERE `student_id` = $id";
                                                $engcount_result = mysqli_query($db, $engcount);
                                                $engcount_row = mysqli_fetch_array($engcount_result);
                                                $eng_test = $engcount_row["COUNT(`id`)"] + 1;
                                                while($eng_row = mysqli_fetch_array($eng_result)) {
                                                    $eng_test--;
                                                    ?>
                                                    <tr>
                                                        <td><?php echo "Test#" . $eng_test; ?></td>
                                                        <td><?php echo $eng_row["obt_mks"] . "/" . $eng_row["total_mks"]; ?></td>
                                                        <td><?php echo $eng_row["status"]; ?></td>
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

                    <div class="col-6 mb-4">
                        <div class="bg-secondary rounded h-100 p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <h6>English Results</h6>
                            </div>
                            <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Test</th>
                                            <th scope="col">Marks</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $eng = "SELECT * FROM `english` WHERE `student_id` = $id ORDER BY `id` DESC";
                                            $eng_result = mysqli_query($db, $eng);
                                            if(mysqli_num_rows($eng_result)) {
                                                $engcount = "SELECT COUNT(`id`) FROM `english` WHERE `student_id` = $id";
                                                $engcount_result = mysqli_query($db, $engcount);
                                                $engcount_row = mysqli_fetch_array($engcount_result);
                                                $eng_test = $engcount_row["COUNT(`id`)"] + 1;
                                                while($eng_row = mysqli_fetch_array($eng_result)) {
                                                    $eng_test--;
                                                    ?>
                                                    <tr>
                                                        <td><?php echo "Test#" . $eng_test; ?></td>
                                                        <td><?php echo $eng_row["obt_mks"] . "/" . $eng_row["total_mks"]; ?></td>
                                                        <td><?php echo $eng_row["status"]; ?></td>
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

                    <div class="col-6 mb-4">
                        <div class="bg-secondary rounded h-100 p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <h6>English Results</h6>
                            </div>
                            <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Test</th>
                                            <th scope="col">Marks</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $eng = "SELECT * FROM `english` WHERE `student_id` = $id ORDER BY `id` DESC";
                                            $eng_result = mysqli_query($db, $eng);
                                            if(mysqli_num_rows($eng_result)) {
                                                $engcount = "SELECT COUNT(`id`) FROM `english` WHERE `student_id` = $id";
                                                $engcount_result = mysqli_query($db, $engcount);
                                                $engcount_row = mysqli_fetch_array($engcount_result);
                                                $eng_test = $engcount_row["COUNT(`id`)"] + 1;
                                                while($eng_row = mysqli_fetch_array($eng_result)) {
                                                    $eng_test--;
                                                    ?>
                                                    <tr>
                                                        <td><?php echo "Test#" . $eng_test; ?></td>
                                                        <td><?php echo $eng_row["obt_mks"] . "/" . $eng_row["total_mks"]; ?></td>
                                                        <td><?php echo $eng_row["status"]; ?></td>
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
</body>

</html>