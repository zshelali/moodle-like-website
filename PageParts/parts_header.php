<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--Common style to all pages (header, footer...) -->
    <link rel="stylesheet" href="style/main_style.css" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.1/themes/base/jquery-ui.css">

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/ui/1.14.1/jquery-ui.js"></script>
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
    ?>

    <!-- <link rel="stylesheet" href="style/professor_page_style.css" />
      <link rel="stylesheet" href="style/first_page_style.css" />
      <link rel="stylesheet" href="style/register_style.css" /> -->

    <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
    <title>Skooli</title>
</head>

<body>


<!--BODY-->