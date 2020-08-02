<?php

parse_str($_POST['form'],$array);

$keys=array_keys($array);
$size=sizeof($keys);

$mailthis='';


for($i=0;$i<$size;$i++){
    $temp = $keys[$i].":  ".$array[$keys[$i]]."\n";
    $mailthis=$mailthis.$temp;
}

mail("namanb009@gmail.com",'this nigga lookin for u',$mailthis);



?>