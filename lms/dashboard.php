<?php
    include("../topbar.php");
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
 
    <div class="col-md-4 col-sm-12 border">
    <a href="lectures.php">
      <div class="a-box">
        <div class="img-container">
          <div class="img-inner">
            <div class="inner-skew">
              <img src="https://images.unsplash.com/photo-1584791097929-aa825fe8e1e1?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ">
            </div>
          </div>
        </div>
        <div class="text-container">
          <h3>  Teacher Name</h3>
          <div>
           Subject Name
          </div>
        </div>
      </div>
          </a>
    </div>

    <!-- card 02 -->
    <div class="col-md-4 col-sm-12 border">
      <div class="a-box">
        <div class="img-container">
          <div class="img-inner">
            <div class="inner-skew">
              <img src="https://images.unsplash.com/photo-1584791097929-aa825fe8e1e1?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ">
            </div>
          </div>
        </div>
        <div class="text-container">
          <h3>Teacher Name</h3>
          <div>
           Subject Name
          </div>
        </div>
      </div>
    </div>
    
   <!-- card 02 -->
   <div class="col-md-4 col-sm-12 border">
      <div class="a-box">
        <div class="img-container">
          <div class="img-inner">
            <div class="inner-skew">
              <img src="https://images.unsplash.com/photo-1584791097929-aa825fe8e1e1?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ">
            </div>
          </div>
        </div>
        <div class="text-container">
          <h3>Teacher Name</h3>
          <div>
           Subject Name
          </div>
        </div>
      </div>
    </div>
    
  </div>
</div>

<!-- <div class="a-box">
  <div class="img-container">
    <div class="img-inner">
      <div class="inner-skew">
        <img src="https://images.unsplash.com/photo-1584791097929-aa825fe8e1e1?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ">
      </div>
    </div>
  </div>
  <div class="text-container">
    <h3>A blue bird</h3>
    <div>
      This a demo experiment to skew image container. It looks good.
  </div>
</div> -->
    </div>
 
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>