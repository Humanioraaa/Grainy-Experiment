<?php
    session_start();
    include('server.php'); 

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Login</title>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css"
    />
    <link rel="stylesheet" href="index.css" />
  </head>
  <body>
    <div class="container">
      <div class="screen">
        <div class="screen__content">
          <form class="login" action="login_db.php" method="post">
            <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
              <h3>
                <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
              </h3>
            </div>
            <?php endif ?>
            <div class="login__field">
              <i class="login__icon fas fa-user"></i>
              <input
                type="text"
                name="username"
                class="login__input"
                placeholder="Email"
              />
            </div>
            <div class="login__field">
              <i class="login__icon fas fa-lock"></i>
              <input
                type="password"
                name="password"
                class="login__input"
                placeholder="Password"
              />
            </div>
            <button
              class="button submit"
              type="submit"
              name="login_user"
            >
              <span class="button__text">Log In Now</span>
              <i class="button__icon fas fa-chevron-right"></i>
            </button>

            <button
              class="button submit to-register"
              onclick="location.href='register.php'" type="button"
              name="to_register"
              
            >
              <span class="button__text">Or Register</span>
              <i class="button__icon fas fa-chevron-right"></i>
            </button>
          </form>
        </div>
        <div class="screen__background">
          <span
            class="screen__background__shape screen__background__shape4"
          ></span>
          <span
            class="screen__background__shape screen__background__shape3"
          ></span>
          <span
            class="screen__background__shape screen__background__shape2"
          ></span>
          <span
            class="screen__background__shape screen__background__shape1"
          ></span>
        </div>
      </div>
    </div>

  </body>
</html>
