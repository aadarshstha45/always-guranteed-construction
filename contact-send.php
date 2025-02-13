<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    // Set the recipient email address
    $to = "aadarshstha45@gmail.com";  // Replace with your email address

    // Set the subject of the email
    $subject = "Contact Form Submission from " . $name;

    // Create the email content
    $body = "<h2>New Contact Form Submission</h2>";
    $body .= "<p><strong>Name:</strong> " . $name . "</p>";
    $body .= "<p><strong>Email:</strong> " . $email . "</p>";
    $body .= "<p><strong>Phone:</strong> " . $phone . "</p>";
    $body .= "<p><strong>Message:</strong></p><p>" . nl2br($message) . "</p>";

    // Set headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's email

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Your message has been sent successfully.";
    } else {
        echo "Sorry, something went wrong. Please try again.";
    }
}
