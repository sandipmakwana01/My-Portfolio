<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Sanitize user input to prevent email injection attacks
$name = filter_var($name, FILTER_SANITIZE_STRING);
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$subject = filter_var($subject, FILTER_SANITIZE_STRING);
$message = filter_var($message, FILTER_SANITIZE_STRING);

// Set email headers
$headers = "From: $name <$email>\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

// Replace with your recipient email address
$to = 'makwana0843@gmail.com.com';

// Send the email
if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Error sending email.";
}
?>