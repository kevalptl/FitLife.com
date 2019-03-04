<?php
  echo '<ul class="nav">
        <li>
          <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="logincheck.php">My Profile</a>
            <a href="profileedit.php">My Activities</a>
            <a href="app2.php">Achievements</a>';
    if (isset($_SESSION['user_id']))
    {
      echo '<a href="logout.php">Logout</a>';}
      echo '</div>
            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
            <script>
              function openNav()
                {document.getElementById("mySidenav").style.width = "250px";}
              function closeNav()
                {document.getElementById("mySidenav").style.width = "0";}
            </script>
          </li>
          <li><a href="index.php">Home</a></li>
          <li><a href="#news">News</a></li>
          <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Dropdown</a>
            <div class="dropdown-content">
              <a href="app1.php">Weight Loss Program</a>';
              if (isset($_SESSION['user_id'])) {
                echo '<a href="myworkout.php">My Workout</a>';
              }
              else {
                echo '<a href="workout_videos.php">Workout</a>';
              }
              echo '<a href="#">Health</a>
            </div>
          </li>';
    if (!isset($_SESSION['user_id']))
      {echo  '<li><a href="signup.php" class="login">Login | SignUp</a></li>';}
      else {
        $uid=$_SESSION['user_id'];
         $query="select fname from profile where user_id = '".$uid."'";
         $result=mysqli_query($conn,$query);
         $row=mysqli_fetch_array($result);
         echo '<li><a href="profile.php" class="login">'.$row['fname'].'</a></li>';
      }
      echo ' </ul>';
?>
