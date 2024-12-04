<?php
    $to      = 'msfarhaonline@gmail.com';
    $subject = 'This is a test email';
    $message = 'Hi there';
    
    $headers[] = 'From: samiulb25@gmail.com';
    $headers[] = 'Reply-To: samiulb25@gmail.com';
    $headers[] = 'X-Mailer: PHP/' . phpversion();
    
    
    mail($to, $subject, $message, implode('\r\n', $headers));
?>