<?php
$name = $_POST['firstName'] . ' ' . $_POST['lastName'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "missamandawong@gmail.com";
$subject = "New Message from " . $name;

var validation = function() {
    alert('you forgot to tell me your name!');
}

 // send email
 $success = mail($to, $subject, $message, "From: " . $name);
 $unsuccessful =

 // redirect to success page
 if (isset($_POST['submit']) AND $_POST['email'] != ''){
     mail($to, $subject, $message, "From: " . $name);
     alert("Thank you for your message!");
 }
 else{
    validation();
 }
 ?>
