<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--Common style to all pages (header, footer...) -->
    <link rel="stylesheet" href="style/main_style.css" />

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <?php
    // Set the corresponding style for the right page
    if (isset($styles) && is_array($styles)) {
        foreach ($styles as $style) {
            echo '<link rel="stylesheet" href="style/' . $style . '.css" />' . "\n";
        }
    }
    // Set the corresponding js file for the right page
    if (isset($scripts) && is_array($scripts)) {
        foreach ($scripts as $script) {
            echo '<script src="script/' . $script . '.js"></script>' . "\n";
        }
    }

    // back
    $currentPage = basename($_SERVER['PHP_SELF']);
    if ($currentPage !== 'index.php') {
        echo '<a href="javascript:history.back()" class="back-button buttonlink">← Back</a>';
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
    <div class="logo-container">
        <a href="https://utbm.fr">
            <img src="https://upload.wikimedia.org/wikipedia/fr/b/be/Utbm.svg" alt="logo" id="utbm-logo">
        </a>
    </div>
</div>
<br />
<nav id="reg-log-nav">
    <a href="login.php" class="buttonlink">Login</a>
    <a href="admin_home.php" class="buttonlink">Admin zone</a>
</nav>
<br />

<!--BODY-->