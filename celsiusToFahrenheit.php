<?php

$cel=$_REQUEST['temp_c']; // value of the celsius
$fa = NULL; // value of the fahrenheit
$fa = floatval(($cel * 9 / 5) + 32);

echo "$cel Celsius = ". $fa . " Fahrenheit";





