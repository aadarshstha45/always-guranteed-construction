<?php
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST']; // Gets the domain name (e.g., localhost or example.com)
$basePath = dirname($_SERVER['SCRIPT_NAME']); // Gets the base path (e.g., /constructions)

define("BASE_URL", $protocol . '://' . $host . $basePath); // Construct dynamic base URL
?>

<?php define('email', 'brenda3712000@yahoo.com '); ?>
<?php define('phone', '(618) 567-2106 '); ?>
<?php define('address', '4448 Austell Powder, GA 30127-2917'); ?>
<?php define('MAIL_URL', "http://send.mail.codetara.com/api/send-email"); ?>

<?php
// Define the base URL depending on the environment (local or production)
if ($_SERVER['SERVER_NAME'] == 'localhost') {
    // Local environment: for example, localhost/constructions
    define('base_URL', '/constructions');
} else {
    // Production environment: your production base URL
    define('base_URL', '');
}
?>