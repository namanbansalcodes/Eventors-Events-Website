<?php

if (isset($_POST["submit"])){
    $name=$_POST["vname"];

    $mailTo="webmanager@eventorsevents.com";
    $subject="blah";
    $headers="From: " .$name;
    $text="This nigga be looking for you";

    mail($mailTo,$subject,$headers,$text);
    header("Location: index.php?mailsent");
}