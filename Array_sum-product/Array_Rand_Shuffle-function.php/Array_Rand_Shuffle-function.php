<?php
$color=array("red","green","yellow","pink");

$newcolor=array_rand($color,2);
echo "<pre>";
print_r($newcolor);
echo "</pre>";

echo $color[$newcolor];


