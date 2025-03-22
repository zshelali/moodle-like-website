<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!--Common style to all pages (header, footer...) -->
  <link rel="stylesheet" href="style/main_style.css" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <?php
  if (isset($styles) && is_array($styles)) {
    foreach ($styles as $style) {
      echo '<link rel="stylesheet" href="style/' . $style . '.css" />' . "\n";
    }
  }

  if (isset($scripts) && is_array($scripts)) {
    foreach ($scripts as $script) {
      echo '<script src="script/' . $script . '.js"></script>' . "\n";
    }
  }
  ?>

  <!-- <link rel="stylesheet" href="style/professor_page_style.css" /> 
    <link rel="stylesheet" href="style/first_page_style.css" />
    <link rel="stylesheet" href="style/register_style.css" /> -->

  <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
  <title>Skooli</title>
</head>

<body>
  <div class="title-container">
    <h1>
      <a href="index.php" id="maintitle" class=link-hover>Skooli<span class="dotcom">.com</span></a>
    </h1>
    <h2 id="utbmlogo" class="link-hover"><a href="https://utbm.fr">utbm</a></h2>
  </div>
  <br />
  <nav id="reg-log-nav">
    <a href="register.php" class="buttonlink">Register</a>
    <a href="login.php" class="buttonlink">Login</a>
    <a href="admin_login.php" class="buttonlink">Admin access</a>
  </nav>
  <br />

  <!--BODY-->