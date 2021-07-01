<?php
$food=array("mango","banana","orange","apple");

echo  "<b>current :</b>". current($food)."<br>";
echo  "<b>key :</b>". key($food)."<br>";
echo "<b>pos :</b>" . pos($food)."<br>";


$name=array("nishat","shanto","omer");
echo "<b>current :</b>".current($name)."<br>";
echo "<b>key :</b>" . key($name)."<br>";
echo "<b>pos :</b>" . pos($name)."<br>";



$fruit=array("mango","banana","orange","apple");
next($fruit);
echo "<b>current :</b>". current($fruit)."<br>";
next($fruit);
echo "<b>current :</b>". current($fruit)."<br>";
next($fruit);
echo "<b>current :</b>". current($fruit)."<br>";



$animal=array("tiger","lion","fox","crokodile");
next($animal);
echo "<b>current :</b>" . current($animal) . "<br>";
prev($animal);
echo "<b>current :</b>" . current($animal) . "<br>";
prev($animal);
echo "<b>current :</b>" . current($animal) . "<br>";




$fruit=array("mango","banana","orange","apple");
end($fruit);
echo "<b>current :</b>" . current($fruit) . "<br>";
echo "<b>key :</b>" . key($fruit) . "<br>";

$animal=array("tiger","lion","fox","crokodile");
end($animal);
echo "<b>current :</b>" . current($animal) ."<br>";
echo "<b>key :</b>" . key($animal) . "<br>";


$animal=array("tiger","lion","fox","crokodile");
next($animal);
echo "<b>current :</b>" . current($animal) . "<br>";
next($animal);
echo "<b>current :</b>" . current($animal) . "<br>";
next($animal);
echo "<b>current :</b>" . current($animal) . "<br>";
prev($animal);
echo "<b>current :</b>" . current($animal) . "<br>";
prev($animal);
echo "<b>current :</b>" . current($animal) . "<br>";
prev($animal);
echo "<b>current :</b>" . current($animal) . "<br>";
reset($animal);
echo "<b>current :</b>" . current($animal) . "<br>";
