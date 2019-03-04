<?php
  require 'dbconfig/config.php';
?>
<?php
  // Start the session
  session_start();
  // if (isset($_SESSION['user_id']))
  //   { echo $_SESSION['user_id'];  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>FitLife.com</title>
    <style media="screen">
    body{        background-color: #333333;}
    /* The container */
  .container-gender {
      display: block;
      position: relative;
      padding-left: 35px;
      margin-bottom: 12px;
      cursor: pointer;
      font-size: 22px;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
  }

  /* Hide the browser's default radio button */
  .container-gender input {
      position: absolute;
      opacity: 0;
      cursor: pointer;
  }

  /* Create a custom radio button */
  .checkmark {
      position: absolute;
      top: 0;
      left: 0;
      height: 25px;
      width: 25px;
      background-color: #eee;
      border-radius: 50%;
  }

  /* On mouse-over, add a grey background color */
  .container-gender:hover input ~ .checkmark {
      background-color: #ccc;
  }

  /* When the radio button is checked, add a blue background */
  .container-gender input:checked ~ .checkmark {
      background-color: #b3b3b3;
  }

  /* Create the indicator (the dot/circle - hidden when not checked) */
  .checkmark:after {
      content: "";
      position: absolute;
      display: none;
  }

  /* Show the indicator (dot/circle) when checked */
  .container-gender input:checked ~ .checkmark:after {
      display: block;
  }

  /* Style the indicator (dot/circle) */
  .container-gender .checkmark:after {
   	top: 9px;
  	left: 9px;
  	width: 8px;
  	height: 8px;
  	border-radius: 50%;
  	background: white;
  }
    .video-display {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
      }

      .body-focus {
     -webkit-appearance: menulist-button;
     height: 40px;
     width: auto;
     font-size: 15px;
  }

  button[type=button] {
      background-color: #b3b3b3;
      color: black;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
  }

  button[type=button]:hover {
      background-color: #1a1a1a;
      color: white;
  }
  .select-item{
    display: block;

  }
  .video-frame{
    margin: 5px;
  }
  .gender{color: white;}
    </style>
  </head>
  <body>
    <div class="navbar">
      <?php include 'newnavbar.php'; ?>
    </div>

    <div class="select-items">

      <form class="select-item" action="" method="post">
        <label class="container-gender"><pre class="gender">Male</pre>
          <input type="radio" id="gender-male" name="gender" value="male">
          <span class="checkmark"></span>
        </label>
        <label class="container-gender"><pre class="gender">Female</pre>
          <input type="radio" id="gender-female" name="gender" value="female">
          <span class="checkmark"></span>
        </label>
        <!-- <input type="radio" id="gender-male" name="gender"  value="male"/>Male
        <input type="radio" id="gender-female" name="gender" value="female"/>Female -->

        <select id="body-focus" class="body-focus">
          <option class="focus-option" value="upper" selected>Upper</option>
          <option class="focus-option" value="core" >Core</option>
          <option class="focus-option" value="lower">Lower</option>
          <option class="focus-option" value="total">Total</option>
        </select>

        <button type="button" class="go-button" onclick="video_list()">Go</button><br>
      </form>
      <div class="video-display" id="video-display">

      </div>
      <script type="text/javascript">
        function video_list(){
          if(document.getElementById('gender-male').checked){
          var g_select = "male";}
          else if (document.getElementById('gender-female').checked){
            var g_select = "female";
          }
          else {
            alert("Please select a value!");
            window.location="workout_videos.php";
          }
          var b_select = document.getElementById('body-focus').value;
          console.log(g_select);
          console.log(b_select);
          if (g_select=="male") {
            switch (b_select) {
              case "upper": console.log("male upper");
              video1='<iframe class="video-frame" width="560" height="315" src="https://www.youtube.com/embed/o3lpSXRt7dA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
              video2='<iframe class="video-frame" width="560" height="315" src="https://www.youtube.com/embed/IODxDxX7oi4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
              video3='<iframe class="video-frame" width="560" height="315" src="https://www.youtube.com/embed/J0DnG1_S92I" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
              video4='<iframe class="video-frame" width="560" height="315" src="https://www.youtube.com/embed/c3ZGl4pAwZ4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
              break;
              case "core": console.log("male core");
              video1='<iframe class="video-frame" width="560" height="315" src="https://www.youtube.com/embed/ykJmrZ5v0Oo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
              video2='<iframe class="video-frame" width="560" height="315" src="https://www.youtube.com/embed/TwD-YGVP4Bk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
              video3='<iframe class="video-frame" width="560" height="315" src="https://www.youtube.com/embed/5ER5Of4MOPI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
              video4='<iframe class="video-frame" width="560" height="315" src="https://www.youtube.com/embed/vhC4_fKJVPY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
              break;
              case "lower": console.log("male lower");
              video1='<iframe class="video-frame" width="560" height="315" src="https://www.youtube.com/embed/aclHkVaku9U" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
              video2='<iframe class="video-frame" width="560" height="315" src="https://www.youtube.com/embed/5umbf4ps0GQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
              video3='<iframe class="video-frame" width="560" height="315" src="https://www.youtube.com/embed/wxYLVqR1QHU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
              video4='<iframe class="video-frame" width="560" height="315" src="https://www.youtube.com/embed/FJmRQ5iTXKE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
              break;
              case "total": console.log("male total");
              video1='<iframe class="video-frame" width="560" height="315" src="https://www.youtube.com/embed/pSHjTRCQxIw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
              video2='<iframe class="video-frame" width="560" height="315" src="https://www.youtube.com/embed/jDwoBqPH0jk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
              video3='<iframe class="video-frame" width="560" height="315" src="https://www.youtube.com/embed/J0DnG1_S92I" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
              video4='<iframe class="video-frame" width="560" height="315" src="https://www.youtube.com/embed/c3ZGl4pAwZ4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
              break;
              default: console.log("None");

                  }
            }
            else {
              switch (b_select) {
                case "upper": console.log("female upper");
                video1='<iframe class="video-frame" width="560" height="315" src="https://www.youtube.com/embed/sxrlGM2hU2Y" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
                video2='<iframe class="video-frame" width="560" height="315" src="https://www.youtube.com/embed/LrPn3R-3kTw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
                video3='<iframe class="video-frame" width="560" height="315" src="https://www.youtube.com/embed/J0DnG1_S92I" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
                video4='<iframe class="video-frame" width="560" height="315" src="https://www.youtube.com/embed/0326dy_-CzM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
                break;
                case "core": console.log("female core");
                video1='<iframe class="video-frame" width="560" height="315" src="https://www.youtube.com/embed/EdWCF9-ZAJI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
                video2='<iframe class="video-frame" width="560" height="315" src="https://www.youtube.com/embed/av7-8igSXTs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
                video3='<iframe class="video-frame" width="560" height="315" src="https://www.youtube.com/embed/Xyd_fa5zoEU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
                video4='<iframe class="video-frame" width="560" height="315" src="https://www.youtube.com/embed/vhC4_fKJVPY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
                break;
                case "lower": console.log("female lower");
                video1='<iframe class="video-frame" width="560" height="315" src="https://www.youtube.com/embed/aclHkVaku9U" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
                video2='<iframe class="video-frame" width="560" height="315" src="https://www.youtube.com/embed/POATJZR2uds" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
                video3='<iframe class="video-frame" width="560" height="315" src="https://www.youtube.com/embed/5umbf4ps0GQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
                video4='<iframe class="video-frame" width="560" height="315" src="https://www.youtube.com/embed/zE_eq5evqjc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
                break;
                case "total": console.log("female total");
                video1='<iframe class="video-frame" width="560" height="315" src="https://www.youtube.com/embed/ynUw0YsrmSg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
                video2='<iframe class="video-frame" width="560" height="315" src="https://www.youtube.com/embed/1fbU_MkV7NE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
                video3='<iframe class="video-frame" width="560" height="315" src="https://www.youtube.com/embed/J0DnG1_S92I" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
                video4='<iframe class="video-frame" width="560" height="315" src="https://www.youtube.com/embed/0326dy_-CzM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>  ';
                break;
                default: console.log("None");
              }
          }
          console.log();
          video_display=video1+"<br>"+video2+"<br>"+video3+"<br>"+video4+"<br>";
          document.getElementById("video-display").innerHTML= video_display;

        }
      </script>
    </div>
  </body>
</html>
