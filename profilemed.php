<?php
require 'dbconfig/config.php';?>

<?php
// Start the session
session_start();
//echo $_SESSION['user_id'];
$uid=$_SESSION['user_id'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>FitLife.com</title>
  </head>
  <body>

    <div class="navbar">
      <?php include 'newnavbar.php';?>

<?php
// $query0="select fname, lname from profile where user_id='" . $_SESSION['user_id'] . "'";
// $result0=mysqli_query($conn,$query0);
// $row0 = mysqli_fetch_array($result0);
// echo  "<h1 style='text-align: center'>Welcome " . $row['fname'] . " " . $row['lname'] . "</h2>";
$query1="select * from medprofile where user_id='" . $_SESSION['user_id'] . "'";
$result1=mysqli_query($conn,$query1);
$row1=mysqli_fetch_array($result1);
$count=mysqli_num_rows($result1);
if($count==0)

{ $bg="O+";
   $query2 = "insert into medprofile (user_id, bg) values ($uid,$bg)";
  $result2=mysqli_query($conn,$query2);
  $row2=mysqli_fetch_array($result2);}
 ?>
 <div class="med-display">
   <h2 style="text-align : center">Blood Group</h2><br>
   <?php    echo "<h2 style='text-align : center'>" . $row1['bg'] . "<h2>"; ?><br>
   <h2 style="text-align : center">Previous injury</h2><br>

<?php
 ?>


   <h2 style="text-align : center">Email</h2><br>
   <?php    echo "<h2 style='text-align : center'>" . $row['email'] . "<h2>"; ?><br>
   <h2 style="text-align : center">Contact</h2><br>
   <?php    echo "<h2 style='text-align : center'>" . $row['contact'] . "<h2>"; ?><br>
   <h2 style="text-align : center">Date Of Birth</h2><br>
   <?php    echo "<h2 style='text-align : center'>" . $row['d_o_b'] . "<h2>"; ?><br>

 </div>

</body>
</html>
