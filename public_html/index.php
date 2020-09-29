<?php
$title = (isset($_GET['title'])) ? $_GET['title'] : 'Home Page';
?>
<!DOCTYPE html> 
<html lang="en">
  <head>
    <meta charset="utf-8">

    <title><?= $title; ?></title>
    <meta name="description" content="The HTML5 Template">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="assets/css/styles.css">

  </head>

  <body>
    <script src="assets/js/scripts.js"></script>
  </body>
</html>
<?php

