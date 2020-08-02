<?php

parse_str($_POST['form'],$array);
print_r($array);

$keys=array_keys($array);
$size=sizeof($keys);

$mailthis=$array['vname'];


mail("namanb009@gmail.com",'this nigga lookin for u',$mailthis);



?>