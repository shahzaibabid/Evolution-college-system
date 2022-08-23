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

    if(isset($_POST["submit"])) {
        $t_email = $_POST["email"];
        $t_sel = "SELECT * FROM `teachers` WHERE `email` = '$t_email'";
        $t_sel_res = mysqli_query($db, $t_sel);
        if(mysqli_num_rows($t_sel_res)) {
            $t_error = "Email Already Exists";
        }
        else {
            $filename1 = $_FILES["image"]["name"];
            $imgname = rand() . $filename1;
            $tmpname = $_FILES["image"]["tmp_name"];
            $path = "./profile/" . $imgname;
            move_uploaded_file($tmpname, $path);
            $t_profile = $imgname;
            $t_name = $_POST["name"];
            $t_dob = $_POST["dob"];
            $t_pass = $_POST["pass"];
            $t_pass = md5($t_pass);
            $t_phone = $_POST["phone"];
            $t_cnic = $_POST["cnic"];
            $t_address = $_POST["address"];
            $t_address = mysqli_real_escape_string($db,$t_address);
            $t_gndr = $_POST["gndr"];
            $t_ins = "INSERT INTO `teachers`(`name`, `email`, `phone`, `pass`, `profile`, `CNIC`, `gender`, `address`) VALUES ('$t_name','$t_email','$t_phone','$t_pass','$t_profile','$t_cnic','$t_gndr','$t_address')";
            $t_result = mysqli_query($db, $t_ins);
            
            $classes = $_POST["class"];
            $sub = $_POST["sub"];
            $teach_class = "INSERT INTO `subjects`(`name`, `teacher_email`, `class_id`) VALUES ('$sub','$t_email','$classes')";
            $tec_res = mysqli_query($db,$teach_class);
            ?>
            <Script>
                window.location.assign("./Accounts.php");
            </Script>
            <?php
        }
    }

    if(isset($_POST["del1"])) {
        $kk = $_POST["kk"];
        $del_administrator = "DELETE FROM `administrator` WHERE `id` = $kk";
        $del_administrator_result = mysqli_query($db, $del_administrator);
        ?>
        <Script>
            window.location.assign("Accounts.php");
        </Script>
        <?php
    }


    if(isset($_POST["del2"])) {
        $kk = $_POST["kk"];
        $del_teacher = "DELETE FROM `teachers` WHERE `id` = $kk";
        $del_teacher_result = mysqli_query($db, $del_teacher);
        ?>
        <Script>
            window.location.assign("Accounts.php");
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


            <!-- Administrator Start -->
            <div class="container-fluid pt-4 px-4">
                <h1 class="text-center">All Accounts</h1>

                <?php if($_SESSION["mytype"] == 0) { ?> 
                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <h6>All Administrators</h6>
                                <!-- Button trigger modal -->
                            </div>

                            <div class="table-responsive" style="overflow-x:auto; overflow-y:auto; max-height: 400px;">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="col">#</th>
                                            <th scope="col">Profile</th>
                                            <th scope="col">Name</th>
                                            <th class="col">Email</th>
                                            <th scope="col" style="visibility: hidden;">Details</th>
                                            <th scope="col" style="visibility: hidden;">EDIT</th>
                                            <th scope="col" style="visibility: hidden;">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $sel_administrator = "SELECT * FROM `administrator`";
                                            $administrator_result = mysqli_query($db, $sel_administrator);
                                            if(mysqli_num_rows($administrator_result)) {
                                                $i = 0;
                                                while($row = mysqli_fetch_array($administrator_result)) {                                                    
                                                    $i++;
                                        ?>
                                        <tr>
                                            <td class="align-middle" scope="row"><?php echo $i; ?></td>
                                            <td class="align-middle"><img src="profile/<?php echo $row[6]; ?>" style="height: 3vw;" alt=""></td>
                                            <td class="align-middle"><?php echo $row[1]; ?></td>
                                            <td class="align-middle"><?php echo $row[2]; ?></td>
                                            <td class="align-middle"> <a href="administrator_details.php?id=<?php echo $row[0]; ?>"><span class="badge bg-light rounded-pill badge-sm">DETAILS</span></a> </td>
                                            <td class="align-middle"> <a href="edit_administrator.php?id=<?php echo $row[0]; ?>"><span class="badge bg-info rounded-pill badge-sm">EDIT</span></a> </td>
                                            <td class="align-middle"> <span type="button" data-bs-toggle="modal" data-bs-target="#a<?php echo $i; ?>" class="badge bg-danger rounded-pill badge-sm">DELETE</span> </td>
                                        </tr>               

                                        <!-- Delete Modal -->
                                        <div class="modal fade" id="a<?php echo $i; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content bg-secondary">
                                                    <form action="#" method="post">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="staticBackdropLabel">Delete Account</h4>
                                                            <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="bg-secondary p-4">
                                                                <h5 class="text-center">ARE YOU SURE YOU WANT TO DELETE THIS ADMINISTRATOR ACCOUNT?</h5>
                                                                <input type="hidden" name="kk" value="<?php echo $row[0]; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Cancel</button>
                                                            <button type="submit" name="del1" class="btn btn-primary">Submit</button>
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
                <?php } ?>
            </div>
            <!-- Administrator End -->

            <?php if($_SESSION["mytype"] != 3) { ?> 
            <!-- Teachers Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <h6>All Teachers</h6>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                                    Add
                                </button>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content bg-secondary">
                                        <form action="#" method="post" enctype="multipart/form-data">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="staticBackdropLabel">Add Teacher</h4>
                                                <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row bg-secondary rounded h-100 p-4">
                                                    <div class="text-center">
                                                        <div class="ms-auto me-auto rounded border border-primary" style="min-height: 10vw; max-width: 20vw; max-height: 20vw;">
                                                            <img id="toutput" class="img-fluid" style="max-height: 20vw;" />
                                                        </div>
                                                        <p><input type="file" accept="image/*" name="image" id="file2" onchange="tloadFile(event)" style="display: none;"></p>
                                                        <p><label for="file2" class="rounded-pill btn btn-outline-primary" style="cursor: pointer;">Upload Image</label></p>

                                                        <!-- Scripting for Image -->
                                                        <script>
                                                            var tloadFile = function (event) { 
                                                                var timage = document.getElementById('toutput');
                                                                timage.src = URL.createObjectURL(event.target.files[0]);
                                                            };
                                                        </script>
                                                    </div>
                                                    <div class="col-md-6 form-floating mb-3">
                                                        <input type="text" class="form-control" name="name" id="floatingInput" placeholder="Teacher Name">
                                                        <label for="floatingInput">Name</label>
                                                    </div>
                                                    <div class="col-md-6 form-floating mb-3">
                                                        <input type="date" name="dob" class="form-control" id="floatingPassword" placeholder="Dateof Birth">
                                                        <label for="floatingPassword">DOB</label>
                                                    </div>
                                                    <div class="col-md-6 form-floating mb-3">
                                                        <input type="email" class="form-control" name="email" id="floatingInput" placeholder="Teacher Name">
                                                        <label for="floatingInput">Email</label>
                                                    </div>
                                                    <div class="col-md-6 form-floating mb-3">
                                                        <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Dateof Birth">
                                                        <label for="floatingPassword">Password</label>
                                                    </div>
                                                    <div class="col-md-6 form-floating mb-3">
                                                        <input type="number" class="form-control" name="phone" id="floatingInput" placeholder="Teacher Name">
                                                        <label for="floatingInput">Phone</label>
                                                    </div>
                                                    <div class="col-md-6 form-floating mb-3">
                                                        <input type="text" name="cnic" class="form-control" id="floatingPassword" placeholder="Dateof Birth">
                                                        <label for="floatingPassword">CNIC</label>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <textarea name="address" class="form-control" rows="3"></textarea>
                                                        <label for="floatingPassword"><b>Address</b></label>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <div>
                                                            <label class="form-label">Gender</label>                
                                                        </div>

                                                        <div class="d-flex w-100 justify-content-evenly">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="gndr" value="Male" id="flexRadioDefault1" checked>
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                Male
                                                                </label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="gndr" value="Female" id="flexRadioDefault2">
                                                                <label class="form-check-label" for="flexRadioDefault2">
                                                                    Female
                                                                </label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="gndr" value="Others" id="flexRadioDefault3">
                                                                <label class="form-check-label" for="flexRadioDefault3">
                                                                Others
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 form-floating mb-3">
                                                        <select class="form-control bg-dark" name="class">
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
                                                        <input type="text" class="form-control" name="sub" id="floatingInput" placeholder="Teacher Name">
                                                        <label for="floatingInput">Subject</label>
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
                            <div class="table-responsive" style="overflow-x:auto; overflow-y:auto; max-height: 400px;">
                                <table class="table">
                                    <h6 class="text-danger text-center"><?php if(isset($t_error)) {echo $t_error;} ?></h6>
                                    <thead>
                                        <tr>
                                            <th class="col">#</th>
                                            <th scope="col">Profile</th>
                                            <th scope="col">Name</th>
                                            <th class="col">Email</th>
                                            <th scope="col" style="visibility: hidden;">Details</th>
                                            <th scope="col" style="visibility: hidden;">EDIT</th>
                                            <th scope="col" style="visibility: hidden;">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $sel_teacher = "SELECT * FROM `teachers`";
                                            $teacher_result = mysqli_query($db, $sel_teacher);
                                            if(mysqli_num_rows($teacher_result)) {
                                                $i = 0;
                                                while($row = mysqli_fetch_array($teacher_result)) {                                                    
                                                    $i++;
                                        ?>
                                        <tr>
                                            <td class="align-middle" scope="row"><?php echo $i; ?></td>
                                            <td class="align-middle"><img src="profile/<?php echo $row[6]; ?>" style="height: 3vw;" alt=""></td>
                                            <td class="align-middle"><?php echo $row[1]; ?></td>
                                            <td class="align-middle"><?php echo $row[2]; ?></td>
                                            <td class="align-middle"> <a href="teacherdetail.php?id=<?php echo $row[0]; ?>"><span class="badge bg-light rounded-pill badge-sm">DETAILS</span></a> </td>
                                            <td class="align-middle"> <a href="edit_teacher.php?id=<?php echo $row[0]; ?>"><span class="badge bg-info rounded-pill badge-sm">EDIT</span></a> </td>
                                            <td class="align-middle"> <span type="button" data-bs-toggle="modal" data-bs-target="#t<?php echo $i; ?>" class="badge bg-danger rounded-pill badge-sm">DELETE</span> </td>
                                        </tr>               

                                        <!-- Delete Modal -->
                                        <div class="modal fade" id="t<?php echo $i; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content bg-secondary">
                                                    <form action="#" method="post">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="staticBackdropLabel">Delete Account</h4>
                                                            <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="bg-secondary p-4">
                                                                <h5 class="text-center">ARE YOU SURE YOU WANT TO DELETE THIS TEACHER ACCOUNT?</h5>
                                                                <input type="hidden" name="kk" value="<?php echo $row[0]; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Cancel</button>
                                                            <button type="submit" name="del2" class="btn btn-primary">Submit</button>
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
            <!-- Teachers End -->
            <?php } ?>            


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