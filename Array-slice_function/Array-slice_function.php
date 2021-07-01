<?php

$color=array("green","red","blue","yellow","pink");
$new=array_slice($color,1,3);
echo "<pre>";
print_r($new);
echo "</pre>";


$name=array("nishat","shanto","shihab","omer");
$new=array_slice($name,1,2);
echo "<pre>";
print_r($new);
echo "</pre>";



$name=array("nishat","shanto","shihab");
$friend=array("bishal","sobuj","momin");

$new=array_slice($name,1,2);
echo "<pre>";
print_r($new);
echo "</pre>";


$closs=array('1'=>"shanto",'2'=>"shihab","omer");
$new=array_slice($closs,1,3,true);
echo "<pre>";
print_r($new);
echo "</pre>";
?>