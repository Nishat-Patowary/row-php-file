<?php 

$date=getdate();
echo $date["year"]."<br>";

$date=getdate();
echo $date["minutes"]."<br>";

$date=getdate();
echo $date["hours"];

//single details show-----------

echo "<pre>";
print_r(getdate());
echo "</pre>";

echo "<pre>";
print_r(getdate());
echo "</pre>";

//array details show----------

echo "<pre>";
print_r(gettimeofday());
echo "</pre>";

echo "<pre>";
print_r(gettimeofday());
echo "</pre>";

$date=gettimeofday();
echo $date['sec'];
//gettimeofday end---------


echo "<pre>";
print_r(localtime());
echo "</pre>";

echo "<pre>";
print_r(localtime());
echo "</pre>";

$date=localtime();
echo $date["4"];

//localtime end-----------



?>