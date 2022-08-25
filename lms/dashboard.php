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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
  body {

  padding: 30px;
  background: #f8f4f2;
  font-family: Arial;
}

.a-box {
  display: inline-block;
  width: 240px;
  text-align: center;
}

.img-container {
    height: 230px;
    width: 200px;
    overflow: hidden;
    border-radius: 0px 0px 20px 20px;
    display: inline-block;
}

.img-container img {
    transform: skew(0deg, -13deg);
    height: 250px;
    margin: -35px 0px 0px -70px;
}

.inner-skew {
    display: inline-block;
    border-radius: 20px;
    overflow: hidden;
    padding: 0px;
    transform: skew(0deg, 13deg);
    font-size: 0px;
    margin: 30px 0px 0px 0px;
    background: #c8c2c2;
    height: 250px;
    width: 200px;
}

.text-container {
  box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
  padding: 120px 20px 20px 20px;
  border-radius: 20px;
  background: #fff;
  margin: -120px 0px 0px 0px;
  line-height: 19px;
  font-size: 14px;
}

.text-container h3 {
  margin: 20px 0px 10px 0px;
  color: #04bcff;
  font-size: 18px;
}
</style>
<body>
<?php
include("header.php");
?>
    <!--lectures  -->
    <div class="container">
      <br><br><br><br> 
      
      <div class="container">
        <div class="row">
          <?php
            $id = $_SESSION["myuserid"];
            $st_sel = "SELECT s.id,c.id,p.id FROM `std_account` s INNER JOIN `program_course` p ON p.program_name = s.program INNER JOIN `class` c ON c.id = s.class_id WHERE s.id = $id";
            $st_res = mysqli_query($db, $st_sel);
            $st_r = mysqli_fetch_array($st_res);
            $mid = $st_r[0];
            $cid = $st_r[1];
            $pid = $st_r[2];
            $sel_sub = "SELECT sb.id,t.profile,t.name as myteach,sb.name as mysubject FROM `subjects` sb INNER JOIN `teachers` t ON t.email = sb.teacher_email WHERE `class_id` = '$cid' AND `program_id` = 0";
            $sub_result = mysqli_query($db, $sel_sub);
            if(mysqli_num_rows($sub_result)) {
              while($sub_r = mysqli_fetch_array($sub_result)){                
            ?>
              <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center mb-4">
                <a href="lectures.php?id=<?php echo $sub_r["id"]; ?>">
                  <div class="a-box">
                    <div class="img-container">
                      <div class="img-inner">
                        <div class="inner-skew">
                          <img src="../admin/profile/<?php echo $sub_r["profile"]; ?>" style="width:300px;">
                        </div>
                      </div>
                    </div>
                    <div class="text-container">
                      <h3><?php echo $sub_r["myteach"]; ?></h3>
                      <div>
                        <?php echo $sub_r["mysubject"]; ?>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
          <?php
              }
            }

            $sel_subject = "SELECT sb.id,t.profile,t.name,sb.name FROM `subjects` sb INNER JOIN `teachers` t ON t.email = sb.teacher_email WHERE `class_id` = '$cid' && `program_id` = '$pid'";
            $subject_result = mysqli_query($db, $sel_subject);
            if(mysqli_num_rows($subject_result)) {
              while($sub_r_2 = mysqli_fetch_array($subject_result)) {
            ?>
              <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center mb-4">
                <a href="lectures.php?id=<?php echo $sub_r_2[0]; ?>">
                  <div class="a-box">
                    <div class="img-container">
                      <div class="img-inner">
                        <div class="inner-skew">
                          <img src="../admin/profile/<?php echo $sub_r_2[1]; ?>" style="width:300px;">
                        </div>
                      </div>
                    </div>
                    <div class="text-container">
                      <h3><?php echo $sub_r_2[2]; ?></h3>
                      <div>
                        <?php echo $sub_r_2[3]; ?>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            <?php
              }
            }
          ?>
        </div>
      </div>
    </div>
 
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>