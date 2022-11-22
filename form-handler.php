<?php

$name= $_POST['name'];
$email= $_POST['email'];
$subject= $_POST['subject'];
$messege= $_POST['messege'];

$email_from = 'info@youwebsite.com' ;
$email_subject = 'new form submission';
$email_body  = "user name : $name.\n".
                "user email : $email.\n".
                "user subject : $subject.\n".
                "user messege : $messege.\n";


    $to = 'myemailid@gmail.com';
    $headers= "from: $email_from \r\n";
    $headers ="reply-to:$email \r\n" ;

    mail($to,$email_subject,$email_body,$headers);

    header("location:contact.html");



?>