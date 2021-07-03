<?php

$name="nishat";
echo str_pad($name,10,"-")."<br>";

$name="elephant";
echo str_pad($name,30,"~")."<br>";

$name="niloy";
echo str_pad($name,15,"+")."<br>";

$animal="lion";
echo str_pad($animal,15,"+=")."<br>";

$animal="tiger";
echo str_pad($animal,20,"=",STR_PAD_LEFT)."<br>";

$animal="elephant";
echo str_pad($animal,20,"+",STR_PAD_LEFT)."<br>";


$name="nishat";
echo str_pad($name,"30","+",STR_PAD_RIGHT)."<br>";

$name="niloy";
echo str_pad($name,15,"*",STR_PAD_RIGHT)."<br>";


$animal="Tiger";
echo str_pad($animal,10,"*",STR_PAD_BOTH)."<br>";

$animal="Lion";
echo str_pad($animal,20,"*",STR_PAD_BOTH)."<br>";


//str_pad end----------------


$name="nishat";
echo str_repeat($name,10)."<br>";

$name="function";
echo str_repeat($name,10)."<br>";

$animal="+Lion+";
echo str_repeat($animal,15)."<br>";

$name="Tiger";
echo str_repeat($name,10);
?>