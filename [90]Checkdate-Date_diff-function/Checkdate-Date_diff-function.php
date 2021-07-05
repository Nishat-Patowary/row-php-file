<?php 

echo checkdate(4,8,2009);
echo checkdate(12,29,2021);
echo checkdate(5,8,5051);
echo checkdate(18,15,2016);//false
echo checkdate(29,13,2011);//false
echo checkdate(20,27,2019);//false




$date1=date_create("2001-06-7");
$date2=date_create("2021-07-5");

$mix=date_diff($date1,$date2);

echo "<pre>";
print_r($mix);
echo "</pre>";

$date1=date_create("1978-09-18");
$date2=date_create("2021-07-5");

$mix=date_diff($date1,$date2);
echo "<pre>";
print_r($mix);
echo "</pre>";


$date1=date_create("1998-08-18");
$date2=date_create("2021-07-5");

$mix=date_diff($date1,$date2);

echo "<pre>";
print_r($mix);
echo "</pre>";


$date1=date_create("1999-03-24");
$date2=date_create("2021-07-5");

$mix=date_diff($date1,$date2);

echo "<pre>";
print_r($mix);
echo "</pre>";
















