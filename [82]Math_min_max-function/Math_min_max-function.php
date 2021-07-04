<?php

$num=min(2,4,6,8);
echo $num;

$num=min(10,20,30,50);
echo $num;

$num=min(array(80,50,90,56));
echo $num;

$num=min(array(50,90,64,45));
echo $num;

$num=min(array(20,54,10),array(13,93,25));
echo "<pre>";
print_r($num);
echo "</pre>";

$num=min(array(2,3,4),array(5,3,4));
echo "<pre>";
print_r($num);
echo "</pre>";

$num=min(TRUE,FALSE);
echo $num;

$num=min(true,0);
echo $num;

//min end----------------


$num=max(10,54,68,43);
echo $num;

$num=max(45,68,28,87);
echo $num;


$num=max(array(51,74,35,75));
echo $num;

$num=max(array(45,98,63));
echo $num;


$num=max(array(24,48,61),array(46,87,61));
echo "<pre>";
print_r($num);
echo "</pre>";

$num=max(array(16,87,35),array(49,56,98));
echo "<pre>";
print_r($num);
echo "</pre>";


$num=max(true,false);
echo $num;

$num=max(true,10);
echo $num;

//max end----------------
?>

