<?php
// user defined function
function pr($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
$x=array(
    "a"=>"suv",
    "b"=>"alto",
   "c"=>"xuv500",
    "d"=>"hearer",
    "e"=>"lamborgini",
    "f"=>"thar",
    "g"=>"safari",

);



pr($x);
?>