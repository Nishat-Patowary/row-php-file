<?php
$color=array("red","green","yellow","blue","pink");

$new=array_keys($color);
echo "<pre>";
print_r($new);
echo "</pre>";


$color=[
    "first"=>"red",
    "second"=>"green",
    "third"=>"blue",
    "four"=>"pink",
    "five"=>"yellow"
];
$new= array_keys($color);
echo "<pre>";
print_r($new);
echo "</pre>";


$color=[
    "first"=>"red",
    "second"=>"green",
    "third"=>"blue",
    "four"=>"pink",
    "five"=>"yellow"
];
$new= array_key_first($color);
echo "<pre>";
print_r($new);
echo "</pre>";



$color=[
    "first"=>"red",
    "second"=>"green",
    "third"=>"blue",
    "four"=>"pink",
    "five"=>"yellow"
];
$new= array_key_last($color);
echo "<pre>";
print_r($new);
echo "</pre>";


$color=[
    "first"=>"red",
    "second"=>"green",
    "third"=>"blue",
    "four"=>"pink",
    "five"=>"yellow"
];
$new= array_key_exists("third",$color);
echo "<pre>";
print_r($new);
echo "</pre>";


$color=[
    "first"=>"red",
    "second"=>"green",
    "third"=>"blue",
    "four"=>"pink",
    "five"=>"yellow"
];
$new= array_keys($color);
echo "<pre>";
print_r($new);
echo "</pre>";

$name=[
    "first"=>"shanto",
    "second"=>"shihab",
    "third"=>"omer"
];

$new=array_keys($name);
echo "<pre>";
print_r($new);
echo "</pre>";


$name=[
    "first"=>"shanto",
    "second"=>"shihab",
    "third"=>"omer"
];

$new=array_key_first($name);
echo "<pre>";
print_r($new);
echo "</pre>";


$name=[
    "first"=>"shanto",
    "second"=>"shihab",
    "third"=>"omer"
];

$new=array_key_last($name);
echo "<pre>";
print_r($new);
echo "</pre>";


$name=[
    "first"=>"shanto",
    "second"=>"shihab",
    "third"=>"omer"
];

$new=array_key_exists("third",$name);
echo "<pre>";
print_r($new);
echo "</pre>";

?>