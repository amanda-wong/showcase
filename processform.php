    <?php

    //Form information
    $name = $_POST['firstName'] . ' ' . $_POST['lastName'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = 'missamandawong@gmail.com';
    $subject = 'New WordPress Message';

    $body = <<<EOD
<br><hr><br>
Email: $email<br>
Name: $name<br>
Message: $message<br>
EOD;

    $headers = "From: $email\r\n";
    $headers .= "Content-type: text/html\r\n";
    $success = mail($to, $subject, $body, $headers);
    // Results rendered as HTML

    if ($success){
        // print "<meta http-equiv=\"refresh\" content=\"0;URL=thankyou.php\">";
        alert('Your message has been sent!');
}
 ?>
