<?php
require 'dbconfig/config.php';
?>

<?php
// Start the session
session_start();
//echo $_SESSION['user_id'];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>FitLife.com</title>
<link rel="stylesheet" href="css/profiledisplay.css">
<style media="screen">
body{background-color: #cccccc;}
</style>
  </head>
  <body>
    <div class="navbar">
      <?php include 'newnavbar.php';?>
    </div>
    <div class="display">

      <?php
      $query0="select * from profile where user_id=" . $_SESSION['user_id'];
      $result = mysqli_query($conn,$query0);
      $row = mysqli_fetch_array($result);
      $row['d_o_b']=date("d-m-y",strtotime($row['d_o_b']));
      ?>

     <!-- <h2 style="text-align : center">First Name</h2><br> -->
     <!-- <h2 style="text-align : center">Last Name</h2><br> -->
     <!-- <h2 style="text-align : center">Email</h2><br> -->
     <!-- <h2 style="text-align : center">Contact</h2><br> -->
     <!-- <h2 style="text-align : center">Date Of Birth</h2><br> -->

       <h2 style="text-align:center">Your Profile Card</h2>

       <div class="card">
         <img src="img/img_avatar2.png" alt="John" style="width:100%">
         <?php    echo "<h2 style='text-align : center'>" . $row['fname'] ." ". $row['lname'] . "</h2>"; ?>
             <?php    echo "<p class='title' style='text-align : center'>" . $row['email'] . "</p>"; ?>
             <?php    echo "<p class='title' style='text-align : center'>" . $row['contact'] . "</p>"; ?>
             <?php    echo "<p class='title' style='text-align : center'>" . $row['d_o_b'] . "</p>"; ?>
         <div style="margin: 24px 0;">
           <a href="#"><i class="fa fa-dribbble"></i></a>
           <a href="#"><i class="fa fa-twitter"></i></a>
           <a href="#"><i class="fa fa-linkedin"></i></a>
           <a href="#"><i class="fa fa-facebook"></i></a>
        </div>
       </div>

    <button onclick="location.href = 'profileedit.php';" name="edit" value="">Edit</button>
    <!-- <button onclick="location.href = 'medprofile.php';" name="profilemed" value="">My Med Profile</button> -->


    </div>
</body>
</html>
