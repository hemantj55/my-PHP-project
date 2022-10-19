<?php

/*
explode() method:- the explode() function breaks a string into an array and return it.

syntex:-

explode(separator,string,limit)
*/

$str="a,b,c,d,e,f";
// print_r($str);
$arr=explode(',',$str,3);
echo "<pre>";
print_r($arr);
echo "</pre>";

?>