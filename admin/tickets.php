<?php
    session_start();
    if ($_SESSION["name"] == null) {
        header("Location: signin.php");
    }
    if ($_SESSION["mytype"] == 1) {
        ?>
            <Script>
                window.location.assign("../home/index.php");
            </Script>            
        <?php
    }
    $db = mysqli_connect("localhost", "root", "", "my_movie");

    if(isset($_POST["submit"])) {
        $thname = $_POST["thname"];
        $seats = $_POST["seats"];
        $screen = $_POST["screen"];
        $th_ins = "INSERT INTO `theater`(`name`, `screen`, `seats`) VALUES ('$thname','$screen','$seats')";
        $th_result = mysqli_query($db, $th_ins);
        ?>
        <Script>
            window.location.assign("./theater.php");
        </Script>
        <?php
    }

    if(isset($_POST["submit2"])) {
        $kk = $_POST["kk"];
        $del = "DELETE FROM `theater` WHERE `id` = $kk";
        $del_result = mysqli_query($db, $del);
        ?>
        <Script>
            window.location.assign("./theater.php");
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
                <a href="index.php" class="ms-auto me-auto navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><img src="./img/signage-removebg-preview.png" alt=""></h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="profile/<?php echo $_SESSION["profile"]; ?>" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php echo $_SESSION["name"]; ?></h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="theater.php" class="nav-item nav-link"><i class="fas fa-hotel"></i>Theater</a>
                    <a href="movie.php" class="nav-item nav-link"><i class="fas fa-film"></i>Movies</a>
                    <a href="schedule.php" class="nav-item nav-link"><i class="fas fa-calendar-alt"></i>Schedule</a>
                    <a href="tickets.php" class="nav-item nav-link active"><i class="fas fa-ticket-alt"></i>Tickets</a>
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
                <h1 class="text-center">Tickets</h1>
                <div class="row g-4">                    
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <h6>All Tickets</h6>
                            </div>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="col">#</th>
                                            <th scope="col">User Name</th>
                                            <th class="col">Package</th>
                                            <th class="col">Adults Seats</th>
                                            <th class="col">Kids Seats</th>
                                            <th class="col">Price</th>
                                            <th class="col">Ticket No.</th>
                                            <th class="col">Movie</th>
                                            <th class="col">Theater</th>
                                            <th class="col">Date</th>
                                            <th class="col">Time</th>
                                            <!-- <th scope="col" style="visibility: hidden;">EDIT</th>
                                            <th scope="col" style="visibility: hidden;">Delete</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $ticket_sel = "SELECT * FROM `tickets`";
                                            $result = mysqli_query($db, $ticket_sel);
                                            if(mysqli_num_rows($result)) {
                                                $i = 0;
                                                while($row = mysqli_fetch_array($result)) {                                                    
                                                    $i++;
                                        ?>
                                        <tr>
                                            <td class="align-middle" scope="row"><?php echo $i; ?></td>
                                            <?php
                                                $psel = "SELECT * FROM `users` WHERE `id` = $row[1]";
                                                $myresult = mysqli_query($db, $psel);
                                                while($pel_r = mysqli_fetch_array($myresult)) {
                                                    ?>
                                                    <td class="align-middle"><?php echo $pel_r[2]; ?></td>
                                                    <?php
                                                }

                                                $pgsel = "SELECT * FROM `seat_catgory` WHERE `id` = $row[2]";
                                                $pg_r = mysqli_query($db, $pgsel);
                                                while($pg_w = mysqli_fetch_array($pg_r)) {
                                                    ?>
                                                    <td class="align-middle"><?php echo $pg_w[1]; ?></td>
                                                    <?php
                                                }
                                            ?>
                                            <td class="align-middle"><?php echo $row[3]; ?></td>
                                            <td class="align-middle"><?php echo $row[4]; ?></td>
                                            <td class="align-middle"><?php echo $row[8]; ?></td>
                                            <td class="align-middle"><?php echo $row[5]; ?></td>
                                            <?php
                                                $sch = "SELECT * FROM `movie_sch2` WHERE `id` = $row[6]";
                                                $sch_r = mysqli_query($db, $sch);
                                                $sch_w = mysqli_fetch_array($sch_r);

                                                $movsel = "SELECT * FROM `allmovies` WHERE `id` = $sch_w[4]";
                                                $mov_r = mysqli_query($db, $movsel);
                                                while($mov_w = mysqli_fetch_array($mov_r)) {
                                                    ?>
                                                    <td class="align-middle"><?php echo $mov_w[2]; ?></td>
                                                    <?php
                                                }

                                                $thesel = "SELECT * FROM `theater` WHERE `id` = $sch_w[3]";
                                                $the_r = mysqli_query($db, $thesel);
                                                while($the_w = mysqli_fetch_array($the_r)) {
                                                    ?>
                                                    <td class="align-middle"><?php echo $the_w[1]; ?></td>
                                                    <?php
                                                }
                                            ?>
                                            <td class="align-middle"><?php echo $sch_w[1]; ?></td>
                                            <?php
                                                $tmsel = "SELECT * FROM `movie_time` WHERE `id` = $sch_w[2]";
                                                $tm_r = mysqli_query($db, $tmsel);
                                                while($tm_w = mysqli_fetch_array($tm_r)) {
                                                    ?>
                                                    <td class="align-middle"><?php echo $tm_w[1]; ?></td>
                                                    <?php
                                                }
                                            ?>
                                            <!-- <td class="align-middle"> <a href="Theater_edit.php?id=<?php echo $row[0]; ?>"><span class="badge bg-info rounded-pill badge-sm">EDIT</span></a> </td>
                                            <td class="align-middle"> <span type="button" data-bs-toggle="modal" data-bs-target="#k<?php echo $i; ?>" class="badge bg-danger rounded-pill badge-sm">DELETE</span> </td> -->
                                        </tr>

                                        <!-- Modal -->
                                        <div class="modal fade" id="k<?php echo $i; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content bg-secondary">
                                                    <form action="#" method="post">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="staticBackdropLabel">Delete Theater</h4>
                                                            <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="bg-secondary p-4">
                                                                <h5 class="text-center">ARE YOU SURE YOU WANT TO DELETE "<?php echo $row[1]; ?>"</h5>
                                                                <input type="hidden" name="kk" value="<?php echo $row[0]; ?>">
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
            <!-- Profile End -->

          

            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">CMM MOVIES</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed: <a href="#">Charles Stephen, Maryam Fatima, Momna Khan</a>
                            <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
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