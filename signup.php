<?php
include("conn.php");
?>
<!DOCTYPE html>
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


if(isset($_POST["submit"])) {

  $email = $_POST["email"];
  $cnic = $_POST["cnic"];
  $sel = "SELECT * FROM `users` WHERE `email` = '$email' OR `CNIC` = '$cnic'";
  $result = mysqli_query($db, $sel);
  // $dr = ;
  if(mysqli_num_rows($result)) {
    $error = "Invalid Email or CNIC";
  }
  else {
    $ph = $_POST["phone"];
    $name = $_POST["name"];
    $pass = $_POST["pass"];
    $pass = md5($pass);
    $inp = "INSERT INTO `users`(`name`, `email`, `phone`, `pass`, `profile`, `CNIC`) VALUES ('$name','$email','$ph','$pass','Capture.png','$cnic')";
    $resultinp = mysqli_query($db, $inp);
    ?>
        <Script>
            window.location.assign("./login.php");
        </Script>
    <?php
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
<!---728x90--->

    <div id="forms23-block">
        <div class="wrapper">
                <div class="logo1">
                        <a class="brand-logo" href=""> New Registration</a>
                        <!-- if logo is image enable this   
                        <a class="brand-logo" href="#index.html">
                            <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                        </a> -->
                    </div>
            <div class="d-grid forms23-grids">
              <div style="margin-top:80px;">
               <img src="assets/images/reg.gif" width="100%" alt="">
               </div> 
               <div class="form23">
               <center> <h2>Register Here</h2></center>
                  <br>
                        <p class="text-danger text-center"><?php if(isset($error)) { echo $error; } ?></p>
                    <form action="#" method="post">
                        <input type="text" name="name" placeholder="your FullName" required="required" />
                        <input type="text" name="cnic" placeholder="your personal cnic/B-form" required="required" />
                        <input type="email" name="email" placeholder="your  Email" required="required" />
                        <input type="text" name="phone" placeholder="your phone number" required="required" />
                        <input type="password" name="pass" placeholder="Password" required="required" />
                       
                        <button type="submit" name="submit">Sign Up</button>
                    </form>
                    <h5>Already registered? <a href="login.php">Login now</a></h5>
                    
                </div>
                
            </div>
        </div>
        
    </div>
	<!---728x90--->

</section>
<br>
  <!-- footer start -->

  <?php
include("footer.php");
?>
<!-- footer end -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
