<?php
  require 'dbconfig/config.php';
?>
<?php
  // Start the session
  session_start();
  echo $_SESSION['user_id'];
?>
<form class="" action="index.html" method="post">

  <img src="img_avatar2.png" alt="Avatar" class="avatar"><br>

  <label for="user"><b>Weight</b></label>
  <input type="text" placeholder="Weight (kg)" name="weight" id="weight" required>
  <br>
  <label for="pass"><b>Height</b></label>
  <input type="text" placeholder="Height (m)" name="height" id="height" required>
  <br>
  <input type="button" name="send" value="Calculate" onclick="javascript:calc_bmi()"/>
  <br>
  Your BMI <input type="text" id="bmi_display" name="bmi" value=""/>
  <br>
  Status  <input type="text" id="status" name="status" value="" />
  <script language="javascript">
     function calc_bmi()
         {   var height = document.getElementById("height").value*document.getElementById("height").value;
             var weight = parseInt(document.getElementById("weight").value);
             var bmi_display = document.getElementById("bmi_display");
             var status = document.getElementById("status");

             bmi_display.value = weight/height;
             if( bmi_display.value < 18.4 ){
               status.value="Underweight"}
             else
             { if( bmi_display.value > 25 )
                {ans1.value="overweight"}
               else {status.value="Normal"}
              }
        }
   </script>

</form>


<form class="" action="" method="post">
  <label for="weight"><b>Weight</b></label>
  <input type="text" placeholder="Weight(kg)" name="weight" id="weight" required>
  <br>
  <label for="height"><b>Height</b></label>
  <input type="text" placeholder="Enter height in meters" name="height" id="height" required>
  <br><br>
  <label for="sex"><b>Gender</b></label>
  <input type="radio" name="sex" value="Male" id="sex"><label for="sex">Male</label>
  <input type="radio" name="sex" value="Female" id="sex"><label for="sex">Female</label>
  <br><br>
  <label for="age"><b>Age&nbsp&nbsp&nbsp&nbsp</b></label>
  <input type="text" placeholder="age (years)" name="age" id="age" required>
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

   <script language="javascript" src="calculate.js"></script>

</form>
