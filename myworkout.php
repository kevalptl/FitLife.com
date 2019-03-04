<?php
  require 'dbconfig/config.php';
?>
<?php
  // Start the session
  session_start();
  // if (isset($_SESSION['user_id']))
  //   { echo $_SESSION['user_id'];  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>FitLife.com</title>
    <link rel="stylesheet" href="css/myworkout.css">
    <style media="screen">
    body{        background-color: #333333;
}
      input[type=button]{
        width: auto;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline;
        box-sizing: border-box;
        background-color: #000000;
        color: white;
        padding: 14px 20px;
        margin-left: 213px ;
        border: none;
        cursor: pointer;

      }
    input[type=button]:hover {
          opacity: 0.8;
      }
input[type=text]{
  margin-left: 80px ;

}
b{
  margin-left: 80px ;

}
#answer{
  margin-left: 60px;
}
    </style>
  </head>
  <body>
    <div class="navbar">
      <?php include 'newnavbar.php';?>
    </div>

    <form class="modal-content animate" action="" method='POST'>

      <div class="imgcontainer">
        <img src="img/img_avatar2.png" alt="Avatar" class="avatar">
      </div>

      <div class="container-">
        <label for="user"><b>Weight</b></label>
        <input type="text" placeholder="Enter your weight in kilograms..." name="user" id="value2" style="width:150px"  required>
        <br>
        <label for="pass"><b>Height</b></label>
        <input type="text" placeholder="Enter height in meters" name="pass" id="value1" style="width:172px" required>
        <br>
         <input type="button" name="Sumbit" value="Calculate" onclick="javascript:addNumbers()"/>
         <br>
         <b>Your BMI</b> <input type="text" id="answer" name="answer" value="" style="width:150px"/><br>
         <b>Status</b> <input type="text" id="status" name="status" value="" style="width:150px" />

         <script language="javascript">
                  function addNumbers()
                  {
                          var val1 = document.getElementById("value1").value*document.getElementById("value1").value;
                          var val2 = parseInt(document.getElementById("value2").value);
                          var ansD = document.getElementById("answer");
                          var ans1 = document.getElementById("status");

                          ansD.value = (val2/val1).toFixed(2);
                          if( ansD.value > 18.4 ){
                            ans1.value="Normal"

                          }
                          if( ansD.value > 25 ){
                            ans1.value="Overweight"

                          }
                          if( ansD.value < 18.4 ){
                            ans1.value="Underweight"

                          }

                  }
          </script>

      </div>

      <div class="container" style="background-color:#f1f1f1 ">

        </form>

  </body>
</html>
