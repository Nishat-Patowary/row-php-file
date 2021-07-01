<?php
$color=array("red","green","blue","yellow","pink");

array_splice($color,2);
echo "<pre>";
print_r($color);
echo "</pre>";


$color=array("red","green","blue","yellow","pink");

array_splice($color,1,-3);
echo "<pre>";
print_r($color);
echo "</pre>";

$color=array("red","green","blue","yellow","pink");

array_splice($color,-1);
echo "<pre>";
print_r($color);
echo "</pre>";



$name=array("shanto","shihab","badhon","omer");
array_splice($name,2,-1);
echo "<pre>";
print_r($name);
echo "</pre>";

$color=["red","green","yellow","pink"];
$colour=["black","dark"];
array_splice($color,0,2,$colour);
echo "<pre>";
print_r($color);
echo "</pre>";


$color=["red","green","yellow","pink"];
$colour=["black","dark"];

array_splice($color,2,2,$colour);
echo "<pre>";
print_r($color);
echo "</pre>";


$color=["red","pink","yellow","green","blue"];
$colors=["black","darkgrey"];
array_splice($color,2,2,$colors);
echo "<pre>";
print_r($color);
echo "</pre>";
?>