<?php

$far=$_REQUEST['temp_f']; // value of the fahrenheit
$c = NULL; // value of the celsius
$c = floatval(5/9 * ($far-32));

echo "$far Fahrenheit = ". $c . " Celsius";