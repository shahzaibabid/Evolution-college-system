<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link rel="stylesheet" href="assets/css/style-freedom.css">
</head> -->
<style>
    
*,
*::after,
*::before{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
}

.html{
    font-size: 62.5%;
}

.navbar input[type="checkbox"],
.navbar .hamburger-lines{
    display: none;
}

.container{
    max-width: 1200px;
    width: 90%;
    margin: auto;
}

.navbar{
    box-shadow: 0px 5px 10px 0px #aaa;
    /* position: fixed; */
    width: 100%;
    background: #fff;
    color: #000;
    opacity: 0.85;
    z-index: 100;
}

.navbar-container{
    display: flex;
    justify-content: space-between;
    height: 64px;
    align-items: center;
}

.menu-items{
    order: 2;
    display: flex;
}
.logo{
    order: 1;
    font-size: 2.3rem;
}

.menu-items li{
    list-style: none;
    margin-left: 1.5rem;
    font-size: 1.3rem;
}

.navbar a{
    color: #444;
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s ease-in-out;
}

.navbar a:hover{
    color: #117964;
}

@media (max-width: 768px){
    .navbar{
        opacity: 0.95;
    }

    .navbar-container input[type="checkbox"],
    .navbar-container .hamburger-lines{
        display: block;
    }

    .navbar-container{
        display: block;
        position: relative;
        height: 64px;
    }

    .navbar-container input[type="checkbox"]{
        position: absolute;
        display: block;
        height: 32px;
        width: 30px;
        top: 20px;
        left: 20px;
        z-index: 5;
        opacity: 0;
        cursor: pointer;
    }

    .navbar-container .hamburger-lines{
        display: block;
        height: 28px;
        width: 35px;
        position: absolute;
        top: 20px;
        left: 20px;
        z-index: 2;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .navbar-container .hamburger-lines .line{
        display: block;
        height: 4px;
        width: 100%;
        border-radius: 10px;
        background: #333;
    }
    
    .navbar-container .hamburger-lines .line1{
        transform-origin: 0% 0%;
        transition: transform 0.3s ease-in-out;
    }

    .navbar-container .hamburger-lines .line2{
        transition: transform 0.2s ease-in-out;
    }

    .navbar-container .hamburger-lines .line3{
        transform-origin: 0% 100%;
        transition: transform 0.3s ease-in-out;
    }

    .navbar .menu-items{
        padding-top: 100px;
        background: #fff;
        height: 100vh;
        width: 300px;
        transform: translate(-150%);
        display: flex;
        flex-direction: column;
        margin-left: -40px;
        padding-left: 40px;
        transition: transform 0.5s ease-in-out;
        box-shadow:  5px 0px 10px 0px #aaa;
        overflow: scroll;
    }

    .navbar .menu-items li{
        margin-bottom: 1.8rem;
        font-size: 1.1rem;
        font-weight: 500;
    }

    .logo{
        position: absolute;
        top: 10px;
        right: 15px;
        font-size: 2.5rem;
    }

    .navbar-container input[type="checkbox"]:checked ~ .menu-items{
        transform: translateX(0);
    }

    .navbar-container input[type="checkbox"]:checked ~ .hamburger-lines .line1{
        transform: rotate(45deg);
    }

    .navbar-container input[type="checkbox"]:checked ~ .hamburger-lines .line2{
        transform: scaleY(0);
    }

    .navbar-container input[type="checkbox"]:checked ~ .hamburger-lines .line3{
        transform: rotate(-45deg);
    }

}

@media (max-width: 500px){
    .navbar-container input[type="checkbox"]:checked ~ .logo{
        display: none;
    }
}

.tk {
    display: none;
}
@media (max-width: 995px) {
  .tk {
    display: block;
  }
}

</style>
<!-- <body> -->
    

<nav class="navbar">
            <div class="navbar-container container">
                <input type="checkbox" name="" id="">
                <div class="hamburger-lines">
                    <span class="line line1"></span>
                    <span class="line line2"></span>
                    <span class="line line3"></span>
                </div>
                <ul class="menu-items">
                    <li><a class="text-secondary" href="index.php">Home</a></li>
                    <li><a class="text-secondary" href="about.php">About</a></li>
                    <li class="dropdown">
                        <div class="dropdown-toggle text-secondary" style="border: none; font-weight: 500;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Admissions
                        </div>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="admissionschedule.php">Admission Schedule</a></li>
                            <li><a class="dropdown-item" href="feestructare.php">Fee Structare</a></li>
                            <li><a class="dropdown-item" href="coursecatelogue.php">Course Catelogue</a></li>
                            <?php if(isset($_SESSION["name"]) != null){ ?>
                                <li><a class="dropdown-item" href="admissonform.php">Apply Online</a></li>
                            <?php }else{ ?>
                                <li><a class="dropdown-item" href="login.php?er=00">Apply Online</a></li>
                            <?php } ?>
                        </ul>
                    </li>
                    <li><a class="text-secondary" href="contact.php">Contact</a></li>
                    <?php if(empty($_SESSION["mytype"])){ ?>
                    <li class="tk"><a class="text-secondary" href="login.php"><span class="fa fa-user"></span> Login</a></li>
                    <li class="tk"><a class="text-secondary" href="signup.php"><span class="fa fa-lock"></span> Register</a></li>
                    <?php }else{?>
                        
                        <li><a class="text-secondary" href="logout.php">Logout</a></li>
                    <?php } ?>
                </ul>
                <h1 class="logo" style="font-family: Forte;">ECS</h1>             
            </div>
        </nav> 
        
<!-- </body>
</html> -->