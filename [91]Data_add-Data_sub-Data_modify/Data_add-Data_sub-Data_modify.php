<?php 

$date=date_create("2021-05-19");
date_add($date,date_interval_create_from_date_string("30 days"));
echo date_format($date,"d-m-Y")."<br>";

$date=date_create("2015-09-28");
date_add($date,date_interval_create_from_date_string("20 days"));
echo date_format($date, "d-m-y" )."<br>";

//date_add end------------


$date=date_create("2010-06-29");
date_sub($date,date_interval_create_from_date_string("20 days"));
echo date_format($date,"d-m-y")."<br>";

$date=date_create("2016-08-10");
date_sub($date,date_interval_create_from_date_string("30 days"));
echo date_format($date,"d-m-y")."<br>";

//date_sub end---------------


$date=date_create("2020-05-23");
date_modify($date, "10 days");
echo date_format($date,"d-m-y")."<br>";

$date=date_create("2021-08-19");
date_modify($date,"-30 days");
echo date_format($date,"d-m-y");

//date_modify end-----------
?>