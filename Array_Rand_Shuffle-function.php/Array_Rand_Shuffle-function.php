<?php
$color=array("red","green","blue","pink","yellow");
$new=array_rand($color);
echo "<pre>";
print_r($new);
echo "</pre>";

$color=array("red","green","blue","pink","yellow");
$new=array_rand($color);
echo "<pre>";
print_r($new);
echo "</pre>";

echo $color[$new];


$color=array("red","green","yellow","pink","white");
$new=array_rand($color,2);
echo "<pre>";
print_r($new);
echo "</pre>";

$color=array("red","green","yellow","pink","white");
$new=array_rand($color,2);
echo "<pre>";
print_r($new);
echo "</pre>";

echo $color[$new[0]]."<br>";
echo $color[$new[1]];


$color=array("a" => "red","b" => "green","c" => "blue","d" =>"white");
$new=array_rand($color,3);

echo "<pre>";
print_r($new);
echo "</pre>";


$color=array("a" => "red","b" => "green","c" => "blue","d" =>"white");
$new=array_rand($color,3);

echo "<pre>";
print_r($new);
echo "</pre>";

echo $color[$new[0]]."<br>";
echo $color[$new[1]]."<br>";
echo $color[$new[2]];


$color=array("red","blue","yellow","pink","white");
shuffle($color);
echo "<pre>";
print_r($color);
echo "</pre>";

$color=array("a" => "red","b" => "green","c" => "blue","d" =>"white");
shuffle($color);
echo "<pre>";
print_r($color);
echo "</pre>";
?>