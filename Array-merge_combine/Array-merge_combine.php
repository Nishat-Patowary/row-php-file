<?php
$friends=["shanto","shihab","omer"];
$closs=["kabbo","mitu"];

$mix=array_merge($friends,$closs);

echo "<pre>";
print_r($mix);
echo "</pre>";



$closs=["shanto","shihab","omer"];
$buddy=["bishal","sobuj","momin"];

$mix=array_merge($closs,$buddy);
echo "<pre>";
print_r($mix);
echo "</pre>";




$friends=["shanto","shihab","omer","uzzal"];
$buddy=["bishal","tanvir","momin"];

$all=array_merge($friends,$buddy);

echo "<pre>";
print_r($all);
echo "</pre>";





$closs=["shanto","shihab","omer"];
$college=["bishal","sobuj","momin"];
$lover=["kabbo","mitu"];

$all=array_merge($closs,$college,$lover);
echo "<pre>";
print_r($all);
echo "</pre>";


$closs=['a' =>"shanto",'b' =>"shihab","omer"];
$college=["bishal","sobuj"];

$new=array_merge($closs,$college);
echo "<pre>";
print_r($new);
echo "</pre>";



$friends=["shanto","shihab","omer"];
$college=["bishal","sobuj"];

$all=array_merge($friends,$college);
echo "<pre>";
print_r($all[3]);
echo "</pre>";


$closs=['first'=> "shanto",'second'=>"shihab",'third'=>"omer"];
$college=["bishal","sobuj"];

$mix=array_merge($closs,$college);

echo "<pre>";
print_r($mix);
echo "</pre>";


$number=["num","numb","numbe"];
$name=["na","nam","name"];
$mix=array_merge_recursive($number,$name);

echo "<pre>";
print_r($mix);
echo "</pre>";


$close=['a'=>"shanto",'b'=>"shihab",'c'=>"omer"];
$college=['a'=>"bishal",'d'=>"sobuj",'r'=>"momin"];
$mix=array_merge_recursive($close,$college);
echo "<pre>";
print_r($mix);
echo "</pre>";


$names=['y'=>"nishat",'g'=>"niloy",'d'=>"lopa"];
$name=['e'=>"shanto",'g'=>"shihab",'r'=>"omer"];
$mix=array_merge_recursive($names,$name);
echo "<pre>";
print_r($mix);
echo "</pre>";





$name=array("nishat","shanto","shihab");
$age=array("21","20","19");
$new=array_combine($name,$age);
echo "<pre>";
print_r($new);
echo "</pre>";
?>








