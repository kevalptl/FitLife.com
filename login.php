<?php
  require 'dbconfig/config.php';
?>

<?php

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    // Start the session
    session_start();
      $username=$_POST["unamelogin"];
      $password=$_POST["passlogin"];

      $query="select * from login where username='" . $username . "' and password = '". $password ."'";
      $query_run= mysqli_query($conn,$query);
      $count  = mysqli_num_rows($query_run);
       if (mysqli_num_rows($query_run) > 0){
         $rows=mysqli_fetch_array($query_run);
         extract($rows);
         print_r($rows) ;
         $_SESSION['user_id']=$user_id;
         echo $user_id;
         header ("Location: index.php ");
       }
       else {
         header('Refresh:0; url=signup.php');
         echo '<script language="javascript">';
         echo 'alert("Invalid username or password !") ';
         echo '</script>';
       }


    ?>

  </body>
</html>
