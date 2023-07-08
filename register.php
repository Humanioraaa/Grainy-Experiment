<?php 
    session_start();
    include('server.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css"
    />

    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
      <div class="screen">
        <div class="screen__content">
        <form class="register" action="register_db.php" method="post">
        <?php include('errors.php'); ?>
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
        <div class="register__field">
              <i class="register__icon fas fa-user"></i>
              <input
                type="text"
                name="username"
                class="register__input"
                placeholder="User name"
              />
            </div>
            <div class="register__field">
              <i class="register__icon fas fa-user"></i>
              <input
                type="email"
                name="email"
                class="register__input"
                placeholder="Email"
              />
            </div>
            <div class="register__field">
              <i class="register__icon fas fa-lock"></i>
              <input
                type="password"
                name="password_1"
                class="register__input"
                placeholder="Password"
              />
            </div>
            <div class="register__field">
              <i class="register__icon fas fa-lock"></i>
              <input
                type="password"
                name="password_2"
                class="register__input"
                placeholder="Password"
              />
            </div>
            <button
              class="button submit"
              type="submit"
              name="reg_user"
            >
              <span class="button__text">Log In Now</span>
              <i class="button__icon fas fa-chevron-right"></i>
            </button>

            <button
              class="button submit to-login"
              onclick="location.href='login.php'" type="button"
              name="to_login"
              
            >
            <span class="button__text">Or Login</span>
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