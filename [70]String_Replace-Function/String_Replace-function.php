<?php


$animal="This is a lion.The lion is so strong";
echo str_replace("lion","tiger",$animal)."<br>";

$animal="This is a fox.The fox looks so stronger";
echo str_replace("fox","elephant",$animal)."<br>";

$animal="this is a cat.The cat is so cute";
echo str_replace("cat","--",$animal)."<br>";

//first.............


$animal="The bird flying in the sky..the bird is so cute";

$find=["bird","flying"];
$replace=["parrot","sing"];
echo str_replace($find,$replace,$animal)."<br>";

$animal="The lion is so strong.The lion is so angry";

$find=["lion","strong"];
$replace=["dog","week"];

echo str_replace($find,$replace,$animal)."<br>";

//second end............


$color=["red","green","yellow","pink"];
echo "<pre>";
print_r(str_replace("green","white",$color));
echo "</pre>";

$color=["red","green","yellow","pink"];
echo "<pre>";
print_r(str_replace("red","dark",$color));
echo "</pre>";

//3th end............. 


$color=["red","green","yellow","pink","blue"];
$find=["red","yellow","blue"];
$replace=["white","dark","sky"];
echo "<pre>";
print_r(str_replace($find,$replace,$color));
echo "</pre>";

$color=["red","green","yellow","pink","blue"];
$find=["red","yellow","blue"];
$replace=["dark","sky-blue","perpal"];
echo "<pre>";
print_r(str_replace($find,$replace,$color));
echo "</pre>";

//4th end.............. 

//str_replace end...........


$animal="This is a lion.The lion is so strong";
echo str_ireplace("Lion","tiger",$animal)."<br>";

$animal="This is a fox.The fox looks so stronger";
echo str_ireplace("Fox","elephant",$animal)."<br>";

$animal="this is a cat.The cat is so cute";
echo str_ireplace("Cat","--",$animal)."<br>";

//first.............


$animal="The bird flying in the sky..the bird is so cute";

$find=["bird","flying"];
$replace=["parrot","sing"];
echo str_ireplace($find,$replace,$animal)."<br>";

$animal="The lion is so strong.The lion is so angry";

$find=["Lion","Strong"];
$replace=["dog","week"];

echo str_ireplace($find,$replace,$animal)."<br>";

//second end............



$color=["red","green","yellow","pink"];
echo "<pre>";
print_r(str_ireplace("Green","white",$color));
echo "</pre>";

$color=["red","green","yellow","pink"];
echo "<pre>";
print_r(str_ireplace("Red","dark",$color));
echo "</pre>";

//3th end............. 


$color=["red","green","yellow","pink","blue"];
$find=["Red","Yellow","Blue"];
$replace=["white","dark","sky"];
echo "<pre>";
print_r(str_ireplace($find,$replace,$color));
echo "</pre>";

$color=["red","green","yellow","pink","blue"];
$find=["Red","Yellow","Blue"];
$replace=["dark","sky-blue","perpal"];
echo "<pre>";
print_r(str_ireplace($find,$replace,$color));
echo "</pre>";

//4th end.............. 

//str_ireplace end...........


$animal="This is a cow.the cow is so hungry";
echo substr_replace($animal,"cow",10)."<br>";


$animal="This is a cow.the cow is so hungry";
echo substr_replace($animal,"cow",10,20)."<br>";


$animal="This is a cow.the cow is so hungry";
echo substr_replace($animal,"cow",10,-7)."<br>";

$animal="This is a cow.the cow is so hungry";
echo substr_replace($animal,"cow",10,-13)."<br>";

//substr_replace end............. 


$animal="This is a dog.The dog is so cute";
echo strtr($animal,"is","ps")."<br>";

$animal="This is a dog.The dog is so cute";
echo strtr($animal,"so","to")."<br>";


$animal="This is a frog.The frog is so happy";
$replace=["frog" => "cat", "happy" => "sad"];
echo strtr($animal,$replace)."<br>";


$name="shanto is a good boy.He lives is home";
$replace=["shanto"=>"nishat","home"=>"city"];
echo strtr($name,$replace)."<br>";

//strtr end............. 
?>