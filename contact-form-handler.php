<?php
    $name = $_POST['name'];
    $visitor_email = $POST['email'];
    $message = $_POST['message'];

    $email_from = 'tanvihanamshet412@gmail.com';
    $email_subject = "Pro-Sight Information Required!";
    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Message: $message.\n";

    $to = "tanvihanamshet412@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";
    mail($to, $email_subject, $email_body, $headers);
    header("Location:index.html");


?>
