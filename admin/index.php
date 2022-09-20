<?php
    include("connection/connection.php");
    if (isset($_SESSION["name"]) == null) {
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
                        <a href="index.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>                    
                        <?php if($_SESSION["mytype"] == 0) { ?> <a href="add_administrator.php" class="nav-item nav-link"><i class="fas fa-file-invoice"></i>Add Administrator</a> <?php } ?>
                        <a href="Accounts.php" class="nav-item nav-link"><i class="fas fa-file-invoice"></i>All Accounts</a>
                        <?php if($_SESSION["mytype"] != 3) { ?> <a href="admission.php" class="nav-item nav-link"><i class="fas fa-file-invoice"></i>Admission Forms</a> <?php } ?>
                        <a href="exam.php" class="nav-item nav-link"><i class="fas fa-file-invoice"></i>Exams</a>
                        <a href="examination.php" class="nav-item nav-link"><i class="fas fa-file-invoice"></i>Mid/Final</a>
                        <div class="dropdown nav-item nav-link" id="pages">
                            <a class="dropdown-toggle text-light" href="#" role="button" id="dropdownMenuLink2" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-file-invoice"></i>Tests
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
                <h1 class="text-center">Wellcome To Dashboard</h1>
                <div class="row g-4">
                    <img src="profile/<?php echo $_SESSION["profile"]; ?>" class="col-sm-12 col-xl-6" alt="">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Profile</h6>
                            <div style="overflow-x:auto;overflow-y:auto;">
                            <table class="table table-dark">
                                <tbody>
                                    <?php
                                        $id = $_SESSION["myuserid"];
                                        $x = $_SESSION["account"];
                                        switch ($x) {
                                            case 'Admin':
                                                $sel = "SELECT * FROM `users` WHERE `id` = $id";
                                                $chresult = mysqli_query($db, $sel);
                                                break;
                                            
                                            case 'Administrator': 
                                                $sel = "SELECT * FROM `administrator` WHERE `id` = $id";
                                                $chresult = mysqli_query($db, $sel);
                                                break;
                                                
                                            case 'Teacher':
                                                $sel = "SELECT * FROM `teachers` WHERE `id` = $id";
                                                $chresult = mysqli_query($db, $sel);
                                                break;

                                            default:
                                                $sel = "SELECT * FROM `users` WHERE `id` = $id";
                                                $chresult = mysqli_query($db, $sel);
                                                break;
                                        }

                                        // if(mysqli_num_rows($result)) {
                                            while($row = mysqli_fetch_array($chresult)) {                                                
                                    ?>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <td><?php echo $row[1]; ?></td>
                                    </tr> 
                                    <tr>
                                        <th scope="col">Email</th>
                                        <td><?php echo $row[2]; ?></td>
                                    </tr> 
                                    <tr>
                                        <th scope="col">Phone</th>
                                        <td><?php echo $row[3]; ?></td>
                                    </tr> 
                                    <tr>
                                        <th scope="col">CNIC</th>
                                        <td><?php echo $row[7]; ?></td>
                                    </tr> 
                                    <tr>
                                        <th scope="col">Gender</th>
                                        <td><?php echo $row[8]; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                            <a href="current_user.php?id=<?php echo $row[0]; ?>"><button type="button" class="btn btn-outline-success">Edit</button></a>
                            <?php                                        
                                    }
                                // }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Profile End -->

            <!-- All Complaints Start -->            
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">                    
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Contact</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Subject</th>
                                            <th scope="col">Message</th>
                                            <th scope="col" style="visibility: hidden;">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            if(isset($_POST["submit2"])) {
                                                $kk = $_POST["kk"];
                                                $del = "DELETE FROM `contact-us` WHERE `id` = $kk";
                                                $del_result = mysqli_query($db, $del);
                                                ?>
                                                <Script>
                                                    window.location.assign("./index.php");
                                                </Script>
                                                <?php
                                            }

                                            $cmp = "SELECT * FROM `contact-us`";
                                            $result3 = mysqli_query($db, $cmp);
                                            $cp = mysqli_num_rows($result3);
                                            if($cp) {
                                                $i = 0;
                                                while($row3 = mysqli_fetch_array($result3)) {                                                    
                                                    $i++;
                                        ?>
                                        <tr>
                                            <th class="align-middle" scope="row"><?php echo $i; ?></th>
                                            <td class="align-middle"><?php echo $row3[1]; ?></td>
                                            <td class="align-middle"><?php echo $row3[2]; ?></td>
                                            <td class="align-middle"><?php echo $row3[3]; ?></td>
                                            <td class="align-middle"><span type="button" data-bs-toggle="modal" data-bs-target="#message<?php echo $i; ?>" class="badge badge-sm bg-success">OPEN</span></td>     
                                            <td class="align-middle"><span type="button" data-bs-toggle="modal" data-bs-target="#k<?php echo $i; ?>" class="badge bg-danger rounded-pill badge-sm">DELETE</span> </td>
                                        </tr>

                                        <div class="modal fade" id="message<?php echo $i; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content bg-secondary">                                                    
                                                    <div class="modal-header">
                                                        <h3>Message</h3>
                                                        <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="bg-secondary p-4">
                                                            <h5 class="text-center text-wrap"><?php echo $row3[4]; ?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 

                                        <div class="modal fade" id="k<?php echo $i; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content bg-secondary">
                                                    <form action="#" method="post">
                                                        <div class="modal-header">
                                                            <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="bg-secondary p-4">
                                                                <h5 class="text-center">DO YOU WANT TO DELETE THIS MESSAGE?</h5>
                                                                <input type="hidden" name="kk" value="<?php echo $row3[0]; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Cancel</button>
                                                            <button type="submit" name="submit2" class="btn btn-primary">Submit</button>
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
                                        <?php
                                            if($cp == null) {
                                                ?>
                                                    <tr>
                                                        <td><h3 class="font-monospace text-center fw-lighter"> No Complaints Found </h3></td>
                                                    </tr>
                                                <?php
                                            }
                                        ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- All Complaints End-->

            <?php
                if ($_SESSION["mytype"] == 0) {
            ?>
                <!-- All Account Log Start -->               
                <div class="container-fluid pt-4 px-4">
                    <div class="row g-4">                    
                        <div class="col-12">
                            <div class="bg-secondary rounded h-100 p-4">
                                <h6 class="mb-4">All Accounts</h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="col">#</th>
                                                <th scope="col">Profile</th>
                                                <th class="col">Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Phone</th>
                                                <th scope="col">Status</th>
                                                <th scope="col" style="visibility: hidden;">Details</th>
                                                <th scope="col" style="visibility: hidden;">Delete</th>
                                                <th scope="col" style="visibility: hidden;">EDIT</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php                                            
                                                $acc = "SELECT * FROM `users` WHERE `user_type` = 1 ORDER BY `id` DESC";
                                                $result2 = mysqli_query($db, $acc);
                                                $ch = mysqli_num_rows($result2);
                                                if($ch) {
                                                    $i = 0;
                                                    while($row2 = mysqli_fetch_array($result2)) {                                                    
                                                        $i++;
                                            ?>
                                            <tr>
                                                <th class="align-middle" scope="row"><?php echo $i; ?></th>
                                                <td class="align-middle"><img src="profile/<?php echo $row2[6]; ?>" style="height: 3vw;" alt=""></td>
                                                <td class="align-middle"><?php echo $row2[1]; ?></td>
                                                <td class="align-middle"><?php echo $row2[2]; ?></td>
                                                <td class="align-middle"><?php echo $row2[3]; ?></td>
                                                <?php
                                                    if($row2[5] == 0) {
                                                        ?>
                                                            <td class="align-middle"> <span class="badge bg-success badge-sm">ADMIN</span> </td>
                                                            <td class="align-middle"> <a href="profdetail.php?id=<?php echo $row2[0]; ?>"><span class="badge bg-light rounded-pill badge-sm">DETAILS</span></a> </td>
                                                            <td class="align-middle"> <span type="button" data-bs-toggle="modal" data-bs-target="#l<?php echo $i; ?>" class="badge bg-danger rounded-pill badge-sm">DELETE</span> </td>
                                                        <?php
                                                    }
                                                    else {
                                                        ?>
                                                            <td class="align-middle"> <span class="badge bg-success badge-sm">USER</span> </td>
                                                            <td class="align-middle"> <a href="profdetail.php?id=<?php echo $row2[0]; ?>"><span class="badge bg-light rounded-pill badge-sm">DETAILS</span></a> </td>
                                                            <td class="align-middle"> <span type="button" data-bs-toggle="modal" data-bs-target="#l<?php echo $i; ?>" class="badge bg-danger rounded-pill badge-sm">DELETE</span> </td>
                                                            <td class="align-middle"> <a href="profedit.php?id=<?php echo $row2[0]; ?>"><span class="badge bg-info rounded-pill badge-sm">EDIT</span></a> </td>
                                                        <?php
                                                    }
                                                ?>
                                            </tr>
                                            <!-- Modal -->
                                            <div class="modal fade" id="l<?php echo $i; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content bg-secondary">
                                                        <form action="#" method="post">
                                                            <div class="modal-header">
                                                                <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="bg-secondary p-4">
                                                                    <h5 class="text-center">ARE YOU SURE YOU WANT TO DELETE THIS ACCOUNT?</h5>
                                                                    <input type="hidden" name="ll" value="<?php echo $row2[0]; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Cancel</button>
                                                                <button type="submit" name="submit2" class="btn btn-primary">Submit</button>
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
                <!-- All Account Log End -->
            <?php
                    
                }
            ?>

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