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
                <h1 class="text-center">Pre-Medical Results</h1>
                <div class="row g-4">                    
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <h6>English Results</h6>
                            </div>
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-md-6 form-floating mb-3">
                                        <select id="classeng" class="form-control bg-dark" name="class">
                                            <option value="0">Select Class</option>
                                            <?php
                                                $sel = "SELECT * FROM `class`";
                                                $res = mysqli_query($db, $sel);
                                                while($row = mysqli_fetch_array($res)) {
                                                    ?>
                                                        <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
                                                    <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Class</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Marks</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Details</th>
                                            </tr>
                                        </thead>
                                        <tbody id="eng">

                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">                    
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <h6>Urdu Results</h6>
                            </div>
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-md-6 form-floating mb-3">
                                        <select id="classurd" class="form-control bg-dark" name="class">
                                            <option value="0">Select Class</option>
                                            <?php
                                                $sel = "SELECT * FROM `class`";
                                                $res = mysqli_query($db, $sel);
                                                while($row = mysqli_fetch_array($res)) {
                                                    ?>
                                                        <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
                                                    <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Class</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Marks</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Details</th>
                                            </tr>
                                        </thead>
                                        <tbody id="urd">

                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">                    
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <h6>Islamiat/Religion Results</h6>
                            </div>
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-md-6 form-floating mb-3">
                                        <select id="classrel" class="form-control bg-dark" name="class">
                                            <option value="0">Select Class</option>
                                            <?php
                                                $sel = "SELECT * FROM `class`";
                                                $res = mysqli_query($db, $sel);
                                                while($row = mysqli_fetch_array($res)) {
                                                    ?>
                                                        <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
                                                    <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Class</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Marks</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Details</th>
                                            </tr>
                                        </thead>
                                        <tbody id="rel">

                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">                    
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <h6>Zoology Results</h6>
                            </div>
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-md-6 form-floating mb-3">
                                        <select id="classzoo" class="form-control bg-dark" name="class">
                                            <option value="0">Select Class</option>
                                            <?php
                                                $sel = "SELECT * FROM `class`";
                                                $res = mysqli_query($db, $sel);
                                                while($row = mysqli_fetch_array($res)) {
                                                    ?>
                                                        <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
                                                    <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Class</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Marks</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Details</th>
                                            </tr>
                                        </thead>
                                        <tbody id="zoo">

                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">                    
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <h6>Botany Results</h6>
                            </div>
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-md-6 form-floating mb-3">
                                        <select id="classbot" class="form-control bg-dark" name="class">
                                            <option value="0">Select Class</option>
                                            <?php
                                                $sel = "SELECT * FROM `class`";
                                                $res = mysqli_query($db, $sel);
                                                while($row = mysqli_fetch_array($res)) {
                                                    ?>
                                                        <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
                                                    <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Class</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Marks</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Details</th>
                                            </tr>
                                        </thead>
                                        <tbody id="bot">

                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">                    
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <h6>Chemistry Results</h6>
                            </div>
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-md-6 form-floating mb-3">
                                        <select id="classchem" class="form-control bg-dark" name="class">
                                            <option value="0">Select Class</option>
                                            <?php
                                                $sel = "SELECT * FROM `class`";
                                                $res = mysqli_query($db, $sel);
                                                while($row = mysqli_fetch_array($res)) {
                                                    ?>
                                                        <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
                                                    <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Class</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Marks</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Details</th>
                                            </tr>
                                        </thead>
                                        <tbody id="chem">

                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">                    
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <h6>Physic Results</h6>
                            </div>
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-md-6 form-floating mb-3">
                                        <select id="classphy" class="form-control bg-dark" name="class">
                                            <option value="0">Select Class</option>
                                            <?php
                                                $sel = "SELECT * FROM `class`";
                                                $res = mysqli_query($db, $sel);
                                                while($row = mysqli_fetch_array($res)) {
                                                    ?>
                                                        <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
                                                    <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Class</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Marks</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Details</th>
                                            </tr>
                                        </thead>
                                        <tbody id="phy">

                                        </tbody>
                                    </table>
                                </div>
                            </form>
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
        // English
        $('#classeng').on('change', function() {
            const id =$(this).find(":selected").val();
            $.ajax({
                url: "medical_eng.php",
                cache: false,
                type: "POST",
                data: {id : id},
                success: function(html){
                    $('#eng').html(html);
                }
            });
        
        });;

        // Urdu
        $('#classurd').on('change', function() {
            const id =$(this).find(":selected").val();
            $.ajax({
                url: "medical_urd.php",
                cache: false,
                type: "POST",
                data: {id : id},
                success: function(html){
                    $('#urd').html(html);
                }
            });

        });;

        // Religion
        $('#classrel').on('change', function() {
            const id =$(this).find(":selected").val();
            $.ajax({
                url: "medical_rel.php",
                cache: false,
                type: "POST",
                data: {id : id},
                success: function(html){
                    $('#rel').html(html);
                }
            });

        });;

        // Zoology
        $('#classzoo').on('change', function() {
            const id =$(this).find(":selected").val();
            $.ajax({
                url: "medical_zoo.php",
                cache: false,
                type: "POST",
                data: {id : id},
                success: function(html){
                    $('#zoo').html(html);
                }
            });

        });;

        // Botany
        $('#classbot').on('change', function() {
            const id =$(this).find(":selected").val();
            $.ajax({
                url: "medical_bot.php",
                cache: false,
                type: "POST",
                data: {id : id},
                success: function(html){
                    $('#bot').html(html);
                }
            });

        });;

        // Chemistry
        $('#classchem').on('change', function() {
            const id =$(this).find(":selected").val();
            $.ajax({
                url: "medical_chem.php",
                cache: false,
                type: "POST",
                data: {id : id},
                success: function(html){
                    $('#chem').html(html);
                }
            });

        });;

        // Physic
        $('#classphy').on('change', function() {
            const id =$(this).find(":selected").val();
            $.ajax({
                url: "medical_phy.php",
                cache: false,
                type: "POST",
                data: {id : id},
                success: function(html){
                    $('#phy').html(html);
                }
            });

        });;
    </script>
</body>

</html>