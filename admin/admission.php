<?php
    session_start();
    if ($_SESSION["name"] == null) {
        header("Location: signin.php");
    }
    if ($_SESSION["mytype"] == 1) {
        ?>
            <Script>
                window.location.assign("../index.php");
            </Script>
        <?php
    }
    $db = mysqli_connect("localhost", "root", "", "evolution");

    if(isset($_POST["accept"])) {
        $gotin = $_POST["gotin"];
        $a_admp_form = "UPDATE `admission_form` SET `status`='In progress' WHERE `id` = $gotin";
        $adm_form_result = mysqli_query($db, $a_admp_form);        
        $feevouch = "ECS-" . rand();
        $adm_fee = "INSERT INTO `admission_fee`(`admission_form_id`, `Voucher`) VALUES ('$gotin','$feevouch')";
        $feeres = mysqli_query($db, $adm_fee);
        ?>
        <Script>
            window.location.assign("admission.php");
        </Script>
        <?php
    }

    if(isset($_POST["mystudentemail"])) {
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        $giveid = $_POST["give"];
        $g_sel = "SELECT * FROM `admission_form` WHERE `id` = $giveid";
        $g_res = mysqli_query($db, $g_sel);
        $g_row = mysqli_fetch_array($g_res);                                                                                                                                                                                                                                                        // profile	
        $g_stu = "INSERT INTO `std_account`(`name`, `father_name`, `email`, `phone`, `pass`, `dob`, `gender`, `address`, `cnic_bayform`, `citizenship`, `religion`, `program`, `profile`) VALUES ('$g_row[1]','$g_row[2]','$email','$g_row[4]','$pass','$g_row[5]','$g_row[6]','$g_row[7]','$g_row[8]','$g_row[9]','$g_row[10]','$g_row[11]','$g_row[15]')";
        $g_stu_res = mysqli_query($db, $g_stu);
        
        $g_admp_form = "UPDATE `admission_form` SET `status`='Accepted' WHERE `id` = $giveid";
        $gadm_form_result = mysqli_query($db, $g_admp_form);
        ?>
        <Script>
            window.location.assign("mailto:colinchristopher2001@gmail.com");
            window.location.assign("admission.php");
        </Script>
        <?php
    }

    if(isset($_POST["decline"])) {
        $gotin = $_POST["gotin"];
        $up_adm_form = "UPDATE `admission_form` SET `status`='Decline' WHERE `id` = $gotin";
        $adm_form_result = mysqli_query($db, $up_adm_form);        
        ?>
        <Script>
            window.location.assign("admission.php");
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
                    <a href="Accounts.php" class="nav-item nav-link active"><i class="fas fa-file-invoice"></i>All Accounts</a>
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


            <!-- Submitted Start -->
            <div class="container-fluid pt-4 px-4">
                <h1 class="text-center">Admission Forms</h1>

                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <h6>All Forms</h6>
                                <!-- Button trigger modal -->
                            </div>

                            <div class="table-responsive" style="overflow-x:auto; overflow-y:auto; max-height: 40vw;">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="col">#</th>
                                            <th scope="col">Profile</th>
                                            <th scope="col">Email</th>
                                            <th class="col">Status</th>
                                            <th scope="col" style="visibility: hidden;">Details</th>
                                            <th scope="col" style="visibility: hidden;">EDIT</th>
                                            <th scope="col" style="visibility: hidden;">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $sel_admission_form = "SELECT * FROM `admission_form` WHERE `status` = 'pending'";
                                            $admission_form_result = mysqli_query($db, $sel_admission_form);
                                            if(mysqli_num_rows($admission_form_result)) {
                                                $i = 0;
                                                while($row = mysqli_fetch_array($admission_form_result)) {                                                    
                                                    $i++;
                                        ?>
                                        <tr>
                                            <td class="align-middle" scope="row"><?php echo $i; ?></td>
                                            <td class="align-middle" type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo $row[1]; ?>">
                                                <img src="../assets/images/profile/<?php echo $row[15]; ?>" style="height: 3vw;" alt="">
                                            </td>
                                            <td class="align-middle"><?php echo $row[3]; ?></td>
                                            <td class="align-middle"><?php echo $row[16]; ?></td>
                                            <td class="align-middle"> <span type="button" data-bs-toggle="modal" data-bs-target="#e<?php echo $i; ?>" class="badge bg-light rounded-pill badge-sm">DETAILS</span></a> </td>
                                            <td class="align-middle">
                                                <form action="#" method="post">
                                                    <input type="hidden" name="gotin" value="<?php echo $row[0]; ?>">
                                                    <input type="submit" class="btn btn-info rounded-pill btn-sm" name="accept" value="ACCEPT">
                                                </form>
                                            </td>
                                            <td class="align-middle">
                                                <form action="#" method="post">
                                                    <input type="hidden" name="gotin" value="<?php echo $row[0]; ?>">
                                                    <input type="submit" class="btn btn-danger rounded-pill btn-sm" name="decline" value="DECLINE">
                                                </form>
                                            </td>
                                        </tr>               

                                        <!-- Form Modal -->
                                        <div class="modal fade" id="e<?php echo $i; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content bg-secondary">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="staticBackdropLabel">Form Details</h4>
                                                            <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="bg-secondary p-4 container">
                                                                <ul class="list-group list-group-flush bg-dark">
                                                                    <li class="list-group-item bg-dark text-center">
                                                                        <img src="../assets/images/profile/<?php echo $row[15]; ?>" style="height: 12vw;" alt="">
                                                                    </li>

                                                                    <li class="list-group-item bg-dark"><div class="row">
                                                                        <div class="fs-5 col-lg-2 border border-light"><b>Student Name : </b></div><div class="fs-5 col-lg-4 border border-light"><?php echo " " . $row[1]; ?></div>
                                                                        <div class="fs-5 col-lg-2 border border-light"><b>Father Name : </b></div><div class="fs-5 col-lg-4 border border-light"><?php echo " " . $row[2]; ?></div>
                                                                    </div></li>

                                                                    <li class="list-group-item bg-dark"><div class="row">
                                                                        <div class="fs-5 col-lg-2 border border-light"><b>Email : </b></div><div class="fs-5 col-lg-4 border border-light"><?php echo " " . $row[3]; ?></div>
                                                                        <div class="fs-5 col-lg-2 border border-light"><b>Phone : </b></div><div class="fs-5 col-lg-4 border border-light"><?php echo " " . $row[4]; ?></div>
                                                                    </div></li>

                                                                    <li class="list-group-item bg-dark"><div class="row">
                                                                        <div class="fs-5 col-lg-2 border border-light"><b>Date Of Birth : </b></div><div class="fs-5 col-lg-4 border border-light"><?php echo " " . $row[5]; ?></div>
                                                                        <div class="fs-5 col-lg-2 border border-light"><b>Gender : </b></div><div class="fs-5 col-lg-4 border border-light"><?php echo " " . $row[6]; ?></div>
                                                                    </div></li>

                                                                    <li class="list-group-item bg-dark"><div class="row">
                                                                        <div class="fs-5 col-lg-2 border border-light"><b>Address : </b></div><div class="fs-5 col-lg-10 border border-light"><?php echo " " . $row[7]; ?></div>
                                                                    </div></li>

                                                                    <li class="list-group-item bg-dark"><div class="row">
                                                                        <div class="fs-5 col-lg-2 border border-light"><b>CNIC/Bayform : </b></div><div class="fs-5 col-lg-4 border border-light"><?php echo " " . $row[8]; ?></div>
                                                                        <div class="fs-5 col-lg-2 border border-light"><b>Citizenship : </b></div><div class="fs-5 col-lg-4 border border-light"><?php echo " " . $row[9]; ?></div>
                                                                    </div></li>

                                                                    <li class="list-group-item bg-dark"><div class="row">
                                                                        <div class="fs-5 col-lg-2 border border-light"><b>Religion : </b></div><div class="fs-5 col-lg-4 border border-light"><?php echo " " . $row[10]; ?></div>
                                                                        <div class="fs-5 col-lg-2 border border-light"><b>Program : </b></div><div class="fs-5 col-lg-4 border border-light"><?php echo " " . $row[11]; ?></div>
                                                                    </div></li>

                                                                    <li class="list-group-item bg-dark"><div class="row">
                                                                        <div class="fs-5 col-lg-2 border border-light"><b>Marksheet : </b></div><div class="col-lg-4 border border-light"><a href="../assets/images/mksheet/<?php echo $row[12]; ?>" target="_blank" rel="noopener noreferrer"><span class="fs-5 ">Please click here </span><i class="fas fa-external-link-alt"></i></a></div>
                                                                        <div class="fs-5 col-lg-2 border border-light"><b>Provisional Certifacate : </b></div><div class="col-lg-4 border border-light"><a href="../assets/images/prov/<?php echo $row[13]; ?>" target="_blank" rel="noopener noreferrer"><span class="fs-5 ">Please click here </span><i class="fas fa-external-link-alt"></i></a></div>
                                                                    </div></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>

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
            <!-- Submitted End -->

            <!-- In Progress Start -->
            <div class="container-fluid pt-4 px-4">

                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <h6>Forms In Progress</h6>
                                <!-- Button trigger modal -->
                            </div>

                            <div class="table-responsive" style="overflow-x:auto; overflow-y:auto; max-height: 40vw;">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="col">#</th>
                                            <th scope="col">Profile</th>
                                            <th scope="col">Email</th>
                                            <th class="col">Status</th>
                                            <th scope="col" style="visibility: hidden;">Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $in_admission_form = "SELECT * FROM `admission_form` WHERE `status` = 'In progress'";
                                            $in_admission_form_result = mysqli_query($db, $in_admission_form);
                                            if(mysqli_num_rows($in_admission_form_result)) {
                                                $i = 0;
                                                while($row = mysqli_fetch_array($in_admission_form_result)) {                                                    
                                                    $i++;
                                        ?>
                                        <tr>
                                            <td class="align-middle" scope="row"><?php echo $i; ?></td>
                                            <td class="align-middle" type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo $row[1]; ?>">
                                                <img src="../assets/images/profile/<?php echo $row[15]; ?>" style="height: 3vw;" alt="">
                                            </td>
                                            <td class="align-middle"><?php echo $row[3]; ?></td>
                                            <td class="align-middle"><?php echo $row[16]; ?></td>
                                            <td class="align-middle"> <span type="button" data-bs-toggle="modal" data-bs-target="#acp<?php echo $i; ?>" class="badge bg-light rounded-pill badge-sm">DETAILS</span></a> </td>
                                        </tr>               

                                        <!-- Form Modal -->
                                        <div class="modal fade" id="acp<?php echo $i; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content bg-secondary">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="staticBackdropLabel">Form Details</h4>
                                                            <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="bg-secondary p-4 container">
                                                                <ul class="list-group list-group-flush bg-dark">
                                                                    <li class="list-group-item bg-dark text-center">
                                                                        <img src="../assets/images/profile/<?php echo $row[15]; ?>" style="height: 12vw;" alt="">
                                                                    </li>

                                                                    <li class="list-group-item bg-dark"><div class="row">
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Student Name : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[1]; ?></div>
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Father Name : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[2]; ?></div>
                                                                    </div></li>

                                                                    <li class="list-group-item bg-dark"><div class="row">
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Email : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[3]; ?></div>
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Phone : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[4]; ?></div>
                                                                    </div></li>

                                                                    <li class="list-group-item bg-dark"><div class="row">
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Date Of Birth : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[5]; ?></div>
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Gender : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[6]; ?></div>
                                                                    </div></li>

                                                                    <li class="list-group-item bg-dark"><div class="row">
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Address : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[7]; ?></div>
                                                                        <div class="fs-5 col-md-3 border border-light"><b>CNIC/Bayform : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[8]; ?></div>
                                                                    </div></li>

                                                                    <li class="list-group-item bg-dark"><div class="row">
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Citizenship : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[9]; ?></div>
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Religion : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[10]; ?></div>
                                                                    </div></li>

                                                                    <li class="list-group-item bg-dark"><div class="row">
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Program : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[11]; ?></div>
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Marksheet : </b></div><div class="col-md-3 border border-light"><a href="../assets/images/mksheet/<?php echo $row[12]; ?>" target="_blank" rel="noopener noreferrer"><span class="fs-5 ">Please click here </span><i class="fas fa-external-link-alt"></i></a></div>
                                                                    </div></li>

                                                                    <li class="list-group-item bg-dark"><div class="row">
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Provisional Certifacate : </b></div><div class="col-md-3 border border-light"><a href="../assets/images/prov/<?php echo $row[13]; ?>" target="_blank" rel="noopener noreferrer"><span class="fs-5 ">Please click here </span><i class="fas fa-external-link-alt"></i></a></div>
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Father's CNIC : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[14]; ?></div>
                                                                    </div></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>

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
            <!-- In Progress End -->

            <!-- On Hold Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <h6>On Hold Forms</h6>
                                <!-- Button trigger modal -->
                            </div>

                            <div class="table-responsive" style="overflow-x:auto; overflow-y:auto; max-height: 40vw;">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="col">#</th>
                                            <th scope="col">Profile</th>
                                            <th scope="col">Email</th>
                                            <th class="col">Status</th>
                                            <th scope="col" style="visibility: hidden;">Details</th>
                                            <th scope="col" style="visibility: hidden;">Accepted</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $h_admission_form = "SELECT * FROM `admission_form` WHERE `status` = 'On hold'";
                                            $h_admission_form_result = mysqli_query($db, $h_admission_form);
                                            if(mysqli_num_rows($h_admission_form_result)) {
                                                $i = 0;
                                                while($row = mysqli_fetch_array($h_admission_form_result)) {
                                                    $i++;
                                        ?>
                                        <tr>
                                            <td class="align-middle" scope="row"><?php echo $i; ?></td>
                                            <td class="align-middle" type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo $row[1]; ?>">
                                                <img src="../assets/images/profile/<?php echo $row[15]; ?>" style="height: 3vw;" alt="">
                                            </td>
                                            <td class="align-middle"><?php echo $row[3]; ?></td>
                                            <td class="align-middle"><?php echo $row[16]; ?></td>
                                            <td class="align-middle"> <span type="button" data-bs-toggle="modal" data-bs-target="#acp<?php echo $i; ?>" class="badge bg-light rounded-pill badge-sm">DETAILS</span></a> </td>
                                            <td class="align-middle"> <span type="button" data-bs-toggle="modal" data-bs-target="#email<?php echo $i; ?>" class="badge bg-success rounded-pill badge-sm">ACCEPT</span></a> </td>
                                        </tr>               

                                        <!-- Form Modal -->
                                        <div class="modal fade" id="acp<?php echo $i; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content bg-secondary">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="staticBackdropLabel">Form Details</h4>
                                                            <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="bg-secondary p-4 container">
                                                                <ul class="list-group list-group-flush bg-dark">
                                                                    <li class="list-group-item bg-dark text-center">
                                                                        <img src="../assets/images/profile/<?php echo $row[15]; ?>" style="height: 12vw;" alt="">
                                                                    </li>

                                                                    <li class="list-group-item bg-dark"><div class="row">
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Student Name : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[1]; ?></div>
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Father Name : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[2]; ?></div>
                                                                    </div></li>

                                                                    <li class="list-group-item bg-dark"><div class="row">
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Email : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[3]; ?></div>
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Phone : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[4]; ?></div>
                                                                    </div></li>

                                                                    <li class="list-group-item bg-dark"><div class="row">
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Date Of Birth : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[5]; ?></div>
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Gender : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[6]; ?></div>
                                                                    </div></li>

                                                                    <li class="list-group-item bg-dark"><div class="row">
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Address : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[7]; ?></div>
                                                                        <div class="fs-5 col-md-3 border border-light"><b>CNIC/Bayform : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[8]; ?></div>
                                                                    </div></li>

                                                                    <li class="list-group-item bg-dark"><div class="row">
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Citizenship : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[9]; ?></div>
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Religion : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[10]; ?></div>
                                                                    </div></li>

                                                                    <li class="list-group-item bg-dark"><div class="row">
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Program : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[11]; ?></div>
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Marksheet : </b></div><div class="col-md-3 border border-light"><a href="../assets/images/mksheet/<?php echo $row[12]; ?>" target="_blank" rel="noopener noreferrer"><span class="fs-5 ">Please click here </span><i class="fas fa-external-link-alt"></i></a></div>
                                                                    </div></li>

                                                                    <li class="list-group-item bg-dark"><div class="row">
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Provisional Certifacate : </b></div><div class="col-md-3 border border-light"><a href="../assets/images/prov/<?php echo $row[13]; ?>" target="_blank" rel="noopener noreferrer"><span class="fs-5 ">Please click here </span><i class="fas fa-external-link-alt"></i></a></div>
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Father's CNIC : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[14]; ?></div>
                                                                    </div></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Email Modal -->
                                        <div class="modal fade" id="email<?php echo $i; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content bg-secondary">
                                                    <form action="#" method="post" enctype="multipart/form-data">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="staticBackdropLabel">Account</h4>
                                                            <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="bg-secondary p-4">
                                                                <input type="hidden" name="give" value="<?php echo $row[0]; ?>">
                                                                <div class="form-floating mb-3">
                                                                    <input type="email" value="default@student.ecs.com" name="email" class="bg-dark form-control" id="floatingPassword" placeholder="Country">
                                                                    <label for="floatingPassword">Email Address</label>
                                                                </div> 

                                                                <div class="form-floating mb-3">
                                                                    <input type="text" value="Password" name="pass" class="form-control" id="floatingPassword" placeholder="Country">
                                                                    <label for="floatingPassword">Password</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Cancel</button>
                                                            <button type="submit" name="mystudentemail" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

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

            <!-- On Hold End -->

            <!-- Accepted Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <h6>Accepted Forms</h6>
                                <!-- Button trigger modal -->
                            </div>

                            <div class="table-responsive" style="overflow-x:auto; overflow-y:auto; max-height: 40vw;">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="col">#</th>
                                            <th scope="col">Profile</th>
                                            <th scope="col">Email</th>
                                            <th class="col">Status</th>
                                            <th scope="col" style="visibility: hidden;">Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $acc_admission_form = "SELECT * FROM `admission_form` WHERE `status` = 'Accepted'";
                                            $acc_admission_form_result = mysqli_query($db, $acc_admission_form);
                                            if(mysqli_num_rows($acc_admission_form_result)) {
                                                $i = 0;
                                                while($row = mysqli_fetch_array($acc_admission_form_result)) {                                                    
                                                    $i++;
                                        ?>
                                        <tr>
                                            <td class="align-middle" scope="row"><?php echo $i; ?></td>
                                            <td class="align-middle" type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo $row[1]; ?>">
                                                <img src="../assets/images/profile/<?php echo $row[15]; ?>" style="height: 3vw;" alt="">
                                            </td>
                                            <td class="align-middle"><?php echo $row[3]; ?></td>
                                            <td class="align-middle"><?php echo $row[16]; ?></td>
                                            <td class="align-middle"> <span type="button" data-bs-toggle="modal" data-bs-target="#acp<?php echo $i; ?>" class="badge bg-light rounded-pill badge-sm">DETAILS</span></a> </td>
                                        </tr>               

                                        <!-- Form Modal -->
                                        <div class="modal fade" id="acp<?php echo $i; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content bg-secondary">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="staticBackdropLabel">Form Details</h4>
                                                            <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="bg-secondary p-4 container">
                                                                <ul class="list-group list-group-flush bg-dark">
                                                                    <li class="list-group-item bg-dark text-center">
                                                                        <img src="../assets/images/profile/<?php echo $row[15]; ?>" style="height: 12vw;" alt="">
                                                                    </li>

                                                                    <li class="list-group-item bg-dark"><div class="row">
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Student Name : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[1]; ?></div>
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Father Name : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[2]; ?></div>
                                                                    </div></li>

                                                                    <li class="list-group-item bg-dark"><div class="row">
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Email : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[3]; ?></div>
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Phone : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[4]; ?></div>
                                                                    </div></li>

                                                                    <li class="list-group-item bg-dark"><div class="row">
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Date Of Birth : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[5]; ?></div>
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Gender : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[6]; ?></div>
                                                                    </div></li>

                                                                    <li class="list-group-item bg-dark"><div class="row">
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Address : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[7]; ?></div>
                                                                        <div class="fs-5 col-md-3 border border-light"><b>CNIC/Bayform : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[8]; ?></div>
                                                                    </div></li>

                                                                    <li class="list-group-item bg-dark"><div class="row">
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Citizenship : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[9]; ?></div>
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Religion : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[10]; ?></div>
                                                                    </div></li>

                                                                    <li class="list-group-item bg-dark"><div class="row">
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Program : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[11]; ?></div>
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Marksheet : </b></div><div class="col-md-3 border border-light"><a href="../assets/images/mksheet/<?php echo $row[12]; ?>" target="_blank" rel="noopener noreferrer"><span class="fs-5 ">Please click here </span><i class="fas fa-external-link-alt"></i></a></div>
                                                                    </div></li>

                                                                    <li class="list-group-item bg-dark"><div class="row">
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Provisional Certifacate : </b></div><div class="col-md-3 border border-light"><a href="../assets/images/prov/<?php echo $row[13]; ?>" target="_blank" rel="noopener noreferrer"><span class="fs-5 ">Please click here </span><i class="fas fa-external-link-alt"></i></a></div>
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Father's CNIC : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[14]; ?></div>
                                                                    </div></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>

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
            <!-- Accepted End -->

            <!-- Declined Start -->
            <div class="container-fluid pt-4 px-4">

                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <h6>Declined Forms</h6>
                                <!-- Button trigger modal -->
                            </div>

                            <div class="table-responsive" style="overflow-x:auto; overflow-y:auto; max-height: 40vw;">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="col">#</th>
                                            <th scope="col">Profile</th>
                                            <th scope="col">Email</th>
                                            <th class="col">Status</th>
                                            <th scope="col" style="visibility: hidden;">Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $dec_admission_form = "SELECT * FROM `admission_form` WHERE `status` = 'Decline'";
                                            $dec_admission_form_result = mysqli_query($db, $dec_admission_form);
                                            if(mysqli_num_rows($dec_admission_form_result)) {
                                                $i = 0;
                                                while($row = mysqli_fetch_array($dec_admission_form_result)) {                                                    
                                                    $i++;
                                        ?>
                                        <tr>
                                            <td class="align-middle" scope="row"><?php echo $i; ?></td>
                                            <td class="align-middle" type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo $row[1]; ?>">
                                                <img src="../assets/images/profile/<?php echo $row[15]; ?>" style="height: 3vw;" alt="">
                                            </td>
                                            <td class="align-middle"><?php echo $row[3]; ?></td>
                                            <td class="align-middle"><?php echo $row[16]; ?></td>
                                            <td class="align-middle"> <span type="button" data-bs-toggle="modal" data-bs-target="#dec<?php echo $i; ?>" class="badge bg-light rounded-pill badge-sm">DETAILS</span></a> </td>
                                        </tr>               

                                        <!-- Form Modal -->
                                        <div class="modal fade" id="dec<?php echo $i; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content bg-secondary">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="staticBackdropLabel">Form Details</h4>
                                                            <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="bg-secondary p-4 container">
                                                                <ul class="list-group list-group-flush bg-dark">
                                                                    <li class="list-group-item bg-dark text-center">
                                                                        <img src="../assets/images/profile/<?php echo $row[15]; ?>" style="height: 12vw;" alt="">
                                                                    </li>

                                                                    <li class="list-group-item bg-dark"><div class="row">
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Student Name : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[1]; ?></div>
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Father Name : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[2]; ?></div>
                                                                    </div></li>

                                                                    <li class="list-group-item bg-dark"><div class="row">
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Email : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[3]; ?></div>
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Phone : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[4]; ?></div>
                                                                    </div></li>

                                                                    <li class="list-group-item bg-dark"><div class="row">
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Date Of Birth : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[5]; ?></div>
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Gender : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[6]; ?></div>
                                                                    </div></li>

                                                                    <li class="list-group-item bg-dark"><div class="row">
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Address : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[7]; ?></div>
                                                                        <div class="fs-5 col-md-3 border border-light"><b>CNIC/Bayform : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[8]; ?></div>
                                                                    </div></li>

                                                                    <li class="list-group-item bg-dark"><div class="row">
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Citizenship : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[9]; ?></div>
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Religion : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[10]; ?></div>
                                                                    </div></li>

                                                                    <li class="list-group-item bg-dark"><div class="row">
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Program : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[11]; ?></div>
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Marksheet : </b></div><div class="col-md-3 border border-light"><a href="../assets/images/mksheet/<?php echo $row[12]; ?>" target="_blank" rel="noopener noreferrer"><span class="fs-5 ">Please click here </span><i class="fas fa-external-link-alt"></i></a></div>
                                                                    </div></li>

                                                                    <li class="list-group-item bg-dark"><div class="row">
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Provisional Certifacate : </b></div><div class="col-md-3 border border-light"><a href="../assets/images/prov/<?php echo $row[13]; ?>" target="_blank" rel="noopener noreferrer"><span class="fs-5 ">Please click here </span><i class="fas fa-external-link-alt"></i></a></div>
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Father's CNIC : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[14]; ?></div>
                                                                    </div></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>

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
            <!-- Declined End -->

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