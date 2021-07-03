<?php

$name= "tanvirul harew nishat";
echo convert_uuencode($name)."<br>";

$name="nishat";
echo convert_uuencode($name)."<br>";

$name="tanvirul";
echo convert_uuencode($name)."<br>";

//convert_uuencode end-------------


$name="tanvirul haque nishat";
$new= convert_uuencode($name)."<br>";
echo $new;

$news=convert_uudecode($new);
echo $news . "<br>";


$name="nishat";
$new=convert_uuencode($name);
echo $new;

$decode=convert_uudecode($new);
echo $decode;

//convert_uudecode end--------
?>