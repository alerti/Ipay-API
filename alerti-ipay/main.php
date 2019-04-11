<?php


include_once('alerti.php');

$d= ipay_stuf();
$log="Log Details-------- ".date('d/m/Y H:I:S a')."-->\n"." ".$d;
#echo append_f('hello world!');
#echo $d;

echo append_f($d);


 ?>