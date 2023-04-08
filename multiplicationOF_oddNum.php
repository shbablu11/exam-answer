<?php

$sum=0;

for($num=1; $num<100; $num++){
    if($num%2!=0){
        $sum+=$num;
    }
}
echo "Multiplication of All odd num is $sum";
