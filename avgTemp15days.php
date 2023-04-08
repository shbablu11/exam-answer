<?php

$array='30, 29, 34, 25, 30, 28, 29, 25, 38, 40, 25, 26, 28, 25, 28';
$temp=explode(',', $array);
//print_r($temp);

$sum=array_sum($temp);
//print_r($sum);

$totalDay= count($temp);
//echo "$totalDay";

$avg=$sum/$totalDay;
echo "average temperature is $avg";
