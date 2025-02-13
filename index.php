<?php include_once("config.php"); ?>

<?php
$page = "";
$page = isset($_GET['id']) ? $_GET['id'] : 'home';

// Define allowed pages (only folder names)
$allowed_pages = [
    'home',
    'about',
    'services',
    'our-works',
    'reviews',
    'contact',
    'free-estimate',
    'contact-send',
];

// Ensure the requested page is in the allowed list
if (!in_array($page, $allowed_pages)) {
    include("404.php");
    exit;
}

include_once("includes/header.php");

// Correctly include the page inside its folder
include("$page.php");
include_once("includes/footer.php");

?>
