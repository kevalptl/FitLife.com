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
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style media="screen">
body {background-color}
* {box-sizing: border-box;}

input[type=text], select, textarea {
    width: 50%;
    padding: 12px;
    border: 1px solid #1a1a1a;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}
input[type=email]{
    width: 50%;
    padding: 12px;
    border: 1px solid #1a1a1a;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=button] {
    background-color: #b3b3b3;
    color: black;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=button]:hover {
    background-color: #1a1a1a;
    color: white;
}

input[type=submit] {
    background-color: #b3b3b3;
    color: black;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #1a1a1a;
    color: white;
}

.container-contact {
    border-radius: 5px;
    background-color: #b3b3b3;
    padding: 20px;
}

</style>
<link rel="stylesheet" type="text/css" href="css/navbar.css">

</head>
<body>
  <div class="navbar">
      <ul class="nav">
        <li><a href="index.php">Home</a></li>
      </ul>
  </div><br>
  <h3>Contact Form</h3>

<div class="container-contact">
  <form action="contact_submit.php" method="POST">
    <label for="name">Name</label><br>
    <input type="text" id="name" name="name" placeholder="Your name here.." required><br>

    <label for="email">Email</label><br>
    <input type="email" id="email" name="email" placeholder="Your email address.." required><br>

    <label for="review">Your Experience With Us</label><br>
    <select id="review" name="review">
      <option value="bad">Bad</option>
      <option value="normal">Normal</option>
      <option value="happy">Happy</option>
    </select><br>

    <label for="subject">Subject</label><br>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
    <br>
    <input type="submit" onclick="thankyou()" value="Submit">
    <input type="button" onclick="goBack()" value="Go Back">
  </form>
  <script>
  	function goBack()
    {	window.history.back();}
    function thankyou(){
      alert ("Thanks for you for contacting !!!");
      window.location.href("index.php");
    }
  </script>
</div>

</body>
</html>
