<?php

/*
implode () method :- The implode() function returns a string from the elements of an array.

it is predefined.
syntex:-
implode(separator,array);
*/

$arr=[
    '1','2','3','4'
];

$str=implode(",",$arr);

echo "$str";
?>