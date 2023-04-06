<?php

$num=$_REQUEST['input_number'];

for($i=2; $i<$num; $i++){

    if($num%$i==0){
        echo "$num is not prime";
        break;
    }else
    {
        echo "$num is prime number";
        break;
    }
}