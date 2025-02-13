<?php

include_once("config.php");

$to = email;
$subject = "New Message from Website ";
$headers = "From: " . strip_tags($_POST['name']) . " <" . strip_tags($_POST['email']) . "> \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
ob_start();
?>
<?php
if (empty($_POST['name'])) {
    echo "<p style='color: #fff; margin: 0; padding: 20px 0; background: #d35400; font-size: 25px; text-align: center;'>Sorry! You are not enter your Full Name.</p>";
} elseif (empty($_POST['email'])) {
    echo "<p style='color: #fff; margin: 0; padding: 20px 0; background: #d35400; font-size: 25px; text-align: center;'>Sorry! You are not enter your Email Address.</p>";
} elseif (empty($_POST['phone'])) {
    echo "<p style='color: #fff; margin: 0; padding: 20px 0; background: #d35400; font-size: 25px; text-align: center;'>Sorry! You are not enter your Phone Number.</p>";
} else { ?>

    <table rules="all" style="border:1px solid  #666; font-size:16px;" cellpadding="10" width="100%">
        <tr style='background: #eee;'>
            <td colspan="4"><strong>PERSONAL INFORMATION</strong> </td>
        </tr>
        <tr>
            <td><strong>Name:</strong> </td>
            <td><?= strip_tags($_POST["name"]) ?></td>

        </tr>
        <tr>
            <td><strong> Phone:</strong> </td>
            <td><?= strip_tags($_POST["phone"]) ?></td>
        </tr>
        <tr>
            <td><strong>Email:</strong> </td>
            <td><?= strip_tags($_POST["email"]) ?></td>
            <td><strong>Address:</strong> </td>
            <td><?= strip_tags($_POST["address"]) ?></td>
        </tr>
        <tr style='background: #eee;'>
            <td colspan="4"><strong>MESSAGE</strong></td>
        </tr>
        <tr>
            <td colspan="4"><?= strip_tags($_POST["review"]) ?></td>
        </tr>
    </table>

    <?php
    $message = ob_get_clean();
    if (!@mail($to, $subject, $message, $headers))
        echo "<p style='color: #fff; margin: 0; padding: 20px 0; background: #d35400; font-size: 25px; text-align: center;'>Sorry! Request not sent. Please try again.</p>";
    else
        echo "<p style='color: #fff; margin: 0; padding: 20px 0; background: #27ae60; font-size: 25px; text-align: center;'>Your review has been sent successfully. Thank you!</p>";
    ?>
<?php }
?>