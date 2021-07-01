<?php
$color=array("a"=>"red","b"=>"green","c"=>"yellow","d"=>"pink");
$colors=array("a"=>"red","b"=>"green","c"=>"dark","d"=>"skyblue");

$new=array_diff($color,$colors);
echo "<pre>";
print_r($new);
echo "</pre>";


$color=array("a"=>"red","b"=>"green","c"=>"yellow","d"=>"pink");
$colors=array("a"=>"red","b"=>"green","c"=>"pink","d"=>"skyblue");
$colorss=array("a"=>"red","b"=>"green","c"=>"perpal");
$new=array_diff($color,$colors,$colorss);
echo "<pre>";
print_r($new);
echo "</pre>";

$color=array("a"=>"red","b"=>"green","c"=>"yellow","d"=>"pink");
$colors=array("a"=>"red","n"=>"green","c"=>"dark","y"=>"skyblue");

$new=array_diff_key($color,$colors);
echo "<pre>";
print_r($new);
echo "</pre>";

$color=array("a"=>"red","b"=>"green","c"=>"yellow","d"=>"pink");
$colors=array("a"=>"red","c"=>"green","r"=>"dark","i"=>"skyblue");

$new=array_diff_assoc($color,$colors);
echo "<pre>";
print_r($new);
echo "</pre>";
?>