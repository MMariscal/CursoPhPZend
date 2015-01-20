<?php

$max=1200;

$f0=0;
$f1=1;
$f2=$f0+$f1;

while($f2<=$max){
    echo $f2.",";
    $f0=$f1;
    $f1=$f2;
    $f2=$f0+$f1;
    
}


