<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Evolution College System</title>
  <link rel="stylesheet" href="assets/css/style-freedom.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<script src='../../../../../../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script><script src="../../../../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
  	}
})();
</script>
<script>
(function(){
if(typeof _bsa !== 'undefined' && _bsa) {
	// format, zoneKey, segment:value, options
	_bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
}
})();
</script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
  	}
})();
</script>
<!--<script>(function(v,d,o,ai){ai=d.createElement("script");ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, "//a.vdo.ai/core/w3layouts_V2/vdo.ai.js?vdo=34");</script>-->
<div id="codefund"><!-- fallback content --></div>
<script src="../../../../../../../codefund.io/properties/441/funder.js" async="async"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src='https://www.googletagmanager.com/gtag/js?id=G-98H8KRKT85'></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-98H8KRKT85');
</script>
<meta name="robots" content="noindex">
<body>
	<!-- Demo bar start -->
  <link rel="stylesheet" href="../../../../../../assests/css/font-awesome.min.css">
<!-- New toolbar-->
<style>
* {
  box-sizing: border-box;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
}

h2{
        font-family:georgia;
        font-size:bold;
    }
</style>
<body>
  
  <!-- Topbar start -->

  <?php

include("topbar.php");
if(isset($_SESSION["name"]) != null) {
  ?>
  <Script>
      window.location.assign("./index.php");
  </Script>            
  <?php
}

if (isset($_POST["submit"])) {                    
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

              $sel = "SELECT * FROM `users` WHERE `email` = '$email' && `pass` = '$pass'";
              $result = mysqli_query($db, $sel);

      if(mysqli_num_rows($result)) {
          while($row = mysqli_fetch_array($result)) {
              $_SESSION["myuserid"] = $row[0];
              $_SESSION["name"] = $row[1];
              $_SESSION["mytype"] = $row[5];
              $_SESSION["email"] = $row[2];
          }

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
?>
<!-- Topbar end -->
      <!-- headers start -->

      <?php
include("header.php");
?>
<!-- header end -->
<!-- Forms23 block -->
<section class="w3l-forms-23">
    <div id="forms23-block">
            <!---728x90--->

        <div class="wrapper">
                <div class="logo1">
                        <a class="brand-logo" href="">Existing User</a>
                        <!-- if logo is image enable this   
                        <a class="brand-logo" href="#index.html">
                            <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                        </a> -->
                    </div>
                  <?php if(isset($_GET["er"])) { ?><marquee behavior="smooth" class="mb-5 text-danger fw-bolder" direction="left">PLEASE FIRST LOGIN TO FILL ADMISSION FORM</marquee> <?php } ?>
            <div class="d-grid forms23-grids">
            <div style="margin-top:70px;">
               <img src="assets/images/reg.gif" width="100%" alt="">
               </div> 
                <div class="form23">
                  <br><br>
                  <center> <h2>Login Here</h2></center>
                       <br>
                           <p style="color: red;"><?php if(isset($error)) {echo $error;} ?></p>
                    <form action="#" method="POST">
                        <input type="email" name="email" placeholder="Email" required="required" />
                        <input type="password" name="pass" placeholder="Password" required="required" />
                        <a href="#URL">Forgot your password?</a>
                        <button type="submit" name="submit">Login</button>
                    </form>
                    <h5>Not registered yet? <a href="signup.php">Register now</a></h5>
                </div>
            </div>
        </div>
       <!---728x90--->

    </div>
</section>
  <!-- footer start -->

  <?php
include("footer.php");
?>
<!-- footer end -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
