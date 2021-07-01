<?php
$a=["nishat","niloy","nihal"];

$newarray=array_reduce($a,"myfunction");
function myfunction($n,$m){
    return $n . "-" . $m;
}
echo "<pre>";
print_r($newarray);
echo "</pre>";

$a=["mango","banana","jackfruit"];
function hyper($t,$y){
    return $t . "--" . $y;
}
$new=array_reduce($a,"hyper");
echo "<Pre>";
print_r($new);
echo "</Pre>";

$a=["mango","banana","pyne-apple","jack-fruit"];
$new=array_reduce($a,"myfunc","apple");
function myfunc($r,$t){
    return $r . "--" . $t;
}
echo "<pre>";
print_r($new);
echo "</pre>";


$a=[1,2,3,4,5,6,7];
function myfunct($r,$t){
    return $r . "--" . $t;
}
$new=array_reduce($a,"myfunct");
echo "<pre>";
print_r($new);
echo "</pre>";

$a=[1,2,3,4,5,6,7,8,9];
$new=array_reduce($a,"functions");
function functions($r,$e){
    return $r + $e;
}
echo "<pre>";
print_r($new);
echo "</pre>";

$a=[1,2,3,4,5,6,7,8,9];
$new=array_reduce($a,"functionss",2);
function functionss($r,$e){
    $r=$r * $e;
    return $r;
}
echo "<pre>";
print_r($new);
echo "</pre>";














?>