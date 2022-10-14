<?php
    include("../admin/connection/connection.php");
    $id = $_GET["id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evolution College System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    body{
        background-color:white;        
    }
    h1{
        font-family:georgia;
        font-size:bold;
    }
.heading{
    background: blue;
    color: white;
    width:100%;
    height:auto;
    border-radius:2px;
    margin-top:5px;
    padding-top:1px;
}
.content{
width: 80%;
background-color: white;
height:auto;
border-style: solid;
  border-color: black;
}

.tablediv {
  border-style: solid;
  border-color: black;
  overflow-x:auto;
  overflow-y:auto;
}
.table{
  font:bold;
}

</style>
<body>
<?php
include("header.php");
?>

    <br><br><br>
    
<div class="container content">
        <div class="heading">
            <?php
                $sel = "SELECT s.name,t.name as tname FROM `subjects` s INNER JOIN `teachers` t ON t.email = s.teacher_email WHERE s.id = $id";
                $result = mysqli_query($db, $sel);
                $row = mysqli_fetch_array($result);
            ?>
            <h1 style="font-size: 5vw;">&nbsp;&nbsp; <?php echo $row["name"]; ?></h1>
        </div>
        <br>
        <div class="container">
            <h1>Course Designed by "<?php echo $row["tname"]; ?>"</h1>
        
        <br>
        
        </div>

        <!-- table start -->
        <div class="tablediv mb-4">
            <table class="table">
                <thead>
                    <tr>
                    
                    <th scope="col">Lecture Number</th>
                    <th scope="col">Lecture Link</th>
                    
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $mysubj = $row["name"];

                        if ($mysubj == "English") {                            
                    ?>
                            <tr>
                                <th scope="row">1</th>
                                <td><a href="https://www.youtube.com/watch?v=BCr_GYg0p10" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 01 </button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td><a href="https://www.youtube.com/watch?v=ePwU2xo-eTw" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 02 </button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td><a href="https://www.youtube.com/watch?v=eehWrJLxXo4" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 03 </button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td><a href="https://www.youtube.com/watch?v=1zm-_3hqVIE" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 04 </button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td><a href="https://www.youtube.com/watch?v=bjj3FYDum6E" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 05 </button></a></td>
                            </tr>
                    <?php
                        }
                        else if ($mysubj == "Urdu") {
                    ?>
                            <tr>
                                <th scope="row">1</th>
                                <td><a href="https://www.youtube.com/watch?v=Z8e76v4ni7k" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 01 </button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td><a href="https://www.youtube.com/watch?v=y5V9ShO-KTg" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 02 </button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td><a href="https://www.youtube.com/watch?v=FB_OjXA0Zxk" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 03 </button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td><a href="https://www.youtube.com/watch?v=lBDeUHyYxAE" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 04 </button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td><a href="https://www.youtube.com/watch?v=xDSWQMr3f5k" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 05 </button></a></td>
                            </tr>
                    <?php
                        }
                        else if ($mysubj == "Math") {
                    ?>
                            <tr>
                                <th scope="row">1</th>
                                <td><a href="https://www.youtube.com/watch?v=VEGRY_0Gs5o" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 01 </button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td><a href="https://www.youtube.com/watch?v=Z_H5fJOLqb0" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 02 </button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td><a href="https://www.youtube.com/watch?v=N2ZHumwXGCA" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 03 </button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td><a href="https://www.youtube.com/watch?v=b747wA5WJ0Y" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 04 </button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td><a href="https://www.youtube.com/watch?v=cNUT2mXJHfg" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 05 </button></a></td>
                            </tr>
                    <?php
                        }
                        else if ($mysubj == "Physics") {
                    ?>
                            <tr>
                                <th scope="row">1</th>
                                <td><a href="https://www.youtube.com/watch?v=E-PF2Opc_iA" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 01 </button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td><a href="https://www.youtube.com/watch?v=q-3Spq_5tmI" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 02 </button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td><a href="https://www.youtube.com/watch?v=ZdkOJm6IyAA" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 03 </button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td><a href="https://www.youtube.com/watch?v=s0m_S9r099U" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 04 </button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td><a href="https://www.youtube.com/watch?v=QuS1NSIY_bw" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 05 </button></a></td>
                            </tr>
                    <?php
                        }
                        else if ($mysubj == "Chemistry") {
                    ?>
                            <tr>
                                <th scope="row">1</th>
                                <td><a href="https://www.youtube.com/watch?v=pMoabHXnNbc" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 01 </button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td><a href="https://www.youtube.com/watch?v=kvreKXYEC-0" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 02 </button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td><a href="https://www.youtube.com/watch?v=S2EV8KRLg1s" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 03 </button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td><a href="https://www.youtube.com/watch?v=_pf_LCbeP2I" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 04 </button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td><a href="https://www.youtube.com/watch?v=dEqRkiW2Wfc" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 05 </button></a></td>
                            </tr>
                    <?php
                        }
                        else if ($mysubj == "Islamiat") {
                    ?>
                    <!-- Not Added Yet -->
                    <?php
                        }
                        else if ($mysubj == "Zoology") {
                    ?>
                            <tr>
                                <th scope="row">1</th>
                                <td><a href="https://youtu.be/fQ1Qf-N5oek" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 01 </button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td><a href="https://youtu.be/QvWsfHqCl-o" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 02 </button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td><a href="https://youtu.be/I_0aQI8PKPc" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 03 </button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td><a href="https://youtu.be/5HB0RlL7VNM" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 04 </button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td><a href="https://youtu.be/J0lD4XoOhy0" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 05 </button></a></td>
                            </tr>
                    <?php
                        }
                        else if ($mysubj == "Botany") {
                    ?>
                            <tr>
                                <th scope="row">1</th>
                                <td><a href="https://youtu.be/GBtMKWoJ1rw" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 01 </button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td><a href="https://youtu.be/tCEfSFCbric" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 02 </button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td><a href="https://youtu.be/fM9Grl7xgQA" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 03 </button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td><a href="https://youtu.be/JEnX1VGwwPg" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 04 </button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td><a href="https://youtu.be/WB8f8Zu_lfQ" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 05 </button></a></td>
                            </tr>
                    <?php
                        }
                        else if ($mysubj == "Computer Science") {
                    ?>
                            <tr>
                                <th scope="row">1</th>
                                <td><a href="https://www.youtube.com/watch?v=S54KSYQCJmI" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 01 </button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td><a href="https://www.youtube.com/watch?v=GYTzASJMwRM" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 02 </button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td><a href="https://www.youtube.com/watch?v=wMCjh_tdZ_s" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 03 </button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td><a href="https://www.youtube.com/watch?v=SCdyg26xmaQ" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 04 </button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td><a href="https://www.youtube.com/watch?v=tdjdeLnwMgk" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 05 </button></a></td>
                            </tr>
                    <?php
                        }
                        else if ($mysubj == "Civics") {
                    ?>
                            <tr>
                                <th scope="row">1</th>
                                <td><a href="https://www.youtube.com/watch?v=DFvwOuVkXeM" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 01 </button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td><a href="https://www.youtube.com/watch?v=QEENTbNoprU" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 02 </button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td><a href="https://www.youtube.com/watch?v=MRNvHJgNcJM" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 03 </button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td><a href="https://www.youtube.com/watch?v=vyxkycpip78" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 04 </button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td><a href="https://www.youtube.com/watch?v=-HwMh3aREZA" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 05 </button></a></td>
                            </tr>
                    <?php
                        }
                        else if ($mysubj == "Psychology") {
                    ?>
                            <tr>
                                <th scope="row">1</th>
                                <td><a href="https://www.youtube.com/watch?v=hF3mNe0CjRk" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 01 </button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td><a href="https://www.youtube.com/watch?v=e_5g_1g7dMM" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 02 </button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td><a href="https://www.youtube.com/watch?v=ziR7hqGKUm0" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 03 </button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td><a href="https://www.youtube.com/watch?v=YiYVVJ5LVOM" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 04 </button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td><a href="https://www.youtube.com/watch?v=CpnGrgVMHdk" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 05 </button></a></td>
                            </tr>
                    <?php
                        }
                        else if ($mysubj == "Education") {
                    ?>
                            <tr>
                                <th scope="row">1</th>
                                <td><a href="https://www.youtube.com/watch?v=5SLwhz4QNZQ" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 01 </button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td><a href="https://www.youtube.com/watch?v=e_5g_1g7dMM" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 02 </button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td><a href="https://www.youtube.com/watch?v=ziR7hqGKUm0" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 03 </button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td><a href="https://www.youtube.com/watch?v=YiYVVJ5LVOM" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 04 </button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td><a href="https://www.youtube.com/watch?v=CpnGrgVMHdk" target="_blank" rel="noopener noreferrer"><button class="btn btn-success">Click to watch Lecture 05 </button></a></td>
                            </tr>
                    <?php
                        }
                        else if ($mysubj == "Accounting") {
                    ?>
                    <?php
                        }
                        else if ($mysubj == "Business Math") {
                    ?>
                    <?php
                        }
                        else if ($mysubj == "Economics") {
                    ?>
                    <?php
                        }
                        else if ($mysubj == "POC") {
                    ?>
                    <?php
                        }                       
                    ?>
                </tbody>
            </table>
        </div>



</div>

<br><br>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
