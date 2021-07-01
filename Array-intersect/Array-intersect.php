<?php
$color=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"pink");
$colors=array("d"=>"pink","r"=>"sky","w"=>"red","t"=>"blue");

$new=array_intersect($color,$colors);
echo "<pre>";
print_r($new);
echo "</pre>";


$color=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"pink");
$colors=array("d"=>"pink","r"=>"sky","w"=>"sunny","t"=>"blue");

$new=array_intersect($color,$colors);
echo "<pre>";
print_r($new);
echo "</pre>";


$color=array("s"=>"red","r"=>"green","d"=>"pink");
$colors=array("t"=>"green","j"=>"yellow","o"=>"pink");
$colorss=array("v"=>"dark","l"=>"green","u"=>"white");

$new=array_intersect($color,$colors,$colorss);
echo "<pre>";
print_r($new);
echo "</pre>";


$color=array("a"=>"red","b"=>"green","c"=>"yellow");
$colors=array("c"=>"red","b"=>"pink","c"=>"dark");
$new=array_intersect_key($color,$colors);
echo "<pre>";
print_r($new);
echo "</pre>";

$color=array("a"=>"red","b"=>"green","c"=>"yellow");
$colors=array("a"=>"red","t"=>"pink","c"=>"dark");
$new=array_intersect_key($color,$colors);
echo "<pre>";
print_r($new);
echo "</pre>";


$color=array("a"=>"red","b"=>"green","c"=>"yellow");
$colors=array("a"=>"red","t"=>"pink","c"=>"dark");
$new=array_intersect_assoc($color,$colors);
echo "<pre>";
print_r($new);
echo "</pre>";



$color=array("a"=>"red","b"=>"green");
$colors=array("a"=>"red","b"=>"pink");
$new=array_intersect_assoc($color,$colors);
echo "<pre>";
print_r($new);
echo "</pre>";

?>
