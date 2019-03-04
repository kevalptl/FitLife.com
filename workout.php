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
    <title>FitLife.com</title>
  </head>
  <body>
    <div class="navbar">
      <?php include 'newnavbar.php';?>
    </div>
<h1 style="text-align:center">Check Out Our Free Workout Videos !!!</h1 >
<form class="" action="" method="post">

  <select name="gender">
  <option value="male">Male</option>
  <option value="female">Female</option>
</select>
<select class="" name="body">
  <option value="upper">Upper</option>
  <option value="core">Core</option>
  <option value="lower">Lower</option>
  <option value="total">Complete</option>
</select>
<!-- <iframe src="index.php" name="iframe_a"></iframe> -->
<button type="button" onclick="window.location='index.php'" name="button">Go</button>
</form>
  </body>
</html>
