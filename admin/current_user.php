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
    $id = $_GET["id"];

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

    $row = mysqli_fetch_array($chresult);
    if(isset($_POST["submit"])) {
        $filename = $_FILES["image"]["name"];
        if($filename != null) {
            $imgname = rand() . $filename;
            $tmpname = $_FILES["image"]["tmp_name"];
            $path = "./profile/" . $imgname;
            move_uploaded_file($tmpname, $path);
            $profile_img = $imgname;
        }
        else {
            $profile_img = $row[6];
        }        

        $name = $_POST["name"]; 
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        if($pass != null) {
            $pass = md5($pass);
        }
        else {
            $pass = $row[4];
        }

        $ph = $_POST["phone"];        

        $_SESSION["name"] = $name;
        $_SESSION["profile"] = $profile_img;
        $_SESSION["email"] = $email;
        
        if($x == "Teacher") {
            $t_address = $_POST["address"];
            $t_address = mysqli_real_escape_string($db,$t_address);
            $inp = "UPDATE `teachers` SET `name`='$name',`email`='$email',`phone`='$ph',`pass`='$pass',`profile`='$profile_img',`address`='$t_address' WHERE `id` = $id";
        }
        else if($x == "Administrator") {
            $inp = "UPDATE `administrator` SET `name`='$name',`email`='$email',`phone`='$ph',`pass`='$pass',`profile`='$profile_img' WHERE `id` = $id";
        } 
        else if($x == "Admin") {
            $inp = "UPDATE `users` SET `name`='$name',`email`='$email',`phone`='$ph',`pass`='$pass',`profile`='$profile_img' WHERE `id` = $id";
        }
        $result2 = mysqli_query($db, $inp);
        ?>
            <Script>
                window.location.assign("./index.php");
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

            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
            <h2 class="text-center">Admin Profile</h2>
                <div class="row bg-secondary rounded align-items-center justify-content-center mx-0">
                    <div class="col-sm-12 col-xl-8">
                        <form action="#" method="post" enctype="multipart/form-data">
                            <div class="row bg-secondary rounded h-100 p-4">
                                <div class="text-center">
                                    <div id="MYIMG" class="ms-auto me-auto" style="min-height: 10vw; max-width: 20vw; max-height: 20vw;">
                                        <img class="img-fluid" src="profile/<?php echo $row[6]; ?>" alt="No Cover" style="max-height: 20vw;" />
                                    </div>

                                    <div id="MYDIV" class="ms-auto me-auto" style="min-height: 10vw; max-width: 20vw; max-height: 20vw; display: none;">
                                        <img id="output" class="img-fluid" style="max-height: 20vw;" />
                                    </div>
                                    <p><input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)" style="display: none;"></p>
                                    <p><label for="file" onclick="showme()" class="rounded-pill btn btn-outline-primary" style="cursor: pointer;">Change Cover</label></p>

                                    <!-- Scripting for Image -->
                                    <script>
                                        var loadFile = function (event) { 
                                            var image = document.getElementById('output');
                                            image.src = URL.createObjectURL(event.target.files[0]);
                                        };

                                        function showme() {
                                            document.getElementById("MYIMG").style.display = "none";
                                            document.getElementById("MYDIV").style.display = "block";
                                        }
                                    </script>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" value="<?php echo $row[1]; ?>" name="name" id="floatingInput" placeholder="Teacher Name">
                                    <label for="floatingInput">Name</label>
                                </div>
                                <div class="col-md-6 form-floating mb-3">
                                    <input type="email" class="form-control" value="<?php echo $row[2]; ?>" name="email" id="floatingInput" placeholder="Teacher Name">
                                    <label for="floatingInput">Email</label>
                                </div>
                                <div class="col-md-6 form-floating mb-3">
                                    <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Dateof Birth">
                                    <label for="floatingPassword">New Password</label>
                                </div>
                                <div class="col-md-6 form-floating mb-3">
                                    <input type="number" class="form-control" value="<?php echo $row[3]; ?>" name="phone" id="floatingInput" placeholder="Teacher Name">
                                    <label for="floatingInput">Phone</label>
                                </div>
                                <div class="col-md-6 form-floating mb-3">
                                    <input type="text" name="cnic" class="form-control" value="<?php echo $row[7]; ?>" id="floatingPassword" placeholder="Dateof Birth">
                                    <label for="floatingPassword">CNIC</label>
                                </div>                         
                                <?php
                                    if($x == "Teacher") {
                                ?>       
                                <div class="form-floating mb-3">
                                    <textarea name="address" class="form-control" rows="3"><?php echo $row[8]; ?></textarea>
                                    <label for="floatingPassword"><b>Address</b></label>
                                </div>
                                <?php
                                    }
                                ?>
                                <div class="col-sm-12 d-flex justify-content-around">
                                    <input type="submit" class="btn btn-primary col-3" value="Submit" name="submit">
                                </div>
                            </div> 
                        </form>
                    </div>
                </div>
            </div>
            <!-- Blank End -->

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