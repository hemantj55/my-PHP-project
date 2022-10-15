<?php
// function greet(){
//     return "welcome hemant";
// }
// echo greet();

$car=array(
    "a"=>"suv",
    "b"=>"alto",
   "c"=>"xuv500",
    "d"=>"hearer",
    "e"=>"lamborgini",
    "f"=>"thar",
    "g"=>"safari",
    "h"=>"suv"
);

echo count($car); 
echo "<br>";
echo "<pre>";
print_r(array_count_values($car));
echo "</pre>";
echo "<pre>";
print_r($car);
echo "</pre>";
echo count($car);
echo "<pre>";
print_r(array_slice($car,1,4));
echo "</pre>";
echo "<pre>";
$chunkedarr=array_chunk($car,3);
print_r($chunkedarr);
echo "</pre>";

echo "<pre>";
print_r(array_keys($car));
echo "</pre>";
 var_dump(array_key_exists("z",$car));//if key present in array then give true else false.
?>