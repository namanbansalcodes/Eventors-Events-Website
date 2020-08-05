<?php

$mailthis='Name: '.$_POST['name'].PHP_EOL;
$mailthis=$mailthis.'Email: '.$_POST['email'].PHP_EOL;
$mailthis=$mailthis.'Phone: '.$_POST['phone'].PHP_EOL;
$mailthis=$mailthis.'City: '.$_POST['city'].PHP_EOL;
$mailthis=$mailthis.'Experience: '.$_POST['exp'].PHP_EOL;
$mailthis=$mailthis.'Social: '.$_POST['social'].PHP_EOL.PHP_EOL;
$mailthis=$mailthis.'What is your story? Tell us about your family, hobbies ANYTHING!'.PHP_EOL.$_POST['desc1'].PHP_EOL.PHP_EOL;
$mailthis=$mailthis.'A Special Message for us maybe?'.PHP_EOL.$_POST['desc2'].PHP_EOL;

$mailto='namanb009@gmail.com';
$mailsubject='Vendor Application: '.$_POST['name'];

echo $mailthis;
//mail($mailto,$mailsubject,$mailthis);

?>