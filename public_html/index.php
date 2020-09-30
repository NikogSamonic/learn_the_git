<?php
// Set page title
$title = (isset($_GET['title']))
? $_GET['title']
: 'Home';

require_once("app/V/templates/header.php");
require_once("app/V/login/login.php");
require_once("app/V/templates/footer.php");
?>

