<?php
  require 'dbconfig/config.php';
?>
<?php
  // Start the session
  session_start();
  // echo $_SESSION['user_id'];
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>FitLife.com</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,700'>
  <link rel="stylesheet" href="css/profile.css">


</head>

<body>
  <div class="navbar">
    <?php include 'newnavbar.php';?>
  </div>
  <div id="section">
				<section class="contact-wrap">
				  <form action="profile.php" method="POST" class="contact-form">
					<div class="col-sm-6">
					  <div class="input-block">
						<label for="">First Name (max. 20 characters)</label>
						<input type="text" class="form-control" name="fname">
					  </div>
					</div>
					<div class="col-sm-6">
					  <div class="input-block">
						<label for="">Last Name (max. 20 characters)</label>
						<input type="text" class="form-control" name="lname">
					  </div>
					</div>
					<div class="col-sm-12">
					  <div class="input-block">
						<label for="">Email</label>
						<input type="email" class="form-control" name="email">
					  </div>
					</div>
					<div class="col-sm-12">
					  <div class="input-block">
						<label for="">Contact No.</label>
						<input type="text" class="form-control" name="contact">
					  </div>
					</div>
					<div class="col-sm-12">
					  <div class="input-block textarea">
						<label for="">Date Of Birth</label>
						<input type="date" class="form-control" name="dob">
					  </div>
					</div>
					<div class="col-sm-12">
					  <button class="square-button">Save</button>
					</div>
				  </form>
				</section>
  </div>
  <a href="index.php">Home </a>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
    <script  src="js/profile.js"></script>

</body>

</html>
