<?php

$array=[-1,-50,30,20,100];

$sum=0;

foreach($array as $element){
    if($element>0){
        $sum+=$element;
    }
}
echo "Sum of all positive number is $sum";
?>