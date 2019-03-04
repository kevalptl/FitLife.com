<?php
  require 'dbconfig/config.php';
?>
<?php
  // Start the session
  session_start();
  // echo $_SESSION['user_id'];
?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Fitlife.com</title>
    </head>

    <body>
      <div class="navbar">
        <?php include 'newnavbar.php';?>
      </div>
  <form class="modal-content animate" action="" method='POST'>
    <!-- <div class="imgcontainer">
      <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img/img_avatar2.png" alt="Avatar" class="avatar">
    </div> -->
    <?php
    if (isset($_SESSION['user_id']))
    ?>
    <div class="container">
      <label for="user"><b>Weight</b></label>
      <input type="text" placeholder="Enter weight in kg" name="user" id="value2" style="width:150px"  required>
      <br>
      <label for="pass"><b>Height</b></label>
      <input type="text" placeholder="Enter height in meters" name="pass" id="value1" style="width:172px" required>

       <input type="button" name="Sumbit" value="Calc" onclick="javascript:addNumbers()"/>
       <br>
       Your BMI <input type="text" id="answer" name="answer" value="" style="width:150px"/>
       Status  <input type="text" id="status" name="status" value="" style="width:150px" />

       <script language="javascript">
          function addNumbers()
              {   var val1 = document.getElementById("value1").value*document.getElementById("value1").value;
                  var val2 = parseInt(document.getElementById("value2").value);
                  var ansD = document.getElementById("answer");
                  var ans1 = document.getElementById("status");

                  ansD.value = val2/val1;
                  if( ansD.value > 18.4 ){
                    ans1.value="normal"}
                  if( ansD.value > 25 ){
                    ans1.value="overweight"}
                  if( ansD.value < 18.4 ){
                    ans1.value="underweight"}
                }
        </script>

    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>


  <form class="modal-content animate" action="" method='POST' name="form">
    <!-- <div class="imgcontainer">
      <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div> -->
    <div class="container">
      <label for="user"><b>Weight</b></label>
      <input type="text" placeholder="Enter weight in kg" name="user" id="valu2" style="width:150px"  required>
      <br>
      <label for="pass"><b>Height</b></label>
      <input type="text" placeholder="Enter height in meters" name="pass" id="valu1" style="width:172px" required>
      <br><br>
      <label for="gender"><b>Gender</b></label>
      <input type="radio" name="chooseone" value="Male" id="radioMale"><label for="gender">Male</label>
      <input type="radio" name="chooseone" value="Female" id="radiofemale"><label for="gender">Female</label>
      <br><br>
      <label for="pass"><b>Age&nbsp&nbsp&nbsp&nbsp</b></label>
      <input type="text" placeholder="Years" name="pass" id="value3" style="width:100px" required>
      <br>
      <p><strong>Activity</strong></p>
       <select id="ddlViewBy" name="hw">
       <option value="one" selected="selected">Sedentary or light activity</option>
       <option value="two">Active or moderately active</option>
       <option value="three">Vigorously active </option></select>
       <input type="button" name="Sumbit" value="calculate" onclick="javascript:addNumbers1()"/>
       <br>
       Your BMR <input type="text" id="answer1" name="answer" value="" style="width:150px"/>
       Daily Calories  <input type="text" id="status2" name="status" value="" style="width:150px" />Kcal/day

       <script language="javascript" src="js/calculate.js"></script>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id04').style.display='none'" class="cancelbtn">Cancel</button>
      <button type="button" onclick="document.getElementById('id05').style.display='block'; document.getElementById('id04').style.display='none'" style="width:auto;">Weight Calc</button>
    </div>
  </form>
</body>
</html>
