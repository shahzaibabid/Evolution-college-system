<?php
    include("../admin/connection/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>   
.content{
    /* width: 80%; */
    background-color: white;
    height:auto;
    border-style: solid;
    border-color: black;
}
</style>
</head>
<body>
<?php
include("header.php");
?>  
    <!-- Profile Start -->
    <div class="container-fluid mt-5 pt-4 px-4">
        <?php
            $id = $_SESSION["myuserid"];
            $student = "SELECT * FROM `std_account` WHERE `id` = $id";
            $student_result = mysqli_query($db, $student);
            $student_row = mysqli_fetch_array($student_result);
            $program = $student_row["program"];
        ?>
        <br>
        <br>
        <br>
        <center><img src="../admin/profile/<?php echo $student_row["profile"]; ?>" style="height: 15vw; width: 15vw; outline:5px solid grey;" class="rounded-circle" alt=""></center>
        <h1 class="text-center"><?php echo $student_row["name"]; ?></h1>
        <p class="text-center mb-5"><?php echo $program; ?> Group</p>
        <div class="row g-4 content justify-content-center">

            <!-- Mid Term -->
                <!-- Commerce Start -->
                <?php if($program == "Commerce"){ ?>
                <div class="col-10 mb-4">
                    <div class="bg-white shadow rounded h-100 p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <h3>Mid-Term Results</h6>
                        </div>
                        <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Accounting</th>
                                        <th>Business Math</th>
                                        <th>Economics</th>
                                        <th>POC</th>
                                        <th>English</th>
                                        <th>Urdu</th>
                                        <th>Islamiat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php                                
                                        $prg = "SELECT * FROM `mid` WHERE `UserId` = $id";
                                        $prg_res = mysqli_query($db, $prg);
                                        if(mysqli_num_rows($prg_res)){
                                        $prg_row = mysqli_fetch_array($prg_res);
                                    ?>
                                    <tr>
                                        <td><?php echo $prg_row["acc"]; ?></td>
                                        <td><?php echo $prg_row["math"]; ?></td>
                                        <td><?php echo $prg_row["economic"]; ?></td>
                                        <td><?php echo $prg_row["poc"]; ?></td>
                                        <td><?php echo $prg_row["eng"]; ?></td>
                                        <td><?php echo $prg_row["urdu"]; ?></td>
                                        <td><?php echo $prg_row["isl"]; ?></td>
                                    </tr>
                                </tbody>
                                <thead>                                
                                    <tr>
                                        <th>Total</th>
                                        <td><?php echo $prg_row["ttl"]; ?></td>
                                        <th>Obtained</th>
                                        <td><?php echo $prg_row["obt"]; ?></td>
                                        <th>Per%</th>
                                        <td><?php echo $prg_row["per"]; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Grade</th>
                                        <td><?php echo $prg_row["grade"]; ?></td>
                                        <th>Status</th>
                                        <td><?php echo $prg_row["status"]; ?></td>
                                    </tr>
                                    <?php } ?>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <!-- Commerce All End -->

                <!-- Arts Start -->
                <?php if($program == "Arts"){ ?>
                <div class="col-10 mb-4">
                    <div class="bg-white shadow rounded h-100 p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <h3>Mid-Term Results</h6>
                        </div>
                        <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>English</th>
                                        <th>Urdu</th>
                                        <th>Islamiat</th>
                                        <th>Civic</th>
                                        <th>Psychology</th>
                                        <th>Education</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php                                
                                        $prg = "SELECT * FROM `mid` WHERE `UserId` = $id";
                                        $prg_res = mysqli_query($db, $prg);
                                        if(mysqli_num_rows($prg_res)){
                                        $prg_row = mysqli_fetch_array($prg_res);
                                    ?>
                                    <tr>
                                        <td><?php echo $prg_row["eng"]; ?></td>
                                        <td><?php echo $prg_row["urdu"]; ?></td>
                                        <td><?php echo $prg_row["isl"]; ?></td>
                                        <td><?php echo $prg_row["civic"]; ?></td>
                                        <td><?php echo $prg_row["psy"]; ?></td>
                                        <td><?php echo $prg_row["edu"]; ?></td>
                                    </tr>
                                </tbody>
                                <thead>                                
                                    <tr>
                                        <th>Total</th>
                                        <td><?php echo $prg_row["ttl"]; ?></td>
                                        <th>Obtained</th>
                                        <td><?php echo $prg_row["obt"]; ?></td>
                                        <th>Per%</th>
                                        <td><?php echo $prg_row["per"]; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Grade</th>
                                        <td><?php echo $prg_row["grade"]; ?></td>
                                        <th>Status</th>
                                        <td><?php echo $prg_row["status"]; ?></td>
                                    </tr>
                                    <?php } ?>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <!-- Arts All End -->
                
                <!-- Computer Science Start -->
                <?php if($program == "Computer Science"){ ?>
                <div class="col-10 mb-4">
                    <div class="bg-white shadow rounded h-100 p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <h3>Mid-Term Results</h6>
                        </div>
                        <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>English</th>
                                        <th>Urdu</th>
                                        <th>Islamiat</th>
                                        <th>Computer Science</th>
                                        <th>Math</th>
                                        <th>Physics</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php                                
                                        $prg = "SELECT * FROM `mid` WHERE `UserId` = $id";
                                        $prg_res = mysqli_query($db, $prg);
                                        if(mysqli_num_rows($prg_res)){
                                        $prg_row = mysqli_fetch_array($prg_res);
                                    ?>
                                    <tr>
                                        <td><?php echo $prg_row["eng"]; ?></td>
                                        <td><?php echo $prg_row["urdu"]; ?></td>
                                        <td><?php echo $prg_row["isl"]; ?></td>
                                        <td><?php echo $prg_row["computer"]; ?></td>
                                        <td><?php echo $prg_row["math"]; ?></td>
                                        <td><?php echo $prg_row["phy"]; ?></td>
                                    </tr>
                                </tbody>
                                <thead>                                
                                    <tr>
                                        <th>Total</th>
                                        <td><?php echo $prg_row["ttl"]; ?></td>
                                        <th>Obtained</th>
                                        <td><?php echo $prg_row["obt"]; ?></td>
                                        <th>Per%</th>
                                        <td><?php echo $prg_row["per"]; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Grade</th>
                                        <td><?php echo $prg_row["grade"]; ?></td>
                                        <th>Status</th>
                                        <td><?php echo $prg_row["status"]; ?></td>
                                    </tr>
                                    <?php } ?>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <!-- Computer Science All End -->
                
                <!-- Pre-Medical Start -->
                <?php if($program == "Pre-Medical"){ ?>
                <div class="col-10 mb-4">
                    <div class="bg-white shadow rounded h-100 p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <h3>Mid-Term Results</h6>
                        </div>
                        <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>English</th>
                                        <th>Urdu</th>
                                        <th>Islamiat</th>
                                        <th>Zoology</th>
                                        <th>Botany</th>
                                        <th>Chemistry</th>
                                        <th>Physics</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php                                
                                        $prg = "SELECT * FROM `mid` WHERE `UserId` = $id";
                                        $prg_res = mysqli_query($db, $prg);
                                        if(mysqli_num_rows($prg_res)){
                                        $prg_row = mysqli_fetch_array($prg_res);
                                    ?>
                                    <tr>
                                        <td><?php echo $prg_row["eng"]; ?></td>
                                        <td><?php echo $prg_row["urdu"]; ?></td>
                                        <td><?php echo $prg_row["isl"]; ?></td>
                                        <td><?php echo $prg_row["zoology"]; ?></td>
                                        <td><?php echo $prg_row["botany"]; ?></td>
                                        <td><?php echo $prg_row["chem"]; ?></td>
                                        <td><?php echo $prg_row["phy"]; ?></td>
                                    </tr>
                                </tbody>
                                <thead>                                
                                    <tr>
                                        <th>Total</th>
                                        <td><?php echo $prg_row["ttl"]; ?></td>
                                        <th>Obtained</th>
                                        <td><?php echo $prg_row["obt"]; ?></td>
                                        <th>Per%</th>
                                        <td><?php echo $prg_row["per"]; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Grade</th>
                                        <td><?php echo $prg_row["grade"]; ?></td>
                                        <th>Status</th>
                                        <td><?php echo $prg_row["status"]; ?></td>
                                    </tr>
                                    <?php } ?>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <!-- Pre-Medical All End -->
                
                <!-- Pre-Engineering Start -->
                <?php if($program == "Pre-Engineering"){ ?>
                <div class="col-10 mb-4">
                    <div class="bg-white shadow rounded h-100 p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <h3>Mid-Term Results</h6>
                        </div>
                        <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>English</th>
                                        <th>Urdu</th>
                                        <th>Islamiat</th>
                                        <th>math</th>
                                        <th>Chemistry</th>
                                        <th>Physics</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php                                
                                        $prg = "SELECT * FROM `mid` WHERE `UserId` = $id";
                                        $prg_res = mysqli_query($db, $prg);
                                        if(mysqli_num_rows($prg_res)){
                                        $prg_row = mysqli_fetch_array($prg_res);
                                    ?>
                                    <tr>
                                        <td><?php echo $prg_row["eng"]; ?></td>
                                        <td><?php echo $prg_row["urdu"]; ?></td>
                                        <td><?php echo $prg_row["isl"]; ?></td>
                                        <td><?php echo $prg_row["math"]; ?></td>
                                        <td><?php echo $prg_row["chem"]; ?></td>
                                        <td><?php echo $prg_row["phy"]; ?></td>
                                    </tr>
                                </tbody>
                                <thead>                                
                                    <tr>
                                        <th>Total</th>
                                        <td><?php echo $prg_row["ttl"]; ?></td>
                                        <th>Obtained</th>
                                        <td><?php echo $prg_row["obt"]; ?></td>
                                        <th>Per%</th>
                                        <td><?php echo $prg_row["per"]; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Grade</th>
                                        <td><?php echo $prg_row["grade"]; ?></td>
                                        <th>Status</th>
                                        <td><?php echo $prg_row["status"]; ?></td>
                                    </tr>
                                    <?php } ?>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <!-- Pre-Engineering All End -->
            <!-- Mid Term -->
            

            <!-- Mid Term -->
                <!-- Commerce Start -->
                <?php if($program == "Commerce"){ ?>
                <div class="col-10 mb-4">
                    <div class="bg-white shadow rounded h-100 p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <h3>Final-Term Results</h6>
                        </div>
                        <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Accounting</th>
                                        <th>Business Math</th>
                                        <th>Economics</th>
                                        <th>POC</th>
                                        <th>English</th>
                                        <th>Urdu</th>
                                        <th>Islamiat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php                                
                                        $prg = "SELECT * FROM `final` WHERE `UserId` = $id";
                                        $prg_res = mysqli_query($db, $prg);
                                        if(mysqli_num_rows($prg_res)){
                                        $prg_row = mysqli_fetch_array($prg_res);
                                    ?>
                                    <tr>
                                        <td><?php echo $prg_row["acc"]; ?></td>
                                        <td><?php echo $prg_row["math"]; ?></td>
                                        <td><?php echo $prg_row["economic"]; ?></td>
                                        <td><?php echo $prg_row["poc"]; ?></td>
                                        <td><?php echo $prg_row["eng"]; ?></td>
                                        <td><?php echo $prg_row["urdu"]; ?></td>
                                        <td><?php echo $prg_row["isl"]; ?></td>
                                    </tr>
                                </tbody>
                                <thead>                                
                                    <tr>
                                        <th>Total</th>
                                        <td><?php echo $prg_row["ttl"]; ?></td>
                                        <th>Obtained</th>
                                        <td><?php echo $prg_row["obt"]; ?></td>
                                        <th>Per%</th>
                                        <td><?php echo $prg_row["per"]; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Grade</th>
                                        <td><?php echo $prg_row["grade"]; ?></td>
                                        <th>Status</th>
                                        <td><?php echo $prg_row["status"]; ?></td>
                                    </tr>
                                    <?php } ?>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <!-- Commerce All End -->

                <!-- Arts Start -->
                <?php if($program == "Arts"){ ?>
                <div class="col-10 mb-4">
                    <div class="bg-white shadow rounded h-100 p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <h3>Final-Term Results</h6>
                        </div>
                        <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>English</th>
                                        <th>Urdu</th>
                                        <th>Islamiat</th>
                                        <th>Civic</th>
                                        <th>Psychology</th>
                                        <th>Education</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php                                
                                        $prg = "SELECT * FROM `final` WHERE `UserId` = $id";
                                        $prg_res = mysqli_query($db, $prg);
                                        if(mysqli_num_rows($prg_res)){
                                        $prg_row = mysqli_fetch_array($prg_res);
                                    ?>
                                    <tr>
                                        <td><?php echo $prg_row["eng"]; ?></td>
                                        <td><?php echo $prg_row["urdu"]; ?></td>
                                        <td><?php echo $prg_row["isl"]; ?></td>
                                        <td><?php echo $prg_row["civic"]; ?></td>
                                        <td><?php echo $prg_row["psy"]; ?></td>
                                        <td><?php echo $prg_row["edu"]; ?></td>
                                    </tr>
                                </tbody>
                                <thead>                                
                                    <tr>
                                        <th>Total</th>
                                        <td><?php echo $prg_row["ttl"]; ?></td>
                                        <th>Obtained</th>
                                        <td><?php echo $prg_row["obt"]; ?></td>
                                        <th>Per%</th>
                                        <td><?php echo $prg_row["per"]; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Grade</th>
                                        <td><?php echo $prg_row["grade"]; ?></td>
                                        <th>Status</th>
                                        <td><?php echo $prg_row["status"]; ?></td>
                                    </tr>
                                    <?php } ?>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <!-- Arts All End -->
                
                <!-- Computer Science Start -->
                <?php if($program == "Computer Science"){ ?>
                <div class="col-10 mb-4">
                    <div class="bg-white shadow rounded h-100 p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <h3>Final-Term Results</h6>
                        </div>
                        <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>English</th>
                                        <th>Urdu</th>
                                        <th>Islamiat</th>
                                        <th>Computer Science</th>
                                        <th>Math</th>
                                        <th>Physics</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php                                
                                        $prg = "SELECT * FROM `final` WHERE `UserId` = $id";
                                        $prg_res = mysqli_query($db, $prg);
                                        if(mysqli_num_rows($prg_res)){
                                        $prg_row = mysqli_fetch_array($prg_res);
                                    ?>
                                    <tr>
                                        <td><?php echo $prg_row["eng"]; ?></td>
                                        <td><?php echo $prg_row["urdu"]; ?></td>
                                        <td><?php echo $prg_row["isl"]; ?></td>
                                        <td><?php echo $prg_row["computer"]; ?></td>
                                        <td><?php echo $prg_row["math"]; ?></td>
                                        <td><?php echo $prg_row["phy"]; ?></td>
                                    </tr>
                                </tbody>
                                <thead>                                
                                    <tr>
                                        <th>Total</th>
                                        <td><?php echo $prg_row["ttl"]; ?></td>
                                        <th>Obtained</th>
                                        <td><?php echo $prg_row["obt"]; ?></td>
                                        <th>Per%</th>
                                        <td><?php echo $prg_row["per"]; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Grade</th>
                                        <td><?php echo $prg_row["grade"]; ?></td>
                                        <th>Status</th>
                                        <td><?php echo $prg_row["status"]; ?></td>
                                    </tr>
                                    <?php } ?>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <!-- Computer Science All End -->
                
                <!-- Pre-Medical Start -->
                <?php if($program == "Pre-Medical"){ ?>
                <div class="col-10 mb-4">
                    <div class="bg-white shadow rounded h-100 p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <h3>Final-Term Results</h6>
                        </div>
                        <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>English</th>
                                        <th>Urdu</th>
                                        <th>Islamiat</th>
                                        <th>Zoology</th>
                                        <th>Botany</th>
                                        <th>Chemistry</th>
                                        <th>Physics</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php                                
                                        $prg = "SELECT * FROM `final` WHERE `UserId` = $id";
                                        $prg_res = mysqli_query($db, $prg);
                                        if(mysqli_num_rows($prg_res)){
                                        $prg_row = mysqli_fetch_array($prg_res);
                                    ?>
                                    <tr>
                                        <td><?php echo $prg_row["eng"]; ?></td>
                                        <td><?php echo $prg_row["urdu"]; ?></td>
                                        <td><?php echo $prg_row["isl"]; ?></td>
                                        <td><?php echo $prg_row["zoology"]; ?></td>
                                        <td><?php echo $prg_row["botany"]; ?></td>
                                        <td><?php echo $prg_row["chem"]; ?></td>
                                        <td><?php echo $prg_row["phy"]; ?></td>
                                    </tr>
                                </tbody>
                                <thead>                                
                                    <tr>
                                        <th>Total</th>
                                        <td><?php echo $prg_row["ttl"]; ?></td>
                                        <th>Obtained</th>
                                        <td><?php echo $prg_row["obt"]; ?></td>
                                        <th>Per%</th>
                                        <td><?php echo $prg_row["per"]; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Grade</th>
                                        <td><?php echo $prg_row["grade"]; ?></td>
                                        <th>Status</th>
                                        <td><?php echo $prg_row["status"]; ?></td>
                                    </tr>
                                    <?php } ?>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <!-- Pre-Medical All End -->
                
                <!-- Pre-Engineering Start -->
                <?php if($program == "Pre-Engineering"){ ?>
                <div class="col-10 mb-4">
                    <div class="bg-white shadow rounded h-100 p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <h3>Final-Term Results</h6>
                        </div>
                        <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>English</th>
                                        <th>Urdu</th>
                                        <th>Islamiat</th>
                                        <th>math</th>
                                        <th>Chemistry</th>
                                        <th>Physics</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php                                
                                        $prg = "SELECT * FROM `final` WHERE `UserId` = $id";
                                        $prg_res = mysqli_query($db, $prg);
                                        if(mysqli_num_rows($prg_res)){
                                        $prg_row = mysqli_fetch_array($prg_res);
                                    ?>
                                    <tr>
                                        <td><?php echo $prg_row["eng"]; ?></td>
                                        <td><?php echo $prg_row["urdu"]; ?></td>
                                        <td><?php echo $prg_row["isl"]; ?></td>
                                        <td><?php echo $prg_row["math"]; ?></td>
                                        <td><?php echo $prg_row["chem"]; ?></td>
                                        <td><?php echo $prg_row["phy"]; ?></td>
                                    </tr>
                                </tbody>
                                <thead>                                
                                    <tr>
                                        <th>Total</th>
                                        <td><?php echo $prg_row["ttl"]; ?></td>
                                        <th>Obtained</th>
                                        <td><?php echo $prg_row["obt"]; ?></td>
                                        <th>Per%</th>
                                        <td><?php echo $prg_row["per"]; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Grade</th>
                                        <td><?php echo $prg_row["grade"]; ?></td>
                                        <th>Status</th>
                                        <td><?php echo $prg_row["status"]; ?></td>
                                    </tr>
                                    <?php } ?>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <!-- Pre-Engineering All End -->
            <!-- Mid Term -->
        </div>
    </div>
    <!-- Profile End -->

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>