<?php
require 'dbconfig/config.php';
?>

<?php
// Start the session
session_start();
if (isset($_SESSION['user_id']))
  { echo $_SESSION['user_id'];  }
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    body {font-family: Arial, Helvetica, sans-serif;}

    /* Full-width input fields */
    input[type=text], input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    /* Set a style for all buttons */
    input[type=button] {
      display:inline;
        background-color: #000000;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: auto;
    }

    input[type=button]:hover {
        opacity: 0.8;
    }
    button[type=button] {
      display:inline;
        background-color: #000000;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: auto;
    }

    button[type=button]:hover {
        opacity: 0.8;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
    }

    /* Center the image and position the close button */
    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
        position: relative;
    }

    img.avatar {
        width: 10%;
        border-radius: 50%;
    }

    .container {
        padding: 16px;
    }

    span.psw {
        float: right;
        padding-top: 16px;
    }

    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        padding-top: 60px;
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: #fefefe;
        margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        width: 80%; /* Could be more or less, depending on screen size */
    }

    /* The Close Button (x) */
    .close {
        position: absolute;
        right: 25px;
        top: 0;
        color: #000;
        font-size: 35px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: red;
        cursor: pointer;
    }

    /* Add Zoom Animation */
    .animate {
        -webkit-animation: animatezoom 0.6s;
        animation: animatezoom 0.6s
    }

    @-webkit-keyframes animatezoom {
        from {-webkit-transform: scale(0)}
        to {-webkit-transform: scale(1)}
    }

    @keyframes animatezoom {
        from {transform: scale(0)}
        to {transform: scale(1)}
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
        span.psw {
           display: block;
           float: none;
        }
        .cancelbtn {
           width: 100%;
        }
    }
    * {
        box-sizing: border-box;
    }

    /* Style the body */
    body {
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
    }

    /* Header/logo Title */
    .header {
        padding: 80px;
        text-align: center;
        background: #1abc9c;
        color: white;
    }

    /* Increase the font size of the heading */
    .header h1 {
        font-size: 40px;
    }

    /* Sticky navbar - toggles between relative and fixed, depending on the scroll position. It is positioned relative until a given offset position is met in the viewport - then it "sticks" in place (like position:fixed). The sticky value is not supported in IE or Edge 15 and earlier versions. However, for these versions the navbar will inherit default position */
    .navbar {
        overflow: hidden;
        background-color: #333;
        position: sticky;
        position: -webkit-sticky;
        top: 0;
    }

    /* Style the navigation bar links */
    .navbar a {
        float: left;
        display: block;
        color: white;
        text-align: center;
        padding: 14px 20px;
        text-decoration: none;
    }


    /* Right-aligned link */
    .navbar a.right {
        float: right;
    }

    /* Change color on hover */
    .navbar a:hover {
        background-color: #ddd;
        color: black;
    }

    /* Active/current link */
    .navbar a.active {
        background-color: #666;
        color: white;
    }

    /* Column container */
    .row {
        display: -ms-flexbox; /* IE10 */
        display: flex;
        -ms-flex-wrap: wrap; /* IE10 */
        flex-wrap: wrap;
    }

    /* Create two unequal columns that sits next to each other */
    /* Sidebar/left column */
    .side {
        -ms-flex: 30%; /* IE10 */
        flex: 30%;
        background-color: #f1f1f1;
        padding: 20px;
    }

    /* Main column */
    .main {
        -ms-flex: 70%; /* IE10 */
        flex: 70%;
        background-color: white;
        padding: 20px;
    }

    /* Fake image, just for this example */
    .fakeimg {
        background-color: #aaa;
        width: 100%;
        padding: 20px;
    }

    /* Footer */
    .footer {
        padding: 20px;
        text-align: center;
        background: #ddd;
    }

    /* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 700px) {
        .row {
            flex-direction: column;
        }
    }

    /* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
    @media screen and (max-width: 400px) {
        .navbar a {
            float: none;
            width: 100%;
        }
        body {font-family: Arial, Helvetica, sans-serif;}

    /* Full-width input fields */
    input[type=text], input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    /* Set a style for all buttons */
    button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }

    button:hover {
        opacity: 0.8;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
    }

    /* Center the image and position the close button */
    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
        position: relative;
    }

    img.avatar {
        width: 40%;
        border-radius: 50%;
    }

    .container {
        padding: 16px;
    }

    span.psw {
        float: right;
        padding-top: 16px;
    }

    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        padding-top: 60px;
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: #fefefe;
        margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        width: 80%; /* Could be more or less, depending on screen size */
    }

    /* The Close Button (x) */
    .close {
        position: absolute;
        right: 25px;
        top: 0;
        color: #000;
        font-size: 35px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: red;
        cursor: pointer;
    }

    /* Add Zoom Animation */
    .animate {
        -webkit-animation: animatezoom 0.6s;
        animation: animatezoom 0.6s
    }

    @-webkit-keyframes animatezoom {
        from {-webkit-transform: scale(0)}
        to {-webkit-transform: scale(1)}
    }

    @keyframes animatezoom {
        from {transform: scale(0)}
        to {transform: scale(1)}
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
        span.psw {
           display: block;
           float: none;
        }
        .cancelbtn {
           width: 100%;
        }
    }
    * {box-sizing: border-box;}

    /* Full-width input fields */
    input[type=text], input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
    }

    /* Add a background color when the inputs get focus */
    input[type=text]:focus, input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    /* Set a style for all buttons */
    button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
    }

    button:hover {
        opacity:1;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
        padding: 14px 20px;
        background-color: #f44336;
    }

    /* Float cancel and signup buttons and add an equal width */
    .cancelbtn, .signupbtn {
      float: left;
      width: 50%;
    }

    /* Add padding to container elements */
    .container {
        padding: 16px;
    }

    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: #474e5d;
        padding-top: 50px;
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: #fefefe;
        margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        width: 80%; /* Could be more or less, depending on screen size */
    }

    /* Style the horizontal ruler */
    hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
    }

    /* The Close Button (x) */
    .close {
        position: absolute;
        right: 35px;
        top: 15px;
        font-size: 40px;
        font-weight: bold;
        color: #f1f1f1;
    }

    .close:hover,
    .close:focus {
        color: #f44336;
        cursor: pointer;
    }

    /* Clear floats */
    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }

    /* Change styles for cancel button and signup button on extra small screens */
    @media screen and (max-width: 300px) {
        .cancelbtn, .signupbtn {
           width: 100%;
        }
    }
    </style>
  </head>
  <body>



