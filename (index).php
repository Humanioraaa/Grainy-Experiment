<?php 
    session_start();

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="page-transition">
        <div class="div"></div>
        <div class="div"></div>
        <div class="div"></div>
        <div class="div"></div>

        <ul class="preload">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        </div>

        <div class="nav">
      <h2>HUMANIORA</h2>
      <div class="menu">
        <?php if (isset($_SESSION['success'])) : ?>
        <p>
          <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
        </p>
        <?php endif ?>
        <?php if (isset($_SESSION['username'])) : ?>
        <p>
          Well, Hello <strong><?php echo $_SESSION['username']; ?></strong>
        </p>
        <p><a href="index.php?logout='1'" style="color: #fff">Logout</a></p>
        <?php endif ?>
      </div>
    </div>

    <div class="hero">
      <div class="hero-text">
        <h1>Grainy Forever.</h1>
        <p>"Check out my latest work on GitHub and Behance."</p>
        <div class="buttons">
          <a
            class="button primary"
            href="https://github.com/Humanioraaa"
            target="_blank"
            >See My Front-End journey</a
          >
          <a
            class="button secondary"
            href="https://www.behance.net/hilmynaufal_"
            target="_blank"
            >My Latest Design Project</a
          >
        </div>
      </div>
      <div class="blob-cont">
        <div class="yellow blob"></div>
        <div class="red blob"></div>
        <div class="green blob"></div>
      </div>
    </div>

    <svg>
      <filter id="noiseFilter">
        <feTurbulence
          type="fractalNoise"
          baseFrequency="0.6"
          stitchTiles="stitch"
        />
        <feColorMatrix
          in="colorNoise"
          type="matrix"
          values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 1 0"
        />
        <feComposite operator="in" in2="SourceGraphic" result="monoNoise" />
        <feBlend in="SourceGraphic" in2="monoNoise" mode="screen" />
      </filter>
    </svg>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
    <script src="script.js"></script>
</body>
</html>