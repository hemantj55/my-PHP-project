<?php
// recursion of function in php.

/*
function greet(){
    echo "Hello hemant <br>";
    //greet();
}
greet();

*/


function countstart($start){
   
    if($start<= 10){
    echo "$start<br>";
    $start++;
    countstart($start);
    }else{
        return;
    }
}
countstart(1);
?>