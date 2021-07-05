<?php 


$date=date_create("2016-09-23");
date_time_set($date, 13,20);
echo date_format($date,"d-m-y H:i:s")."<br>";


$date=date_create("2020-5-14");
date_time_set($date, 18,56);
echo date_format($date,"d-m-y H:i:s")."<br>";

$date=date_create("2016-09-21");
date_time_set($date,23,56,40);
echo date_format($date,"d-m-y H:i:s")."<br>";


$date=date_create("2006-12-29");
date_time_set($date,10,45,6);
echo date_format($date,"d-m-y H:i:s")."<br>";

?>