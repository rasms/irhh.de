<?php

    require_once 'google/appengine/api/mail/Message.php';
    use google\appengine\api\mail\Message;

    $name     =   $_POST['name'];  
    $email    =   'rleissner@irhh.de';
    $subject  =   $_POST['subject'];
    $message  =   $_POST['message'];
    $message_body = "...";

    $mail_options = [
        "sender" => "rleissner@irhh.de",
        "to" => $email,
        "subject" => $subject,
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