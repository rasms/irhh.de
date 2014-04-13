<?php

    require_once 'google/appengine/api/mail/Message.php';
    use google\appengine\api\mail\Message;

    $name     =   $_POST['name'];  
    $email    =   $_POST['email'];
    $subject  =   $_POST['subject'];
   

    $message_body = 'From: '.$name."\n";
    $message_body .= 'E-Mail: '.$email."\n";
    $message_body .= 'Subject: '.$subject."\n";    
    $message_body .= 'Message: '.$_POST['message_body'];

    $mail_options = [
        "sender" => "rl@irhh.de",
        "to" => "rl@irhh.de",
        "subject" => "Message from irhh.de Contact-Form",
        "textBody" => $message_body
    ];

    try {
            $message = new Message($mail_options);
            $message->send();
            echo 'sent';

} catch (InvalidArgumentException $e) {
            echo $e->getMessage();
            echo 'failed';
}

?>