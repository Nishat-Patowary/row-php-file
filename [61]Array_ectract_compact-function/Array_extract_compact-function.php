<?php
$color=array("a" => "red","b" => "green","c" => "yellow");
extract($color);
echo "The color is : $a <br>";
echo "The color is : $b <br>";
echo "The color is : $c <br>";

$color=array("a" => "red","b" => "green","c" => "yellow");
extract($color,EXTR_OVERWRITE);
echo "The color is : $a <br>";
echo "The color is : $b <br>";
echo "The color is : $c <br>";



$a="white";
$color=array("a" => "red","b" => "green","c" => "yellow");
extract($color,EXTR_SKIP);
echo "The color is : $a <br>";
echo "The color is : $b <br>";
echo "The color is : $c <br>";


$y="monkey";

$animal=array("t"=>"tiger","y"=>"lion","w"=>"fox");
extract($animal,EXTR_SKIP);
echo "The animal is : $t <br>";
echo "The animal is : $y <br>";
echo "The animal is : $w <br>";


$b="shihab";
$name=array("p"=>"nishat","b"=>"shanto","n"=>"omer");
extract($name,EXTR_PREFIX_SAME,"moda");
echo "His name is : $p <br>";
echo "His name is :$moda_b  <br>";
echo "His name is : $n <br>";


$animal=array("one"=>"tiger","two"=>"lion","three"=>"fox");
extract($animal,EXTR_PREFIX_ALL,"hyper");
echo "This is a : $hyper_one <br>";
echo "This is a : $hyper_two <br>";
echo "This is a : $hyper_three <br>";




$firstname="tanvirul";
$lastname="nishat";
$age="21";
$country="bangladesh";
$region="islam";

$new=compact("firstname","lastname","age","country","region");

echo "<pre>";
print_r($new);
echo "</pre>";


$college="polytacnic";
$districk="munsiganj";
$student="nishat";
$dep="computer";
$session="19";

$new=compact("college","districk","student","dep","session");
echo "<pre>";
print_r($new);
echo "</pre>";

$name="nishat";
$profession="developer";
$age=21;
$region="islam";
$location="dhaka";
$other=["gender","select"];
$new=compact("name","profession","age","region","location",$other);
echo "<pre>";
print_r($new);
echo "</pre>";







?>