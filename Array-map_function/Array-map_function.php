<?php

function nishat(){
    return "this is a home";
};
$a=[1,2,3,4,5,6,7];

$new=array_map("nishat",$a);
echo "<pre>";
print_r($new);
echo "</pre>";




$a=[1,2,3,4,5,6,7,8];

function niloy(){
    return "this is a line";
}
$newarray=array_map("niloy",$a);
echo "<pre>";
print_r($newarray);
echo "</pre>";


$a=[1,2,3,4,5,6,7];
$b=["mango","banana","khatal","jolpai","peyara","angur","bel"];
$new=array_map("shanto",$a,$b);
function shanto($n,$m){
      return $n = $m;
}
echo "<pre>";
print_r($new);
echo "</pre>";


$a=[1,2,3,4,5,6,7];
$b=["mango","banana","khatal","jolpai","peyara","angur","bel"];
$new=array_map("shihab",$a,$b);
function shihab($n,$m){
      return [ $n => $m];
}
echo "<pre>";
print_r($new);
echo "</pre>";


$a=["first" => "nishat","second" => "shanto","third" => "shihab"];
$new=array_map("hyper",$a);
function hyper($y){
    return strtoupper($y);
}
echo "<pre>";
print_r($new);
echo "</pre>";





?>