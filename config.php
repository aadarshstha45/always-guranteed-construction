<?php
define("BASE_URL", "http://localhost/constructions"); // Change to your actual domain
?>

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