<?php

echo date_default_timezone_get()."<br>";
echo date_default_timezone_get()."<br>";


echo date_default_timezone_set("Asia/Dubai")."<br>";
date_default_timezone_set("Asia/Dhaka")."<br>";

//date_default_timezone_get end----------


$timezone=timezone_open("Asia/Dhaka");
echo timezone_name_get($timezone)."<br>";

$time=timezone_open("Asia/Bangkok");
echo timezone_name_get($time);

//timezone_name_get end------------- 



$time=timezone_open("Asia/Dubai");
echo "<pre>";
print_r(timezone_location_get($time))."<br>";
echo "</pre>";

$time=timezone_open("Asia/Dili");
echo "<pre>";
print_r(timezone_location_get($time))."<br>";
echo "</pre>";

//timezone_location_get end---------------


echo "<pre>";
print_r(timezone_identifiers_list())."<br>";
echo "</pre>";


echo "<pre>";
print_r(timezone_identifiers_list(1))."<br>";
echo "</pre>";


echo "<pre>";
print_r(timezone_identifiers_list(3))."<br>";
echo "</pre>";

//timezone_identifiers end------------






?>