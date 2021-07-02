<?php
$name="nishat";
$array=str_split($name);
echo "<pre>";
print_r($array);
echo "</pre>";

$name="shanto";
$array=str_split($name);
echo "<pre>";
print_r($array);
echo "</pre>";


$animal="elephant";
$array=str_split($animal,2);
echo "<pre>";
print_r($array);
echo "</pre>";


$animal="TIger";
$array=str_split($animal);
echo "<pre>";
print_r($array);
echo "</pre>";




$animal="tiger";
$new=chunk_split($animal,1,".");
echo $new;

$animal="elephant";
$new=chunk_split($animal,2," ");
echo $new;



$bird="parrot";
$new=chunk_split($bird,2,"--");
echo $new;

$name="nishat";
$new=chunk_split($name,2,'<br>');
echo $new;


$name="thisolkdhldkhfd";
$new=chunk_split($name,4,"----");
echo $new;
?>