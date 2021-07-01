<?php
$name=["a"=>"shanto","b"=>"shihab","c"=>"omer","d"=>"cyko"];

$new=array_values($name);
echo "<pre>";
print_r($new);
echo "</pre>";



$color=["1"=>"red","2"=>"green","3"=>"yellow","4"=>"pink"];

$new=array_values($color);
echo "<pre>";
print_r($new);
echo "</pre>";


$name=["a"=>"shanto","b"=>"shihab","c"=>"omer","d"=>"shihab"];

$new=array_unique($name);
echo "<pre>";
print_r($new);
echo "</pre>";


$color=["1"=>"red","2"=>"green","3"=>"green","4"=>"pink"];

$new=array_unique($color);
echo "<pre>";
print_r($new);
echo "</pre>";
?>