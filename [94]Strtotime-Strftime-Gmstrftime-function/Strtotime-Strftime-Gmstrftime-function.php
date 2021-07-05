<?php 

echo date("d-m-Y",strtotime("now"))."<br>";

echo date("d-m-Y",strtotime("2-5-2015"))."<br>";


echo date("d-m-Y",strtotime("+ 10 hours")). "<br>";

echo date("d-m-Y H:m" ,strtotime(" +6 hours")) . "<br>";

echo date("d-m-y H:m",strtotime("+ 1 week")) . "<br>";


echo date("d-m-y H.m".strtotime("+ 2 hour 20 min 50 sec")) . "<br>";

echo date("d-m-y H:m",strtotime("next sunday")) ."<br>";

echo date("d-m-y H:m",strtotime("last friday")) . "<br>";

//strtotime end------------


echo strftime("%B")."<br>";
echo strftime("%d")."<br>";
echo strftime("%Y")."<br>";
echo strftime("%B %d %Y")."<br>";



echo strftime("%b %d %Y", mktime(25,30,0,05,18,2019)) ."<br>";

//strftime end---------

?>