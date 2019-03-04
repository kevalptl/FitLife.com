<?php
  require 'dbconfig/config.php';
?>
<?php
  // Start the session
  session_start();
  if (isset($_SESSION['user_id']))
    { echo $_SESSION['user_id'];  }
?>

<?php
$name= $_POST['name'];
$email= $_POST['email'];
$exp= $_POST['review'];
$subject = $_POST['subject'];

$query0="insert into contact values ('$name','$email','$exp','$subject')";
$result0=mysqli_query($conn,$query0);
header ('Location: index.php ');

?>
