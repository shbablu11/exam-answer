<?php

$array = ['hellow', 'eid', 'ramadan'];
$newArray = [];
foreach($array as $element){
    $res = strrev($element)[0];
    array_push($newArray, $res);
}

print_r($newArray);

//$output= implode($newArray);
//echo "$output";