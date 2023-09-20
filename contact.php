<?php

// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Validate the form data
if (empty($name)) {
    echo "Please enter your name.";
    exit;
}

if (empty($email)) {
    echo "Please enter your email address.";
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Please enter a valid email address.";
    exit;
}

if (empty($message)) {
    echo "Please enter your message.";
    exit;
}

// Send the email
$subject = "Contact Form Submission";
$body = "Name: $name\nEmail: $email\nMessage: $message";

mail("someone@example.com", $subject, $body);

// Redirect to the home page
header("Location: index.php");

?>