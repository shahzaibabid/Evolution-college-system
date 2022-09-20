<?php
// session_start();
// $db = mysqli_connect("localhost","id19534055_root","Ecscollege@123","id19534055_evolution");
?>
<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--    <title>header</title>-->
<!--    <link rel="stylesheet" href="assets/css/style-freedom.css">-->
<!--</head>-->
<!--<body>-->
    <!-- Top Menu 1 -->
	<?php if(empty($_SESSION["mytype"])){ ?>
<section class="w3l-top-menu-1">
	<div class="top-hd">
		<div class="wrapper">
	<header class="d-grid grid-columns-2">
		<ul class="top-head">
				<li><a class="href" href="#">Our Social</a></li>
			<li><a class="href" href="#"><span class="fa fa-facebook"></span></a></li>
			<li><a class="href" href="#"><span class="fa fa-twitter"></span></a></li>
			<li><a class="href" href="#"><span class="fa fa-instagram"></span></a></li>
			<li><a class="href" href="#"><span class="fa fa-linkedin"></span></a></li>
		</ul>
	
		<div class="accounts">
				<li class="top_li"><a href="login.php"><span class="fa fa-user"></span> Login</a></li>
				<li class="top_li"><a href="signup.php"><span class="fa fa-lock"></span> Register</a></li>
		</div>
	</header>
</div>
</div>
</section>
<?php } ?>
<!-- //Top Menu 1 -->
<!--</body>-->
<!--</html>-->