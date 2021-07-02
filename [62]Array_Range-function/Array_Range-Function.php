<?php
$new=range(1,10);
echo "<pre>";
print_r($new);
echo "</pre>";


$name=range(1,100,10);
echo "<pre>";
print_r($name);
echo "</pre>";

$newarray=range(1,50,15);
echo "<pre>";
print_r($newarray);
echo "</pre>";


$name=range(0,100,10);
echo "<pre>";
print_r($name);
echo "</pre>";

$word=range("a","p");
echo "<pre>";
print_r($word);
echo "</pre>";


$word=range("x","t");
echo "<pre>";
print_r($word);
echo "</pre>";


foreach(range(0,20) as $number){
    echo $number ."<br>";
}

foreach(range("a","p") as $word){
    echo $word ."<br>";
}


?>