<div class="navbar">
  <?php include 'newnavbar.php';?>

<div id="id04">
    <form class="modal-content animate" action="" method='POST' name="form">
      <div class="imgcontainer">

        <img src="img/img_avatar2.png" alt="Avatar" class="avatar">
      </div>

      <div class="container">
        <label for="user"><b>Weight</b></label>
        <input type="text" placeholder="Enter weight in kg" name="user" id="valu2" style="width:150px"  required>
        <br>
        <label for="pass"><b>Height</b></label>
        <input type="text" placeholder="Enter height in meters" name="pass" id="valu1" style="width:172px" required>
        <br><br>
        <label for="gender"><b>Gender</b></label>
        <input type="radio" name="chooseone" value="Male" id="radioMale"><label for="gender"><b>Male</b></label>
        <input type="radio" name="chooseone" value="Female" id="radiofemale"><label for="gender"><b>Female</b></label>
        <br><br>
        <label for="pass"><b>Age&nbsp&nbsp&nbsp&nbsp</b></label>
        <input type="text" placeholder="Years" name="pass" id="value3" style="width:100px" required>
        <br>
        <p><strong>Activity</strong></p>
         <select id="ddlViewBy" name="hw">
         <option value="one" selected="selected">Sedentary or light activity</option>
         <option value="two">Active or moderately active</option>
         <option value="three">Vigorously active </option></select><br>
  <input type="button" name="Sumbit" value="Calculate" onclick="javascript:addNumbers1()"/>
         <br>
         <b>Your BMR </b><input type="text" id="answer1" name="answer" value="" style="width:150px"/>
         <b>Daily Calories </b> <input type="text" id="status2" name="status" value="" style="width:150px" /><b>Kcal/day</b>

         <script language="javascript" src="js/calculate.js">
          </script>


      </div>

      <div class="container" style="background-color: #f1f1f1 ">
        <button type="button" onclick="document.getElementById('id05').style.display='block'; document.getElementById('id04').style.display='none'" style="width:auto;">Get Fitness Program</button>
      </div>
    </form>
</div>
  <div id="id05" class="modal">

    <form class="modal-content animate" action="" method='POST'>
      <div class="imgcontainer">
        <span onclick="document.getElementById('id04').style.display='block'";document.getElementById('id05').style.display='none'"class="close" title="Close Modal">&times;</span>
        <img src="img/img_avatar2.png" alt="Avatar" class="avatar">
      </div>

      <div class="container">
        <label for="user"><b>Weight</b></label>
        <input type="text" placeholder="Enter Weight In Kg" name="user" id="v2" style="width:155px"  required>
        <br>
        <label for="pass"><b>In Days</b></label>
        <input type="text" placeholder="Enter No Of Days" name="pass" id="v1" style="width:172px" required>
        <br>
        <p><strong>Goal</strong></p>
         <select id="ddlViewBy1" name="hw">
         <option value="one" selected="selected">Wheight Loss</option>
         <option value="two">Weight Gain</option>
         </select>
         <input type="button" name="Sumbit" value="Generate" onclick="javascript:addNum2()"/>
         <br>
         Calories Loss <input type="text" id="answr" name="answr" value="" style="width:150px"/><br>
         Total Calories Earn per day  <input type="text" id="stats" name="stats" value="" style="width:150px" /><br>
         every days exercises <br>
         <input type="text" id="stats1" name="stats1" value="" style="width:120px" />
         <input type="text" id="stats2" name="stats2" value="" style="width:120px" />
         <input type="text" id="stats3" name="stats3" value="" style="width:120px"/>
         <input type="text" id="stats4" name="stats4" value="" style="width:120px"/>
         <input type="text" id="stats5" name="stats5" value="" style="width:120px"/>
         <input type="text" id="stats6" name="stats6" value="" style="width:120px"/>


      </div>
          <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('id04').style.display='block'; document.getElementById('id05').style.display='none'" style="width:auto;">Cancel</button>
        </div>
      </div>
    </form>
  </div>
    <script language="javascript" src="js/calculate.js">

          </script>
  <script>
  // Get the modal
  var modal = document.getElementById('id01');

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  }
  </script>
  </div>

</body>
</html>
