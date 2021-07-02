<?php
$bird="This is a bird.It's so beautiful";

$newarray=explode(" ",$bird);
echo "<pre>";
print_r($newarray);
echo"</pre>";


$bird="This is a bird.It's so beautiful";
$new=explode(".","$bird");
echo "<pre>";
print_r($new);
echo "</pre>";

$animal="there is a lion,But its look so angry";
$lion=explode(",","$animal");
echo "<pre>";
print_r($lion);
echo "</pre>";

$bird="This is a bird.It's so beautiful";
$cute=explode(" ",$bird,3);
echo "<pre>";
print_r($cute);
echo "</pre>";


$bird="This is a bird.It's so beautiful";
$cute=explode(" ",$bird,4);
echo "<pre>";
print_r($cute);
echo "</pre>";

$animal="There is a lion.its look like so angry";
$king=explode(" ",$animal,5);
echo "<pre>";
print_r($king);
echo "</pre>";



$car="this is a lambo,its so fast car in this time.";
$lambo=explode(" ",$car,-2);
echo "<pre>";
print_r($lambo);
echo "</pre>";


$animal="fox,tiger,lion,goat,cow,elephant";
$mix=explode(",",$animal,-3);
echo "<pre>";
print_r($mix);
echo "</pre>";





$animal=array("lion","tiger","fox","wolf","birds");
$mix=implode(" ",$animal);
echo $mix;


$danger=array("lion","tiger","fox","wolf","birds");
$forest=implode("animal", $danger);
echo $forest;



$danger=array("lion","tiger","fox","wolf","birds");
$forest=implode("----", $danger);
echo $forest;



$danger=array("lion","tiger","fox","wolf","birds");
$forest=join("<br>", $danger);
echo $forest;


$friend=array("shanto","shihab","omer");
$closs=join("<br>",$friend);
echo $closs;









?>