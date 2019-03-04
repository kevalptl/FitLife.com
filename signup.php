<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>FitLife.com</title>
  <link rel="stylesheet" href="css/signup.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300, 400, 500" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">

</head>

<body>
  <div class="navbar">
      <ul class="nav">
        <li><a href="index.php">Home</a></li>
      </ul>
  </div>
  <section class="user">
    <div class="user_options-container">
      <div class="user_options-text">
        <div class="user_options-unregistered">
          <h2 class="user_unregistered-title">Don't have an account?</h2>
          <p class="user_unregistered-text">Banjo tote bag bicycle rights, High Life sartorial cray craft beer whatever street art fap.</p>
          <button class="user_unregistered-signup" id="signup-button">Sign up</button>
        </div>

        <div class="user_options-registered">
          <h2 class="user_registered-title">Have an account?</h2>
          <p class="user_registered-text">Banjo tote bag bicycle rights, High Life sartorial cray craft beer whatever street art fap.</p>
          <button class="user_registered-login" id="login-button">Login</button>
        </div>
      </div>

      <div class="user_options-forms" id="user_options-forms">
        <div class="user_forms-login">
          <h2 class="forms_title">Login</h2>
          <form class="forms_form" action="login.php" method="POST" >
            <fieldset class="forms_fieldset">
              <div class="forms_field">
                <input type="text" placeholder="Username"  name="unamelogin" class="forms_field-input" required autofocus />
              </div>
              <div class="forms_field">
                <input type="password" placeholder="Password"  name="passlogin" class="forms_field-input" required />
              </div>
            </fieldset>
            <div class="forms_buttons">
              <button type="button" class="forms_buttons-forgot">Forgot password?</button>
              <input type="submit" value="Log In" class="forms_buttons-action">
            </div>
          </form>
        </div>

        <div class="user_forms-signup">
          <h2 class="forms_title">Sign Up</h2>
          <form class="forms_form" action="register.php" method="post">
            <fieldset class="forms_fieldset">
              <div class="forms_field">
                <input type="text" placeholder="Username" id="username" name="username"class="forms_field-input" required />
              </div>
              <!-- <div class="forms_field">
                <input type="email" placeholder="Email" name="email" class="forms_field-input" required />
              </div> -->
              <div class="forms_field">
                <input type="password" placeholder="Password" name="password" class="forms_field-input" required />
              </div>
            </fieldset>
            <div class="forms_buttons">
              <input type="submit" value="Sign up" class="forms_buttons-action">
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <script  src="js/signup.js"></script>

</body>
</html>
