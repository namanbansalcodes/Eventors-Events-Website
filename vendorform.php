<?php

if (isset($_POST["btn-send"]))
{
    echo "Hello";
    
    $mailTo="webmanager@eventorsevents.com";
    $subject="blah";
    $headers="From: " .$name;
    $text="This nigga be looking for you";

    mail($mailTo,$subject,$headers,$text);
    header("Location = index.php?mailsend");
}

?>