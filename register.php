<?php
require 'dbconfig/config.php';?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $username=$_POST["username"];
      $password=$_POST["password"];
      $query0="select user_id from login where username='" . $username . "'";
      $result=mysqli_query($conn,$query0);
      $count=mysqli_num_rows($result);
       if ($count!=0)
       {
         header('Refresh:0; url=signup.php');
         echo '<script language="javascript">';
         echo 'alert("User already exists !") ';
         echo '</script>';
         redirect('register.php');
         //header('Location: signup.php ');
       }
       else {
         // $date=date("y-m-d");
         // echo $date ;
          $query= "insert into login ( username, password) values ('$username','$password')";
          echo $query;
          $query_run= mysqli_query($conn,$query);
          header('Location: signup.php ');
        }
       ?>


  </body>
</html>
