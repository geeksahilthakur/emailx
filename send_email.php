<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $sender_name = $_POST['sender_name'];
    $sender_email = $_POST['sender_email'];
    $recipient_email = $_POST['recipient_email'];
    $email_subject = $_POST['email_subject'];
    $email_body = $_POST['email_body'];

    // Compose email headers
    $headers = "From: $sender_name <$sender_email>\r\n";
    $headers .= "Reply-To: $sender_email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Send email
    if (mail($recipient_email, $email_subject, $email_body, $headers)) {
        echo "<p>Email sent successfully!</p>";
    } else {
        echo "<p>Failed to send email. Please try again later.</p>";
    }
}
?>
