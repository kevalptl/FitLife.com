<?php
  require 'dbconfig/config.php';
?>
<?php
  // Start the session
  session_start();
  //echo $_SESSION['user_id'];
?>

<?php
  $uid=$_SESSION['user_id'];
  $fname=$_POST["fname"];
  $lname=$_POST["lname"];
  $email=$_POST["email"];
  $contact=$_POST["contact"];
  $dob=$_POST["dob"];
if($fname=="")
  {echo "empty" ;}
  else
  {echo $fname;}
  //check if the values already exist.
  // $query0="select * from profile where user_id='" . $uid . "'";
  // $result0=mysqli_query($conn,$query0);
  if($fname!="")
  {$query="update profile set fname='".$fname."' where user_id='".$uid."'";
    $result0=mysqli_query($conn,$query);
  }
  if($lname!="")
  {$query="update profile set lname='".$lname."' where user_id='".$uid."'";
    $result0=mysqli_query($conn,$query);
  }
  if($email!="")
  {$query="update profile set email='".$email."' where user_id='".$uid."'";
    $result0=mysqli_query($conn,$query);
  }
  if($contact!="")
  {$query="update profile set contact='".$contact."' where user_id='".$uid."'";
    $result0=mysqli_query($conn,$query);
  }
  if($dob!="")
  {$query="update profile set d_o_b='".$dob."' where user_id='".$uid."'";
    $result0=mysqli_query($conn,$query);
  }

  // Put the values in the database.
// else{
//   $query= "insert into profile ( user_id, fname, lname, email, contact, d_o_b) values ('$uid','$fname','$lname','$email','$contact','$dob')";}
//  $result=mysqli_query($conn,$query);
   header('Location: profiledisplay.php ');
?>
