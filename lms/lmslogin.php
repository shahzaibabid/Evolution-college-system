<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Learning Managment System</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script>
	const validarLogin = () => {
  alert('Teste');
}
</script>
<style>
	* {
    padding: 0px;
    margin: 0px;
}
body {
    background-color: white;
}
header {
    background-color: black;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 15vh;
    box-shadow: 5px 5px 10px rgb(0,0,0,0.3);
}
h1 {
    letter-spacing: 1.5vw;
    font-family: 'system-ui';
    text-transform: uppercase;
    text-align: center;
}
main {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 75vh;
    width: 100%;
    background: url() no-repeat center center;
    background-size: cover;
}
.form_class {
    width: 500px;
    padding: 40px;
    border-radius: 8px;
    background-color: white;
    font-family: 'system-ui';
    box-shadow: 5px 5px 10px 10px rgb(0,0,0,0.3);
}
.form_div {
    text-transform: uppercase;
}
.form_div > label {
    letter-spacing: 3px;
    font-size: 1rem;
}
.info_div {
    text-align: center;
    margin-top: 20px;
}
.info_div {
    letter-spacing: 1px;
}
.field_class {
    width: 100%;
    border-radius: 6px;
    border-style: solid;
    border-width: 1px;
    padding: 5px 0px;
    text-indent: 6px;
    margin-top: 10px;
    margin-bottom: 20px;
    font-family: 'system-ui';
    font-size: 0.9rem;
    letter-spacing: 2px;
}
.submit_class {
    border-style: none;
    border-radius: 5px;
    background-color: green;
	color:white;
    padding: 8px 20px;
    font-family: 'system-ui';
    text-transform: uppercase;
    letter-spacing: .8px;
    display: block;
    margin: auto;
    margin-top: 10px;
    box-shadow: 2px 2px 5px rgb(0,0,0,0.2);
    cursor: pointer;
}
footer {
    height: 10vh;
    background-color: black;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: -5px -5px 10px rgb(0,0,0,0.3);
}
footer > p {
    text-align: center;
    font-family: 'system-ui';
    letter-spacing: 3px;
}
footer > p > a {
    text-decoration: none;
    color: white;
    font-weight: bold;
}
</style>

<?php
    include("../admin/connection/connection.php");
if (isset($_POST["submit"])) {                    
    $email = $_POST["studentid"];
    // $remember_me = $_POST["remember_me"];
    $pass = $_POST["pass"];
    $pass =md5($pass);
    // $pass = md5($pass);
   

            $sel = "SELECT * FROM `std_account` WHERE `email` = '$email' && `pass` = '$pass'";
            $result = mysqli_query($db, $sel);

    if(mysqli_num_rows($result)) {
        while($row = mysqli_fetch_array($result)) {
            $_SESSION["myuserid"] = $row[0];
            $_SESSION["name"] = $row[1];
            $_SESSION["mytype"] = $row[16];
            $_SESSION["email"] = $row[3];
        }

            ?>
            <Script>
                window.location.assign("./dashboard.php");
            </Script>            
            <?php

    }
    else {
        $error = "Invalid Email or Password";
    }
}
?>
</head>

<body>
    <header>
        <h1>Learning Managment System</h1>
    </header>
    <main>
        <form id="login_form" class="form_class" action="#" method="post">
            <div class="form_div">
                <p class="text-center text-danger"><?php if(isset($error)){ echo $error; } ?></p>
                <label>Student Id:</label>
                <input class="field_class" name="studentid" type="text" placeholder="Enter your student id"  required autocomplete="off" autofocus>
                <label>Password:</label>
                <input id="pass" class="field_class" name="pass" type="password" placeholder="Enter your password" required autocomplete="off">
                <button class="submit_class" name="submit" type="submit" form="login_form" >Submit</button>
            </div>
        </form>
    </main>
    <footer>
        <p> Copyright &copy; |All rights reserved by Evolution_College_System| <br> <i class="ion-ios-heart" aria-hidden="true">Designed & developed by Shahzaib & Charles</i> 
							 </p>
    </footer>
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>