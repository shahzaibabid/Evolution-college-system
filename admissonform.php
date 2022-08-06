<?php
session_start();
// if ($_SESSION["name"] == null) {
    // header("Location: login.php?er=00");
// }
$db = mysqli_connect("localhost","root","","evolution");


?>
<!DOCTYPE html>
<html>
  <head>
    <title>Admission Registration</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, label, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 40px;
      color: #fff;
      z-index: 2;
 line-height: 83px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 8px #006622; 
      }
      .banner {
      position: relative;
      height: 300px;
      background-image: url("assets/images/adform.png");
      background-size: contain;
      background-position: center;
      background-repeat: no-repeat;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.2); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
    }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color:  #006622;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0  #006622;
      color: #006622;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .item span {
      color: red;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #00b33c;
      }
      .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
      }
 .week {
      display:flex;
      justfiy-content:space-between;
      }
      .colums {
      display:flex;
      justify-content:space-between;
      flex-direction:row;
      flex-wrap:wrap;
      }
      .colums div {
      width:48%;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio {
      position: relative;
  display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      .question-answer label {
      display: block;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid  #006622;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid  #006622;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .flax {
      display:flex;
      justify-content:space-around;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background:  #006622;
      font-size: 16px;
      color: #fff;
cursor: pointer;
      }
      button:hover {
      background:  #00b33c;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:97%;}
      .name-item div label {
      display:block;
      padding-bottom:5px;
      }
      }

      .col-8 {
        width: 70%;
      }

      .col-3 {
        width: 20%;
      }

      .w-100 {
        width: 100%;
        display: flex;
        /* flex */
        justify-content: space-around;
      }
    </style>
  </head>
  <body>
    <div class="testbox">
      <form>
        <div class="banner">
          <!-- <h1>Camp Registration</h1> -->
        </div>
        <br/>
        <fieldset>
          <legend>Personal Details</legend>
            <div class="w-100">                
                <div class="col-8">
                    <div class="item">
                        <label > Student Name <span>*</span></label>
                        <input  type="text" name="studentname" />
                    </div>
                    <div class="item">
                        <label >Father Name <span>*</span></label>
                        <input  type="text" name="fathername" />
                    </div>
                    <div class="item">
                        <label >Email <span>*</span></label>
                        <input  type="email" name="email" />
                    </div>
                   
                  
                </div>
                <div class="col-3">
                    <div style="width: 90%; height: 100%; border: 3px solid black"></div>
                </div>
            </div>
            <div class="item">
                <label >Phone  <span>*</span></label>
                <input  type="text" name="phone" />
            </div>                    
            <div class="item">
                <label>Birth Date <span>*</span></label>
                <input type="date" name="dob" />
                <i class="fas fa-calendar-alt"></i>
            </div>
            <div class="item">
                <p>Gender</p>
                <select name="gender">
                    <option selected value="Male" selected>Male</option>
                    <option value="Female" >Female</option>                    
                </select>
            </div>
            <div class="item">
                <label >Address  <span>*</span></label>
                <textarea name="address" id="" cols="10" rows="3"></textarea>
            </div>
            <div class="item">
                <label >CNIC/B-form <span>*</span></label>
                <input  type="text" name="cnic" />
            </div>
            <div class="item">
                <label >Citizenship <span>*</span></label>
                <input  type="text" name="citizen" />
            </div>
            <div class="item">
                <label >Religion <span>*</span></label>
                <input  type="text" name="rel" />
            </div>
        </fieldset>
        <br/>
        <fieldset>
          <legend>Programs</legend>
          
           <div class="question">
            <label>Select your Program:</label>
            <div class="question-answer">
              <div>
                <input type="radio" value="none" id="radio_3" name="participants"/>
                <label for="radio_3" class="radio"><span>Pre-Engineering</span></label>
              </div>
              <div>
                <input  type="radio" value="none" id="radio_4" name="participants"/>
                <label for="radio_4" class="radio"><span>Pre-Medical</span></label>
              </div>
              <div>
                <input  type="radio" value="none" id="radio_5" name="participants"/>
                <label for="radio_5" class="radio"><span>Computer Science</span></label>
              </div>
              <div>
                <input  type="radio" value="none" id="radio_6" name="participants"/>
                <label for="radio_6" class="radio"><span>Arts</span></label>
              </div>
              <div>
                <input  type="radio" value="none" id="radio_7" name="participants"/>
                <label for="radio_7" class="radio"><span>Commerce</span></label>
              </div>
              </div>
        </fieldset>
        <br>
        <fieldset>
          <legend>Upload your Documents</legend>
          <div class="item">
            <label > Matric Marksheet<span>*</span></label>
            <input  type="file" name="marksheet" accept="image/*" />
          </div>
         
          <div class="item">
            <label > Provisional Certificate<span>*</span></label>
            <input  type="file" name="provcertifacte" accept="image/*" />
          </div>
         
        </fieldset>
        <div class="btn-block">
          <button type="submit" href="/">Submit</button>
        </div>
      </form>
    </div>
<script >
	var a = document.getElementByID("fee").value;
	var b = document.getElementByID("fee1").value;
	var c = document.getElementByID("fee2").value;
	var result = a+b+c;
	function calcNumbers(){
		document.getElementByID("result").innerHTML = result;
	}
</script>
  </body>
</html>

