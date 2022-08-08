<?php
 
?>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Evolution College System</title>
  <link rel="stylesheet" href="assets/css/style-freedom.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <style>
    body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
       
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}
  </style>
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
  <!-- Topbar start -->

  <?php
include("topbar.php");
if(isset($_SESSION["name"]) == null) {
    ?>
        <Script>
            window.location.assign("index.php");
        </Script>
        <?php
  }
?>
<!-- Topbar end -->
  <!-- headers start -->

  <?php
include("header.php");
?>
<!-- header end -->

  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script>
      $('#drop').change(function () {
      if ($('#drop').is(":checked")) {
      $('body').css('overflow', 'hidden');
      } else {
      $('body').css('overflow', 'auto');
      }
      });
      </script>
</section>
<!-- Headers-4 block -->
<!-- inner banner -->
<section class="inner-banner-main">
    <div class="about-inner">
        <div class="wrapper">
            
            <ul class="breadcrumbs-custom-path">
                <h3>Profile </h3>
            </ul>
        </div>
    </div>
</section>
<!-- //covers -->
<!---728x90--->




<!-- specifications -->
<section class="w3l-specifications-9 mt-5">
    <?php
        $id = $_SESSION["myuserid"];
        $sel = "SELECT * FROM `users` WHERE `id` = $id;";
        $res = mysqli_query($db, $sel);
        while($row = mysqli_fetch_array($res)) {
    ?>
        <div class="row gutters-sm w-100">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://cdn3d.iconscout.com/3d/premium/thumb/user-3711850-3105265.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo $row[1]; ?></h4>
                      <p class="text-secondary mb-1"><?php echo $row[2]; ?></p>
                  
            
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-7 mt-5">
              <div class="card mb-3">
                <div class="card-body" style="border:1px solid black;">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0"> Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row[1]; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row[2]; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row[3]; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">CNIC</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row[7]; ?>
                    </div>
                  </div>
               
                </div>
              </div>

              



            </div>
        </div>
    <?php
        }
    ?>
    <!-- //specifications -->
</section>

<section class="container mt-5">
    <h1>Forms</h1>

    <div class="table-responsive" style="overflow-x:auto; overflow-y:auto;">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="col">#</th>
                                            <th scope="col">Profile</th>
                                            <th scope="col">Email</th>
                                            <th class="col">Status</th>
                                            <th scope="col" style="visibility: hidden;">Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $sel_admission_form = "SELECT * FROM `admission_form` WHERE `user_id_` = $id";
                                            $admission_form_result = mysqli_query($db, $sel_admission_form);
                                            if(mysqli_num_rows($admission_form_result)) {
                                                $i = 0;
                                                while($row = mysqli_fetch_array($admission_form_result)) {                                                    
                                                    $i++;
                                        ?>
                                        <tr>
                                            <td class="align-middle" scope="row"><?php echo $i; ?></td>
                                            <td class="align-middle" type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo $row[1]; ?>">
                                                <img src="assets/images/profile/<?php echo $row[15]; ?>" style="height: 3vw;" alt="">
                                            </td>
                                            <td class="align-middle"><?php echo $row[3]; ?></td>
                                            <td class="align-middle"><?php echo $row[16]; ?></td>
                                            <td class="align-middle"> <span type="button" data-bs-toggle="modal" data-bs-target="#e<?php echo $i; ?>" class="badge bg-secondary rounded-pill badge-sm">DETAILS</span></a> </td>
                                            
                                        </tr>               

                                        <!-- Form Modal -->
                                        <div class="modal fade" id="e<?php echo $i; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content bg-light">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="staticBackdropLabel">Form Details</h4>
                                                            <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="bg-light p-4 container">
                                                                <ul class="list-group list-group-flush bg-light border border-dark">
                                                                    <li class="list-group-item bg-light text-center">
                                                                        <img src="assets/images/profile/<?php echo $row[15]; ?>" style="height: 12vw;" alt="">
                                                                    </li>

                                                                    <li class="list-group-item bg-light"><div class="row">
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Student Name : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[1]; ?></div>
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Father Name : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[2]; ?></div>
                                                                    </div></li>

                                                                    <li class="list-group-item bg-light"><div class="row">
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Email : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[3]; ?></div>
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Phone : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[4]; ?></div>
                                                                    </div></li>

                                                                    <li class="list-group-item bg-light"><div class="row">
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Date Of Birth : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[5]; ?></div>
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Gender : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[6]; ?></div>
                                                                    </div></li>

                                                                    <li class="list-group-item bg-light"><div class="row">
                                                                        <div class="fs-5 col-md-6 border border-light"><b>Address : </b></div><div class="fs-5 col-md-6 border border-light"><?php echo " " . $row[7]; ?></div>
                                                                    </div></li>

                                                                    <li class="list-group-item bg-light"><div class="row">
                                                                        <div class="fs-5 col-md-3 border border-light"><b>CNIC/Bayform : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[8]; ?></div>
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Citizenship : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[9]; ?></div>
                                                                    </div></li>

                                                                    <li class="list-group-item bg-light"><div class="row">
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Religion : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[10]; ?></div>
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Program : </b></div><div class="fs-5 col-md-3 border border-light"><?php echo " " . $row[11]; ?></div>
                                                                    </div></li>

                                                                    <li class="list-group-item bg-light"><div class="row">
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Marksheet : </b></div><div class="col-md-3 border border-light"><a href="assets/images/mksheet/<?php echo $row[12]; ?>" target="_blank" rel="noopener noreferrer"><span class="fs-5 ">Please click here </span><i class="fas fa-external-link-alt"></i></a></div>
                                                                        <div class="fs-5 col-md-3 border border-light"><b>Provisional Certifacate : </b></div><div class="col-md-3 border border-light"><a href="assets/images/prov/<?php echo $row[13]; ?>" target="_blank" rel="noopener noreferrer"><span class="fs-5 ">Please click here </span><i class="fas fa-external-link-alt"></i></a></div>
                                                                    </div></li>
                                                                </ul>
                                                            </div>
                                                        </div>
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
</section>


<br><br>
  <!-- footer start -->

  <?php
include("footer.php");
?>
<!-- footer end -->
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>