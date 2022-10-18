<?php
$arr=[
    "HTML"=>2300,
    "CSS"=>2300,
    "JS"=>3000,
    "PHP"=>2500,
];

echo "<pre>";
print_r($arr);
echo "</pre>";

//foreach loop syntex:-
/*
foreach($arr as $key => $value){
    statment
}

*/

foreach($arr as $course => $fees){
    echo "The Fees of $course is RS.  $fees<br>";
};
?>