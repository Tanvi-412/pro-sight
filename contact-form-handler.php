<?php
    if (isset($POST['submit'])){
        $name = $_POST['name'];
        $visitor_email = $POST['email'];
        $message = $_POST['message'];


        $to = "thanamsh@stevens.edu";
        $headers = "From: $email_from \r\n";
        $headers .= "Reply-To: $visitor_email \r\n";
        $email_subject = "Pro-Sight Information Required!";
        $email_body = "User Name: $name.\n"."User Email: $visitor_email.\n"."User Message: $message.\n";



        mail($to, $email_subject, $email_body, $headers);
        header("Location: index.html?mailsend");
    }
    
   
    

?>
