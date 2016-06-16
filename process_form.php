<?php
$name = $_POST['name'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "missamandawong@gmail.com";
$subject = "New Message";

mail ($to, $subject, $message, "From: " . $name);
echo "Your Message has been sent";
 ?>
