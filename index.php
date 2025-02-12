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
    'contact'
];

// Ensure the requested page is in the allowed list
if (!in_array($page, $allowed_pages)) {
    include("404.php");
    exit;
}

$title = 'New Remodeling';
$phone = '(123) 359-5656';
$email = 'newremodeling@gmail.com';
$address = 'Phoenix, AZ 85024';

include_once("includes/header.php");

// Correctly include the page inside its folder
include("$page.php");
include_once("includes/footer.php");

?>
