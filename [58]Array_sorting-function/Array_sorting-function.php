<?php
$food=array("mango","banana","orange","apple");

sort($food);
echo "<pre>";
print_r($food);
echo "</pre>";


$animal=array("cow","goat","fox","lion");
sort($animal);
echo "<pre>";
print_r($animal);
echo "</pre>";

$number=array(20,50,64,84,92);
sort($number);
echo "<pre>";
print_r($number);
echo "</pre>";


$animals=array("cow","goat","lion","elephant");
rsort($animals);
echo "<pre>";
print_r($animals);
echo "</pre>";

$numbers=array(50,96,62,76,38,91);
rsort($numbers);
echo "<pre>";
print_r($numbers);
echo "</pre>";


$food=array(
    "d" => "mango",
    "t" => "banana",
    "y" => "jack-frout",
    "o" => "jam"
);
 asort($food);
 echo "<pre>";
print_r($food);
echo "</pre>";


$animal=array(
    "w" => "ëlephant",
    "q" => "monkey",
    "y" => "fox",
    "o" => "bird"
);

arsort($animal);
echo "<pre>";
print_r($animal);
echo "</pre>";


$name=array(
    "f" => "nishat",
    "t" => "shanto",
    "q" => "shihab",
    "y" => "omer"
);
ksort($name);
echo "<pre>";
print_r($name);
echo "</pre>";



$animals=array(
    "g" => "lion",
    "h" => "tiger",
    "w" => "fox",
    "j" => "crokodile"
);

krsort($animals);
echo "<pre>";
print_r($animals);
echo "</pre>";


$image=array("img12.png","img17.png","img9.png","img16.png");
natsort($image);
echo "<pre>";
print_r($image);
echo "</pre>";

$image=array("image19.jpg","image12.jpg","image17.jpg","image15.jpg");
natsort($image);
echo "<pre>";
print_r($image);
echo "</pre>";

$image=array("img10.jpg","Img16.jpg","img8.jpg","Img14.jpg");
natcasesort($image);
echo "<pre>";
print_r($image);
echo "</pre>";

$animal=array("fox","Lion","cow","Horse");
natcasesort($animal);
echo "<pre>";
print_r($animal);
echo "</pre>";




$food=array("banana","apple");
$animal=array("monkey","cow");

array_multisort($food,$animal);

echo "<pre>";
print_r($food);
echo "</pre>";
echo "<pre>";
print_r($animal);
echo "</pre>";


$friend=array("nishat","shanto");
$friends=array("shanto","omer");
array_multisort($friend,$friends);
echo "<pre>";
print_r($friend);
echo "</pre>";
echo "<pre>";
print_r($friends);
echo "</pre>";



$food=array("mango","banana","jack-fruit","tomato");
$new=array_reverse($food);
echo "<pre>";
print_r($new);
echo "</pre>";


$animal=array("fox","lion","tiger","cow");
$new=array_reverse($animal);
echo "<pre>";
print_r($new);
echo "</pre>";

?>