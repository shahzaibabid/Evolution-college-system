<?php
    include("../admin/connection/connection.php");
?>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Evolution College System</title>
  <link rel="stylesheet" href="../assets/css/style-freedom.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- FontAwesome 5 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
<style>
 /* Import Font Dancing Script */
@import url(https://fonts.googleapis.com/css?family=Dancing+Script);

* {
    margin: 0;
}

body {
    background-color: whitesmoke;
    font-family: Arial;
    /*overflow: hidden;*/
}

/* Sidenav */

.profile {
    margin-bottom: 20px;
    margin-top: -12px;
    /*text-align: center;*/
}

.profile img {
    border-radius: 50%;
    box-shadow: 0px 0px 5px 1px grey;
}
/* End */

/* Main */
.main {
    margin-top: 200px;
    font-size: 28px;
    padding: 0 10px;
    width: 58%;
}

.main h2 {
    color: #333;
    font-family: Times New Roman;
    font-size: 24px;
    margin-bottom: 10px;
}

.main .card {
    background-color: #fff;
    border-radius: 18px;
    box-shadow: 1px 1px 8px 0 grey;
    height: auto;
    margin-bottom: 20px;
    text-align:center;
    /*padding: 20px 0 20px 50px;*/
}

.main .card table {
    border: none;
    font-size: 2vw;
    height: auto;
    width: 80%;
    font-family: Times New Roman;
}

.edit {
    position: absolute;
    color: #e7e7e8;
    right: 14%;
}

.social-media {
    text-align: center;
    width: 90%;
}

.social-media span {
    margin: 0 10px;
}

.fa-facebook:hover {
    color: #4267b3 !important;
}

.fa-twitter:hover {
    color: #1da1f2 !important;
}

.fa-instagram:hover {
    color: #ce2b94 !important;
}

.fa-invision:hover {
    color: #f83263 !important;
}

.fa-github:hover {
    color: #161414 !important;
}

.fa-whatsapp:hover {
    color: #25d366 !important;
}

.fa-snapchat:hover {
    color: #fffb01 !important;
}

/* End */  
</style>
</head>
<body>
<!-- Navbar top -->

<?php
include("header.php");
?>  .
    <!-- End -->

  

    <!-- Main -->
    <div style="height:auto; width:100%;">
        <center>
            <div class="main center mb-5">
                <h2 class="fs-1 mt-5">Profile</h2>   
                <div class="card">
                <?php
                    $id = $_SESSION["myuserid"];
                    $select = "SELECT * FROM `std_account` WHERE `id` = $id";
                    $result = mysqli_query($db, $select);
                    $row = mysqli_fetch_array($result);
                ?>
                <center>
                    <div class="profile">
                        <img src="../admin/profile/<?php echo $row["profile"] ?>" alt="" width="100" height="100">
                    </div>
                </center>
                    <div class="card-body" style="overflow-x:auto;overflow-y:auto;">
                        <table class="w-100">
                            <tbody>
                                <tr>
                                    <td>Name</td>
                                    <td>:</td>
                                    <td><?php echo $row["name"]; ?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td class="text-wrap"><?php echo $row["email"]; ?></td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td>:</td>
                                    <td><?php echo $row["address"]; ?></td>
                                </tr>
                                <tr>
                                    <td>Class</td>
                                    <td>:</td>
                                    <td>
                                        <?php
                                            $cid = $row["class_id"];
                                            $class_sel = "SELECT * FROM `class` WHERE `id` = $cid";
                                            $class_result = mysqli_query($db, $class_sel);
                                            $class_row = mysqli_fetch_array($class_result);
                                            echo $class_row["name"];
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Program</td>
                                    <td>:</td>
                                    <td><?php echo $row["program"]; ?></td>
                                </tr>
                       
                            </tbody>
                        </table>
                    </div>
                </div>             
            </div>
        </center>
    </div>
    <!-- End -->
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>