<?php
  require 'dbconfig/config.php';
?>
<?php
  // Start the session
  session_start();
  //if (isset($_SESSION['user_id']))
  //  { echo $_SESSION['user_id'];  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<title>FitLife.com</title>

		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/cards.css">
    <style>


#wrapper-cards {
display: flex;
flex-wrap: wrap;
justify-content: center;
    max-width: 1300px;
    height:500px;
    padding: 0px;
    margin-top: 10px;
    align-items: center;
}
#first {
    width: 31%;
    min-width:300px;
    height: 100%;
    background: #cccccc;
    margin-left:5px;
    margin-right:15px;
    border-width: thick;
    border: 1px solid;
    box-shadow: 5px 10px #888888;
}

#second {
    min-width:300px;
    width: 31%;
    height: 100%;
    background: #cccccc;
    margin-left:5px;
    margin-right:5px;
    border: 1px solid;
    box-shadow: 5px 10px #888888;

}

#third {
    min-width:300px;
    width: 31%;
    height: 100%;
    background: #cccccc;
    margin-left:15px;
    margin-right:5px;
    border: 1px solid;
    box-shadow: 5px 10px #888888;
}
img.card-img{
  height: 100%;
  width: 100%;
}

pre{
  background-color: black;
  color: white;
  font-size: 20px;
}
</style>

	</head>

	<body style="background-color: #d9d9d9 ">

    <div class="navbar">
      <?php include 'newnavbar.php';?>
    </div>

    <div class="slideshow">
      <?php include 'ss.php';?>
    </div>

    <div id="wrapper-cards">
      <div id="first"> <img class="card-img" src="img/card1.jpg" alt=""> </div>
      <div id="second"> <img class="card-img" src="img/card2.jpg" alt=""> </div>
      <div id="third"> <img class="card-img" src="img/card3.jpg" alt=""> </div>
    </div>
    <hr>
    <footer>
<pre>    FitLife.com
    Dwarkadas J. Sanghvi College of Engineering,
    U-15, J.V.P.D. Scheme, Bhaktivedanta Swami Marg,
    Vile Parle (West), Mumbai - 400 056.

    Contact : +91 8898498809
    <a href="google.php">Locate Us</a>                                    We would Love to hear from You!
                                                   Send your <a href="https://docs.google.com/forms/d/e/1FAIpQLSfdHhQxaZfFBBTf0o7MhBoc3xxzXBibniF-8xK8jlv2zNxC_A/viewform?usp=sf_link">Feedback</a> here !
      </pre>

    </footer>
	</body>
</html>
