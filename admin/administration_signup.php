<?php
session_start();
   

    $db = mysqli_connect("localhost", "root", "", "evolution");

    if(isset($_POST["submit"])) {
        $email = $_POST["email"];
        echo $checksel = "SELECT * FROM `users` WHERE `email` = '$email'";
        $checkresult = mysqli_query($db, $checksel);
        if(mysqli_num_rows($checkresult)){                               
            $error = "Email Already Exists";
        }
        else {
            $filename = $_FILES["image"]["name"];
            $imgname = rand() . $filename;
            $tmpname = $_FILES["image"]["tmp_name"];
            $path = "./profile/" . $imgname;
            move_uploaded_file($tmpname, $path);
            $profile_img = $imgname;
            $name = $_POST["name"];
            $pass = $_POST["pass"];
            $pass = md5($pass);
            $ph = $_POST["phone"];
            $user_type = 0;
            $inp = "INSERT INTO `users`(`name`, `email`, `phone`, `pass`, `user_type`, `profile`) VALUES ('$name', '$email', '$ph', '$pass', '$user_type', '$profile_img')";
            $result2 = mysqli_query($db, $inp);
            ?>
                <Script>
                    window.location.assign("./signin.php");
                </Script>
            <?php
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


        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <form action="#" method="post" enctype="multipart/form-data">
                        <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <p class="text-danger text-center"><?php if(isset($error)) { echo $error; } ?></p>
                            <div class="text-center align-items-center justify-content-between mb-3">
                                <a href="../index.php" class="">
                                <h1 class="logo" style="font-family: Forte;">ECS</h1>
                                </a>
                                <h3><i class="fa fa-user-edit me-2"></i> Sign Up</h3>
                            </div>
                            <div class="text-center">
                                <div class="ms-auto me-auto rounded border border-primary" style="min-height: 10vw; max-width: 20vw; max-height: 20vw;">
                                    <img id="output" class="img-fluid" style="max-height: 20vw;" />
                                </div>
                                <p><input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)" style="display: none;"></p>
                                <p><label for="file" class="rounded-pill btn btn-outline-primary" style="cursor: pointer;">Upload Image</label></p>

                                <!-- Scripting for Image -->
                                <script>
                                    var loadFile = function (event) { 
                                        var image = document.getElementById('output');
                                        image.src = URL.createObjectURL(event.target.files[0]);
                                    };
                                </script>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingText" placeholder="jhondoe" name="name">
                                <label for="floatingText">Username</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="pass">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="tel" class="form-control" id="floatingText" placeholder="jhondoe" name="phone">
                                <label for="floatingText">Phone</label>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary py-3 w-100 mb-4">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
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
