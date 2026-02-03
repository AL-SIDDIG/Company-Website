<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $mobile  = htmlspecialchars($_POST['mobile']);
    $city    = htmlspecialchars($_POST['city']);
    $message = htmlspecialchars($_POST['message']);

    $to = "siddigalssdig@gmail.com"; // CHANGE THIS
    $subject = "New Contact Form Submission";

    $body = "
    Name: $name\n
    Email: $email\n
    Mobile: $mobile\n
    City: $city\n
    Message:\n$message
    ";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        header("Location: index.html");
    } else {
        echo "Location: comingsoon.html";
    }
}
?>
