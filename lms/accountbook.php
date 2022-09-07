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
    background-image: url("https://t4.ftcdn.net/jpg/03/03/45/25/360_F_303452599_eZMGXe7awggqAHTQXpjzBFehJBEyw4QR.jpg");
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
    
<div class="container content mt-5">
        <div class="heading">
            <h1 style="font-size: 4vw;">&nbsp;&nbsp;Account book</h1>
        </div>
        <br>
        <div class="container">
            <h2>See your academic fees record here</h2>
        
        <br>
        
        </div>

        <!-- table start -->
        <div class="tablediv mb-4">
            <table class="table">
                <thead>
                    <tr>
                    
                    <th scope="col">Chalan no</th>
                    <th scope="col"> Month</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Balance</th>
                    <th scope="col">Paid</th>
                    <th scope="col">Due date</th>
                    <th scope="col">Action</th>
                    
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">00151</th>
                    <td> April  </td>
                    <td>2000 </td>
                    <td> 0  </td>
                    <td> 2000  </td>
                    <td> 10 apr  </td>
                    <td>  <button class="btn btn-success">paid</button>  </td>
                    </tr>
                
                    <tr>
                    <th scope="row">00152</th>
                    <td> May  </td>
                    <td>2000 </td>
                    <td> 0  </td>
                    <td> 2000  </td>
                    <td> 10 may  </td>
                    <td>  <button class="btn btn-success">paid</button>  </td>
                    </tr>

                    <tr>
                    <th scope="row">00153</th>
                    <td> June  </td>
                    <td>2000 </td>
                    <td> 0  </td>
                    <td> 2000  </td>
                    <td> 10 june  </td>
                    <td>  <button class="btn btn-success">paid</button>  </td>
                    </tr>

                    <tr>
                    <th scope="row">00154</th>
                    <td> July  </td>
                    <td>2000 </td>
                    <td> 0  </td>
                    <td> 2000  </td>
                    <td> 10 july  </td>
                    <td>  <button class="btn btn-success">paid</button>  </td>
                    </tr>

                    
                    <tr>
                    <th scope="row">00155</th>
                    <td> August  </td>
                    <td>2000 </td>
                    <td> 0  </td>
                    <td> 2000  </td>
                    <td> 10 aug  </td>
                    <td>  <button class="btn btn-success">paid</button>  </td>
                    </tr>

                    
                    <tr>
                    <th scope="row">00156</th>
                    <td> September  </td>
                    <td>2000 </td>
                    <td> 2000  </td>
                    <td> 0  </td>
                    <td> 10 sep  </td>
                    <td>  <button class="btn btn-danger">Unpaid</button>  </td>
                    </tr>

                    
                    <tr>
                    <th scope="row">00157</th>
                    <td> October </td>
                    <td>2000 </td>
                    <td> 2000  </td>
                    <td> 0  </td>
                    <td> 10 oct  </td>
                    <td>  <button class="btn btn-danger">Unpaid</button>  </td>
                    </tr>

                    
                    <tr>
                    <th scope="row">00158</th>
                    <td> November  </td>
                    <td>2000 </td>
                    <td> 2000  </td>
                    <td> 0  </td>
                    <td> 10 nov  </td>
                    <td>  <button class="btn btn-danger">Unpaid</button>  </td>
                    </tr>

                    
                    <tr>
                    <th scope="row">00159</th>
                    <td> December  </td>
                    <td>2000 </td>
                    <td> 2000  </td>
                    <td> 0  </td>
                    <td> 10 dec  </td>
                    <td>  <button class="btn btn-danger">Unpaid</button>  </td>
                    </tr>

                    
                    <tr>
                    <th scope="row">00160</th>
                    <td> January  </td>
                    <td>2000 </td>
                    <td> 2000  </td>
                    <td> 0  </td>
                    <td> 10 jan  </td>
                    <td>  <button class="btn btn-danger">Unpaid</button>  </td>
                    </tr>

                    
                    <tr>
                    <th scope="row">00161</th>
                    <td> February  </td>
                    <td>2000 </td>
                    <td> 2000  </td>
                    <td> 0  </td>
                    <td> 10 feb  </td>
                    <td>  <button class="btn btn-danger">Unpaid</button>  </td>
                    </tr>

                    
                    <tr>
                    <th scope="row">00162</th>
                    <td> March  </td>
                    <td>2000 </td>           
                    <td> 2000  </td>
                    <td> 0  </td>
                    <td> 10 mar  </td>
                    <td>  <button class="btn btn-danger">Unpaid</button>  </td>
                    </tr>
                </tbody>
            </table>
        </div>    

</div>

<br><br>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
