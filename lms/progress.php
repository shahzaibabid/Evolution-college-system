<?php
 include("../topbar.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                <center><img src="../admin/profile/<?php echo $student_row["profile"]; ?>" style="height: 15vw; width: 15vw; outline:5px solid grey;" class="rounded-circle" alt=""></center>
                <h1 class="text-center"><?php echo $student_row["name"]; ?></h1>
                <p class="text-center text-white mb-5"><?php echo $program; ?> Group</p>
                <div class="row g-4">
                    <!-- English All Start -->
                    <div class="col-6 mb-4">
                        <div class="bg-white shadow rounded h-100 p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <h6>English Results</h6>
                            </div>
                            <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Test</th>
                                            <th scope="col">Marks</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $eng = "SELECT * FROM `english` WHERE `student_id` = $id ORDER BY `id` DESC";
                                            $eng_result = mysqli_query($db, $eng);
                                            if(mysqli_num_rows($eng_result)) {
                                                $engcount = "SELECT COUNT(`id`) FROM `english` WHERE `student_id` = $id";
                                                $engcount_result = mysqli_query($db, $engcount);
                                                $engcount_row = mysqli_fetch_array($engcount_result);
                                                $eng_test = $engcount_row["COUNT(`id`)"] + 1;
                                                while($eng_row = mysqli_fetch_array($eng_result)) {
                                                    $eng_test--;
                                                    ?>
                                                    <tr>
                                                        <td><?php echo "Test#" . $eng_test; ?></td>
                                                        <td><?php echo $eng_row["obt_mks"] . "/" . $eng_row["total_mks"]; ?></td>
                                                        <td><?php echo $eng_row["status"]; ?></td>
                                                    </tr>
                                                    <?php
                                                }
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- English All End -->

                    <!-- Urdu All Start -->
                    <div class="col-6 mb-4">
                        <div class="bg-white shadow rounded h-100 p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <h6>Urdu Results</h6>
                            </div>
                            <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Test</th>
                                            <th scope="col">Marks</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $urd = "SELECT * FROM `urdu` WHERE `student_id` = $id ORDER BY `id` DESC";
                                            $urd_result = mysqli_query($db, $urd);
                                            if(mysqli_num_rows($urd_result)) {
                                                $urdcount = "SELECT COUNT(`id`) FROM `urdu` WHERE `student_id` = $id";
                                                $urdcount_result = mysqli_query($db, $urdcount);
                                                $urdcount_row = mysqli_fetch_array($urdcount_result);
                                                $urd_test = $urdcount_row["COUNT(`id`)"] + 1;
                                                while($urd_row = mysqli_fetch_array($urd_result)) {
                                                    $urd_test--;
                                                    ?>
                                                    <tr>
                                                        <td><?php echo "Test#" . $urd_test; ?></td>
                                                        <td><?php echo $urd_row["obt_mks"] . "/" . $urd_row["total_mks"]; ?></td>
                                                        <td><?php echo $urd_row["status"]; ?></td>
                                                    </tr>
                                                    <?php
                                                }
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Urdu All End -->

                    <!-- Islamiat/Religion All Start -->
                    <div class="col-6 mb-4">
                        <div class="bg-white shadow rounded h-100 p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <h6>Islamiat/Religion Results</h6>
                            </div>
                            <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Test</th>
                                            <th scope="col">Marks</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $rel = "SELECT * FROM `islamiat` WHERE `student_id` = $id ORDER BY `id` DESC";
                                            $rel_result = mysqli_query($db, $rel);
                                            if(mysqli_num_rows($rel_result)) {
                                                $relcount = "SELECT COUNT(`id`) FROM `islamiat` WHERE `student_id` = $id";
                                                $relcount_result = mysqli_query($db, $relcount);
                                                $relcount_row = mysqli_fetch_array($relcount_result);
                                                $rel_test = $relcount_row["COUNT(`id`)"] + 1;
                                                while($rel_row = mysqli_fetch_array($rel_result)) {
                                                    $rel_test--;
                                                    ?>
                                                    <tr>
                                                        <td><?php echo "Test#" . $rel_test; ?></td>
                                                        <td><?php echo $rel_row["obt_mks"] . "/" . $rel_row["total_mks"]; ?></td>
                                                        <td><?php echo $rel_row["status"]; ?></td>
                                                    </tr>
                                                    <?php
                                                }
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Islamiat/Religion All End -->

                    <?php
                        if($program == "Pre-Engineering") {
                    ?>
                            <!-- Chemistry Pre-Engineering Start -->
                            <div class="col-6 mb-4">
                                <div class="bg-white shadow rounded h-100 p-4">
                                    <div class="d-flex justify-content-between mb-4">
                                        <h6>Chemistry Results</h6>
                                    </div>
                                    <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Test</th>
                                                    <th scope="col">Marks</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $chem = "SELECT * FROM `chemistry` WHERE `student_id` = $id ORDER BY `id` DESC";
                                                    $chem_result = mysqli_query($db, $chem);
                                                    if(mysqli_num_rows($chem_result)) {
                                                        $chemcount = "SELECT COUNT(`id`) FROM `chemistry` WHERE `student_id` = $id";
                                                        $chemcount_result = mysqli_query($db, $chemcount);
                                                        $chemcount_row = mysqli_fetch_array($chemcount_result);
                                                        $chem_test = $chemcount_row["COUNT(`id`)"] + 1;
                                                        while($chem_row = mysqli_fetch_array($chem_result)) {
                                                            $chem_test--;
                                                            ?>
                                                            <tr>
                                                                <td><?php echo "Test#" . $chem_test; ?></td>
                                                                <td><?php echo $chem_row["obt_mks"] . "/" . $chem_row["total_mks"]; ?></td>
                                                                <td><?php echo $chem_row["status"]; ?></td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Chemistry Pre-Engineering End -->
                    <?php
                        }
                        else if($program == "Pre-Medical") {
                    ?>
                            <!-- Chemistry Pre-Medical Start -->
                            <div class="col-6 mb-4">
                                <div class="bg-white shadow rounded h-100 p-4">
                                    <div class="d-flex justify-content-between mb-4">
                                        <h6>Chemistry Results</h6>
                                    </div>
                                    <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Test</th>
                                                    <th scope="col">Marks</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $chem = "SELECT * FROM `chemistry` WHERE `student_id` = $id ORDER BY `id` DESC";
                                                    $chem_result = mysqli_query($db, $chem);
                                                    if(mysqli_num_rows($chem_result)) {
                                                        $chemcount = "SELECT COUNT(`id`) FROM `chemistry` WHERE `student_id` = $id";
                                                        $chemcount_result = mysqli_query($db, $chemcount);
                                                        $chemcount_row = mysqli_fetch_array($chemcount_result);
                                                        $chem_test = $chemcount_row["COUNT(`id`)"] + 1;
                                                        while($chem_row = mysqli_fetch_array($chem_result)) {
                                                            $chem_test--;
                                                            ?>
                                                            <tr>
                                                                <td><?php echo "Test#" . $chem_test; ?></td>
                                                                <td><?php echo $chem_row["obt_mks"] . "/" . $chem_row["total_mks"]; ?></td>
                                                                <td><?php echo $chem_row["status"]; ?></td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Chemistry Pre-Medical End -->
                    <?php
                        }
                    ?>

                    <?php
                        if($program == "Pre-Engineering") {
                    ?>
                            <!-- Physic Pre-Engineering Start -->
                            <div class="col-6 mb-4">
                                <div class="bg-white shadow rounded h-100 p-4">
                                    <div class="d-flex justify-content-between mb-4">
                                        <h6>Physic Results</h6>
                                    </div>
                                    <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Test</th>
                                                    <th scope="col">Marks</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $phy = "SELECT * FROM `physic` WHERE `student_id` = $id ORDER BY `id` DESC";
                                                    $phy_result = mysqli_query($db, $phy);
                                                    if(mysqli_num_rows($phy_result)) {
                                                        $phycount = "SELECT COUNT(`id`) FROM `physic` WHERE `student_id` = $id";
                                                        $phycount_result = mysqli_query($db, $phycount);
                                                        $phycount_row = mysqli_fetch_array($phycount_result);
                                                        $phy_test = $phycount_row["COUNT(`id`)"] + 1;
                                                        while($phy_row = mysqli_fetch_array($phy_result)) {
                                                            $phy_test--;
                                                            ?>
                                                            <tr>
                                                                <td><?php echo "Test#" . $phy_test; ?></td>
                                                                <td><?php echo $phy_row["obt_mks"] . "/" . $phy_row["total_mks"]; ?></td>
                                                                <td><?php echo $phy_row["status"]; ?></td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Physic Pre-Engineering End -->
                    <?php
                        }
                        else if($program == "Pre-Medical") {
                    ?>
                            <!-- Physic Pre-Medical Start -->
                            <div class="col-6 mb-4">
                                <div class="bg-white shadow rounded h-100 p-4">
                                    <div class="d-flex justify-content-between mb-4">
                                        <h6>Physic Results</h6>
                                    </div>
                                    <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Test</th>
                                                    <th scope="col">Marks</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $phy = "SELECT * FROM `physic` WHERE `student_id` = $id ORDER BY `id` DESC";
                                                    $phy_result = mysqli_query($db, $phy);
                                                    if(mysqli_num_rows($phy_result)) {
                                                        $phycount = "SELECT COUNT(`id`) FROM `physic` WHERE `student_id` = $id";
                                                        $phycount_result = mysqli_query($db, $phycount);
                                                        $phycount_row = mysqli_fetch_array($phycount_result);
                                                        $phy_test = $phycount_row["COUNT(`id`)"] + 1;
                                                        while($phy_row = mysqli_fetch_array($phy_result)) {
                                                            $phy_test--;
                                                            ?>
                                                            <tr>
                                                                <td><?php echo "Test#" . $phy_test; ?></td>
                                                                <td><?php echo $phy_row["obt_mks"] . "/" . $phy_row["total_mks"]; ?></td>
                                                                <td><?php echo $phy_row["status"]; ?></td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Physic Pre-Medical End -->
                    <?php
                        }
                        else if($program == "Computer Science") {
                    ?>
                            <!-- Physic Computer Science Start -->
                            <div class="col-6 mb-4">
                                <div class="bg-white shadow rounded h-100 p-4">
                                    <div class="d-flex justify-content-between mb-4">
                                        <h6>Physic Results</h6>
                                    </div>
                                    <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Test</th>
                                                    <th scope="col">Marks</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $phy = "SELECT * FROM `physic` WHERE `student_id` = $id ORDER BY `id` DESC";
                                                    $phy_result = mysqli_query($db, $phy);
                                                    if(mysqli_num_rows($phy_result)) {
                                                        $phycount = "SELECT COUNT(`id`) FROM `physic` WHERE `student_id` = $id";
                                                        $phycount_result = mysqli_query($db, $phycount);
                                                        $phycount_row = mysqli_fetch_array($phycount_result);
                                                        $phy_test = $phycount_row["COUNT(`id`)"] + 1;
                                                        while($phy_row = mysqli_fetch_array($phy_result)) {
                                                            $phy_test--;
                                                            ?>
                                                            <tr>
                                                                <td><?php echo "Test#" . $phy_test; ?></td>
                                                                <td><?php echo $phy_row["obt_mks"] . "/" . $phy_row["total_mks"]; ?></td>
                                                                <td><?php echo $phy_row["status"]; ?></td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Physic Computer Science End -->
                    <?php
                        }
                    ?>

                    <?php
                        if($program == "Pre-Engineering") {
                    ?>
                            <!-- Math Pre-Engineering Start -->
                            <div class="col-6 mb-4">
                                <div class="bg-white shadow rounded h-100 p-4">
                                    <div class="d-flex justify-content-between mb-4">
                                        <h6>Math Results</h6>
                                    </div>
                                    <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Test</th>
                                                    <th scope="col">Marks</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $mth = "SELECT * FROM `math` WHERE `student_id` = $id ORDER BY `id` DESC";
                                                    $mth_result = mysqli_query($db, $mth);
                                                    if(mysqli_num_rows($mth_result)) {
                                                        $mthcount = "SELECT COUNT(`id`) FROM `math` WHERE `student_id` = $id";
                                                        $mthcount_result = mysqli_query($db, $mthcount);
                                                        $mthcount_row = mysqli_fetch_array($mthcount_result);
                                                        $mth_test = $mthcount_row["COUNT(`id`)"] + 1;
                                                        while($mth_row = mysqli_fetch_array($mth_result)) {
                                                            $mth_test--;
                                                            ?>
                                                            <tr>
                                                                <td><?php echo "Test#" . $mth_test; ?></td>
                                                                <td><?php echo $mth_row["obt_mks"] . "/" . $mth_row["total_mks"]; ?></td>
                                                                <td><?php echo $mth_row["status"]; ?></td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Math Pre-Engineering End -->
                    <?php
                        }
                        else if($program == "Computer Science") {
                    ?>
                            <!-- Math Computer Science Start -->
                            <div class="col-6 mb-4">
                                <div class="bg-white shadow rounded h-100 p-4">
                                    <div class="d-flex justify-content-between mb-4">
                                        <h6>Math Results</h6>
                                    </div>
                                    <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Test</th>
                                                    <th scope="col">Marks</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $mth = "SELECT * FROM `math` WHERE `student_id` = $id ORDER BY `id` DESC";
                                                    $mth_result = mysqli_query($db, $mth);
                                                    if(mysqli_num_rows($mth_result)) {
                                                        $mthcount = "SELECT COUNT(`id`) FROM `math` WHERE `student_id` = $id";
                                                        $mthcount_result = mysqli_query($db, $mthcount);
                                                        $mthcount_row = mysqli_fetch_array($mthcount_result);
                                                        $mth_test = $mthcount_row["COUNT(`id`)"] + 1;
                                                        while($mth_row = mysqli_fetch_array($mth_result)) {
                                                            $mth_test--;
                                                            ?>
                                                            <tr>
                                                                <td><?php echo "Test#" . $mth_test; ?></td>
                                                                <td><?php echo $mth_row["obt_mks"] . "/" . $mth_row["total_mks"]; ?></td>
                                                                <td><?php echo $mth_row["status"]; ?></td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Math Computer Science End -->
                    <?php
                        }
                        else if($program == "Commerce") {
                    ?>
                            <!-- Math Commerce Start -->
                            <div class="col-6 mb-4">
                                <div class="bg-white shadow rounded h-100 p-4">
                                    <div class="d-flex justify-content-between mb-4">
                                        <h6>Business Math Results</h6>
                                    </div>
                                    <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Test</th>
                                                    <th scope="col">Marks</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $mth = "SELECT * FROM `math` WHERE `student_id` = $id ORDER BY `id` DESC";
                                                    $mth_result = mysqli_query($db, $mth);
                                                    if(mysqli_num_rows($mth_result)) {
                                                        $mthcount = "SELECT COUNT(`id`) FROM `math` WHERE `student_id` = $id";
                                                        $mthcount_result = mysqli_query($db, $mthcount);
                                                        $mthcount_row = mysqli_fetch_array($mthcount_result);
                                                        $mth_test = $mthcount_row["COUNT(`id`)"] + 1;
                                                        while($mth_row = mysqli_fetch_array($mth_result)) {
                                                            $mth_test--;
                                                            ?>
                                                            <tr>
                                                                <td><?php echo "Test#" . $mth_test; ?></td>
                                                                <td><?php echo $mth_row["obt_mks"] . "/" . $mth_row["total_mks"]; ?></td>
                                                                <td><?php echo $mth_row["status"]; ?></td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Math Commerce End -->
                    <?php
                        }
                    ?>

                    <?php
                        if($program == "Pre-Medical") {
                    ?>
                            <!-- Zoology Pre-Medical Start -->
                            <div class="col-6 mb-4">
                                <div class="bg-white shadow rounded h-100 p-4">
                                    <div class="d-flex justify-content-between mb-4">
                                        <h6>Zoology Results</h6>
                                    </div>
                                    <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Test</th>
                                                    <th scope="col">Marks</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $zoo = "SELECT * FROM `zoology` WHERE `student_id` = $id ORDER BY `id` DESC";
                                                    $zoo_result = mysqli_query($db, $zoo);
                                                    if(mysqli_num_rows($zoo_result)) {
                                                        $zoocount = "SELECT COUNT(`id`) FROM `zoology` WHERE `student_id` = $id";
                                                        $zoocount_result = mysqli_query($db, $zoocount);
                                                        $zoocount_row = mysqli_fetch_array($zoocount_result);
                                                        $zoo_test = $zoocount_row["COUNT(`id`)"] + 1;
                                                        while($zoo_row = mysqli_fetch_array($zoo_result)) {
                                                            $zoo_test--;
                                                            ?>
                                                            <tr>
                                                                <td><?php echo "Test#" . $zoo_test; ?></td>
                                                                <td><?php echo $zoo_row["obt_mks"] . "/" . $zoo_row["total_mks"]; ?></td>
                                                                <td><?php echo $zoo_row["status"]; ?></td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Zoology Pre-Medical End -->
                    <?php
                        }
                    ?>

                    <?php
                        if($program == "Pre-Medical") {
                    ?>
                            <!-- Botany Pre-Medical Start -->
                            <div class="col-6 mb-4">
                                <div class="bg-white shadow rounded h-100 p-4">
                                    <div class="d-flex justify-content-between mb-4">
                                        <h6>Botany Results</h6>
                                    </div>
                                    <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Test</th>
                                                    <th scope="col">Marks</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $bot = "SELECT * FROM `botany` WHERE `student_id` = $id ORDER BY `id` DESC";
                                                    $bot_result = mysqli_query($db, $bot);
                                                    if(mysqli_num_rows($bot_result)) {
                                                        $botcount = "SELECT COUNT(`id`) FROM `botany` WHERE `student_id` = $id";
                                                        $botcount_result = mysqli_query($db, $botcount);
                                                        $botcount_row = mysqli_fetch_array($botcount_result);
                                                        $bot_test = $botcount_row["COUNT(`id`)"] + 1;
                                                        while($bot_row = mysqli_fetch_array($bot_result)) {
                                                            $bot_test--;
                                                            ?>
                                                            <tr>
                                                                <td><?php echo "Test#" . $bot_test; ?></td>
                                                                <td><?php echo $bot_row["obt_mks"] . "/" . $bot_row["total_mks"]; ?></td>
                                                                <td><?php echo $bot_row["status"]; ?></td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Botany Pre-Medical End -->
                    <?php
                        }
                    ?>

                    <?php
                        if($program == "Computer Science") {
                    ?>
                            <!-- Computer Science Start -->
                            <div class="col-6 mb-4">
                                <div class="bg-white shadow rounded h-100 p-4">
                                    <div class="d-flex justify-content-between mb-4">
                                        <h6>Computer Science Results</h6>
                                    </div>
                                    <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Test</th>
                                                    <th scope="col">Marks</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $comp = "SELECT * FROM `computer_science` WHERE `student_id` = $id ORDER BY `id` DESC";
                                                    $comp_result = mysqli_query($db, $comp);
                                                    if(mysqli_num_rows($comp_result)) {
                                                        $compcount = "SELECT COUNT(`id`) FROM `computer_science` WHERE `student_id` = $id";
                                                        $compcount_result = mysqli_query($db, $compcount);
                                                        $compcount_row = mysqli_fetch_array($compcount_result);
                                                        $comp_test = $compcount_row["COUNT(`id`)"] + 1;
                                                        while($comp_row = mysqli_fetch_array($comp_result)) {
                                                            $comp_test--;
                                                            ?>
                                                            <tr>
                                                                <td><?php echo "Test#" . $comp_test; ?></td>
                                                                <td><?php echo $comp_row["obt_mks"] . "/" . $comp_row["total_mks"]; ?></td>
                                                                <td><?php echo $comp_row["status"]; ?></td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Computer Science End -->
                    <?php
                        }
                    ?>

                    <?php
                        if($program == "Arts") {
                    ?>
                            <!-- Civics Arts Start -->
                            <div class="col-6 mb-4">
                                <div class="bg-white shadow rounded h-100 p-4">
                                    <div class="d-flex justify-content-between mb-4">
                                        <h6>Civics Results</h6>
                                    </div>
                                    <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Test</th>
                                                    <th scope="col">Marks</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $civ = "SELECT * FROM `civics` WHERE `student_id` = $id ORDER BY `id` DESC";
                                                    $civ_result = mysqli_query($db, $civ);
                                                    if(mysqli_num_rows($civ_result)) {
                                                        $civcount = "SELECT COUNT(`id`) FROM `civics` WHERE `student_id` = $id";
                                                        $civcount_result = mysqli_query($db, $civcount);
                                                        $civcount_row = mysqli_fetch_array($civcount_result);
                                                        $civ_test = $civcount_row["COUNT(`id`)"] + 1;
                                                        while($civ_row = mysqli_fetch_array($civ_result)) {
                                                            $civ_test--;
                                                            ?>
                                                            <tr>
                                                                <td><?php echo "Test#" . $civ_test; ?></td>
                                                                <td><?php echo $civ_row["obt_mks"] . "/" . $civ_row["total_mks"]; ?></td>
                                                                <td><?php echo $civ_row["status"]; ?></td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Civics Arts End -->
                    <?php
                        }
                    ?>

                    <?php
                        if($program == "Arts") {
                    ?>
                            <!-- Psychology Arts Start -->
                            <div class="col-6 mb-4">
                                <div class="bg-white shadow rounded h-100 p-4">
                                    <div class="d-flex justify-content-between mb-4">
                                        <h6>Psychology Results</h6>
                                    </div>
                                    <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Test</th>
                                                    <th scope="col">Marks</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $psy = "SELECT * FROM `psychology` WHERE `student_id` = $id ORDER BY `id` DESC";
                                                    $psy_result = mysqli_query($db, $psy);
                                                    if(mysqli_num_rows($psy_result)) {
                                                        $psycount = "SELECT COUNT(`id`) FROM `psychology` WHERE `student_id` = $id";
                                                        $psycount_result = mysqli_query($db, $psycount);
                                                        $psycount_row = mysqli_fetch_array($psycount_result);
                                                        $psy_test = $psycount_row["COUNT(`id`)"] + 1;
                                                        while($psy_row = mysqli_fetch_array($psy_result)) {
                                                            $psy_test--;
                                                            ?>
                                                            <tr>
                                                                <td><?php echo "Test#" . $psy_test; ?></td>
                                                                <td><?php echo $psy_row["obt_mks"] . "/" . $psy_row["total_mks"]; ?></td>
                                                                <td><?php echo $psy_row["status"]; ?></td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Psychology Arts End -->
                    <?php
                        }
                    ?>

                    <?php
                        if($program == "Arts") {
                    ?>
                            <!-- Education Arts Start -->
                            <div class="col-6 mb-4">
                                <div class="bg-white shadow rounded h-100 p-4">
                                    <div class="d-flex justify-content-between mb-4">
                                        <h6>Education Results</h6>
                                    </div>
                                    <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Test</th>
                                                    <th scope="col">Marks</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $edu = "SELECT * FROM `education` WHERE `student_id` = $id ORDER BY `id` DESC";
                                                    $edu_result = mysqli_query($db, $edu);
                                                    if(mysqli_num_rows($edu_result)) {
                                                        $educount = "SELECT COUNT(`id`) FROM `education` WHERE `student_id` = $id";
                                                        $educount_result = mysqli_query($db, $educount);
                                                        $educount_row = mysqli_fetch_array($educount_result);
                                                        $edu_test = $educount_row["COUNT(`id`)"] + 1;
                                                        while($edu_row = mysqli_fetch_array($edu_result)) {
                                                            $edu_test--;
                                                            ?>
                                                            <tr>
                                                                <td><?php echo "Test#" . $edu_test; ?></td>
                                                                <td><?php echo $edu_row["obt_mks"] . "/" . $edu_row["total_mks"]; ?></td>
                                                                <td><?php echo $edu_row["status"]; ?></td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Education Arts End -->
                    <?php
                        }
                    ?>

                    <?php
                        if($program == "Commerce") {
                    ?>
                            <!-- Accounting Commerce Start -->
                            <div class="col-6 mb-4">
                                <div class="bg-white shadow rounded h-100 p-4">
                                    <div class="d-flex justify-content-between mb-4">
                                        <h6>Accounting Results</h6>
                                    </div>
                                    <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Test</th>
                                                    <th scope="col">Marks</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $acc = "SELECT * FROM `accounting` WHERE `student_id` = $id ORDER BY `id` DESC";
                                                    $acc_result = mysqli_query($db, $acc);
                                                    if(mysqli_num_rows($acc_result)) {
                                                        $acccount = "SELECT COUNT(`id`) FROM `accounting` WHERE `student_id` = $id";
                                                        $acccount_result = mysqli_query($db, $acccount);
                                                        $acccount_row = mysqli_fetch_array($acccount_result);
                                                        $acc_test = $acccount_row["COUNT(`id`)"] + 1;
                                                        while($acc_row = mysqli_fetch_array($acc_result)) {
                                                            $acc_test--;
                                                            ?>
                                                            <tr>
                                                                <td><?php echo "Test#" . $acc_test; ?></td>
                                                                <td><?php echo $acc_row["obt_mks"] . "/" . $acc_row["total_mks"]; ?></td>
                                                                <td><?php echo $acc_row["status"]; ?></td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Accounting Commerce End -->
                    <?php
                        }
                    ?>

                    <?php
                        if($program == "Commerce") {
                    ?>
                            <!-- Economic Commerce Start -->
                            <div class="col-6 mb-4">
                                <div class="bg-white shadow rounded h-100 p-4">
                                    <div class="d-flex justify-content-between mb-4">
                                        <h6>Economic Results</h6>
                                    </div>
                                    <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Test</th>
                                                    <th scope="col">Marks</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $eco = "SELECT * FROM `economics` WHERE `student_id` = $id ORDER BY `id` DESC";
                                                    $eco_result = mysqli_query($db, $eco);
                                                    if(mysqli_num_rows($eco_result)) {
                                                        $ecocount = "SELECT COUNT(`id`) FROM `economics` WHERE `student_id` = $id";
                                                        $ecocount_result = mysqli_query($db, $ecocount);
                                                        $ecocount_row = mysqli_fetch_array($ecocount_result);
                                                        $eco_test = $ecocount_row["COUNT(`id`)"] + 1;
                                                        while($eco_row = mysqli_fetch_array($eco_result)) {
                                                            $eco_test--;
                                                            ?>
                                                            <tr>
                                                                <td><?php echo "Test#" . $eco_test; ?></td>
                                                                <td><?php echo $eco_row["obt_mks"] . "/" . $eco_row["total_mks"]; ?></td>
                                                                <td><?php echo $eco_row["status"]; ?></td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Economic Commerce End -->
                    <?php
                        }
                    ?>

                    <?php
                        if($program == "Commerce") {
                    ?>
                            <!-- Principle of Commerce Start -->
                            <div class="col-6 mb-4">
                                <div class="bg-white shadow rounded h-100 p-4">
                                    <div class="d-flex justify-content-between mb-4">
                                        <h6>POC Results</h6>
                                    </div>
                                    <div class="table-responsive" style="max-height:400px; overflow-x:auto; overflow-y:auto;">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Test</th>
                                                    <th scope="col">Marks</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $poc = "SELECT * FROM `poc` WHERE `student_id` = $id ORDER BY `id` DESC";
                                                    $poc_result = mysqli_query($db, $poc);
                                                    if(mysqli_num_rows($poc_result)) {
                                                        $poccount = "SELECT COUNT(`id`) FROM `poc` WHERE `student_id` = $id";
                                                        $poccount_result = mysqli_query($db, $poccount);
                                                        $poccount_row = mysqli_fetch_array($poccount_result);
                                                        $poc_test = $poccount_row["COUNT(`id`)"] + 1;
                                                        while($poc_row = mysqli_fetch_array($poc_result)) {
                                                            $poc_test--;
                                                            ?>
                                                            <tr>
                                                                <td><?php echo "Test#" . $poc_test; ?></td>
                                                                <td><?php echo $poc_row["obt_mks"] . "/" . $poc_row["total_mks"]; ?></td>
                                                                <td><?php echo $poc_row["status"]; ?></td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Principle of Commerce Start -->
                    <?php
                        }
                    ?>
                </div>
            </div>
            <!-- Profile End -->

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>