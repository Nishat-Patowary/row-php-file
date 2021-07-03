<?php


$name="nishat";
echo trim($name,"at")."<br>";

$name="elephant";
echo trim($name,"et")."<br>";

$name="otshanto";
echo trim($name,"ot")."<br>";

$name="tanvirul nishat";
echo trim($name,"at")."<br>";

$name="nishat nishat";
echo trim($name,"niat")."<br>";

//trim end------------


$name="tanvirul nishat";
echo rtrim($name,"at")."<br>";

$name="mahmudul hasan";
echo rtrim($name,"an")."<br>";

$name="nishat atnitshat";
echo rtrim($name,"ta")."<br>";

//rtrim end-------------


$name="tatant nishat";
echo ltrim($name,"t")."<br>";

$name="hyperhy hyper";
echo ltrim($name,"hy")."<br>";

$name="tanvirul nishat";
echo ltrim($name,"at")."<br>";

//ltrim end--------------

$name="  tanvirul nishat  ";
echo trim($name)."<br>";

$name="This is a    ";
echo rtrim($name)."<br>";

$name="       This is a home";
echo trim($name)."<br>";

//string-space-delet------------


$name="tanvirul Nishat";
echo chop($name,"ath")."<br>";

$animal="This elephant";
echo chop($animal,"nta");

//chop end--------
?>