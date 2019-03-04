

<?php
require 'dbconfig/config.php';
?>

<?php
// Start the session
session_start();
if (isset($_SESSION['user_id'])) {
  header ("Location: profiledisplay.php ");
}
else {
  header('Refresh:0; url=signup.php');
  echo '<script language="javascript">';
  echo 'alert("You need to login first !") ';
  echo '</script>';

}?>
