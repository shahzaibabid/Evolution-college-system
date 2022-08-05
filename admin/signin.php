<?php
session_start(); 
  
  $db = mysqli_connect("localhost", "root", "", "evolution");

  if (isset($_POST["login"])) {                    
        $email = $_POST["email"];
        // $remember_me = $_POST["remember_me"];
        $pass = $_POST["pass"];
        $pass = md5($pass);
        if(!empty($_POST["remember"])) {
          setcookie("username",$_POST["email"],time()+ (86400 * 7),'/');
          setcookie("password",$_POST["pass"],time()+ (86400 * 7),'/');
        } 
        else{
          setcookie("username",'');
          setcookie("password",'');
        }

        $x = $_POST["gndr"];
        switch ($x) {
            case 'Admin':
                $sel = "SELECT * FROM `users` WHERE `email` = '$email' && `pass` = '$pass'";
                $result = mysqli_query($db, $sel);
            break;
            
            case 'Administrator': 
                $sel = "SELECT * FROM `administrator` WHERE `email` = '$email' && `pass` = '$pass'";
                $result = mysqli_query($db, $sel);
            break;
                
            case 'Teacher':
                $sel = "SELECT * FROM `teachers` WHERE `email` = '$email' && `pass` = '$pass'";
                $result = mysqli_query($db, $sel);
            break;

            default:
                $sel = "SELECT * FROM `users` WHERE `email` = '$email' && `pass` = '$pass'";
                $result = mysqli_query($db, $sel);
            break;
        }

        if(mysqli_num_rows($result)) {
            while($row = mysqli_fetch_array($result)) {
                $_SESSION["account"] = $x;
                $_SESSION["myuserid"] = $row[0];
                $_SESSION["name"] = $row[1];
                $_SESSION["mytype"] = $row[5];
                $_SESSION["profile"] = $row[6];
                $_SESSION["email"] = $row[2];
            }

            if ($_SESSION["mytype"] != 1)
            {
                ?>
                <Script>
                    window.location.assign("./index.php");
                </Script>            
                <?php
            }
            else {
                $error = "Invalid Email or Password";
            }  
        }
        else {
            $error = "Invalid Email or Password";
        }
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


        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <form action="#" method="post">
                        <div class="mt-5 form-floating mb-3">                            
                            <div class="d-flex w-100 justify-content-evenly">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gndr" value="Admin" id="flexRadioDefault1" checked>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Admin
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gndr" value="Administrator" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Administrator
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gndr" value="Teacher" id="flexRadioDefault3">
                                    <label class="form-check-label" for="flexRadioDefault3">
                                        Teacher
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <p class="text-danger text-center"><?php if(isset($error)) { echo $error; } ?></p>
                            <div class="text-center align-items-center justify-content-between mb-3">
                                <a href="../index.php" class="">
                                <h1 class="logo" style="font-family: Forte;">ECS</h1>
                                </a>
                                <h3><i class="fa fa-user-edit me-2"></i> Sign In</h3>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" name="email" class="form-control" id="floatingInput" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>" placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" name="pass" class="form-control" id="floatingPassword" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="form-checkbox">
                                    <input type="checkbox" name="remember" value="1" checked> Remember me
                                </div>
                                <a href="forgot.php">Forgot Password?</a>
                            </div>
                            <button type="submit" name="login" class="btn btn-primary py-3 w-100 mb-4">Sign In</button>
                            <p class="text-center mb-0"><i class="fas fa-long-arrow-alt-left"></i> <a href="../index.php">Go to Customer Panel</a></p>                        
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
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
