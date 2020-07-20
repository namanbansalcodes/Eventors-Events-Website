<?php
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

if (isset($_POST["btn-send"]))
{
    echo "Hello";

    $mailTo = "namanb009@gmail.com ";
    $subject="blah";
    $text="This nigga be looking for you";

    mail($mailTo,$subject,$text);
    header("Location = index.php?mailsend");
}

?>