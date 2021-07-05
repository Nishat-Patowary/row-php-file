<?php 

echo "<pre>";
print_r(date_parse("2020-05-25 09:56:10"));
echo "</pre>";

echo "<pre>";
print_r(date_parse("2018-12-16 18:36:20"));
echo "</pre>";




$date=date_parse("2014-03-24 19:54:36");
echo $date["month"];

$date=date_parse("1995-8-19 17:5:59");
echo $date["minute"];


echo "<pre>";
print_r(date_parse_from_format("d.n.y","25.09.2014"));
echo "</pre>";


echo "<pre>";
print_r(date_parse_from_format("d.n.y","26.6.2000"));
echo "</pre>";
?>